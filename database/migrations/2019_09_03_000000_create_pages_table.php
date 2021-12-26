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
            // $table->integer('layout_id')->unsigned();
            $table->integer('type_id')->unsigned();
            $table->string('icon')->nullable();
            $table->integer('file_id')->nullable();
            $table->boolean('visible')->default(false);
            $table->string('description');
            $table->timestamps();            
            $table->softDeletes();
        });

        Schema::table('pages', function($table) {
            $table->foreign('parent_id')->references('id')->on('pages')->onDelete('cascade');
            $table->foreign('layout_id')->references('id')->on('pagelayouts')->onDelete('cascade');
            $table->foreign('type_id')->references('id')->on('pagetypes')->onDelete('cascade');
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('pages');
    }
}