<?php

namespace App\Http\Controllers;

use App\Living;
use Session;
use Illuminate\Http\Request;

class LivingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $living = Living::find(1);
        $count = Living::all()->count();
        return view('data5.index')->withCount($count)->withLiving($living);   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data5.create');
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
            
            'section_two_title' => 'required', 
            
            'point21' => 'required', 
            'point21_type' => 'required',

            'point22' => 'required', 
            'point22_type' => 'required',

            'point23' => 'required', 
            'point23_type' => 'required',

            'point24' => 'required', 
            'point24_type' => 'required',

            'section_three_title' => 'required', 
            
            'point31' => 'required', 
            'point31_type' => 'required',

            'point32' => 'required', 
            'point32_type' => 'required',

            'point33' => 'required', 
            'point33_type' => 'required',

            'point34' => 'required', 
            'point34_type' => 'required',

            'section_four_title' => 'required', 
            
            'point41' => 'required', 
            'point41_type' => 'required',

            'point42' => 'required', 
            'point42_type' => 'required',

            'point43' => 'required', 
            'point43_type' => 'required',

            'section_five_title' => 'required', 
            
            'point51' => 'required', 
            'point51_type' => 'required',

            'section_six_title' => 'required', 
            'section_six_subtitle' => 'required', 

            
            'point61' => 'required', 
            'point61_type' => 'required',

            'point62' => 'required', 
            'point62_type' => 'required',

            'point63' => 'required', 
            'point63_type' => 'required',

            'point64' => 'required', 
            'point64_type' => 'required',

            'point65' => 'required', 
            'point65_type' => 'required',

            'point66' => 'required', 
            'point66_type' => 'required',

            'point67' => 'required', 
            'point67_type' => 'required',

            'point68' => 'required', 
            'point68_type' => 'required',

        ));

        $data = new Living;

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

        $data->section_two_title = $request->section_two_title;

        $data->point21 = $request->point21;
        $data->point21_type = $request->point21_type;

        $data->point22 = $request->point22;
        $data->point22_type = $request->point22_type;

         $data->point23 = $request->point23;
        $data->point23_type = $request->point23_type;

         $data->point24 = $request->point24;
        $data->point24_type = $request->point24_type;


        $data->section_three_title = $request->section_three_title;

        $data->point31 = $request->point31;
        $data->point31_type = $request->point31_type;

        $data->point32 = $request->point32;
        $data->point32_type = $request->point32_type;

         $data->point33 = $request->point33;
        $data->point33_type = $request->point33_type;

         $data->point34 = $request->point34;
        $data->point34_type = $request->point34_type;

        $data->section_four_title = $request->section_four_title;

        $data->point41 = $request->point41;
        $data->point41_type = $request->point41_type;

        $data->point42 = $request->point42;
        $data->point42_type = $request->point42_type;

         $data->point43 = $request->point43;
        $data->point43_type = $request->point43_type;


        $data->section_five_title = $request->section_five_title;

        $data->point51 = $request->point51;
        $data->point51_type = $request->point51_type;

        $data->section_six_title = $request->section_six_title;
        $data->section_six_subtitle = $request->section_six_subtitle;

        $data->point61 = $request->point61;
        $data->point61_type = $request->point61_type;

        $data->point62 = $request->point62;
        $data->point62_type = $request->point62_type;

         $data->point63 = $request->point63;
        $data->point63_type = $request->point63_type;

         $data->point64 = $request->point64;
        $data->point64_type = $request->point64_type;


        $data->point65 = $request->point65;
        $data->point65_type = $request->point65_type;

        $data->point66 = $request->point66;
        $data->point66_type = $request->point66_type;

         $data->point67 = $request->point67;
        $data->point67_type = $request->point67_type;

         $data->point68 = $request->point68;
        $data->point68_type = $request->point68_type;

        $data->save();
        Session::flash('success', 'You gave successfully inserted the data');
        return redirect()->route('screen6.index');

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
        $living = Living::find($id);
        return view('data5.edit')->withLiving($living);
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
        $data = Living::find($id);
        $data->maintitle = $request->input('maintitle');
        $data->section_one_title = $request->input('section_one_title');
        $data->point11 = $request->input('point11');
        $data->point12 = $request->input('point12');
        $data->point13 = $request->input('point13');
        $data->point14 = $request->input('point14');
      
        $data->section_two_title = $request->input('section_two_title');

        $data->point21 = $request->input('point21');
        $data->point22 = $request->input('point22');
        $data->point23 = $request->input('point23');
        $data->point24 = $request->input('point24');

        $data->section_three_title = $request->input('section_three_title');

        $data->point31 = $request->input('point31');
        $data->point32 = $request->input('point32');
        $data->point33 = $request->input('point33');
        $data->point34 = $request->input('point34');

        $data->section_four_title = $request->input('section_four_title');

        $data->point41 = $request->input('point41');
        $data->point42 = $request->input('point42');
        $data->point43 = $request->input('point43');

        $data->section_five_title = $request->input('section_five_title');

        $data->point51 = $request->input('point51');

        $data->section_six_title = $request->input('section_six_title');
        $data->section_six_subtitle = $request->input('section_six_subtitle');

        $data->point61 = $request->input('point61');
        $data->point62 = $request->input('point62');
        $data->point63 = $request->input('point63');
        $data->point64 = $request->input('point64');
        $data->point65 = $request->input('point65');
        $data->point66 = $request->input('point66');
        $data->point67 = $request->input('point67');
        $data->point68 = $request->input('point68');


   $data->save();

        Session::flash('success', 'You data has been successfully updated');
        return redirect()->route('screen6.index');
    
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
