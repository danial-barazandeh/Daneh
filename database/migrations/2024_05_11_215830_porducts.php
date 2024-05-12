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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content')->nullable();
            $table->string('seoTitle')->nullable();
            $table->string('seoDescription')->nullable();
            $table->json('seoKeys')->nullable();
            $table->boolean('published')->default(false);
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('image_id')->nullable();
            $table->string('price');
            $table->string('salePrice')->nullable();
            $table->boolean('free')->nullable();
            $table->string('time')->nullable();
            $table->string('introUrl')->nullable();
            $table->string('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
