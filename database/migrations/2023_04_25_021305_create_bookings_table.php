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
        Schema::create('bookings', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('designation_id');
            $table->string('service_status');
            $table->string('mobile');
            $table->string('email')->nullable();
            $table->integer('booking_for');//Room, Lawn, Hall
            $table->integer('room_type');//Block-1, Block-2
            $table->date('booking_from');
            $table->date('booking_till');
            $table->string('booking_for_self_guest');//self,guest
            $table->integer('status');
            $table->integer('otp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
