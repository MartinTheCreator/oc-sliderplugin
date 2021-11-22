<?php namespace Mmatovski\Slider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKara5SliderSlide2 extends Migration
{
    public function up()
    {
        Schema::table('mmatovski_slider_slide', function($table)
        {
            $table->string('name')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('mmatovski_slider_slide', function($table)
        {
            $table->dropColumn('name');
        });
    }
}
