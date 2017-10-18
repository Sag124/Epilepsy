<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;
use Session;


class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {           
        $screen = Data::find(1);
        $count = Data::all()->count();
        return view('data.index')->withCount($count)->withScreen($screen);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, array(
            'maintitle' => 'required',
            'section_one_title' => 'required',
            'point11' => 'required',
            'point12' => 'required',
            'section_two_title' => 'required',
            'point21' => 'required',
            'point22' => 'required',
            // 'type' => 'required',
            'f1' => 'required',
            'f2' => 'required',
            'point25' => 'required',
            'point26' => 'required',
            'point11_type' => 'required',
            'point12_type' => 'required',
            'point21_type' => 'required',
            'point22_type' => 'required',
            'point23_type' => 'required',
            'point24_type' => 'required',
            'point25_type' => 'required',
            'point26_type' => 'required'
            ));

        $data = new Data;
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
       
        // $data->type = $request->type;
        
        $data->f1 = $request->f1;
        $data->point23_type = $request->point23_type;
        

        $data->f2 = $request->f2;
        $data->point24_type = $request->point24_type;

        $data->point25 = $request->point25;
        $data->point25_type = $request->point25_type;
       
        $data->point26 = $request->point26;
        $data->point26_type = $request->point26_type;


        $data->save();
        Session::flash('success', 'Your data has been successfully inserted');
        return redirect()->route('screen1.index');
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
        $screen = Data::find($id);
        return view('data.edit')->withScreen($screen);        
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
         $data = Data::find($id);

        $data->maintitle = $request->input('maintitle');
        $data->section_one_title = $request->input('section_one_title');
        $data->point11 = $request->input('point11');
        // $data->point11_type = $request->input('point11_type');

        $data->point12 = $request->input('point12');
        // $data->point12_type = $request->input('point12_type');


        $data->section_two_title = $request->input('section_two_title');

         $data->point21 = $request->input('point21');
        // $data->point21_type = $request->input('point21_type');

        $data->point22 = $request->input('point22');
        // $data->point22_type = $request->input('point22_type');

        $data->f1 = $request->input('f1');
        // $data->point23_type = $request->input('point23_type');

        $data->f2 = $request->input('f2');
        // $data->point24_type = $request->input('point24_type');

        $data->point25 = $request->input('point25');
        // $data->point25_type = $request->input('point25_type');

        $data->point26 = $request->input('point26');
        // $data->point26_type = $request->input('point26_type');

        $data->save();
        Session::flash('success', 'You data has been successfully updated');
        return redirect()->route('screen1.index');

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
