<?php

namespace App\Http\Controllers;
use App\Screen;
use Illuminate\Http\Request;
use Session;

class DataController1 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $screen = Screen::find(1);
        $count = Screen::all()->count();
        return view('data1.index')->withCount($count)->withScreen($screen);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data1.create');
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
            
            'section_three_title' => 'required', 
            
            'point31_point1' => 'required',
            'point31_point2' => 'required', 
            'point31_type' => 'required',
            
            'point32_point1' => 'required',
            'point32_point2' => 'required', 
            'point32_type' => 'required',
            
            'point33_point1' => 'required',
            'point33_point2' => 'required', 
            'point33_type' => 'required',
            
            'point34_point1' => 'required',
            'point34_point2' => 'required', 
            'point34_type' => 'required',
            
            'point35_point1' => 'required',
            'point35_point2' => 'required', 
            'point35_type' => 'required',
           
            'point36_point1' => 'required',
            'point36_point2' => 'required', 
            'point36_type' => 'required',

            'section_four_title' => 'required', 
            'section_four_subtitle' => 'required', 

            // 'point41_point1' => 'required',
            'point41_point2' => 'required',
            'point41_point3' => 'required',
            'point41_point4' => 'required',
            'point41_point5' => 'required',
            'point41_type' => 'required',

            'point42_point1' => 'required',
            'point42_point2' => 'required',
            'point42_point3' => 'required',
            'point42_point4' => 'required',
            // 'point42_point5' => 'required',
            'point42_type' => 'required',

            'point43_point1' => 'required',
            'point43_point2' => 'required',
            'point43_point3' => 'required',
            'point43_point4' => 'required',
            'point43_point5' => 'required',
            'point43_type' => 'required',


            'point44_point1' => 'required',
            'point44_point2' => 'required',
            'point44_point3' => 'required',
            'point44_point4' => 'required',
            // 'point44_point5' => 'required',
            'point44_type' => 'required',

            'point45_point1' => 'required',
            'point45_point2' => 'required',
            'point45_point3' => 'required',
            'point45_point4' => 'required',
            // 'point45_point5' => 'required',
            'point45_type' => 'required',

            'point46_point1' => 'required',
            'point46_point2' => 'required',
            'point46_point3' => 'required',
            'point46_point4' => 'required',
            // 'point46_point5' => 'required',
            'point46_type' => 'required',

            'point47_point1' => 'required',
            'point47_point2' => 'required',
            'point47_point3' => 'required',
            'point47_point4' => 'required',
            'point47_point5' => 'required',
            'point47_type' => 'required',

            'point48' => 'required',
            'point48_type' => 'required',

            'section_five_title' => 'required',
            'section_five_subtitle' => 'required',

            'point51' => 'required',
            'point51_type' => 'required',

            'point52' => 'required',
            'point52_type' => 'required',

            'point53' => 'required',
            'point53_type' => 'required',

            'point54' => 'required',
            'point54_type' => 'required',

            'point55' => 'required',
            'point55_type' => 'required',
            ));


        $data = new Screen;
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

        $data->section_three_title = $request->section_three_title;

        $data->point31_point1 = $request->point31_point1;
        $data->point31_point2 = $request->point31_point2;
        $data->point31_type = $request->point31_type;

        $data->point32_point1 = $request->point32_point1;
        $data->point32_point2 = $request->point32_point2;
        $data->point32_type = $request->point32_type;

        $data->point33_point1 = $request->point33_point1;
        $data->point33_point2 = $request->point33_point2;
        $data->point33_type = $request->point33_type;

        $data->point34_point1 = $request->point34_point1;
        $data->point34_point2 = $request->point34_point2;
        $data->point34_type = $request->point34_type;

        $data->point35_point1 = $request->point35_point1;
        $data->point35_point2 = $request->point35_point2;
        $data->point35_type = $request->point35_type;

        $data->point36_point1 = $request->point36_point1;
        $data->point36_point2 = $request->point36_point2;
        $data->point36_type = $request->point36_type;

        $data->section_four_title = $request->section_four_title;
        $data->section_four_subtitle = $request->section_four_subtitle;

        $data->point41_point1 = $request->point41_point1;
        $data->point41_point2 = $request->point41_point2;
        $data->point41_point3 = $request->point41_point3;
        $data->point41_point4 = $request->point41_point4;
        $data->point41_point5 = $request->point41_point5;
        $data->point41_type = $request->point41_type;


        $data->point42_point1 = $request->point42_point1;
        $data->point42_point2 = $request->point42_point2;
        $data->point42_point3 = $request->point42_point3;
        $data->point42_point4 = $request->point42_point4;
        $data->point42_point5 = $request->point42_point5;
        $data->point42_type = $request->point42_type;


        $data->point43_point1 = $request->point43_point1;
        $data->point43_point2 = $request->point43_point2;
        $data->point43_point3 = $request->point43_point3;
        $data->point43_point4 = $request->point43_point4;
        $data->point43_point5 = $request->point43_point5;
        $data->point43_type = $request->point41_type;


        $data->point44_point1 = $request->point44_point1;
        $data->point44_point2 = $request->point44_point2;
        $data->point44_point3 = $request->point44_point3;
        $data->point44_point4 = $request->point44_point4;
        $data->point44_point5 = $request->point44_point5;
        $data->point44_type = $request->point41_type;


        $data->point45_point1 = $request->point45_point1;
        $data->point45_point2 = $request->point45_point2;
        $data->point45_point3 = $request->point45_point3;
        $data->point45_point4 = $request->point45_point4;
        $data->point45_point5 = $request->point45_point5;
        $data->point45_type = $request->point45_type;


        $data->point46_point1 = $request->point46_point1;
        $data->point46_point2 = $request->point46_point2;
        $data->point46_point3 = $request->point46_point3;
        $data->point46_point4 = $request->point46_point4;
        $data->point46_point5 = $request->point46_point5;
        $data->point46_type = $request->point46_type;


        $data->point47_point1 = $request->point47_point1;
        $data->point47_point2 = $request->point47_point2;
        $data->point47_point3 = $request->point47_point3;
        $data->point47_point4 = $request->point47_point4;
        $data->point47_point5 = $request->point47_point5;
        $data->point47_type = $request->point47_type;

        $data->point48 = $request->point48;
        $data->point48_type = $request->point48_type;

        $data->section_five_title = $request->section_five_title;

        $data->section_five_subtitle = $request->section_five_subtitle;

        $data->point51 = $request->point51;
        $data->point51_type = $request->point51_type;

        $data->point52 = $request->point52;
        $data->point52_type = $request->point52_type;

        $data->point53 = $request->point53;
        $data->point53_type = $request->point53_type;

        $data->point54 = $request->point54;
        $data->point54_type = $request->point54_type;

        $data->point55 = $request->point55;
        $data->point55_type = $request->point55_type;

        $data->save();
        Session::flash('success', 'Your data has been successfully saved');

        return redirect()->route('screen2.index');

        

    

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
        $screen = Screen::find($id);
        return view('data1.edit')->withScreen($screen);
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
        $data = Screen::find($id);

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

        $data->section_three_title = $request->input('section_three_title');
        
        $data->point31_point1 = $request->input('point31_point1');
        $data->point31_point2 = $request->input('point31_point2');
        // $data->point31_type = $request->input('point31_type');


        $data->point32_point1 = $request->input('point32_point1');
        $data->point32_point2 = $request->input('point32_point2');
        // $data->point32_type = $request->input('point32_type');

        $data->point33_point1 = $request->input('point33_point1');
        $data->point33_point2 = $request->input('point33_point2');
        // $data->point33_type = $request->input('point33_type');

        $data->point34_point1 = $request->input('point34_point1');
        $data->point34_point2 = $request->input('point34_point2');
        // $data->point34_type = $request->input('point34_type');

        $data->point35_point1 = $request->input('point35_point1');
        $data->point35_point2 = $request->input('point35_point2');
        // $data->point35_type = $request->input('point35_type');

        
        $data->point36_point1 = $request->input('point36_point1');
        $data->point36_point2 = $request->input('point36_point2');
        // $data->point36_type = $request->input('point36_type');

        $data->section_four_title = $request->input('section_four_title');

        $data->section_four_subtitle = $request->input('section_four_subtitle');

        $data->point41_point1 = $request->input('point41_point1');
        $data->point41_point2 = $request->input('point41_point2');
        $data->point41_point3 = $request->input('point41_point3');
        $data->point41_point4 = $request->input('point41_point4');
        $data->point41_point5 = $request->input('point41_point5');
        // $data->point41_type = $request->input('point41_type');

        $data->point42_point1 = $request->input('point42_point1');
        $data->point42_point2 = $request->input('point42_point2');
        $data->point42_point3 = $request->input('point42_point3');
        $data->point42_point4 = $request->input('point42_point4');
        $data->point42_point5 = $request->input('point42_point5');
        // $data->point42_type = $request->input('point42_type');

        $data->point43_point1 = $request->input('point43_point1');
        $data->point43_point2 = $request->input('point43_point2');
        $data->point43_point3 = $request->input('point43_point3');
        $data->point43_point4 = $request->input('point43_point4');
        $data->point43_point5 = $request->input('point43_point5');
        // $data->point43_type = $request->input('point43_type');

        $data->point44_point1 = $request->input('point44_point1');
        $data->point44_point2 = $request->input('point44_point2');
        $data->point44_point3 = $request->input('point44_point3');
        $data->point44_point4 = $request->input('point44_point4');
        $data->point44_point5 = $request->input('point44_point5');
        // $data->point44_type = $request->input('point44_type');

        $data->point45_point1 = $request->input('point45_point1');
        $data->point45_point2 = $request->input('point45_point2');
        $data->point45_point3 = $request->input('point45_point3');
        $data->point45_point4 = $request->input('point45_point4');
        $data->point45_point5 = $request->input('point45_point5');
        // $data->point45_type = $request->input('point45_type');

        $data->point46_point1 = $request->input('point46_point1');
        $data->point46_point2 = $request->input('point46_point2');
        $data->point46_point3 = $request->input('point46_point3');
        $data->point46_point4 = $request->input('point46_point4');
        $data->point46_point5 = $request->input('point46_point5');
        // $data->point46_type = $request->input('point46_type');

        $data->point47_point1 = $request->input('point47_point1');
        $data->point47_point2 = $request->input('point47_point2');
        $data->point47_point3 = $request->input('point47_point3');
        $data->point47_point4 = $request->input('point47_point4');
        $data->point47_point5 = $request->input('point47_point5');
        // $data->point47_type = $request->input('point47_type');


        $data->point48 = $request->input('point48');
        // $data->point48_type = $request->input('point48_type');

        $data->section_five_title = $request->input('section_five_title');

        $data->section_five_subtitle = $request->input('section_five_subtitle');

        $data->point51 = $request->input('point51');
        // $data->point51_type = $request->input('point51_type');

        $data->point52 = $request->input('point52');
        // $data->point52_type = $request->input('point52_type');

        $data->point53 = $request->input('point53');
        // $data->point53_type = $request->input('point53_type');
    
        $data->point54 = $request->input('point54');
        // $data->point54_type = $request->input('point54_type');
    
        $data->point55 = $request->input('point55');
        // $data->point55_type = $request->input('point55_type');

        $data->save();
        Session::flash('success', 'You data has been successfully updated');
        return redirect()->route('screen2.index');

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
