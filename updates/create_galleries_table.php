<?php namespace AspenDigital\ImageGallery\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateGalleriesTable extends Migration
{

    public function up()
    {
        Schema::create('aspendigital_imagegallery_galleries', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('slug')->index();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('aspendigital_imagegallery_galleries');
    }

}
