<?php

namespace App\Http\Controllers;

use App\Treatment;
use Illuminate\Http\Request;
use Session;

class TreatmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $screen = Treatment::find(1);
        $count = Treatment::all()->count();
        return view('data2.index')->withCount($count)->withScreen($screen);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data2.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request, array(
            'maintitle' => 'required', 

            'section_one_title' => 'required', 
            
            'point11' => 'required', 
            'point11_type' => 'required',
            
            'point12' => 'required', 
            'point12_type' => 'required',
            
            'point13' => 'required', 
            'point13_type' => 'required',
            
            'point14' => 'required', 
            'point14_type' => 'required',
            
            'point15' => 'required', 
            'point15_type' => 'required',
            
            'point16' => 'required', 
            'point16_type' => 'required', 

            'point17' => 'required', 
            'point17_type' => 'required',

            'point18' => 'required', 
            'point18_type' => 'required', 

            'point19' => 'required', 
            'point19_type' => 'required', 

            'point110' => 'required', 
            'point110_type' => 'required',  
            
            'section_two_title' => 'required', 
            
            'point21' => 'required', 
            'point21_type' => 'required',

            'point22' => 'required', 
            'point22_type' => 'required',

            'point23' => 'required', 
            'point23_type' => 'required',

            'point24' => 'required', 
            'point24_type' => 'required',

            'point25' => 'required', 
            'point25_type' => 'required',

            'point26' => 'required', 
            'point26_type' => 'required',
            
            'section_three_title' => 'required', 
            
            'point31' => 'required', 
            'point31_type' => 'required',

            'point32' => 'required', 
            'point32_type' => 'required',

            'point33' => 'required', 
            'point33_type' => 'required',

            'point34' => 'required', 
            'point34_type' => 'required',

            'point35' => 'required', 
            'point35_type' => 'required'));

        $data = new Treatment;
        $data->maintitle = $request->maintitle;
        $data->section_one_title = $request->section_one_title;
      
        $data->point11 = $request->point11;
        $data->point11_type = $request->point11_type;
      
        $data->point12 = $request->point12;
        $data->point12_type = $request->point12_type;
      
        $data->point13 = $request->point13;
        $data->point13_type = $request->point13_type;

        $data->point14 = $request->point14;
        $data->point14_type = $request->point14_type;

        $data->point15 = $request->point15;
        $data->point15_type = $request->point15_type;

        $data->point16 = $request->point16;
        $data->point16_type = $request->point16_type;

        $data->point17 = $request->point17;
        $data->point17_type = $request->point17_type;

        $data->point18 = $request->point18;
        $data->point18_type = $request->point18_type;

        $data->point19 = $request->point19;
        $data->point19_type = $request->point19_type;

        $data->point110 = $request->point110;
        $data->point110_type = $request->point110_type;

        $data->section_two_title = $request->section_two_title;

        $data->point21 = $request->point21;
        $data->point21_type = $request->point21_type;

        $data->point22 = $request->point22;
        $data->point22_type = $request->point22_type;

        $data->point23 = $request->point23;
        $data->point23_type = $request->point23_type;

        $data->point24 = $request->point24;
        $data->point24_type = $request->point24_type;

        $data->point25 = $request->point25;
        $data->point25_type = $request->point25_type;

        $data->point26 = $request->point26;
        $data->point26_type = $request->point26_type;

        $data->section_three_title = $request->section_three_title;

        $data->point31 = $request->point31;
        $data->point31_type = $request->point31_type;

        $data->point32 = $request->point32;
        $data->point32_type = $request->point32_type;


        $data->point33 = $request->point33;
        $data->point33_type = $request->point33_type;

        $data->point34 = $request->point34;
        $data->point34_type = $request->point34_type;

        $data->point35 = $request->point35;
        $data->point35_type = $request->point35_type;

        

    

        $data->save();

        Session::flash('success', 'You gave successfully inserted the data');
        return redirect()->route('screen3.index');
    


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $screen = Treatment::find($id);
        return view('data2.edit')->withScreen($screen);
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
        $data = Treatment::find($id);

        $data->maintitle = $request->input('maintitle');
        $data->section_one_title = $request->input('section_one_title');
        $data->point11 = $request->input('point11');
        // $data->point11_type = $request->input('point11_type');

        $data->point12 = $request->input('point12');
        // $data->point12_type = $request->input('point12_type');

        $data->point13 = $request->input('point13');
        // $data->point13_type = $request->input('point13_type');

        $data->point14 = $request->input('point14');
        // $data->point14_type = $request->input('point14_type');
        
        $data->point15 = $request->input('point15');
        // $data->point15_type = $request->input('point15_type');

        $data->point16 = $request->input('point16');
        // $data->point16_type = $request->input('point16_type');


        $data->point17 = $request->input('point17');
        // $data->point17_type = $request->input('point17_type');


        $data->point18 = $request->input('point18');
        // $data->point18_type = $request->input('point18_type');


        $data->point19 = $request->input('point19');
        // $data->point19_type = $request->input('point19_type');


        $data->point110 = $request->input('point110');
        // $data->point110_type = $request->input('point110_type');

        $data->section_two_title = $request->input('section_two_title');

        $data->point21 = $request->input('point21');
        // $data->point21_type = $request->input('point21_type');

        $data->point22 = $request->input('point22');
        // $data->point22_type = $request->input('point22_type');

        $data->point23 = $request->input('point23');
        // $data->point23_type = $request->input('point23_type');

        $data->point24 = $request->input('point24');
        // $data->point24_type = $request->input('point24_type');

        $data->point25 = $request->input('point25');
        // $data->point25_type = $request->input('point25_type');

        $data->point26 = $request->input('point26');
        // $data->point26_type = $request->input('point26_type');

        $data->section_three_title = $request->input('section_three_title');


        $data->point31 = $request->input('point31');
        // $data->point31_type = $request->input('point31_type');

        $data->point32 = $request->input('point32');
        // $data->point32_type = $request->input('point32_type');

        $data->point33 = $request->input('point33');
        // $data->point33_type = $request->input('point33_type');

        $data->point34 = $request->input('point34');
        // $data->point34_type = $request->input('point34_type');

        $data->point35 = $request->input('point35');
        // $data->point35_type = $request->input('point35_type');
       
        $data->save();
        Session::flash('success', 'You data has been successfully updated');
        return redirect()->route('screen3.index');

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
