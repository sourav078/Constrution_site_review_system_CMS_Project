<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('task_completions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('surveyer_id');
            $table->unsignedBigInteger('module_id');
            $table->timestamp('completed_at');
            $table->timestamps();

            $table->foreign('surveyer_id')->references('id')->on('surveyers')->onDelete('cascade');
            $table->foreign('module_id')->references('id')->on('modules')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('task_completions');
    }
};
