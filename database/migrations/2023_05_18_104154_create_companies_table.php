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
        Schema::create('companies', function (Blueprint $table) {
            $table->binary('logo');
            $table->foreignUuid('user_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->text('address');
            $table->foreignId('province_id')->constrained('provinces')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('city_id')->constrained('cities')->onDelete('cascade')->onUpdate('cascade');
            $table->string('industry');
            $table->string('company_size');
            $table->string('branch');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
