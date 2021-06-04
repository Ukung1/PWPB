<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee\employee;

class TableController extends Controller
{
    //Index Viewer
    public function index()
    {
        $employees = employee::all();
        return view('Table', compact('employees'));
    }
    //RequestMethod
    public function rules()
    {
        // if( $this->is(''))
    }
    //Create Menu
    public function store(Request $request)
    {

        employee::create(
            // $photo = request()->file('employee_image')->employee_image,
            [
                'employee_image' => $request->employee_image,
                'employee_name' => $request->employee_name,
                'employee_email' => $request->employee_email,
                'employee_title' => $request->employee_title,
                'employee_department' => $request->employee_department,
                'employee_status' => $request->employee_status,
                'employee_role' => $request->employee_role,
                'employee_salary' => $request->employee_salary,

                $request->validate([
                    'employee_name'  => 'required',
                    'employee_email'  => 'required',
                    'employee_title'  => 'required',
                    'employee_department'  => 'required',
                    'employee_status'  => 'required',
                    'employee_role'  => 'required',
                    'employee_salary' => 'required'

                ])
            ]
        );

        return redirect('/');
    }
    //Edit Menu
    public function edit(employee $employee)
    {
        return view('Edit', compact('employee'));
    }
    public function update(Request $request, employee $employee)
    {
        $employee->update([
            'employee_image' => $request->employee_image,
            'employee_name' => $request->employee_name,
            'employee_email' => $request->employee_email,
            'employee_title' => $request->employee_title,
            'employee_department' => $request->employee_department,
            'employee_status' => $request->employee_status,
            'employee_role' => $request->employee_role,
            'employee_salary' => $request->employee_salary
        ]);
        return redirect('/');
    }
    //Delete Menu
    public function destroy(employee $employee)
    {
        $employee->delete();
        return back();
    }
}
