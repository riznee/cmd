<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    public function up()
    {
        Schema::create('settings', function(Blueprint $table){
            $table->unsignedTinyInteger('id')->unique();
            $table->string('logo')->nullable();
            $table->string('email')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkin')->nullable();
            $table->string('instagram')->nullable();
            $table->string('disqus_shortname')->nullable();
            $table->timestamps();
            $table->softDeletes();

        });
    }

    public function down()
    {
        Schema::dropIfExists('settings');
    }
}