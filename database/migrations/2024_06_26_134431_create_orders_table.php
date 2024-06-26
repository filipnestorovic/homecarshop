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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('phone', 100);
            $table->string('street', 100);
            $table->string('city', 100);
            $table->string('zip', 100);
            $table->integer('product_id');
            $table->integer('quantity');
            $table->float('amount');
            $table->tinyInteger('is_free_shipping');
            $table->string('note');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
