<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function(Blueprint $table){
            $table->increments('id');
            $table->string('upc')->index();
            $table->string('name')->index();
            $table->integer('product_catergory_id')->unsigned();
            $table->integer('page_id')->unsigned();
            $table->integer('attrib_id')->nullable()->unsigned();
            $table->integer('tax_type_id')->nullable()->unsigned();
            $table->double('price', 8, 2);
            $table->double('qty', 8, 2);
            $table->double('sold', 8, 2);
           
            $table->string('filename_url')->nullable();
            $table->string('taxable')->default(false);
            $table->boolean('visible')->default(false);

            $table->foreign('page_id')->references('id')->on('pages')->onDelete('cascade');
            $table->foreign('tax_type_id')->references('id')->on('tax')->onDelete('cascade');
            $table->foreign('attrib_id')->references('id')->on('attributes')->onDelete('cascade');
            $table->foreign('product_catergory_id')->references('id')->on('productcategories')->onDelete('cascade');
            
            $table->timestamps();
            $table->softDeletes();
        });
    }


    public function down()
    {
        Schema::dropIfExists('products');
    }
}