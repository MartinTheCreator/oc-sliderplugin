<?php namespace Mmatovski\Slider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKara5SliderSlide3 extends Migration
{
    public function up()
    {
        Schema::table('mmatovski_slider_slide', function($table)
        {
            $table->integer('position')->unsigned()->default(1);
        });
    }
    
    public function down()
    {
        Schema::table('mmatovski_slider_slide', function($table)
        {
            $table->dropColumn('position');
        });
    }
}
