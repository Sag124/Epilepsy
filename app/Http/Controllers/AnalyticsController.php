<?php

namespace App\Http\Controllers;

use App\App;
use App\Page;
use DB;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\response;

class AnalyticsController extends Controller
{
    public function count(Request $request)
    {
        $mobile = $request->get('mobile');
        $screen_name = $request->get('screen_name');
        $check = Page::where('mobile', $mobile)->where('screen_name', $screen_name)->count();
		if($check > 0)
    {
        DB::table('pages')->where('mobile', $mobile)->where('screen_name', $screen_name)->increment('count');
        $check = Page::where('mobile', $mobile)->where('screen_name', $screen_name)->pluck('count');
    	  return response()->json(['message' => 'Count has been updated', 'count' => $check]);
		} 
		else 
		{
			  $page = Page::create([
	          'mobile' => $request->get('mobile'),
	          'app_name' => $request->get('app_name'),
	          'screen_name' => $request->get('screen_name'),
	          'hospital' => $request->get('hospital'),
	          'location' => $request->get('location'),
               ]);
        	  return response()->json(['status'=>true,'message'=>'Record created successfully','data'=>$page]);
    }

    }

    public function analytics()
    {	
    	$pages = Page::all();
    	return view('analytics')->withPages($pages);
    }



    public function data()
    {
        $patients = App::all();
        return view('patients')->withPatients($patients);
    }

    public function register(Request $request){
        $mobile = $request->get('Mobile');
        $hospital = $request->get('Hospital');

        $check = App::where('Mobile', $mobile)->where('Hospital', $hospital)->count();
        if($check > 0)
        {
          return response()->json(['status'=>false,'message'=>'User already exists with that mobile number']);   
        }
        else{
        $app = App::create([
          'Ailment' => $request->get('Ailment'),
          'Hospital' => $request->get('Hospital'),
          'Location' => $request->get('Location'),
          'Language' => $request->get('Language'),
          'Age' => $request->get('Age'),
          'Gender' => $request->get('Gender'),
          'Relation' => $request->get('Relation'),
          'Relation_Gender' => $request->get('Relation_Gender'),
          'Mobile' => $request->get('Mobile')
          // 'password' => bcrypt($request->get('password'))
        ]);
        }
        return response()->json(['status'=>true,'message'=>'User created successfully','data'=>$app]);
    }


}
