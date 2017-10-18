<?php

namespace App\Http\Controllers;

use App\Data;
use App\Exercise;
use App\FAQ;
use App\Lesson;
use App\Living;
use App\Nutrition;
use App\Project;
use App\Screen2;
use App\Screen;
use App\Treatment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        // return Lesson::all();
        $lessons = Lesson::all();
        return Response::json([
            'data' => $lessons->toArray()
            ], 200);
    }

    public function faq()
    {
        $faq = FAQ::find(1);

        if($faq)
        {
            return Response::json([
                'Maintitle' => $faq->maintitle,
                'objects' => array(
                   array(
                    'title' => $faq->section_one_title,
                    'points' => array(
                        array('type' => $faq->point11_type, 'content' => $faq->point11),
                        array('type' => $faq->point12_type, 'content' => $faq->point12),
                        ),     
                        ),
                   array(
                    'title' => $faq->section_two_title,
                    'points' => array(
                        array('type' => $faq->point21_type, 'content' => $faq->point21),
                        array('type' => $faq->point22_type, 'content' => $faq->point22),
                        array('type' => $faq->point23_type, 'content' => $faq->point23),
                        ),     
                        ),
                   array(
                    'title' => $faq->section_third_title,
                    'points' => array(
                        array('type' => $faq->point31_type, 'content' => $faq->point31),
                        ),     
                        ),
                   array(
                    'title' => $faq->section_four_title,
                    'points' => array(
                        array('type' => $faq->point41_type, 'content' => $faq->point41),
                        ),     
                        ),
                   array(
                    'title' => $faq->section_five_title,
                    'points' => array(
                        array('type' => $faq->point51_type, 'content' => $faq->point51),
                        ),     
                        ),
                   array(
                    'title' => $faq->section_six_title,
                    'points' => array(
                        array('type' => $faq->point61_type, 'content' => $faq->point61),
                        ),     
                        ),
                   array(
                    'title' => $faq->section_seven_title,
                    'points' => array(
                        array('type' => $faq->point71_type, 'content' => $faq->point71),
                        array('type' => $faq->point72_type, 'content' => $faq->point72),
                        array('type' => $faq->point73_type, 'content' => $faq->point73),
                        array('type' => $faq->point74_type, 'content' => $faq->point74),
                        array('type' => $faq->point75_type, 'content' => $faq->point75),
                        array('type' => $faq->point76_type, 'content' => $faq->point76),
                        ),     
                        ),
                   array(
                    'title' => $faq->section_eight_title,
                    'points' => array(
                        array('type' => $faq->point81_type, 'content' => $faq->point81),
                        ),     
                        ),
                   array(
                    'title' => $faq->section_nine_title,
                    'points' => array(
                        array('type' => $faq->point91_type, 'content' => $faq->point91),
                        array('type' => $faq->point92_type, 'content' => $faq->point92),
                        array('type' => $faq->point93_type, 'content' => $faq->point93),
                        ),     
                        ),
                    array(
                    'title' => $faq->section_ten_title,
                    'points' => array(
                        array('type' => $faq->point101_type, 'content' => $faq->point101),
                        array('type' => $faq->point102_type, 'content' => $faq->point102),
                        array('type' => $faq->point103_type, 'content' => $faq->point103),
                        array('type' => $faq->point104_type, 'content' => $faq->point104),
                        ),     
                        ),
                    array(
                    'title' => $faq->section_eleven_title,
                    'points' => array(
                        array('type' => $faq->point111_type, 'content' => $faq->point111),
                        ),     
                        ),
                    array(
                    'title' => $faq->section_twelve_title,
                    'points' => array(
                        array('type' => $faq->point121_type, 'content' => $faq->point121),
                        array('type' => $faq->point122_type, 'content' => $faq->point122),
                        array('type' => $faq->point123_type, 'content' => $faq->point123),
                        ),     
                        )
                ),
            ]);
        }
        else
        {
            return Response::json([
                'errors' => [
                'message' => 'Data does not exist'
                ]
                ]);
        }
    }

    public function nutrition()
    {
        $nutrition = Nutrition::find(1);
        if($nutrition)
        {
            return Response::json([
                'Maintitle' => $nutrition->maintitle,
                'objects' => array(
                     array(
                    'title' => $nutrition->section_one_title,
                    'points' => array(
                        array('type' => $nutrition->point11_type, 'content' => $nutrition->point11),
                        ),     
                        ),
                    array(
                    'title' => $nutrition->section_two_title,
                    'points' => array(
                        array('type' => $nutrition->point21_type, 'content' => $nutrition->point21),
                        array('type' => $nutrition->point22_type, 'content' => $nutrition->point22),
                        array('type' => $nutrition->point23_type, 'point1' => $nutrition->point23_point1, 'point2' => $nutrition->point23_point2 ),
                        array('type' => $nutrition->point24_type, 'content' => $nutrition->point24),
                        array('type' => $nutrition->point25_type, 'point1' => $nutrition->point25_point1, 'point2' => $nutrition->point25_point2 ),
                        array('type' => $nutrition->point26_type, 'point1' => $nutrition->point26_point1, 'point2' => $nutrition->point26_point2 ),
                        array('type' => $nutrition->point27_type, 'point1' => $nutrition->point27_point1, 'point2' => $nutrition->point27_point2 ),
                        array('type' => $nutrition->point28_type, 'point1' => ' ', 'point2' => $nutrition->point28_point2),
                        ),     
                        ),
                    array(
                    'title' => $nutrition->section_three_title,
                    'points' => array(
                        array('type' => $nutrition->point31_type, 'content' => $nutrition->point31),
                        array('type' => $nutrition->point32_point1_type, 'point1' => $nutrition->point32_point1, 'point2' => $nutrition->point32_point2),
                        array('type' => $nutrition->point33_point1_type, 'point1' => $nutrition->point33_point1, 'point2' => $nutrition->point33_point2, 'point3' => $nutrition->point33_point3, 'point4' => $nutrition->point33_point4,'point5' => $nutrition->point33_point5, 'point6' => $nutrition->point33_point6, 'point7' => $nutrition->point33_point7),
                        ),     
                        ),
                    array(
                    'title' => $nutrition->section_four_title,
                    'points' => array(
                        array('type' => "Simple", 'content' => $nutrition->section_four_subtitle),
                        array('type' => $nutrition->point41_type, 'point1' => $nutrition->point41_point1, 'point2' => $nutrition->point41_point2, 'point3' => $nutrition->point41_point3),
                        array('type' => $nutrition->point42_type, 'point1' => $nutrition->point42_point1, 'point2' => $nutrition->point42_point2, 'point3' => $nutrition->point42_point3),
                        array('type' => $nutrition->point43_type, 'point1' => $nutrition->point43_point1, 'point2' => $nutrition->point43_point2, 'point3' => $nutrition->point43_point3),
                        array('type' => $nutrition->point44_type, 'point1' => $nutrition->point44_point1, 'point2' => $nutrition->point44_point2, 'point3' => $nutrition->point44_point3),
                        array('type' => $nutrition->point45_type, 'point1' => $nutrition->point45_point1, 'point2' => $nutrition->point45_point2, 'point3' => $nutrition->point45_point3),
                        array('type' => $nutrition->point46_type, 'point1' => $nutrition->point46_point1, 'point2' => $nutrition->point46_point2, 'point3' => $nutrition->point46_point3),
                        array('type' => $nutrition->point47_type, 'content' => $nutrition->point47),
                        array('type' => $nutrition->point48_type, 'point1' => $nutrition->point48_point1, 'point2' => $nutrition->point48_point2, 'point3' => $nutrition->point48_point3),
                        array('type' => $nutrition->point49_type, 'point1' => $nutrition->point49_point1, 'point2' => $nutrition->point49_point2, 'point3' => $nutrition->point49_point3),
                        array('type' => $nutrition->point410_type, 'point1' => $nutrition->point410_point1, 'point2' => $nutrition->point410_point2, 'point3' => $nutrition->point410_point3),
                        array('type' => $nutrition->point411_type, 'point1' => $nutrition->point411_point1, 'point2' => $nutrition->point411_point2, 'point3' => $nutrition->point411_point3),
                        array('type' => $nutrition->point412_type, 'point1' => $nutrition->point412_point1, 'point2' => $nutrition->point412_point2, 'point3' => $nutrition->point412_point3),
                        array('type' => $nutrition->point413_type,'point1' => ' ','point2' => ' ', 'point3' => $nutrition->point413_point3),
                        ),     
                        ),
                ),
            ]);

        }
        else
        {
            return Response::json([
                'errors' => [
                'message' => 'Data does not exist'
                ]
                ]);
        }
    }

    public function treatment()
    {
        $treatment = Treatment::find(1);

        if($treatment)
        {
            return Response::json([
                'Maintitle' => $treatment->maintitle,
                'objects' => array(
                    array(
                    'title' => $treatment->section_one_title,
                    'points' => array(
                        array('type' => $treatment->point11_type, 'content' => $treatment->point11),
                        array('type' => $treatment->point12_type, 'content' => $treatment->point12),
                        array('type' => $treatment->point13_type, 'content' => $treatment->point13),
                        array('type' => $treatment->point14_type, 'content' => $treatment->point14),
                        array('type' => $treatment->point15_type, 'content' => $treatment->point15),
                        array('type' => $treatment->point16_type, 'content' => $treatment->point16),
                        array('type' => $treatment->point17_type, 'content' => $treatment->point17),
                        array('type' => $treatment->point18_type, 'content' => $treatment->point18),
                        array('type' => $treatment->point19_type, 'content' => $treatment->point19),
                        array('type' => $treatment->point10_type, 'content' => $treatment->point10),
                        ),     
                        ),
                    array(
                    'title' => $treatment->section_two_title,
                    'points' => array(
                        array('type' => $treatment->point21_type, 'content' => $treatment->point21),
                        array('type' => $treatment->point22_type, 'content' => $treatment->point22),
                        array('type' => $treatment->point23_type, 'content' => $treatment->point23),
                        array('type' => $treatment->point24_type, 'content' => $treatment->point24),
                        array('type' => $treatment->point25_type, 'content' => $treatment->point25),
                        array('type' => $treatment->point26_type, 'content' => $treatment->point26)
                        ),     
                        ),
                    array(
                    'title' => $treatment->section_three_title,
                    'points' => array(
                        array('type' => $treatment->point31_type, 'content' => $treatment->point31),
                        array('type' => $treatment->point32_type, 'content' => $treatment->point32),
                        array('type' => $treatment->point33_type, 'content' => $treatment->point33),
                        array('type' => $treatment->point34_type, 'content' => $treatment->point34),
                        array('type' => $treatment->point35_type, 'content' => $treatment->point35)
                        ),     
                        ),
                    ),
                ]);
        }
        else
        {
            return Response::json([
                'errors' => [
                'message' => 'Data does not exist'
                ]
                ]);
        }
    }

    public function exercise()
    {
        $exercise = Exercise::find(1);

        if($exercise)
        {
            return Response::json([
               'Maintitle' => $exercise->maintitle,
               'objects' => array(
                array(
                    array(
                'title' => $exercise->section_one_title,
                'points' => array(
                        array('type' => $exercise->point11_type, 'content' => $exercise->point11),
                        array('type' => $exercise->point12_type, 'content' => $exercise->point12),
                        array('type' => $exercise->point13_type, 'content' => $exercise->point13),
                        array('type' => $exercise->point14_type, 'content' => $exercise->point14),
                        array('type' => $exercise->point15_type, 'content' => $exercise->point15),
                        array('type' => $exercise->point16_type, 'content' => $exercise->point16),
                        ),
                    ),
                array(
                'title' => $exercise->section_two_title,
                'points' => array(
                        array('type' => $exercise->point21_type, 'content' => $exercise->point21),
                        array('type' => $exercise->point22_type, 'content' => $exercise->point22),
                        array('type' => $exercise->point23_type, 'content' => $exercise->point23),
                        array('type' => $exercise->point24_type, 'content' => $exercise->point24),
                        array('type' => $exercise->point25_type, 'content' => $exercise->point25),
                        array('type' => $exercise->point26_type, 'content' => $exercise->point26),
                        array('type' => $exercise->point27_type, 'content' => $exercise->point27),
                        array('type' => $exercise->point28_type, 'content' => $exercise->point28),
                        array('type' => $exercise->point29_type, 'content' => $exercise->point29),
                        ),
                    ),
                ),
                array(
                'points' => array(
                        array('type' => $exercise->point31_type, 'point1' => $exercise->point31_point1, 'point2' => $exercise->point31_point2),
                        array('type' => $exercise->point32_type, 'point1' => $exercise->point32_point1, 'point2' => $exercise->point32_point2, 'point3' => $exercise->point32_point3, 'point4' => $exercise->point32_point4),
                        array('type' => $exercise->point33_type, 'point1' => $exercise->point33_point1, 'point2' => $exercise->point33_point2, 'point3' => $exercise->point33_point3),
                        array('type' => $exercise->point34_type, 'point1' => $exercise->point34_point1, 'point2' => $exercise->point34_point2)
                        ),
                 ),
                // array(
                array(
                'title' => $exercise->section_four_title,
                'points' => array(
                        array('type' => $exercise->point41_type, 'point1' => $exercise->point41_point1, 'point2' => $exercise->point41_point2, 'point3' => $exercise->point41_point3),
                        ),
                    ),
                array(
                'title' => $exercise->section_five_title,
                'points' => array(
                        array('type' => $exercise->point51_type, 'point1' => $exercise->point51_point1, 'point2' => $exercise->point51_point2, 'point3' => $exercise->point51_point3,'point4' => $exercise->point51_point4, 'point5' => $exercise->point51_point5),
                        array('type' => $exercise->point52_type, 'point1' => $exercise->point52_point1, 'point2' => $exercise->point52_point2, 'point3' => $exercise->point52_point3,'point4' => $exercise->point52_point4, 'point5' => $exercise->point52_point5)
                        ),
                    ),
               
               // )
            )
            ]);
        }
        else
        {
            return Response::json([
                'errors' => [
                'message' => 'Data does not exist'
                ]
                ]);
        }
    }

    public function living()
    {
        $living = Living::find(1);

        if($living)
        {
            return Response::json([
                'Maintitle' => $living->maintitle,
                'objects' => array(
                array(
                'title' => $living->section_one_title,
                'points' => array(
                        array('type' => $living->point11_type, 'content' => $living->point11),
                        array('type' => $living->point12_type, 'content' => $living->point12),
                        array('type' => $living->point13_type, 'content' => $living->point13),
                        array('type' => $living->point14_type, 'content' => $living->point14),
                        ),
                    ),
                array(
                'title' => $living->section_two_title,
                'points' => array(
                        array('type' => $living->point21_type, 'content' => $living->point21),
                        array('type' => $living->point22_type, 'content' => $living->point22),
                        array('type' => $living->point23_type, 'content' => $living->point23),
                        array('type' => $living->point24_type, 'content' => $living->point24),
                        ),
                    ),
                array(
                'title' => $living->section_three_title,
                'points' => array(
                        array('type' => $living->point31_type, 'content' => $living->point31),
                        array('type' => $living->point32_type, 'content' => $living->point32),
                        array('type' => $living->point33_type, 'content' => $living->point33),
                        array('type' => $living->point34_type, 'content' => $living->point34),
                        ),
                    ),
                array(
                'title' => $living->section_four_title,
                'points' => array(
                        array('type' => $living->point41_type, 'content' => $living->point41),
                        array('type' => $living->point42_type, 'content' => $living->point42),
                        array('type' => $living->point43_type, 'content' => $living->point43),
                        ),
                    ),
                    
                array(
                'title' => $living->section_five_title,
                'points' => array(
                        array('type' => $living->point51_type, 'content' => $living->point51),
                        ),
                    ),
                array(
                'title' => $living->section_six_title,
                // 'subtitle' => $living->section_six_subtitle,
                'points' => array(
                        array('type' => "Simple", 'content' => $living->section_six_subtitle),
                        array('type' => $living->point61_type, 'content' => $living->point61),
                        array('type' => $living->point62_type, 'content' => $living->point62),
                        array('type' => $living->point63_type, 'content' => $living->point63),
                        array('type' => $living->point64_type, 'content' => $living->point64),
                        array('type' => $living->point65_type, 'content' => $living->point65),
                        array('type' => $living->point66_type, 'content' => $living->point66),
                        array('type' => $living->point67_type, 'content' => $living->point67),
                        array('type' => $living->point68_type, 'content' => $living->point68),
                        ),
                    )
                ),
            ]);
        }
        else
        {
            return Response::json([
                'errors' => [
                'message' => 'Data does not exist'
                ]
                ]);
        }
    }

    public function screen2()
    {
        // $screen2s = Screen2::find(1);
        // $data = Data::find(1);

        $screens = Screen::find(1);

        if($screens)
        { 
             return Response::json([
            'Maintitle' => $screens->maintitle,
            'objects' => array(
                array(
                array(
                'title' => $screens->section_one_title,
                'points' => array(
                        array('type' => $screens->point11_type, 'content' => $screens->point11),
                        array('type' => $screens->point12_type, 'content' => $screens->point12),
                        array('type' => $screens->point13_type, 'content' => $screens->point13),
                        array('type' => $screens->point14_type, 'content' => $screens->point14),
                        array('type' => $screens->point15_type, 'content' => $screens->point15),
                        array('type' => $screens->point16_type, 'content' => $screens->point16),
                        ),
                    ) ,
                array(
                 'title' => $screens->section_two_title,
                 'points' => array(
                        array('type' => $screens->point21_type, 'content' => $screens->point21),
                    )
                    ),
                    ),
                array(
                array(
               'title' => $screens->section_three_title,
                'points' => array(
                array( 'type' => $screens->point31_type,  'point1' => $screens->point31_point1, 'point2' => $screens->point31_point2),
                array('type' => $screens->point32_type, 'point1' => $screens->point32_point1, 'point2' => $screens->point32_point2),
                array('type' => $screens->point33_type, 'point1' => $screens->point33_point1, 'point2' => $screens->point33_point2),
                array('type' => $screens->point34_type, 'point1' => $screens->point34_point1, 'point2' => $screens->point34_point2),
                array('type' => $screens->point35_type, 'point1' => $screens->point35_point1, 'point2' => $screens->point35_point2),    
                array('type' => $screens->point36_type, 'point1' => $screens->point36_point1, 'point2' => $screens->point36_point2),
                ),
                ),
                ),
                array(
                    array(
                'title' => $screens->section_four_title ,
                'sub-title' => $screens->section_four_subtitle,
                'table' => array(
                array('type' => $screens->point41_type, 'point1' => $screens->point41_point1, 'point2' => $screens->point41_point2, 'point3' => $screens->point41_point3, 'point4' => $screens->point41_point4, 'point5' => $screens->point41_point5),
                array('type' => $screens->point42_type, 'point1' => $screens->point42_point1, 'point2' => $screens->point42_point2, 'point3' => $screens->point42_point3, 'point4' => $screens->point42_point4, 'point5' => $screens->point42_point5),
                array('type' => $screens->point43_type, 'point1' => $screens->point43_point1, 'point2' => $screens->point43_point2, 'point3' => $screens->point43_point3, 'point4' => $screens->point44_point4, 'point5' => $screens->point45_point5),
                array('type' => $screens->point44_type, 'point1' => $screens->point44_point1, 'point2' => $screens->point44_point2, 'point3' => $screens->point44_point3, 'point4' => $screens->point44_point4, 'point5' => $screens->point44_point5),
                array('type' => $screens->point45_type, 'point1' => $screens->point45_point1, 'point2' => $screens->point45_point2, 'point3' => $screens->point45_point3, 'point4' => $screens->point45_point4, 'point5' => $screens->point45_point5),
                array('type' => $screens->point46_type, 'point1' => $screens->point46_point1, 'point2' => $screens->point46_point2, 'point3' => $screens->point46_point3, 'point4' => $screens->point46_point4, 'point5' => $screens->point46_point5),
                array('type' => $screens->point47_type, 'point1' => $screens->point47_point1, 'point2' => $screens->point47_point2, 'point3' => $screens->point47_point3, 'point4' => $screens->point47_point4, 'point5' => $screens->point47_point5),    
                    ),
                'points' => array(
                 array('type' => $screens->point48_type, 'content' => $screens->point48)   
                    ),   
                    ), 
                ),
                array(
                    array(
                'title' => $screens->section_five_title,
                'sub-title' => $screens->section_five_subtitle,
                'points' => array(
                    array('type' => $screens->point51_type, 'content' => $screens->point51),
                    array('type' => $screens->point52_type, 'content' => $screens->point52),
                    array('type' => $screens->point53_type, 'content' => $screens->point53),
                    array('type' => $screens->point54_type, 'content' => $screens->point54),
                    array('type' => $screens->point55_type, 'content' => $screens->point55),
                    ),    
                    ),

                    ),
                ),
            ], 200);

}
else
{
    return Response::json([
         'error' => [
                'message' => 'Data does not exist'
                ]
        ], 404);
}




    }

    public function screen1(Request $request)
    {
        // $projects = Project::find(1);


        $data = Data::find(1);

        if ($data) {

        
        return Response::json([
            'MainTitle' => $data->maintitle,
            'sections' => array(
             array(
               'title' => $data->section_one_title,
                'points' => array(
                array('type' => $data->point11_type, 'content' => $data->point11),
                array('type' => $data->point12_type, 'content' => $data->point12)
                ),
            ),
             array(
               'title' => $data->section_two_title,
                'points' => array(
                array('type' => $data->point21_type, 'content' => $data->point21),
                array('type' => $data->point22_type, 'content' => $data->point22),
                array('type' => $data->point23_type, 'content' => $data->f1),
                array('type' => $data->point24_type, 'content' => $data->f2),
                array('type' => $data->point25_type, 'content' => $data->point25),
                array('type' => $data->point26_type, 'content' => $data->point26)
                ),
            ),
                ),
            ]);
    }
    else{
      return Response::json([
                'error' => [
                'message' => 'Data does not exist!'
                ]
                ], 404);
    }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lesson = Lesson::find($id);

        if (! $lesson) {
            return Response::json([
                'error' => [
                'message' => 'Lesson does not exist'
                ]
                ], 404);
        }

        else
        {
            // $p1 = Project::all();
            // dd($p1);
            // $points = DB::table('data')->where('') // points array


            // return Response::json([
            //     'Maintitle' => 'Maintitle',
            //     'array1' => [ 
            //     'title1' => 'Section1_title',
            //     'points' => [
            //     'point_content' => 'P_content',
            //     'type' => 'bullet'
            //     ]
                // ]    // to array
                // ], 200);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
