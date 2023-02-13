<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use Illuminate\Http\Request;
use DB; 
use Auth; 
class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hospitals = DB::table("hospitals")->get(); 
        $user = Auth::user(); 
        $i=0;
        return view("hospital/index", compact("hospitals","user","i")); 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user(); 
        return view("hospital/create", compact("user")); 
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
         'Hospital_name' => 'required', 
         'Hospital_email_id' => 'required',
         'Hospital_address'=> 'required', 
         'Hospital_city'=> 'required', 
         'Hospital_pin_Code'=> 'required', 
         'Hospital_features'=> 'required', 
         'Hospital_start_time'=> 'required', 
         'Hospital_end_time'=> 'required', 
         'Hospital_website_URl'=> 'required', 

        ]);
        $input = $request->all();
        $VarCategory = Hospital::create($input);
        $user = Auth::user(); 
        return redirect()->route('hospitals.index')
        ->with('success','hospital updated successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function show(Hospital $hospital)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $VarHospital= Hospital::find($id);
        $user = Auth::user(); 
        return view('hospital/edit', compact('VarHospital', 'user'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $varHospital = Hospital::find($id);
       
        $varHospital->Hospital_name = $request->get('Hospital_name');
        $varHospital->Hospital_email_id = $request->get('Hospital_email_id');
        $varHospital->Hospital_address = $request->get('Hospital_address');
        $varHospital->Hospital_city = $request->get('Hospital_city');
        $varHospital->Hospital_pin_Code = $request->get('Hospital_pin_Code');
        $varHospital->Hospital_features = $request->get('Hospital_features');
        $varHospital->Hospital_start_time = $request->get('Hospital_start_time');
        $varHospital->Hospital_end_time = $request->get('Hospital_end_time');
        $varHospital->Hospital_website_URl = $request->get('Hospital_website_URl');

        $varHospital->save();
        
        return redirect('hospitals')->with('success', "hospital updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $varHospital = Hospital::find($id);
        if($varHospital->Hospital_status == 0)
        {
            $varHospital->Hospital_status = 1;
            $varHospital->save();
            return redirect('hospitals')->with('success', "hospital is Active now");
        }
        else if($varHospital->Hospital_status == 1)
        {
            $varHospital->Hospital_status = 0;
            $varHospital->save();
           
            return redirect('hospitals')->with('success', "hospital is inactive now");
        }
    }
}
