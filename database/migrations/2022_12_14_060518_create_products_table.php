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
            $table->id();
            $table->integer('category_id')->nullable();
            $table->integer('sub_category_id')->nullable();
            $table->string('product_name')->nullable();
            $table->string('product_slug')->nullable();
            $table->string('product_image')->nullable();
            $table->string('selling_price')->nullable();
            $table->string('original_price')->nullable();
            $table->integer('quantity')->default(0);
            $table->text('short_description')->nullable();
            $table->text('long_description')->nullable();
            $table->string('tranding_product')->default(0);
            $table->string('new_design')->default(0);
            $table->string('offer_product')->default(0);
            $table->string('product_size')->nullable();
            $table->string('product_unit')->nullable();
            $table->string('product_position')->nullable();

            $table->string('hover_image')->nullable();
            $table->string('product_document')->nullable();
            $table->string('youtube_link')->nullable();

            $table->string('platform_image1')->nullable();
            $table->string('platform_image2')->nullable();
            $table->string('platform_image3')->nullable();
            $table->string('platform_image4')->nullable();

            $table->text('platform_link1')->nullable();
            $table->text('platform_link2')->nullable();
            $table->text('platform_link3')->nullable();
            $table->text('platform_link4')->nullable();

            $table->string('product_type')->nullable();
            $table->string('made_by')->nullable();



            $table->text('meta_title')->nullable();
            $table->text('meta_decription')->nullable();
            $table->text('meta_keyword')->nullable();
            $table->tinyInteger('status')->default(1);
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
