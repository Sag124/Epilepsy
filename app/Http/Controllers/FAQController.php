<?php

namespace App\Http\Controllers;

use App\FAQ;
use Session;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {     
        $faq = FAQ::find(1);
        $count = FAQ::all()->count();
        return view('data6.index')->withCount($count)->withFaq($faq);   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data6.create');
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

            'section_two_title' => 'required', 
            
            'point21' => 'required', 
            'point21_type' => 'required',  

            'point22' => 'required', 
            'point22_type' => 'required',

            'point23' => 'required', 
            'point23_type' => 'required',

            'section_three_title' => 'required', 
        
            'point31' => 'required', 
            'point31_type' => 'required',  
    

            'section_four_title' => 'required', 
        
            'point41' => 'required', 
            'point41_type' => 'required',  
    
            'section_five_title' => 'required', 
        
            'point51' => 'required', 
            'point51_type' => 'required',  
    
            'section_six_title' => 'required', 
        
            'point61' => 'required', 
            'point61_type' => 'required',  

            'section_seven_title' => 'required', 
        
            'point71' => 'required', 
            'point71_type' => 'required', 
    
            'point72' => 'required', 
            'point72_type' => 'required', 
            'point73' => 'required', 
            'point73_type' => 'required', 
            'point74' => 'required', 
            'point74_type' => 'required', 
            'point75' => 'required', 
            'point75_type' => 'required', 
            'point76' => 'required', 
            'point76_type' => 'required',

            'section_eight_title' => 'required', 
        
            'point81' => 'required', 
            'point81_type' => 'required', 

            'section_nine_title' => 'required', 
        
            'point91' => 'required', 
            'point91_type' => 'required', 
    
            'point92' => 'required', 
            'point92_type' => 'required', 
            'point93' => 'required', 
            'point93_type' => 'required', 

            'section_ten_title' => 'required', 
        
            'point101' => 'required', 
            'point101_type' => 'required', 
    
            'point102' => 'required', 
            'point102_type' => 'required', 
            'point103' => 'required', 
            'point103_type' => 'required',
            'point104' => 'required', 
            'point104_type' => 'required',  

             'section_eleven_title' => 'required', 
        
            'point111' => 'required', 
            'point111_type' => 'required',

            'section_twelve_title' => 'required', 
        
            'point121' => 'required', 
            'point121_type' => 'required', 
    
            'point122' => 'required', 
            'point122_type' => 'required', 
            'point123' => 'required', 
            'point123_type' => 'required', 

              ));

        $data = new FAQ;

        $data->maintitle = $request->maintitle;
        $data->section_one_title = $request->section_one_title;
      
        $data->point11 = $request->point11;
        $data->point11_type = $request->point11_type;

        $data->point12 = $request->point12;
        $data->point12_type = $request->point12_type;

        $data->section_two_title = $request->section_two_title;

        $data->point21 = $request->point21;
        $data->point21_type = $request->point21_type;

        $data->point22 = $request->point22;
        $data->point22_type = $request->point22_type;

         $data->point23 = $request->point23;
        $data->point23_type = $request->point23_type;

        $data->section_three_title = $request->section_three_title;

        $data->point31 = $request->point31;
        $data->point31_type = $request->point31_type;

        $data->section_four_title = $request->section_four_title;

        $data->point41 = $request->point41;
        $data->point41_type = $request->point41_type;

        $data->section_five_title = $request->section_five_title;

        $data->point51 = $request->point51;
        $data->point51_type = $request->point51_type;

        $data->section_six_title = $request->section_six_title;

        $data->point61 = $request->point61;
        $data->point61_type = $request->point61_type;

         $data->section_seven_title = $request->section_seven_title;

        $data->point71 = $request->point71;
        $data->point71_type = $request->point71_type;

        $data->point72 = $request->point72;
        $data->point72_type = $request->point72_type;

         $data->point73 = $request->point73;
        $data->point73_type = $request->point73_type;

        $data->point74 = $request->point74;
        $data->point74_type = $request->point74_type;

        $data->point75 = $request->point75;
        $data->point75_type = $request->point75_type;

         $data->point76 = $request->point76;
        $data->point76_type = $request->point76_type;

         $data->section_eight_title = $request->section_eight_title;

        $data->point81 = $request->point81;
        $data->point81_type = $request->point81_type;


        $data->section_nine_title = $request->section_nine_title;

        $data->point91 = $request->point91;
        $data->point91_type = $request->point91_type;

        $data->point92 = $request->point92;
        $data->point92_type = $request->point92_type;

         $data->point93 = $request->point93;
        $data->point93_type = $request->point93_type;

        $data->section_ten_title = $request->section_ten_title;

        $data->point101 = $request->point101;
        $data->point101_type = $request->point101_type;

        $data->point102 = $request->point102;
        $data->point102_type = $request->point102_type;

         $data->point103 = $request->point103;
        $data->point103_type = $request->point103_type;

        $data->point104 = $request->point104;
        $data->point104_type = $request->point104_type;


        $data->section_eleven_title = $request->section_eleven_title;

        $data->point111 = $request->point111;
        $data->point111_type = $request->point111_type;

          $data->section_twelve_title = $request->section_twelve_title;

        $data->point121 = $request->point121;
        $data->point121_type = $request->point121_type;

        $data->point122 = $request->point122;
        $data->point122_type = $request->point122_type;

         $data->point123 = $request->point123;
        $data->point123_type = $request->point123_type;



        $data->save();
        Session::flash('success', 'You gave successfully inserted the data');
        return redirect()->route('screen7.index');

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
        $faq = FAQ::find($id);
        return view('data6.edit')->withFaq($faq);
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
        $data = FAQ::find($id);

        $data->maintitle = $request->input('maintitle');
        $data->section_one_title = $request->input('section_one_title');
        $data->point11 = $request->input('point11');
        $data->point12 = $request->input('point12');
       
        $data->section_two_title = $request->input('section_two_title');
        $data->point21 = $request->input('point21');
        $data->point22 = $request->input('point22');
        $data->point23 = $request->input('point23');

        $data->section_three_title = $request->input('section_three_title');
        $data->point31 = $request->input('point31');

        $data->section_four_title = $request->input('section_four_title');
        $data->point41 = $request->input('point41');

        $data->section_five_title = $request->input('section_five_title');
        $data->point51 = $request->input('point51');

        $data->section_six_title = $request->input('section_six_title');
        $data->point61 = $request->input('point61');

        $data->section_seven_title = $request->input('section_seven_title');
        $data->point71 = $request->input('point71');
        $data->point72 = $request->input('point72');
        $data->point73 = $request->input('point73');
        $data->point74 = $request->input('point74');
        $data->point75 = $request->input('point75');
        $data->point76 = $request->input('point76');

        $data->section_eight_title = $request->input('section_eight_title');
        $data->point81 = $request->input('point81');

        $data->section_nine_title = $request->input('section_nine_title');
        $data->point91 = $request->input('point91');
        $data->point92 = $request->input('point92');
        $data->point93 = $request->input('point93');

        $data->section_ten_title = $request->input('section_ten_title');
        $data->point101 = $request->input('point101');
        $data->point102 = $request->input('point102');
        $data->point103 = $request->input('point103');
        $data->point104 = $request->input('point104');

        $data->section_eleven_title = $request->input('section_eleven_title');
        $data->point111 = $request->input('point111');

        $data->section_twelve_title = $request->input('section_twelve_title');
        $data->point121 = $request->input('point121');
        $data->point122 = $request->input('point122');
        $data->point123 = $request->input('point123');

        $data->save();
        Session::flash('success', 'You data has been successfully updated');
        return redirect()->route('screen7.index');
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
