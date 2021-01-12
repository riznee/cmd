<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductCatergoriesTable extends Migration
{
    public function up()
    {
        Schema::create('productcategories', function(Blueprint $table){
            $table->increments('id');
            $table->string('slug')->index();
            $table->integer('parent_id')->nullable()->unsigned();
            $table->string('name');
            $table->string('icon')->nullable();
            $table->boolean('visible')->default(false);
            $table->timestamps();
            $table->foreign('parent_id')->references('id')->on('productcategories')->onDelete('cascade');
            $table->softDeletes();
        });
    }


    public function down()
    {
        Schema::dropIfExists('productcategories');
    }
}