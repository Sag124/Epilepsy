<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLivingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livings', function (Blueprint $table) {
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
            

            $table->text('section_two_title');

            $table->text('point21');
            $table->text('point21_type');

            $table->text('point22');
            $table->text('point22_type');
            $table->text('point23');
            $table->text('point23_type');
            $table->text('point24');
            $table->text('point24_type');

            $table->text('section_three_title');

            $table->text('point31');
            $table->text('point31_type');

            $table->text('point32');
            $table->text('point32_type');
            $table->text('point33');
            $table->text('point33_type');
            $table->text('point34');
            $table->text('point34_type');

            $table->text('section_four_title');

            $table->text('point41');
            $table->text('point41_type');

            $table->text('point42');
            $table->text('point42_type');
            $table->text('point43');
            $table->text('point43_type');

            $table->text('section_five_title');

            $table->text('point51');
            $table->text('point51_type');

             $table->text('section_six_title');
             $table->text('section_six_subtitle');


            $table->text('point61');
            $table->text('point61_type');
            $table->text('point62');
            $table->text('point62_type');
            $table->text('point63');
            $table->text('point63_type');
            $table->text('point64');
            $table->text('point64_type');
            $table->text('point65');
            $table->text('point65_type');
            $table->text('point66');
            $table->text('point66_type');
            $table->text('point67');
            $table->text('point67_type');
            $table->text('point68');
            $table->text('point68_type');

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
        Schema::dropIfExists('livings');
    }
}
