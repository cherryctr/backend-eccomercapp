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
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->string('productName');
            $table->string('productShortDescription');
            $table->integer('productPrice');
            $table->integer('productSalePrice');
            $table->string('productImage');
            $table->string('productType');
            $table->string('productStatus');
            $table->string('stockStatus');
            $table->string('proudctQty');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};