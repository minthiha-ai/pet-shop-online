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
            $table->foreignId('category_id')->constrained();
            $table->string('name')->nullable();
            $table->integer('price')->nullable();
            $table->longText('description')->nullable();
            $table->string('sku')->nullable();
            $table->string('availability')->nullable();
            $table->string('tag')->nullable();
            $table->longText('addional_info')->nullable();
            $table->integer('stock')->nullable();
            $table->longText('images')->nullable();
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
