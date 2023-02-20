<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ambulance;
use DB; 
use Auth; 

class AmbulanceController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ambulances = DB::table("ambulances")->get(); 
        $user = Auth::user(); 
        $i=0;
        return view("ambulance/index", compact("ambulances","user","i")); 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user(); 
        return view("ambulance/create", compact("user")); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request; 
        $this->validate($request, 
        [
         'Ambulance_name' => 'required', 
         'Ambulance_mobile_number' => 'required',
         'Ambulance_address'=> 'required', 
         'Ambulance_address'=> 'required', 
         'Ambulance_city'=> 'required',
         "Ambulance_pin_Code"=>'required'
        ]);
        $input = $request->all();
        $VarCategory = Ambulance::create($input);
        $user = Auth::user(); 
        return redirect()->route('ambulances.index')
        ->with('success','Ambulance updated successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ambulance  $Ambulance
     * @return \Illuminate\Http\Response
     */
    public function show(Ambulance $Ambulance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ambulance  $Ambulance
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $VarAmbulance= Ambulance::find($id);
        $user = Auth::user(); 
        return view('ambulance/edit', compact('VarAmbulance', 'user'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ambulance  $Ambulance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $varHospital = Ambulance::find($id);
       
        $varHospital->Ambulance_name = $request->get('Ambulance_name');
        $varHospital->Ambulance_email_id = $request->get('Ambulance_email_id');
        $varHospital->Ambulance_address = $request->get('Ambulance_address');
        $varHospital->Ambulance_city = $request->get('Ambulance_city');
        $varHospital->Ambulance_pin_Code = $request->get('Ambulance_pin_Code');
        $varHospital->Ambulance_mobile_number = $request->get('Ambulance_mobile_number');
        $varHospital->Ambulance_start_time = $request->get('Ambulance_start_time');
        $varHospital->Ambulance_end_time = $request->get('Ambulance_end_time');
        $varHospital->Ambulance_website_URl = $request->get('Ambulance_website_URl');

        $varHospital->save();
        
        return redirect('ambulances')->with('success', "Ambulance updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ambulance  $Ambulance
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $varHospital = Ambulance::find($id);
        if($varHospital->Ambulance_status == 0)
        {
            $varHospital->Ambulance_status = 1;
            $varHospital->save();
            return redirect('ambulances')->with('success', "Ambulance is Active now");
        }
        else if($varHospital->Ambulance_status == 1)
        {
            $varHospital->Ambulance_status = 0;
            $varHospital->save();
           
            return redirect('ambulances')->with('success', "Ambulance is inactive now");
        }
    }
}