<?php namespace Mmatovski\Slider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateKara5SliderToSlide extends Migration
{
    public function up()
    {
        Schema::create('mmatovski_slider_to_slide', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('slider_id')->unsigned();
            $table->integer('slide_id')->unsigned();
            $table->primary(['slider_id','slide_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mmatovski_slider_to_slide');
    }
}
