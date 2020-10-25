<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    public function up()
    {
        Schema::create('pages', function(Blueprint $table){
            $table->increments('id');
            $table->string('slug')->index();
            $table->integer('parent_id')->nullable()->unsigned();
            $table->integer('depth')->nullable();
            $table->string('title');
            $table->string('icon')->nullable();
<<<<<<< HEAD
            $table->boolean('active')->default(false);
=======
            $table->smallInteger('visible')->nullable();
>>>>>>> ba0249a14fe7e772911c34393518b68dbf39f09f
            $table->timestamps();
            $table->foreign('parent_id')->references('id')->on('pages')->onDelete('cascade');
        });
    }


    public function down()
    {
        Schema::dropIfExists('pages');
    }
}