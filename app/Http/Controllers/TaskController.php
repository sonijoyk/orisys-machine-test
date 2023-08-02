<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\{Task,Employee};

use App\Mail\TaskMail;
use Auth;
use Mail;
class TaskController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Task $task)
    {
        $this->middleware('auth');
        $this->task = $task;
    }

    public function index() {

        $tasks = Task::with('assignee')->get();
        $title = "Tasks";
        $employees = Employee::where('status','active')->get();
        return view('tasks.tasks',compact('tasks','title','employees'));
    }

    public function save(Request $request){

        $details = $request->all();
        $this->task->create($details);
        $mail = 'admin@otaskit.com';
        Mail::to($mail)->send(new TaskMail);
        return redirect()->back()->with('status','Task Details Saved Successfully');
    }

    public function assign(Request $request) {

        $status = $request->status;
        $assignee = $request->assignee;
        foreach($status as $key => $value) {
            $array = [];
            $array['status'] = ($value[0] =='Unassigned' ? 'assigned':$value[0]);
            if ($assignee[$key][0] != 0) {
                $array['employee_id']  = $assignee[$key][0];
            }
            Task::where('id',  $key)
                ->update($array);
            if ($array['status'] == 'assigned' && $array['employee_id'] != 0) {
                $mail = Employee::find($array['employee_id'])->email;
                Mail::to($mail)->send(new TaskMail);
            }
        }
        return redirect()->back()->with('status','Task Assigned Successfully');      
    }

   

}