<?php

namespace App\Http\Controllers;

use App\Alumni;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $Alumni = DB::table('Alumnis')->paginate(100);
       dd($Alumni);
        return view('home',['Alumni' => $Alumni]);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alumni.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request -> validate([
            'adm'=> 'required',  
           'fullname'=> 'required', 
           'dept'=> 'required', 
           'course'=> 'required',  
           'level'=> 'required',  
           'feyear'=> 'required', 
           'feser'=> 'required', 
           'idnum' => 'required', 
           'current_address'=> 'required',  
           'permanent_address'=> 'required',
           'email'=> 'required', 
           'mobile'=> 'required',  
           'occupation'=> 'required', 
           'occupation_place'=> 'required', 
           'nextofkin'=> 'required', 
           'nextofkinadd'=> 'required', 
           'nextofkinphone'=> 'required', 
           'placeofworkadd'=> 'required', 
           'supervisoradd'=> 'required', 
        ], 
        [
              'adm.required' => 'Student Admission Number is required',
              'fullname.required'=>'Your Name is Required',
              'course.required'=>'Your Course is Required. It Should be in Full',
              'idnum.required'=>'Your National Identity Number is required',
              'email.required'=>'Your Email is Required. It should be unique',
                'mobile.required' => 'Mobile Phone Number is Required',
                'current_address.required'=>  'Current Mailing Address is Required',  
           'permanent_address.required'=>  'Your Permanent Address is required',
          
           'occupation.required'=>  'Your Current Job is Required. If Unemployed use N/A', 
           'occupation_place.required'=>  'Place of Employment is Required. If Unemployed use N/A', 
           'nextofkin.required'=>  'Next of Kin Name is Needed', 
           'nextofkinadd.required'=>  'Next of Kin Address is Required. It Can be similar with Current Address', 
           'nextofkinphone.required'=>  'Next of Kin`s Phone number is Needed', 
           'placeofworkadd.required'=>  'The Locality of your Employment is equired. If Unemployed use N/A', 
           'supervisoradd.required'=>  'Your Supervisors Phone number is Required. If Unemployed use N/A', 
            ]);
        $input = request()->all();
        $alumni = Alumni::create($input);
    
       return redirect('/')->with('message', 'You have been added as an Alumni of RVTTI');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function show(alumni $alumni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function edit(alumni $alumni)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

/*
             $validatedData = $request->validate([
            'adm'=> 'required',  
           'fullname'=> 'required', 
           'dept'=> 'required', 
           'course'=> 'required',  
           'level'=> 'required',  
           'feyear'=> 'required', 
           'feser'=> 'required', 
           'idnum' => 'required', 
           'current_address'=> 'required',  
           'permanent_address'=> 'required',
           'email'=> 'required', 
           'mobile'=> 'required',  
           'occupation'=> 'required', 
           'occupation_place'=> 'required', 
           'nextofkin'=> 'required', 
           'nextofkinadd'=> 'required', 
           'nextofkinphone'=> 'required', 
           'placeofworkadd'=> 'required', 
           'supervisoradd'=> 'required', 
        ], 
        [
              'adm.required' => 'Student Admission Number is required',
              'fullname.required'=>'Your Name is Required',
              'course.required'=>'Your Course is Required. It Should be in Full',
              'idnum.required'=>'Your National Identity Number is required',
              'email.required'=>'Your Email is Required. It should be unique',
                'mobile.required' => 'Mobile Phone Number is Required',
                'current_address.required'=>  'Current Mailing Address is Required',  
           'permanent_address.required'=>  'Your Permanent Address is required',
          
           'occupation.required'=>  'Your Current Job is Required. If Unemployed use N/A', 
           'occupation_place.required'=>  'Place of Employment is Required. If Unemployed use N/A', 
           'nextofkin.required'=>  'Next of Kin Name is Needed', 
           'nextofkinadd.required'=>  'Next of Kin Address is Required. It Can be similar with Current Address', 
           'nextofkinphone.required'=>  'Next of Kin`s Phone number is Needed', 
           'placeofworkadd.required'=>  'The Locality of your Employment is equired. If Unemployed use N/A', 
           'supervisoradd.required'=>  'Your Supervisors Phone number is Required. If Unemployed use N/A', 
            ]);
*/
              $input = request()->all();

        dd($request);

        Alumni::whereid($id)->update($validatedData);
      
           
        return redirect('/')->with('message','Details updated successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function destroy(alumni $alumni)
    {
        //
    }

}