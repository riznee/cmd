<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    public function up()
    {
        Schema::create('articles', function(Blueprint $table){
            $table->increments('id');
            $table->unsignedInteger('page_id');
            $table->string('slug')->index();
            $table->smallInteger('published_at')->nullable();
            $table->string('title');
            $table->text('content');
            $table->string('description');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('page_id')->references('id')->on('pages');
        });
    }


    public function down()
    {
        Schema::dropIfExists('articles');
    }
}