<?php

namespace App\Models\employee;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    // protected $table = 'employees';
    protected $fillable = ['employee_image', 'employee_name', 'employee_email', 'employee_title', 'employee_department', 'employee_status', 'employee_role', 'employee_salary'];
}
