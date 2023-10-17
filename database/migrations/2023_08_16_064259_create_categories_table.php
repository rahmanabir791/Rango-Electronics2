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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('CategoryName')->nullable();
            $table->string('focusKey')->nullable();
            $table->string('metaKey')->nullable();
            $table->string('metaTag')->nullable();
            $table->string('ImgAlt')->nullable();
            $table->text('CategoryImage')->nullable();
            $table->text('Metadescription')->nullable();
            $table->text('catDescription')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
