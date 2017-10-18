<?php

namespace App\Http\Controllers;

use App\Exercise;
use Session;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exercise = Exercise::find(1);
        $count = Exercise::all()->count();
        return view('data3.index')->withCount($count)->withExercise($exercise);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data3.create');
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


            'point27' => 'required', 
            'point27_type' => 'required',

            'point28' => 'required', 
            'point28_type' => 'required',

            'point29' => 'required', 
            'point29_type' => 'required',
            
            
            'point31_point1' => 'required', 
            'point31_point2' => 'required', 
            'point31_type' => 'required',

            'point32_point1' => 'required', 
            'point32_point2' => 'required', 
            'point32_point3' => 'required', 
            'point32_point4' => 'required',
            'point32_type' => 'required',

            'point33_point1' => 'required', 
            'point33_point2' => 'required', 
            'point33_point3' => 'required', 
            'point33_type' => 'required',

            'point34_point1' => 'required', 
            'point34_point2' => 'required', 
            'point34_type' => 'required',

            'section_four_title' => 'required', 

            'point41_point1' => 'required', 
            'point41_point2' => 'required', 
            'point41_point3' => 'required', 
            'point41_type' => 'required',

            'section_five_title' => 'required',

            'point51_point1' => 'required', 
            'point51_point2' => 'required', 
            'point51_point3' => 'required', 
            'point51_point4' => 'required',
            'point51_point5' => 'required',
            'point51_type' => 'required',

            'point52_point1' => 'required', 
            'point52_point2' => 'required', 
            'point52_point3' => 'required', 
            'point52_point4' => 'required',
            'point52_point5' => 'required',
            'point52_type' => 'required',

        ));

        $data = new Exercise;

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

        $data->point27 = $request->point27;
        $data->point27_type = $request->point27_type;

        $data->point28 = $request->point28;
        $data->point28_type = $request->point28_type;

        $data->point29 = $request->point29;
        $data->point29_type = $request->point29_type;

        $data->point31_point1 = $request->point31_point1;
        $data->point31_point2 = $request->point31_point2;
        $data->point31_type = $request->point31_type;

        $data->point32_point1 = $request->point32_point1;
        $data->point32_point2 = $request->point32_point2;
        $data->point32_point3 = $request->point32_point3;
        $data->point32_point4 = $request->point32_point4;
        $data->point32_type = $request->point32_type;

        $data->point33_point1 = $request->point33_point1;
        $data->point33_point2 = $request->point33_point2;
        $data->point33_point3 = $request->point33_point3;
        $data->point33_type = $request->point33_type;

        $data->point34_point1 = $request->point34_point1;
        $data->point34_point2 = $request->point34_point2;
        $data->point34_type = $request->point34_type; 

        $data->section_four_title = $request->section_four_title;

        $data->point41_point1 = $request->point41_point1;
        $data->point41_point2 = $request->point41_point2;
        $data->point41_point3 = $request->point41_point3;
        $data->point41_type = $request->point41_type;

        $data->section_five_title = $request->section_five_title;

        $data->point51_point1 = $request->point51_point1;
        $data->point51_point2 = $request->point51_point2;
        $data->point51_point3 = $request->point51_point3;
        $data->point51_point4 = $request->point51_point4;
        $data->point51_point5 = $request->point51_point5;
        $data->point51_type = $request->point51_type;

        $data->point52_point1 = $request->point52_point1;
        $data->point52_point2 = $request->point52_point2;
        $data->point52_point3 = $request->point52_point3;
        $data->point52_point4 = $request->point52_point4;
        $data->point52_point5 = $request->point52_point5;
        $data->point52_type = $request->point52_type;


        $data->save();
        Session::flash('success', 'You gave successfully inserted the data');
        return redirect()->route('screen4.index');



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
        $exercise = Exercise::find($id);
        return view('data3.edit')->withExercise($exercise);
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
        $data = Exercise::find($id);
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
        $data->point27 = $request->input('point27');
        // $data->point27_type = $request->input('point27_type');
        $data->point28 = $request->input('point28');
        // $data->point28_type = $request->input('point28_type');
        $data->point29 = $request->input('point29');
        // $data->point29_type = $request->input('point29_type');

        $data->point31_point1 = $request->input('point31_point1');
        $data->point31_point2 = $request->input('point31_point2');


        $data->point32_point1 = $request->input('point32_point1');
        $data->point32_point2 = $request->input('point32_point2');
        $data->point32_point3 = $request->input('point32_point3');
        $data->point32_point4 = $request->input('point32_point4');

        $data->point33_point1 = $request->input('point33_point1');
        $data->point33_point2 = $request->input('point33_point2');
        $data->point33_point3 = $request->input('point33_point3');

        $data->point34_point1 = $request->input('point34_point1');
        $data->point34_point2 = $request->input('point34_point2');

        $data->section_four_title = $request->input('section_four_title');


        $data->point41_point1 = $request->input('point41_point1');
        $data->point41_point2 = $request->input('point41_point2');
        $data->point41_point3 = $request->input('point41_point3');

        $data->section_five_title = $request->input('section_five_title');


        $data->point51_point1 = $request->input('point51_point1');
        $data->point51_point2 = $request->input('point51_point2');
        $data->point51_point3 = $request->input('point51_point3');
        $data->point51_point4 = $request->input('point51_point4');
        $data->point51_point5 = $request->input('point51_point5');


        $data->point52_point1 = $request->input('point52_point1');
        $data->point52_point2 = $request->input('point52_point2');
        $data->point52_point3 = $request->input('point52_point3');
        $data->point52_point4 = $request->input('point52_point4');
        $data->point52_point5 = $request->input('point52_point5');


        $data->save();
        Session::flash('success', 'You data has been successfully updated');
        return redirect()->route('screen4.index');

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
