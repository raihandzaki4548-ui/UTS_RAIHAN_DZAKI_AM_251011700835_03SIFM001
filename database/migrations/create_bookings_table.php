<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();

            $table->foreignId('car_id')
                  ->constrained('cars')
                  ->cascadeOnDelete();

            $table->string('customer_name');
            $table->string('phone');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('total_days');
            $table->decimal('total_price', 12, 2);
            $table->string('status')->default('Pending');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
