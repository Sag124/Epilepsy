<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTreatmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treatments', function (Blueprint $table) {
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
            $table->text('point17');
            $table->text('point17_type');
            $table->text('point18');
            $table->text('point18_type');
            $table->text('point19');
            $table->text('point19_type');
            $table->text('point110');
            $table->text('point110_type');

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

            $table->text('section_three_title');

            $table->text('point31');
            $table->text('point31_type');

            $table->text('point32');
            $table->text('point32_type');

            $table->text('point33');
            $table->text('point33_type');

            $table->text('point34');
            $table->text('point34_type');

            $table->text('point35');
            $table->text('point35_type');

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
        Schema::dropIfExists('treatments');
    }
}
