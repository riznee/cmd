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
            $table->string('site_name')->nullable();
            $table->string('email')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('disqus_shortname')->nullable();
            $table->boolean('display_login_buttion')->default(false);
            $table->boolean('display_title_site')->default(false);
            $table->boolean('display_article_descirption')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('settings');
    }
}