<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExercisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercises', function (Blueprint $table) {
            $table->increments('id');
            $table->text('maintitle');
            $table->text('section_one_title');
            $table->text('point11');
            $table->text('point11_type');
            
            $table->text('point12');
            $table->text('point12_type');
            
            $table->text('point13');
            $table->text('point13_type');
            
            $table->text('point14');
            $table->text('point14_type');
            
            
            $table->text('point15');
            $table->text('point15_type');


            $table->text('point16');
            $table->text('point16_type');

            $table->text('section_two_title');

            $table->text('point21');
            $table->text('point21_type');

            $table->text('point22');
            $table->text('point22_type');
            $table->text('point23');
            $table->text('point23_type');
            $table->text('point24');
            $table->text('point24_type');
            $table->text('point25');
            $table->text('point25_type');
            $table->text('point26');
            $table->text('point26_type');
            $table->text('point27');
            $table->text('point27_type');
            $table->text('point28');
            $table->text('point28_type');
            $table->text('point29');
            $table->text('point29_type');

            $table->text('point31_point1');
            $table->text('point31_point2');
            $table->text('point31_type');

            $table->text('point32_point1');
            $table->text('point32_point2');
            $table->text('point32_point3');
            $table->text('point32_point4');
            $table->text('point32_type');


            $table->text('point33_point1');
            $table->text('point33_point2');
            $table->text('point33_point3');
            $table->text('point33_type');

            $table->text('point34_point1');
            $table->text('point34_point2');
            $table->text('point34_type');

            $table->text('section_four_title');

            $table->text('point41_point1');
            $table->text('point41_point2');
            $table->text('point41_point3');
            $table->text('point41_type');



            $table->text('section_five_title');

            $table->text('point51_point1');
            $table->text('point51_point2');
            $table->text('point51_point3');
            $table->text('point51_point4');
            $table->text('point51_point5');
            $table->text('point51_type');

            $table->text('point52_point1');
            $table->text('point52_point2');
            $table->text('point52_point3');
            $table->text('point52_point4');
            $table->text('point52_point5');
            $table->text('point52_type');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exercises');
    }
}
