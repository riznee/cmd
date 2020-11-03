<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{

    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('ip_address', 45)->nullable()->index();
            $table->string('picture')->nullable();
            $table->rememberToken();
            $table->boolean('verified')->default(false);
            $table->timestamp('logged_in_at')->nullable();
            $table->timestamp('logged_out_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
    


    public function down()
    {
        Schema::dropIfExists('users');
    }
}
