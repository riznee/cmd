<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration
{
    public function up()
    {
        Schema::create('files', function(Blueprint $table){
            $table->increments('id');
            $table->string('url')->index();
            $table->integer('page_id')->nullable()->unsigned();
            $table->string('filename');
            $table->boolean('visible')->default(false);
            $table->timestamps();
            $table->foreign('page_id')->references('id')->on('pages')->onDelete('cascade');
            $table->softDeletes();
        });
    }


    public function down()
    {
        Schema::dropIfExists('files');
    }
}