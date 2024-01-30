<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function EmployeeDashboard()
    {
        return view('employee.employee_dashboard');
    }
}
