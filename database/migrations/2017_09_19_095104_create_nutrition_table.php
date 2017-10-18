<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNutritionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nutritions', function (Blueprint $table) {
            $table->increments('id');
            $table->text('maintitle');
            $table->text('section_one_title');
            $table->text('point11');
            $table->text('point11_type');

            $table->text('section_two_title');

            $table->text('point21');
            $table->text('point21_type');

            $table->text('point22');
            $table->text('point22_type');

            $table->text('point23_point1');
            $table->text('point23_point2');
            $table->text('point23_type');


            $table->text('point24');
            $table->text('point24_type');

            $table->text('point25_point1');
            $table->text('point25_point2');
            $table->text('point25_type');

            $table->text('point26_point1');
            $table->text('point26_point2');
            $table->text('point26_type');

            $table->text('point27_point1');
            $table->text('point27_point2');
            $table->text('point27_type');

            $table->text('point28_point2');
            $table->text('point28_type');


            $table->text('section_three_title');
            
            $table->text('point31');
            $table->text('point31_type');

            $table->text('point32_title');

            $table->text('point32_point1');
            $table->text('point32_point1_type');

            $table->text('point32_point2');
            $table->text('point32_point2_type');

            $table->text('point33_title');

            $table->text('point33_point1');
            $table->text('point33_point1_type');

            $table->text('point33_point2');
            $table->text('point33_point2_type');

            $table->text('point33_point3');
            $table->text('point33_point3_type');

            $table->text('point33_point4');
            $table->text('point33_point4_type');

            $table->text('point33_point5');
            $table->text('point33_point5_type');

            $table->text('point33_point6');
            $table->text('point33_point6_type');

            $table->text('point33_point7');
            $table->text('point33_point7_type');

            $table->text('section_four_title');
            $table->text('section_four_subtitle');

            $table->text('point41_point1');
            $table->text('point41_point2');
            $table->text('point41_point3');
            $table->text('point41_type');

            $table->text('point42_point1');
            $table->text('point42_point2');
            $table->text('point42_point3');
            $table->text('point42_type');

            $table->text('point43_point1');
            $table->text('point43_point2');
            $table->text('point43_point3');
            $table->text('point43_type');

            $table->text('point44_point1');
            $table->text('point44_point2');
            $table->text('point44_point3');
            $table->text('point44_type');

            $table->text('point45_point1');
            $table->text('point45_point2');
            $table->text('point45_point3');
            $table->text('point45_type');

            $table->text('point46_point1');
            $table->text('point46_point2');
            $table->text('point46_point3');
            $table->text('point46_type');

            $table->text('point47');
            $table->text('point47_type');


            $table->text('point48_point1');
            $table->text('point48_point2');
            $table->text('point48_point3');
            $table->text('point48_type');


            $table->text('point49_point1');
            $table->text('point49_point2');
            $table->text('point49_point3');
            $table->text('point49_type');


            $table->text('point410_point1');
            $table->text('point410_point2');
            $table->text('point410_point3');
            $table->text('point410_type');


            $table->text('point411_point1');
            $table->text('point411_point2');
            $table->text('point411_point3');
            $table->text('point411_type');


            $table->text('point412_point1');
            $table->text('point412_point2');
            $table->text('point412_point3');
            $table->text('point412_type');


            // $table->text('point413_point1');
            // $table->text('point413_point2');
            $table->text('point413_point3');
            $table->text('point413_type');

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
        Schema::dropIfExists('nutritions');
    }
}
