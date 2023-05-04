<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('sub_categories', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('category_id')->nullable();
            $table->string('sub_category_image')->nullable();
            $table->string('sub_category_name')->nullable();
            $table->string('sub_category_name')->nullable();
            $table->text('sub_category_description')->nullable();
            $table->text('sub_meta_title')->nullable();
            $table->text('sub_meta_desc')->nullable();
            $table->text('sub_meta_keyword')->nullable();
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
        Schema::dropIfExists('sub_categories');
    }
}
