<?php namespace OFFLINE\Mall\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateOfflineMallMediaSets extends Migration
{
    public function up()
    {
        Schema::create('offline_mall_media_sets', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->string('name')->nullable();
            $table->text('media')->nullable();           
            $table->boolean('is_main_set')->default(false);
            $table->timestamps();            
        });
    }

    public function down()
    {
        Schema::dropIfExists('offline_mall_media_sets');
    }
}
