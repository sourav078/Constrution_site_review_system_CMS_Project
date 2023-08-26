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
        Schema::create('surveys', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('surveyer_id');
            $table->unsignedBigInteger('survey_type_id');
            $table->json('modules'); // Column to store JSON data
            $table->tinyInteger('isActive ')->default('0');
            $table->timestamps();

            // Define foreign key constraints if needed
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('surveyer_id')->references('id')->on('surveyers');
            $table->foreign('survey_type_id')->references('id')->on('survey_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surveys');
    }
};
