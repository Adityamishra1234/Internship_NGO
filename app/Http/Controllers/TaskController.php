<?php

namespace App\Http\Controllers;
// use App\Models\Task;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function add(Request $request)
    {
        $task= new Task();

        $task->user_id = $request->input('user_id');
        $task->task = $request->input('task');
        $task->status = $request->input('status');

        $task->save();
        return response()->json(task::all(), 200);
    }

    public function status($id){
        $task = Task::find($id);
        if(is_null($task)){
            return response()->json(['message' => 'Not found'], 404);

        }
        return response()->json($task::find($id), 200);
    }

    public function update(Request $request, $id){
        $task= Task::find($id);
        if(is_null($task)){
            return response()->json(['message' => 'Not found'], 404);
        }
        $task->update($request->all());
        return response($task, 200);
    }
}
