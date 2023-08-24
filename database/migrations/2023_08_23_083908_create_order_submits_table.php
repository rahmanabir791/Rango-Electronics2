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
        Schema::create('order_submits', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('totalAmount')->nullable();
            $table->tinyInteger('p_status')->comment("cash = 1 , online = 0");
            $table->integer('remainAmount')->nullable();
            $table->integer('A_payment')->nullable();
            $table->string('f_service')->nullable();
            $table->string('Transaction_num')->nullable();
            $table->string('name');
            $table->string('email');
            $table->integer('phone');
            $table->string('city');
            $table->integer('zip');
            $table->text('address');
            $table->string('invoiceNumber')->nullable();
            $table->string('delivered')->default(0)->comment("Delivered = 1 , Not delivered = 0")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_submits');
    }
};
