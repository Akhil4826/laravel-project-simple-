<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
  // database/migrations/xxxx_xx_xx_xxxxxx_create_products_table.php
public function up()
{
    Schema::create('products', function (Blueprint $table) {
        $table->increments('product_id');
        $table->string('product_name');
        $table->unsignedInteger('category_id');
        $table->unsignedInteger('supplier_id');
        $table->timestamps();

        $table->foreign('category_id')->references('category_id')->on('categories')->onDelete('cascade');
        $table->foreign('supplier_id')->references('supplier_id')->on('suppliers')->onDelete('cascade');
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
