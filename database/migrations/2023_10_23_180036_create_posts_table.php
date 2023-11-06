<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('post_id');
            $table->bigInteger('author_id')->unsigned();//поле обязательно должно быть больше 0
            $table->string('title');
            $table->string('short_title');
            $table->string('img')->nullable();
            $table->text('descr');
            $table->timestamps();

            $table->foreign('author_id')->references('id')->on('users');//создание внешнего ключа
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
