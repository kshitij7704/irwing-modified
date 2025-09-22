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
        Schema::create('qrp_forms', function (Blueprint $table) {
            $table->id();
    $table->string('agency')->nullable();
    $table->string('agency_other')->nullable();
    $table->string('itu_type')->nullable();
    $table->string('meeting_name')->nullable();
    $table->date('meeting_from')->nullable();
    $table->date('meeting_to')->nullable();
    $table->string('country')->nullable();
    $table->string('city')->nullable();
    $table->string('invitation_letter')->nullable();
    $table->string('similar_meeting')->default('No');
    $table->string('previous_report')->nullable();
    $table->string('mode')->nullable();
    $table->string('staff_no')->nullable();
    $table->string('officer_name')->nullable();
    $table->string('unit')->nullable();
    $table->string('division')->nullable();
    $table->string('designation')->nullable();
    $table->string('email')->nullable();
    $table->string('contact')->nullable();
    $table->text('justification')->nullable();
    $table->string('justification_file')->nullable();
    $table->text('expected_outcome')->nullable();
    $table->string('expected_file')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qrp_forms');
    }
};
