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
                        // ->join("categories", "categories.Category_id", "services.Service_categoryid")
                        // ->join("reviews", "reviews.Review_serviceid", "services.Service_id")
                        ->get(); 
        // return $services; 
        if($user->hasRole("Admin"))
        {
            $categorised = DB::table("services")
                            ->join("users", "users.id", "services.Service_providerid")
                            ->join("categories", "categories.Category_id", "services.Service_categoryid")
                            ->get(); 
            $services = DB::table("services")
                ->where("Service_providerid", '=', $user->id)->get(); 
                
        return view("services/index", compact("services", "user", "categorised")); 
        }
        // return $services; 
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
        $i =0; 
        $user = Auth::user(); 
        $category = DB::table("categories")
                        ->get()
                        ->toArray(); 
        $categoryCount = DB::table("categories")
                        ->count(); 
        $c = []; 
        $ca = []; 
        for($i=0; $i<$categoryCount; $i++)
        {
            array_push($c, $category[$i]->Category_id); 
            array_push($ca, $category[$i]->Category_name); 
        }
        // return $categoryID; 
        // foreach($category as $c)
        // {
        //     print_r($c->Category_name); 
        //     echo "------------"; 
        // }
        // return 0; 
        // return $category[0]->Category_name; 
        return view("services/create", compact('user', 'c', 'ca')); 
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
        $this->validate($request, [
            'Service_name' => 'required',
            'Service_description' => 'required',
            'Service_charge' => 'required',
            'Service_validity' => 'required',
            'Service_isactive' => 'required',
            'Service_categoryid' => 'required'
        ]);
        
        $inputs = $request->all();

        $user = Auth::user(); 
        $inputs["Service_providerid"] = $user->id; 
        $service = Service::create($inputs); 

        return redirect("services"); 
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
