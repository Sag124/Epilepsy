
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFAQsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('f_a_qs', function (Blueprint $table) {
            $table->increments('id');
            $table->text('maintitle');
            $table->text('section_one_title');
            $table->text('point11');
            $table->text('point11_type');
            
            $table->text('point12');
            $table->text('point12_type');

            $table->text('section_two_title');
            $table->text('point21');
            $table->text('point21_type');
            
            $table->text('point22');
            $table->text('point22_type');

            $table->text('point23');
            $table->text('point23_type');


            $table->text('section_three_title');
            $table->text('point31');
            $table->text('point31_type');

            $table->text('section_four_title');
            $table->text('point41');
            $table->text('point41_type');

            $table->text('section_five_title');
            $table->text('point51');
            $table->text('point51_type');

            $table->text('section_six_title');
            $table->text('point61');
            $table->text('point61_type');

            $table->text('section_seven_title');
            $table->text('point71');
            $table->text('point71_type');
            $table->text('point72');
            $table->text('point72_type');
            $table->text('point73');
            $table->text('point73_type');
            $table->text('point74');
            $table->text('point74_type');
            $table->text('point75');
            $table->text('point75_type');
            $table->text('point76');
            $table->text('point76_type');

            $table->text('section_eight_title');
            $table->text('point81');
            $table->text('point81_type');
            
            $table->text('section_nine_title');
            $table->text('point91');
            $table->text('point91_type');
            $table->text('point92');
            $table->text('point92_type');
            $table->text('point93');
            $table->text('point93_type');

            $table->text('section_ten_title');
            $table->text('point101');
            $table->text('point101_type');
            $table->text('point102');
            $table->text('point102_type');
            $table->text('point103');
            $table->text('point103_type');
            $table->text('point104');
            $table->text('point104_type');


            $table->text('section_eleven_title');
            $table->text('point111');
            $table->text('point111_type');


            $table->text('section_twelve_title');
            $table->text('point121');
            $table->text('point121_type');
            $table->text('point122');
            $table->text('point122_type');
            $table->text('point123');
            $table->text('point123_type');



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
        Schema::dropIfExists('f_a_qs');
    }
}
