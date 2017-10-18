<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddExtraToDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data', function (Blueprint $table) {
            $table->string('point11_type');
            $table->string('point12_type');
            $table->string('point21_type');
            $table->string('point22_type');
            $table->string('point23_type');
            $table->string('point24_type');
            $table->text('point25');
            $table->string('point25_type');
            $table->text('point26');
            $table->string('point26_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data', function (Blueprint $table) {
            //
        });
    }
}
