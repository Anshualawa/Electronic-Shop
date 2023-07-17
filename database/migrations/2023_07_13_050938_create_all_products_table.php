<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('all_products', function (Blueprint $table) {
            $table->id('product_id');
            $table->unsignedInteger('seller_id');
            $table->string('product_name');
            $table->string('brand');
            $table->string('category');
            $table->decimal('price', 10, 2);
            $table->text('description');
            $table->string('availability');
            $table->decimal('ratings', 3, 1)->nullable();
            $table->string('special_offers')->nullable();
            $table->string('warranty')->nullable();
            $table->string('accessories')->nullable();
            $table->string('product_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('all_products');
    }
};