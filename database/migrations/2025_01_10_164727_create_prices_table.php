<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
  // database/migrations/xxxx_xx_xx_xxxxxx_create_prices_table.php
public function up()
{
    Schema::create('prices', function (Blueprint $table) {
        $table->increments('price_id');
        $table->unsignedInteger('product_id');
        $table->decimal('price', 10, 2);
        $table->date('start_date')->nullable();
        $table->date('end_date')->nullable();
        $table->timestamps();

        $table->foreign('product_id')->references('product_id')->on('products')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prices');
    }
};
