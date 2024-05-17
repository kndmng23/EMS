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
        Schema::create('g54_payrolls', function (Blueprint $table) {
            $table->id();
            $table->string('employee_id');
            $table->date('pay_start');
            $table->date('pay_end');
            $table->string('earning');
            $table->string('deductions');
            $table->string('net_pay');
            $table->string('payment_method');
            $table->date('payroll_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('g54_payrolls');
    }
};
