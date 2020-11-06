<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePageLayoutsTable extends Migration
{
    public function up()
    {
        Schema::create('pagelayouts', function(Blueprint $table){
            $table->increments('id');
            $table->string('type');
            $table->string('name');
            $table->timestamps();
            $table->softDeletes();
        });
    }


    public function down()
    {
        Schema::dropIfExists('pagelayouts');
    }
}