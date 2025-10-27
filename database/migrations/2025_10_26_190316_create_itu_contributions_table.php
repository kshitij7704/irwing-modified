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
        Schema::create('itu_contributions', function (Blueprint $table) {
            $table->id();
            $table->string('study_group')->nullable();
            $table->string('question')->nullable();
            $table->string('work_item')->nullable();
            $table->string('contribution_type')->nullable();
            $table->text('contribution_brief')->nullable();
            $table->date('date_of_contribution')->nullable();
            $table->text('officers')->nullable();
            $table->text('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('itu_contributions');
    }
};
