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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->nullable();
            $table->foreignId('tag_id')->nullable();
            $table->foreignId('author_id');
            $table->string('author_type');
            $table->string('title')->unique()->index();
            $table->string('slug')->nullable();
            $table->text('body');
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->string('status')->default('active');
            $table->unsignedBigInteger('views')->default(0);
            $table->unsignedBigInteger('click')->default(0);
            $table->unsignedBigInteger('like')->default(0);
            $table->unsignedBigInteger('dislike')->default(0);
            $table->unsignedBigInteger('share')->default(0);
            $table->softDeletes();
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
        Schema::dropIfExists('articles');
    }
};
