<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payroll extends Model
{
    use HasFactory;
    protected $table = "g54_payrolls";
    protected $fillable = [
        'employee_id',
        'pay_start',
        'pay_end',
        'earning',
        'deductions',
        'net_pay',
        'payment_method',
        'payroll_date'
    ];
}
