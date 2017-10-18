<?php

namespace App\Http\Controllers;

use App\Nutrition;
use Session;
use Illuminate\Http\Request;

class NutritionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nutrition = Nutrition::find(1);
        $count = Nutrition::all()->count();
        return view('data4.index')->withCount($count)->withNutrition($nutrition);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data4.create');
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
            
            'section_two_title' => 'required', 
            
            'point21' => 'required', 
            'point21_type' => 'required',

            'point22' => 'required', 
            'point22_type' => 'required',

            'point23_point1' => 'required',
            'point23_point2' => 'required', 
            'point23_type' => 'required',

            'point24' => 'required', 
            'point24_type' => 'required',

            'point25_point1' => 'required',
            'point25_point2' => 'required', 
            'point25_type' => 'required',

            'point26_point1' => 'required',
            'point26_point2' => 'required', 
            'point26_type' => 'required',

            'point27_point1' => 'required',
            'point27_point2' => 'required', 
            'point27_type' => 'required',


            'point28_point2' => 'required', 
            'point28_type' => 'required',

            'section_three_title' => 'required',
            
            'point31' => 'required', 
            'point31_type' => 'required',

            'point32_title' => 'required', 
            'point32_point1' => 'required', 
            'point32_point1_type' => 'required', 
            'point32_point2' => 'required', 
            'point32_point2_type' => 'required', 

            'point33_title' => 'required', 
            'point33_point1' => 'required', 
            'point33_point1_type' => 'required', 
            'point33_point2' => 'required', 
            'point33_point2_type' => 'required', 
            'point33_point3' => 'required', 
            'point33_point3_type' => 'required', 
            'point33_point4' => 'required', 
            'point33_point4_type' => 'required', 
            'point33_point5' => 'required', 
            'point33_point5_type' => 'required', 
            'point33_point6' => 'required', 
            'point33_point6_type' => 'required',
            'point33_point7' => 'required', 
            'point33_point7_type' => 'required', 


            'section_four_title' => 'required', 

            'section_four_subtitle' => 'required', 

            'point41_point1' => 'required', 
            'point41_point2' => 'required', 
            'point41_point3' => 'required', 
            'point41_type' => 'required',

            'point42_point1' => 'required', 
            'point42_point2' => 'required', 
            'point42_point3' => 'required', 
            'point42_type' => 'required',

            'point43_point1' => 'required', 
            'point43_point2' => 'required', 
            // 'point43_point3' => 'required', 
            'point43_type' => 'required',


            'point44_point1' => 'required', 
            'point44_point2' => 'required', 
            // 'point44_point3' => 'required', 
            'point44_type' => 'required',

            'point45_point1' => 'required', 
            'point45_point2' => 'required', 
            // 'point45_point3' => 'required', 
            'point45_type' => 'required',

            'point46_point1' => 'required', 
            // 'point46_point2' => 'required', 
            // 'point46_point3' => 'required', 
            'point46_type' => 'required',

            'point47' => 'required',  
            'point47_type' => 'required',


            'point48_point1' => 'required', 
            'point48_point2' => 'required', 
            'point48_point3' => 'required', 
            'point48_type' => 'required',

            'point49_point1' => 'required', 
            'point49_point2' => 'required', 
            'point49_point3' => 'required', 
            'point49_type' => 'required',


            'point410_point1' => 'required', 
            'point410_point2' => 'required', 
            'point410_point3' => 'required', 
            'point410_type' => 'required',


            'point411_point1' => 'required', 
            'point411_point2' => 'required', 
            'point411_point3' => 'required', 
            'point411_type' => 'required',

            'point412_point1' => 'required', 
            'point412_point2' => 'required', 
            'point412_point3' => 'required', 
            'point412_type' => 'required',
 
            'point413_point3' => 'required', 
            'point413_type' => 'required',

        ));

        $data = new Nutrition;

        $data->maintitle = $request->maintitle;
        $data->section_one_title = $request->section_one_title;
      
        $data->point11 = $request->point11;
        $data->point11_type = $request->point11_type;

        $data->section_two_title = $request->section_two_title;

        $data->point21 = $request->point21;
        $data->point21_type = $request->point21_type;

        $data->point22 = $request->point22;
        $data->point22_type = $request->point22_type;

        $data->point23_point1 = $request->point23_point1;
        $data->point23_point2 = $request->point23_point2;
        $data->point23_type = $request->point23_type;

        $data->point24 = $request->point24;
        $data->point24_type = $request->point24_type;

        $data->point25_point1 = $request->point25_point1;
        $data->point25_point2 = $request->point25_point2;
        $data->point25_type = $request->point25_type;

        $data->point26_point1 = $request->point26_point1;
        $data->point26_point2 = $request->point26_point2;
        $data->point26_type = $request->point26_type;

        $data->point27_point1 = $request->point27_point1;
        $data->point27_point2 = $request->point27_point2;
        $data->point27_type = $request->point27_type;

        $data->point28_point2 = $request->point28_point2;
        $data->point28_type = $request->point28_type;

        $data->section_three_title = $request->section_three_title;

        $data->point31 = $request->point31;
        $data->point31_type = $request->point31_type;

        $data->point32_title = $request->point32_title;
        $data->point32_point1 = $request->point32_point1;
        $data->point32_point1_type = $request->point32_point1_type;
        $data->point32_point2 = $request->point32_point2;
        $data->point32_point2_type = $request->point32_point2_type;

        $data->point33_title = $request->point33_title;
        $data->point33_point1 = $request->point33_point1;
        $data->point33_point1_type = $request->point33_point1_type;
        $data->point33_point2 = $request->point33_point2;
        $data->point33_point2_type = $request->point33_point2_type;
        $data->point33_point3 = $request->point33_point3;
        $data->point33_point3_type = $request->point33_point3_type;
        $data->point33_point4 = $request->point33_point4;
        $data->point33_point4_type = $request->point33_point4_type;

        $data->point33_point5 = $request->point33_point5;
        $data->point33_point5_type = $request->point33_point5_type;
        $data->point33_point6 = $request->point33_point6;
        $data->point33_point6_type = $request->point33_point6_type;
        $data->point33_point7 = $request->point33_point7;
        $data->point33_point7_type = $request->point33_point7_type;


        $data->section_four_title = $request->section_four_title;
        $data->section_four_subtitle = $request->section_four_subtitle;


        $data->point41_point1 = $request->point41_point1;
        $data->point41_point2 = $request->point41_point2;
        $data->point41_point3 = $request->point41_point3;
        $data->point41_type = $request->point41_type;

        $data->point42_point1 = $request->point42_point1;
        $data->point42_point2 = $request->point42_point2;
        $data->point42_point3 = $request->point42_point3;
        $data->point42_type = $request->point42_type;

        $data->point43_point1 = $request->point43_point1;
        $data->point43_point2 = $request->point43_point2;
        // $data->point43_point3 = $request->point43_point3;
        $data->point43_type = $request->point43_type;


        $data->point44_point1 = $request->point44_point1;
        $data->point44_point2 = $request->point44_point2;
        // $data->point44_point3 = $request->point44_point3;
        $data->point44_type = $request->point44_type;

        $data->point45_point1 = $request->point45_point1;
        $data->point45_point2 = $request->point45_point2;
        $data->point45_point3 = $request->point45_point3;
        $data->point45_type = $request->point45_type;

        $data->point46_point1 = $request->point46_point1;
        // $data->point46_point2 = $request->point46_point2;
        // $data->point46_point3 = $request->point46_point3;
        $data->point46_type = $request->point46_type;

        $data->point47 = $request->point47;
        $data->point47_type = $request->point47_type;

        $data->point48_point1 = $request->point48_point1;   
        $data->point48_point2 = $request->point48_point2;
        $data->point48_point3 = $request->point48_point3;
        $data->point48_type = $request->point48_type;

        $data->point49_point1 = $request->point49_point1;
        $data->point49_point2 = $request->point49_point2;
        $data->point49_point3 = $request->point49_point3;
        $data->point49_type = $request->point49_type;

        $data->point410_point1 = $request->point410_point1;
        $data->point410_point2 = $request->point410_point2;
        $data->point410_point3 = $request->point410_point3;
        $data->point410_type = $request->point410_type;

        $data->point411_point1 = $request->point411_point1;
        $data->point411_point2 = $request->point411_point2;
        $data->point411_point3 = $request->point411_point3;
        $data->point411_type = $request->point411_type;

        $data->point412_point1 = $request->point412_point1;
        $data->point412_point2 = $request->point412_point2;
        $data->point412_point3 = $request->point412_point3;
        $data->point412_type = $request->point412_type;

        $data->point413_point3 = $request->point413_point3;
        $data->point413_type = $request->point413_type;

     
        $data->save();
        Session::flash('success', 'You gave successfully inserted the data');
        return redirect()->route('screen5.index');
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
        $nutrition = Nutrition::find($id);
        return view('data4.edit')->withNutrition($nutrition);
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
         $data = Nutrition::find($id);
        $data->maintitle = $request->input('maintitle');
        $data->section_one_title = $request->input('section_one_title');
        $data->point11 = $request->input('point11');
      
        $data->section_two_title = $request->input('section_two_title');

        $data->point21 = $request->input('point21');
        // $data->point21_type = $request->input('point21_type');
        $data->point22 = $request->input('point22');
        // $data->point22_type = $request->input('point22_type');
        $data->point23_point1 = $request->input('point23_point1');
        $data->point23_point2 = $request->input('point23_point2');

        // $data->point23_type = $request->input('point23_type');
        $data->point24 = $request->input('point24');
        // $data->point24_type = $request->input('point24_type');
        $data->point25_point1 = $request->input('point25_point1');
        $data->point25_point2 = $request->input('point25_point2');
        // $data->point25_type = $request->input('point25_type');
        $data->point26_point1 = $request->input('point26_point1');
        $data->point26_point2 = $request->input('point26_point2');
        // $data->point26_type = $request->input('point26_type');
        $data->point27_point1 = $request->input('point27_point1');
        $data->point27_point2 = $request->input('point27_point2');
        // $data->point27_type = $request->input('point27_type');
        $data->point28_point2 = $request->input('point28_point2');
        // $data->point28_type = $request->input('point28_type');
        $data->section_three_title = $request->input('section_three_title');
        // $data->point29_type = $request->input('point29_type');

        $data->point31 = $request->input('point31');


        $data->point32_title = $request->input('point32_title');
        $data->point32_point1 = $request->input('point32_point1');
        $data->point32_point2 = $request->input('point32_point2');
 
        $data->point33_title = $request->input('point33_title');
        $data->point33_point1 = $request->input('point33_point1');
        $data->point33_point2 = $request->input('point33_point2');
        $data->point33_point3 = $request->input('point33_point3');
        $data->point33_point4 = $request->input('point33_point4');
        $data->point33_point5 = $request->input('point33_point5');
        $data->point33_point6 = $request->input('point33_point6');
        $data->point33_point7 = $request->input('point33_point7');

        $data->section_four_title = $request->input('section_four_title');
        $data->section_four_subtitle = $request->input('section_four_subtitle');

        $data->point41_point1 = $request->input('point41_point1');
        $data->point41_point2 = $request->input('point41_point2');
        $data->point41_point3 = $request->input('point41_point3');

        $data->point42_point1 = $request->input('point42_point1');
        $data->point42_point2 = $request->input('point42_point2');
        $data->point42_point3 = $request->input('point42_point3');

        $data->point43_point1 = $request->input('point43_point1');
        $data->point43_point2 = $request->input('point43_point2');
        $data->point43_point3 = $request->input('point43_point3');

        $data->point44_point1 = $request->input('point44_point1');
        $data->point44_point2 = $request->input('point44_point2');
        $data->point44_point3 = $request->input('point44_point3');


        $data->point45_point1 = $request->input('point45_point1');
        $data->point45_point2 = $request->input('point45_point2');
        $data->point45_point3 = $request->input('point45_point3');

        $data->point46_point1 = $request->input('point46_point1');
        $data->point46_point2 = $request->input('point46_point2');
        $data->point46_point3 = $request->input('point46_point3');

        $data->point47 = $request->input('point47');

        $data->point48_point1 = $request->input('point48_point1');
        $data->point48_point2 = $request->input('point48_point2');
        $data->point48_point3 = $request->input('point48_point3');

        $data->point49_point1 = $request->input('point49_point1');
        $data->point49_point2 = $request->input('point49_point2');
        $data->point49_point3 = $request->input('point49_point3');


        $data->point410_point1 = $request->input('point410_point1');
        $data->point410_point2 = $request->input('point410_point2');
        $data->point410_point3 = $request->input('point410_point3');

        $data->point411_point1 = $request->input('point411_point1');
        $data->point411_point2 = $request->input('point411_point2');
        $data->point411_point3 = $request->input('point411_point3');


        $data->point412_point1 = $request->input('point412_point1');
        $data->point412_point2 = $request->input('point412_point2');
        $data->point412_point3 = $request->input('point412_point3');

        $data->point413_point3 = $request->input('point413_point3');

        $data->save();

        Session::flash('success', 'You data has been successfully updated');
        return redirect()->route('screen5.index');

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
