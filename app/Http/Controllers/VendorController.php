<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; 
use Illuminate\Support\Facades\Auth;
use App\Models\Vendors; 
use App\Models\User;
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
                    // ->join("payments", "users.id", "payments.Payment_userid")
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
        return view("vendors/create", compact("user")); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required', 
            'email' => 'required', 
            'Vendor_businessname' => 'required',
            'Vendor_businessaddress' => 'required',
            'Vendor_referencenumber' => 'required', 
            'Vendor_Accountnumber' => 'required', 
            'Vendor_bio' => 'required'
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
        
        $VendorUser->assignRole("Vendor"); 
        $vendors = Vendors::create($inputs); 

        return redirect("home");  

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Auth::user(); 
        $vendor = DB::table("vendors")
                    ->join("users", "users.id", "vendors.Vendor_userid")
                    ->where("users.id", "=", $id)
                    ->get()->toArray(); 
        // return $vendor; 
        return view("Vendors/show", compact("vendor", "user")); 
        return "vendor show"; 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
}
