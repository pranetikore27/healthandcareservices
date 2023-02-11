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
        // return $category; 
        $locations = DB::table("locations")->get()->toArray();
        $reviews = DB::table("reviews")
                        ->join("users", "users.id", "reviews.Review_giveruserid")
                        ->join("services", "services.Service_id", "reviews.Review_serviceid")
                        ->get()->toArray(); 
        // return $reviews;  
        // $blogs = DB::table("blogs")
        //                 ->join("users", "users.id", "blogs.Blog_owner_id")
        //                 ->get()->toArray(); 

        $blogs = 
        [
            [
                "Blog_category" => "Hospitals", 
                "Blog_slug" => "#", 
                "Blog_title" => "How to find the right hospital on Health and Care Services", 
                "created_at" => "11/02/2023", 
                "name" => "Admin"
            ],
            [
                "Blog_category" => "Medicine", 
                "Blog_slug" => "#", 
                "Blog_title" => "How to find the right hospital on Health and Care Services", 
                "created_at" => "11/02/2023", 
                "name" => "Admin"
            ]
        ]; 
        // $websiteInfo = DB::table("admin")->get(); 
        
        return view("guest/home", compact("category", "locations", "reviews", "blogs")); 
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
                                ->where("Vendor_category", '=', $categoryID[0]->Category_id)
                                ->get()->toArray();

                                
        $vendorsinlocationcount = DB::table("users")
                                ->join("vendors", "vendors.Vendor_userid", "users.id")
                                ->join("services", "services.Service_providerid", "users.id")
                                ->join("locations", "locations.Location_owneruserid", "users.id")
                                ->where("Location_cityName", '=', $inputs["Location_cityName"])
                                ->where("Vendor_category", '=', $categoryID[0]->Category_id)
                                ->count();
                                
        // $ratings = DB::table("ratings")->get(); 
        // return $ratings; 
        $city = $inputs["Location_cityName"]; 
        
        $categories = DB::table("categories")->get(); 
        
        $locations = DB::table("locations")->get(); 

        // $reviews = DB::table("reviews")->get(); 

        // return $vendorsinlocation; 
        
        return view("guest/results", compact("vendorsinlocation", "vendorsinlocationcount",
                            "city", "categories", "locations")); 
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
