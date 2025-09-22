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
        Schema::create('personal_performas', function (Blueprint $table) {
            $table->id();
        $table->string('title');
        $table->string('service');
        $table->string('service_other')->nullable();
        $table->string('staff_no');
        $table->unsignedBigInteger('user_id'); // for officer name
        $table->string('designation');
        $table->string('posting');
        $table->date('dob')->nullable();

        // Foreign visits stored as JSON
        $table->json('visits')->nullable();

        $table->date('property_return_date')->nullable();
        $table->string('pay_level')->nullable();

        // Contact info
        $table->string('mobile')->nullable();
        $table->string('email')->nullable();

        // IDs
        $table->string('aadhaar')->nullable();
        $table->string('pan')->nullable();

        // File uploads
        $table->string('tour_report')->nullable();
        $table->string('justification_file')->nullable();

        // Event details
        $table->text('event_brief')->nullable();
        $table->text('justification')->nullable();
        $table->text('expected_outcomes')->nullable();

        // ITU fields
        $table->enum('is_itu', ['Yes', 'No'])->default('No');
        $table->string('itu_current_roles')->nullable();
        $table->integer('itu_questions_rapporteur')->nullable();
        $table->integer('itu_questions_associate')->nullable();
        $table->integer('itu_editor_items')->nullable();
        $table->string('itu_previous_roles')->nullable();
        $table->integer('itu_work_items')->nullable();
        $table->integer('itu_proposed')->nullable();
        $table->integer('itu_consented')->nullable();
        $table->integer('itu_in_progress')->nullable();
        $table->integer('itu_recommendations')->nullable();
        $table->integer('itu_reports')->nullable();
        $table->integer('itu_online_meetings')->nullable();
        $table->integer('itu_physical_meetings')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_performas');
    }
};
