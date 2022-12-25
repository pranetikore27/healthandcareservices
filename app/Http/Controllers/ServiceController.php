<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Auth; 
use DB; 

use Stevebauman\Location\Facades\Location;


class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientIP = request()->ip();

        $clientIP = '162.159.24.227'; /* Static IP address */
        $currentUserInfo = Location::get($clientIP);
        //   return $currentUserInfo; 
        // return view('user', compact('currentUserInfo'));
        $user = Auth::user();
        // return $user;  
            $services = DB::table("services")
                            ->where("Service_providerid", '=', $user->id)
                            // ->join("reviews", "reviews.Review_serviceid", "services.Service_id")
                            ->get(); 
            // return $services; 
            if($user->hasRole("Admin"))
            {
                $services = DB::table("services")
                                ->join("users", "users.id", "services.Service_providerid")
                                ->get(); 
            }
            return view("services/index", compact("services", "user")); 
        
        // return view()
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listings()
    {
        $services = DB::table("services")->get();
        $user = Auth::user(); 
        return view("services/listings", compact('services', 'user'));  
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        // return $service; 
        $user = Auth::user(); 
        return view("services/show", compact("service", "user")); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        //
    }
}
