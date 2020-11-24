<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaxTable extends Migration
{
    public function up()
    {
        Schema::create('tax', function(Blueprint $table){
            $table->increments('id');
            $table->string('tax');
            $table->integer('tax_perce');
            $table->boolean('visible')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }


    public function down()
    {
        Schema::dropIfExists('tax');
    }
}