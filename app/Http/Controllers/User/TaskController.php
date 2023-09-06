<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function addTask(){
        return view('users.addtask');
    }

    public function store(Request $request){
        $user_id = Auth::user()->id;
        $request->validate([
            'task_title' => 'required',
            'task_description' => 'required',
            'due_date' => 'required',
            'reminder_date'=>'required',
            'reminder_time'=>'required',
        ]);
        $now = now();
        Task::insert([
            'task_title' => $request->task_title,
            'task_description' => $request->task_description,
            'task_status' => 0,
            'due_date' => $request->due_date,
            'reminder_date'=>$request->reminder_date,
            'reminder_time'=>$request->reminder_time,
            'user_id' => $user_id,
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        return redirect()->back()->with('successmessage','Task Added Successfully.');
    }

    public function editTask($id){
        $task = Task::findOrFail($id);
        return view('users.edittask',compact('task'));
    }

    public function updateTask(Request $request, $id){
        $user_id = Auth::user()->id;
        $request->validate([
            'task_title' => 'required',
            'task_description' => 'required',
            'due_date' => 'required',
            'reminder_date'=>'required',
            'reminder_time'=>'required',
        ]);
        $iscompleted = $request->task_status ? 1 : 0;
        $now = now();
        Task::whereId($id)->update([
            'task_title' => $request->task_title,
            'task_description' => $request->task_description,
            'due_date' => $request->due_date,
            'task_status' => $iscompleted,
            'reminder_date'=>$request->reminder_date,
            'reminder_time'=>$request->reminder_time,
            'user_id' => $user_id,
            'updated_at' => $now,
        ]);

        return redirect()->back()->with('successmessage','Task Updated Successfully.');
    }

    public function deleteTask($id){
        Task::findOrFail($id)->delete();
        return redirect()->back()->with('successmessage','Task deleted Successfully.');
    }

    public function completedTask(){
        $tasks = Task::where('task_status','=', 1)->where('user_id', '=', Auth::user()->id)->get();
        return view('users.completedtask', compact('tasks'));
    }
    public function expiredTask(){
        $tasks = Task::where('due_date','<', now())->where('user_id', '=', Auth::user()->id)->get();
        return view('users.expiredtask', compact('tasks'));
    }
    public function pendingTask(){
        $tasks = Task::where('task_status','=', 0)->where('due_date','>', now())->where('user_id', '=', Auth::user()->id)->get();
        return view('users.pendingtask', compact('tasks'));
    }

    public function taskDetails($id){
        $task = Task::findOrFail($id);
        return view('users.taskdetails',compact('task'));
    }
}
