<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttributesTable extends Migration
{
    public function up()
    {
        Schema::create('attributes', function(Blueprint $table){
            $table->increments('id');
            $table->integer('parent_id')->nullable()->unsigned();
            $table->string('name');
            $table->integer('type')->nullable();
            $table->integer('size')->nullable();
            $table->boolean('visible')->default(false);
            $table->timestamps();
            $table->foreign('parent_id')->references('id')->on('attributes')->onDelete('cascade');
            $table->softDeletes();
        });
    }


    public function down()
    {
        Schema::dropIfExists('attributes');
    }
}