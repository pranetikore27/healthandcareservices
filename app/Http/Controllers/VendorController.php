<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; 
use Illuminate\Support\Facades\Auth;
use App\Models\Vendors; 
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
            'Vendor_businessname' => 'required',
            'Vendor_businessaddress' => 'required',
        ]);

        $user = Auth::user(); 
        
        $inputs = $request->all();
        $inputs["Vendor_userid"] = $user->id; 
        // $inputs["Vendor_isverified"] = 0; 
        // $inputs["Vendor_isactive"] = 0; 
        
        // $inputs = (object)$inputs;

        // return $inputs; 
        $vendors = Vendors::create($inputs); 
        $user->assignRole("Vendor"); 
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
