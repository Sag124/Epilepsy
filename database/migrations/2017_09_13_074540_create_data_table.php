<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->increments('id');
            // $table->increments('id');
            $table->string('maintitle');
            $table->string('section_one_title');
            $table->text('point11');
            $table->text('point12');
            $table->string('section_two_title');
            $table->text('point21');
            $table->text('point22');
            $table->string('type');
            $table->text('f1');
            $table->text('f2');
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
        Schema::dropIfExists('data');
    }
}
