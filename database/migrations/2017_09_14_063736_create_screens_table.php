<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScreensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('screens', function (Blueprint $table) {
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
            
            $table->text('section_three_title');


            $table->text('point31_point1');
            $table->text('point31_point2');
            $table->text('point31_type');

            $table->text('point32_point1');
            $table->text('point32_point2');
            $table->text('point32_type');

            $table->text('point33_point1');
            $table->text('point33_point2');
            $table->text('point33_type');

            $table->text('point34_point1');
            $table->text('point34_point2');
            $table->text('point34_type');

            $table->text('point35_point1');
            $table->text('point35_point2');
            $table->text('point35_type');


            $table->text('point36_point1');
            $table->text('point36_point2');
            $table->text('point36_type');


            $table->text('section_four_title');
            $table->text('section_four_subtitle');

            $table->text('point41_point1')->nullable();
            $table->text('point41_point2');
            $table->text('point41_point3');
            $table->text('point41_point4');
            $table->text('point41_point5');
            $table->text('point41_type');

            $table->text('point42_point1');
            $table->text('point42_point2');
            $table->text('point42_point3');
            $table->text('point42_point4');
            $table->text('point42_point5')->nullable();
            $table->text('point42_type');

            $table->text('point43_point1');
            $table->text('point43_point2');
            $table->text('point43_point3');
            $table->text('point43_point4');
            $table->text('point43_point5');
            $table->text('point43_type');

            $table->text('point44_point1');
            $table->text('point44_point2');
            $table->text('point44_point3');
            $table->text('point44_point4');
            $table->text('point44_point5')->nullable();
            $table->text('point44_type');

            $table->text('point45_point1');
            $table->text('point45_point2');
            $table->text('point45_point3');
            $table->text('point45_point4');
            $table->text('point45_point5')->nullable();
            $table->text('point45_type');

            $table->text('point46_point1');
            $table->text('point46_point2');
            $table->text('point46_point3');
            $table->text('point46_point4');
            $table->text('point46_point5')->nullable();
            $table->text('point46_type');


            $table->text('point47_point1');
            $table->text('point47_point2');
            $table->text('point47_point3');
            $table->text('point47_point4');
            $table->text('point47_point5');
            $table->text('point47_type');

            $table->text('point48');
            $table->text('point48_type');

            $table->text('section_five_title');
            $table->text('section_five_subtitle');

            $table->text('point51');
            $table->text('point51_type');

            $table->text('point52');
            $table->text('point52_type');
            
            $table->text('point53');
            $table->text('point53_type');
            
            $table->text('point54');
            $table->text('point54_type');

            $table->text('point55');
            $table->text('point55_type');






            
            
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
        Schema::dropIfExists('screens');
    }
}
