<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medical;
use DB; 
use Auth; 

class MedicalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicals = DB::table("medicals")->get(); 
        $user = Auth::user(); 
        $i=0;
        return view("medical/index", compact("medicals","user","i")); 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user(); 
        return view("medical/create", compact("user")); 
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
         'Medical_name' => 'required', 
         'Medical_email_id' => 'required',
         'Medical_address'=> 'required', 
         'Medical_city'=> 'required', 
         'Medical_pin_Code'=> 'required', 
         'Medical_mobile_number'=> 'required', 
         'Medical_start_time'=> 'required', 
         'Medical_end_time'=> 'required', 
         'Medical_website_URl'=> 'required', 

        ]);
        $input = $request->all();
        $VarCategory = Medical::create($input);
        $user = Auth::user(); 
        return redirect()->route('medicals.index')
        ->with('success','Medical updated successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Medical  $Medical
     * @return \Illuminate\Http\Response
     */
    public function show(Medical $Medical)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Medical  $Medical
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $VarMedical= Medical::find($id);
        $user = Auth::user(); 
        return view('medical/edit', compact('VarMedical', 'user'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Medical  $Medical
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $varHospital = Medical::find($id);
       
        $varHospital->Medical_name = $request->get('Medical_name');
        $varHospital->Medical_email_id = $request->get('Medical_email_id');
        $varHospital->Medical_address = $request->get('Medical_address');
        $varHospital->Medical_city = $request->get('Medical_city');
        $varHospital->Medical_pin_Code = $request->get('Medical_pin_Code');
        $varHospital->Medical_mobile_number = $request->get('Medical_mobile_number');
        $varHospital->Medical_start_time = $request->get('Medical_start_time');
        $varHospital->Medical_end_time = $request->get('Medical_end_time');
        $varHospital->Medical_website_URl = $request->get('Medical_website_URl');

        $varHospital->save();
        
        return redirect('medicals')->with('success', "Medical updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Medical  $Medical
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $varHospital = Medical::find($id);
        if($varHospital->Medical_status == 0)
        {
            $varHospital->Medical_status = 1;
            $varHospital->save();
            return redirect('medicals')->with('success', "Medical is Active now");
        }
        else if($varHospital->Medical_status == 1)
        {
            $varHospital->Medical_status = 0;
            $varHospital->save();
           
            return redirect('medicals')->with('success', "Medical is inactive now");
        }
    }
}