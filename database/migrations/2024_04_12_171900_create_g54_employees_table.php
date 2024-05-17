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
        Schema::create('g54_employees', function (Blueprint $table) {
            $table->id();
            $table->string('employee_id');           
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name');
            $table->date('date_of_birth');
            $table->string('age');
            $table->string('gender');
            $table->string('email');
            $table->string('contact_no');
            $table->text('address');
            $table->string('department');
            $table->string('civil_status');
            $table->string('work_status');
            $table->string('work_type');
            $table->string('position');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('g54_employees');
    }
};
