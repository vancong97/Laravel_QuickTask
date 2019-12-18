<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Task\TaskRequest;
use App\Http\Requests\Task\EditTaskRequest;
use App\Models\Task;

class TaskController extends Controller
{
    public function gettask()
    {
        $data['tasks']  = Task::all();

        return view('Task.index', $data);
    }

    public function getTaskID($id){
        $task = Task::find($id);
        if ($task) {

        return $task;
        } else {

            return redirect()->route('task')->with('error', trans('message.errors'));
        }
    }

    public function posttask(TaskRequest $request)
    {
        $task = new Task();
        $task->name = $request->name;
        $task->save();

        return back()->with('success', trans('message.create'));
    }

    public function getEdittask($id)
    {
        $data['task'] = Task::find($id);

        return view('Task.edit', $data);
    }

    public function postEdittask(EditTaskRequest $request, $id)
    {
        $task = $this->getTaskID($id);
        $task->name = $request->name;
        $task->save();

        return redirect()->route('task')->with('success', trans('message.update'));
    }

    public function Deletetask($id){
        $task = $this->getTaskID($id);
        $task->delete();

        return response(1);
    }
}
