<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannersTable extends Migration
{
    public function up()
    {
        Schema::create('banners', function(Blueprint $table){
            $table->increments('id');
            $table->integer('filename');
            $table->string('url');
            $table->boolean('visible')->default(false);
            $table->string('message');
            $table->timestamps();
            $table->softDeletes();
        });
    }


    public function down()
    {
        Schema::dropIfExists('banners');
    }
}