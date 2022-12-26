<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location as Loc;

use DB; 
use Auth; 

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $locations = Location::orderBy('id','DESC')->paginate(5);
        
        $user = Auth::user(); 

        return view('location.index',compact('locations', 'user'))
            ->with('i', ($request->input('page', 1) - 1) * 5); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user(); 

        $clientIP = request()->ip();

        $currentUserInfo = DB::table("locations")
                                ->where("Location_owneruserid", '=', $user->id)
                                ->get(); 
        if($currentUserInfo == NULL)

        {
            $clientIP = '162.159.24.227'; /* Static IP address */
            $currentUserInfo = Loc::get($clientIP);
            // return $currentUserInfo; 
            // $currentUserInfo->toArray(); 
            // $currentUserInfo->setAttribute('Location_owneruserid', $user->id);
            $location["Location_owneruserid"] = $user->id; 
            $location["Location_ip"] = $clientIP; 
            $location["Location_countryName"] = $currentUserInfo->countryName; 

            $location["Location_countryCode"] = $currentUserInfo->countryCode; 
            $location["Location_regionCode"] = $currentUserInfo->regionCode; 
            $location["Location_regionName"] = $currentUserInfo->regionName; 
            $location["Location_cityName"] = $currentUserInfo->cityName; 

            $location["Location_zipCode"] = $currentUserInfo->zipCode; 
            $location["Location_isoCode"] = $currentUserInfo->isoCode; 
            $location["Location_postalCode"] = $currentUserInfo->postalCode; 
            $location["Location_latitude"] = $currentUserInfo->latitude; 

            $location["Location_longitude"] = $currentUserInfo->longitude; 
            $location["Location_metroCode"] = $currentUserInfo->metroCode; 
            $location["Location_areaCode"] = $currentUserInfo->areaCode; 
            $location["Location_timezone"] = $currentUserInfo->timezone; 


        // return $location; 
        // $currentUserInfo->Location_owneruserid = $user->id; 
        
            $location = Location::create($location); 
        }
        return view("location/show", compact("user", "currentUserInfo")); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'Location_longitude' => 'required',
            'Location_latitude' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function show(Location $location)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function edit(Location $location)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Location $location)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function destroy(Location $location)
    {
        //
    }
}
