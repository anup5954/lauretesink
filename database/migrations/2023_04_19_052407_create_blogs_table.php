<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('blog_image')->nullable();
            $table->text('slug')->nullable();
            $table->string('blog_heading')->nullable();
            $table->text('blog_description')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_keyword')->nullable();

            $table->string('user_image')->nullable();
            $table->string('user_name')->nullable();
            $table->text('user_description')->nullable();

            $table->tinyInteger('category')->nullable();
            $table->tinyInteger('tranding_product')->nullable();
            $table->tinyInteger('new_design')->nullable();
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
        Schema::dropIfExists('blogs');
    }
}
