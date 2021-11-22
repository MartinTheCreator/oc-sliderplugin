<?php namespace Mmatovski\Slider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKara5SliderSlide4 extends Migration
{
    public function up()
    {
        Schema::table('mmatovski_slider_slide', function($table)
        {
            $table->string('image_mobile')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('mmatovski_slider_slide', function($table)
        {
            $table->dropColumn('image_mobile');
        });
    }
}
