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
            $table->string('productName')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('brand_id')->nullable();
            $table->string('product_type')->nullable();
            $table->string('MRP_price')->nullable();
            $table->string('O_price')->nullable();
            $table->text('image')->nullable();
            $table->text('warranty')->nullable();
            $table->text('features')->nullable();
            $table->text('specifications')->nullable();
            $table->tinyInteger('stockAvailability')->default(1)->comment('In Stock = 1 , Out of Stock = 0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
