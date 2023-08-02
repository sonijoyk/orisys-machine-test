<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Employee;
use Auth;
class EmployeeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Employee $employee)
    {
        $this->middleware('auth');
        $this->employee = $employee;
    }

    public function index() {

        $employees = Employee::all();
        $title = "Employees";
        return view('employees.employees',compact('employees','title'));
    }

    public function save(Request $request){

        $details = $request->all();
        $this->employee->create($details);
        return redirect()->back()->with('status','Employee Details Saved Successfully');
    }

    public function edit($id) {

       $employees = Employee::where('id',$id)->get();
       $title = "Update Employee";
       return view('home',compact('employees','title'));

    }

    public function update(Request $request){
        $details = $request->all();
        Employee::whereIn('id',  $request->id)
                ->update( $details);
        return redirect()->back()->with('status','Employee Details Updated Successfully');        
    }

    public function delete($id) {

        $deleted = Employee::where('id', $id)->delete();
        return redirect()->back()->with('status','Employee Details Deleted Successfully');
    }

}