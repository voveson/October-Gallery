<?php namespace AspenDigital\ImageGallery\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateImagesTable extends Migration
{

    public function up()
    {
        Schema::create('aspendigital_imagegallery_images', function($table)
        {
            $table->engine = 'InnoDB';

            // Columns
            $table->increments('id');
            $table->integer('gallery_id')->unsigned()->nullable();
            $table->integer('display_order');
            $table->string('title')->nullable();
            $table->text('content')->nullable();
            $table->text('content_html')->nullable();
            $table->timestamps();

            // Indices & Keys
            $table->foreign('gallery_id')
                  ->references('id')
                  ->on('aspendigital_imagegallery_galleries')
                  ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('aspendigital_imagegallery_images');
    }

}
