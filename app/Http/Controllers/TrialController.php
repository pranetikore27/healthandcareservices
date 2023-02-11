<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; 
class TrialController extends Controller
{
    public function show($Category_id)
    {
        // return "see?"; 
        $vendorsinlocation = DB::table("users")
                                ->join("vendors", "vendors.Vendor_userid", "users.id")
                            //    ->join("services", "services.Service_providerid", "users.id")
                              //  ->join("locations", "locations.Location_owneruserid", "users.id")
                                ->where("Vendor_category", '=', $Category_id)
                                ->get()->toArray();
        
        
        $vendorsinlocationcount = DB::table("users")
                                    ->join("vendors", "vendors.Vendor_userid", "users.id")
                                    // ->join("services", "services.Service_providerid", "users.id")
                                    // ->join("locations", "locations.Location_owneruserid", "users.id")
                                    ->where("Vendor_category", '=', $Category_id)
                                    ->count();

        $categories = DB::table("categories")->get(); 
        
        $locations = DB::table("locations")->get(); 
        
        return view("categories/listings", compact("vendorsinlocation", "vendorsinlocationcount", "categories", "locations"));
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
