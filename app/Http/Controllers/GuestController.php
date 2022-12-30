<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; 
class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return "hi"; 
        // return "guest/welcome";
        $category = DB::table("categories")->get()->toArray(); 
        $locations = DB::table("locations")->get()->toArray();

        // return $category;  
        
        return view("guest/home", compact("category", "locations")); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function categorylistings(Request $request)
     {
        return "category-listings"; 
     }
    public function create()
    {
        //
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
        // {
        //     _token: "g5UfOlKP1Jjt1lqbuJbhUrDmqccZYDKGIZHzZuId",
        //     Category_name: null,
        //     Location_cityName: null
        //     }
        
        $this->validate($request, [
            'Category_name' => 'required',
            'Location_cityName' => 'required',
        ]);
        $inputs = $request->all(); 
        // return $inputs; 
        // get category id from category name
        $categoryID = DB::table("categories")
                            ->where("Category_name", '=', $inputs["Category_name"])
                            ->get()->toArray(); 
            // return $categoryID[0]; 

        // get services listed under category name
        $services = DB::table("services")
                            ->where("Service_categoryid", '=', $categoryID[0]->Category_id)
                            // ->join("services", "services.Service_categoryid", $categoryID[0]->Category_id)
                            ->get()->toArray(); 
        
        // return $services; 

        //find vendors listed in given location 
        $vendorsinlocation = DB::table("users")
                                ->join("vendors", "vendors.Vendor_userid", "users.id")
                                ->join("services", "services.Service_providerid", "users.id")
                                ->join("locations", "locations.Location_owneruserid", "users.id")
                                ->where("Location_cityName", '=', $inputs["Location_cityName"])
                                // ->where("Category")
                                ->get()->toArray(); 
        return $vendorsinlocation; 
        return view("guest/results", compact("vendorsinlocation")); 


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // category listing
        return $id; 
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
