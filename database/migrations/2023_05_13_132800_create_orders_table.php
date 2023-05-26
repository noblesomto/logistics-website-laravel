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
            $table->increments('id');
            $table->string('order_id');
            $table->string('freight_type');
            $table->string('package_type');
            $table->date('departure_date');
            $table->date('arrival_date');
            $table->string('departure_loc');
            $table->string('arrival_loc');
            $table->longText('package_des');
            $table->string('weight');
            $table->string('status');
            $table->string('order_status');
            $table->string('num_stops');
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
