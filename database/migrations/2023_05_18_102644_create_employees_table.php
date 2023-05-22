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
        Schema::create('employees', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('user_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('place_of_birth_id')->constrained('cities')->onDelete('cascade')->onUpdate('cascade');
            $table->date('birth_date');
            $table->foreignId('gender_id')->constrained('genders')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('marital_status_id')->constrained('marital_statuses')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('religion_id')->constrained('religions')->onDelete('cascade')->onUpdate('cascade');
            $table->text('address');
            $table->foreignId('province_id')->constrained('provinces')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('city_id')->constrained('cities')->onDelete('cascade')->onUpdate('cascade');

            $table->date('join_date');
            $table->date('end_date')->nullable();
            $table->foreignId('division_id')->constrained('divisions')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('profession_id')->constrained('professions')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('job_level_id')->constrained('job_levels')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('employment_status_id')->constrained('employment_statuses')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('branch_id')->constrained('branches')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('manager_id')->nullable()->default(null)->constrained('managers')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
