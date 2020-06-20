<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',255);
            $table->string('code',50);
            $table->string('description',255);
            $table->string('detail',255);
            $table->string('url_image',255);
            $table->decimal('price', 16, 2);
            $table->decimal('promotion_price', 16, 2);
            $table->integer('quantity');
            $table->string('slug',255);
            $table->boolean('is_hot');
            $table->boolean('is_new');
            $table->bigInteger('brand_id')->unsigned();
            $table->foreign('brand_id')->references('id')->on('brands')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->bigInteger('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('product_categories')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->date('created_date')->nullable();
            $table->date('updated_date')->nullable();
            $table->boolean('is_deleted')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
