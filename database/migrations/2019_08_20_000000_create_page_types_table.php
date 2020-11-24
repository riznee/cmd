<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePageTypesTable extends Migration
{
    public function up()
    {
        Schema::create('pagetypes', function(Blueprint $table){
            $table->increments('id');
            $table->string('title');
            $table->string('description');
            $table->timestamps();
            $table->softDeletes();
        });
    }


    public function down()
    {
        Schema::dropIfExists('pagetypes');
    }
}