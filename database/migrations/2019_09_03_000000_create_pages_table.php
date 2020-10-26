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
            $table->boolean('visible')->default(false);
            $table->string('description');
            $table->timestamps();
            $table->foreign('parent_id')->references('id')->on('pages')->onDelete('cascade');
        });
    }


    public function down()
    {
        Schema::dropIfExists('pages');
    }
}