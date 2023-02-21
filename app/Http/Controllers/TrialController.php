<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ambulance;
use DB; 
use Auth; 

class TrialController extends Controller
{
    public function show($Category_id)
    {

        $categories = DB::table("categories")->get(); 
        
        $locations = DB::table("locations")->get(); 

        if($Category_id==1)
        {
            $vendorsinlocation = DB::table("hospitals")->get(); 
            $vendorsinlocationcount = DB::table("ambulances")->count(); 
            // return $vendorsinlocation; 
            return view("categories/listings", compact("vendorsinlocation", "vendorsinlocationcount", "categories", "locations"));
        }
        if($Category_id==3)
        {
            $vendorsinlocation = DB::table("ambulances")->get(); 
            $vendorsinlocationcount = DB::table("ambulances")->count(); 
            // return $vendorsinlocation;  
            return view("categories/listings1", compact("vendorsinlocation", "vendorsinlocationcount", "categories", "locations"));
        }
        if($Category_id==2)
        {
            $vendorsinlocation = DB::table("medicals")->get(); 
            $vendorsinlocationcount = DB::table("medicals")->count(); 

            // return $vendorsinlocation;

            return view("categories/listings2", compact("vendorsinlocation", "vendorsinlocationcount", "categories", "locations"));
        }
        if($Category_id==4)
        {
            return "Page under construction"; 
        }
        if($Category_id==5)
        {
            return "Page under construction"; 
        }

        

        
        // return view("categories/listings", compact("vendorsinlocation", "vendorsinlocationcount", "categories", "locations"));
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
