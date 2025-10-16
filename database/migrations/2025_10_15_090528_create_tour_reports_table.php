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
        Schema::create('tour_reports', function (Blueprint $table) {
            $table->id();
            $table->string('tour_id');
            $table->unsignedBigInteger('user_id');

            // Auto-generated fields
            $table->string('staff_number')->nullable();
            $table->string('meeting_name')->nullable();
            $table->string('purpose')->nullable();
            $table->string('service')->nullable();
            $table->string('name_designation')->nullable();
            $table->string('grade')->nullable();
            $table->string('level')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('email')->nullable();
            $table->string('equivalent_rank')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->date('from_date')->nullable();
            $table->date('to_date')->nullable();

            // Manual fields
            $table->text('key_contributions')->nullable();
            $table->text('follow_up_action_points')->nullable();
            $table->string('tour_report_pdf')->nullable();
            $table->text('presentation')->nullable();

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tour_reports');
    }
};
