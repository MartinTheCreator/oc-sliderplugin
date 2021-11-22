<?php namespace Mmatovski\Slider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKara5SliderSlide extends Migration
{
    public function up()
    {
        Schema::table('mmatovski_slider_slide', function($table)
        {
            $table->string('image')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('mmatovski_slider_slide', function($table)
        {
            $table->dropColumn('image');
        });
    }
}
