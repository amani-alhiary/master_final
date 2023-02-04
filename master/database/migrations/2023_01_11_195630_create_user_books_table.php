<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_books', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('book_name');             
            $table->string('author');             
            $table->longText('quote');            
            $table->longText('description');
            $table->integer('price');
            $table->integer('sale_price');

            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->string('image')->default('user.jpg');
            $table->string('image_01')->default('user.jpg');
            $table->string('image_02')->default('user.jpg');
            $table->string('image_03')->default('user.jpg');
            $table->string('video');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->integer('is_sold')->default('0');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_books');
    }
};
