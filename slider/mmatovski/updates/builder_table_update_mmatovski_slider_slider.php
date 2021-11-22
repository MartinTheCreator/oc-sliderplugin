<?php namespace Mmatovski\Slider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKara5SliderSlider extends Migration
{
    public function up()
    {
        Schema::table('mmatovski_slider_slider', function($table)
        {
            $table->integer('sort_order')->nullable()->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('mmatovski_slider_slider', function($table)
        {
            $table->dropColumn('sort_order');
        });
    }
}
