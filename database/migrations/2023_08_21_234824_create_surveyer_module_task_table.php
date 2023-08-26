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
        Schema::create('surveyer_module_tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('survey_id')->constrained();
            $table->foreignId('surveyer_id')->constrained();
            $table->foreignId('module_id')->constrained();
            $table->boolean('status')->default(false); // Completion status
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surveyer_module_tasks');
    }
};
