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
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('employee_id')->constrained('employees')->onUpdate('cascade')->onDelete('cascade');
            $table->date('date');
            $table->foreignId('shift_id')->constrained('shifts')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('attendance_status_id')->constrained('attendance_statuses')->onUpdate('cascade')->onDelete('cascade');
            $table->time('clock_in')->nullable();
            $table->time('clock_out')->nullable();
            $table->foreignId('reason_id')->constrained('reasons')->onUpdate('cascade')->onDelete('cascade');
            $table->string('clock_in_location')->nullable();
            $table->string('clock_out_location')->nullable();
            $table->string('clock_in_image_url')->nullable();
            $table->string('clock_out_image_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendances');
    }
};
