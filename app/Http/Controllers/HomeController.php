<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use DB; 

use Illuminate\Http\Request;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return ("hi"); 
        $user = Auth::user();
        // dd($user->hasRole("User")) ; 
        // $roles = await _userManager.GetRolesAsync(user);
        // var hasAnyRole = roles.Count > 0;

        if($user->hasRole("Vendor"))
        {
            return "vendor"; 
            $ServicesCount = DB::table("services")
                            ->where("Service_providerid", "=", $user->id)
                            ->count(); 

            $pendingservicerequest = DB::table("services")
                            ->where("Service_isactive", "=", 1)
                            ->count(); 

            $ComplaintsCount = DB::table("services")
                            ->join("complaints", "services.Service_id", "complaints.Complaint_serviceid")
                            ->count(); 

            $ReviewCount = DB::table("services")
                            ->join("reviews", "services.Service_id", "reviews.Review_serviceid")
                            ->count(); 

            $TotalAmount = DB::table("payments")
                            ->join("services", "services.Service_id", "payments.Payment_serviceid")
                            ->sum("Payment_amount"); 

            // pendingservicerequest
            return view("dashboards/vendor", compact("user", "ServicesCount",
            "pendingservicerequest", "ComplaintsCount", "ReviewCount", "TotalAmount")); 
        }
        if($user->hasRole("User"))
        {
            return "This module is under development, Please return after a few days"; 
            $user = Auth::user(); 
            return view("guest/unverified", compact("user")); 
        }
        if($user->hasRole("Admin"))
        {
            // return "admin"; 
            $VendorsCount = DB::table("vendors")->count(); 
            $title = "Admin Dashboard"; 
            
            $Verifications = DB::table("vendors")->where("Vendor_online_verification_status", "0")->count(); 
            $ComplaintsCount = DB::table("complaints")->where("Complaint_status", "0")->count(); 
            $ComplaintsUnderReviewCount = DB::table("complaints")->where("Complaint_status", "1")->count(); 
            
            $TotalAmount = DB::table("payments")->sum("Payment_amount"); 
            $ReviewCount = DB::table("reviews")->count(); 

            $pagename = "You are viewing Admin Dashboard"; 
            
            return view("dashboards/admin", compact(
                "user", "title", "pagename", "VendorsCount", 
                "Verifications", "ComplaintsCount", "ReviewCount", 
                "TotalAmount", "ComplaintsUnderReviewCount"
            )); 
        }
        return "no roles"; 
        return view("guest/unverified"); 
        // return "none"; 
    }
    public function store(Request $request)
    {
        return $request; 
    }
    // public function search(Request $request){
    //     return $request; 
    // }
}
