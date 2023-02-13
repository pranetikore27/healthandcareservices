<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; 
use Illuminate\Support\Facades\Auth;
use App\Models\Vendors; 
use App\Models\User;
use App\Models\Category;
use Hash;  
class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $vendors = DB::table('vendors')->get();
        // $user = Auth::user(); 

        $vendors = DB::table("users")
                    ->join("vendors", "users.id", "vendors.Vendor_userid")
                    ->join("categories", "categories.Category_id", "vendors.Vendor_Category_Id")
                    ->get(); 
        // return $vendors; 

        $title = "Vendor Listing"; 
        // return $vendors; 

        $user = Auth::user(); 
        
        return view("vendors/index", compact("vendors", "title", "user")); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user(); 
        $categories = DB::table("categories")->get(); 
        return view("vendors/create", compact("user", "categories")); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request; 
        $validated = $request->validate([
            'name' => 'required', 
            'email' => 'required', 
            'Vendor_Category_Id' => 'required', 
            'Vendor_mobilenumber' => 'required',
        ]);

        $user = Auth::user(); 
        // $input
        $VendorUser = []; 
        $VendorUser["name"] = $request->name; 
        $VendorUser["email"] = $request->email;
        $VendorUser["password"] = Hash::make("123456"); 

        $inputs = $request->all();
        $VendorUser = User::create($VendorUser); 

        $inputs["Vendor_userid"] = $VendorUser->id; 
        $inputs["Vendor_Category_Id"] = $request->Vendor_Category_Id; 
        
        $VendorUser->assignRole("Vendor"); 
        $vendors = Vendors::create($inputs);
        //return $vendors; 
        
        $vendorInfo = DB::table("vendors")
                        ->where("Vendor_id", '=', $inputs["Vendor_userid"])
                        ->join("users", "users.id", "vendors.Vendor_userid")
                        ->join("categories", "categories.Category_id", "vendors.Vendor_Category_Id")
                        ->get()->toArray(); 

        //return $vendorInfo; 
        $categoryfield = Category::find($request->Vendor_Category_Id);
        $categoryfields= $categoryfield['Category_field_names']; 
        return $categoryfields.split(",");
        return view("vendors/profile", compact("vendors", "user","categoryfields"));  

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $loggedinuser = Auth::user();   
        $vendor = DB::table("vendors")
        ->join("users", "users.id", "vendors.Vendor_userid")
        ->join("categories","categories.Category_id", "vendors.Vendor_Category_Id")
        ->where("users.id", "=", $id)
                    ->get()->toArray(); 
        // $ratingscount = DB::table("reviews")->where("", =, "")->count(); 
        // return $vendor;  

 
        return view("Vendors/show", compact("vendor", "loggedinuser")); 
        return "vendor show"; 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function vendorlistings($Vendorid)
    {
        //share listings from here 
        $vendor = DB::table("vendors")
        ->join("users", "users.id", "vendors.Vendor_userid")
        ->join("categories","categories.Category_id", "vendors.Vendor_Category_Id")
        ->where("users.id", "=", $id)
                    ->get()->toArray(); 
        
        return view("categories/listings", compact("vendor")); 
        
    }
    public function edit($Vendorid)
    {
        $Vendor = DB::table("vendors")
                    ->where("Vendor_id",'=',$Vendorid)
                    ->join("categories", "categories.Category_id", "vendors.Vendor_Category_Id")
                    ->get()->toArray();   

        $fields = $Vendor[0]->Category_field_names; 
        
        // $fields =  explode('","', $fields); 
        
        // $fields[0] = str_replace("[", "", $fields[0]); 
        
        // $laste = last($fields); 
        
        // $laste = str_replace("]", "", last($fields)); 

        return $fields; 

        $user = Auth::user(); 
        
        return view("vendors/profile", compact("Vendor", "user")); 
        
        return $Vendor; 
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return "verify here"; 
    }
}
