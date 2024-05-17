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
        Schema::create('g54_schedules', function (Blueprint $table) {
            $table->id();
            $table->string('employee_id');
            $table->date('attendance_date');
            $table->time('in_time');
            $table->time('out_time');
            $table->string('attendance_status');
            $table->string('total_hours');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('g54_schedules');
    }
};
