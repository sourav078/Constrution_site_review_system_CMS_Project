<?php

namespace App\Http\Controllers;
use Illuminate\support\facades\Schema;
use Illuminate\Http\Request;
use App\Models\Surveyer;
use App\Models\Task;


class AdminTaskController extends Controller
{

    public function assignTasks(Request $request)
    {
        $selectedTaskIds = $request->input('selected_tasks', []);
        $surveyers = Surveyer::all();
        return view('admin.tasks.assign', compact('selectedTaskIds', 'surveyers'));
    }

//    public function storeAssignedTasks(Request $request)
//    {
//        $surveyerId = $request->input('surveyer_id');
//        $selectedTaskIds = $request->input('selected_tasks', []);
//        $surveyer = Surveyer::findOrFail($surveyerId);
//
//        $tasks = Task::whereIn('id', $selectedTaskIds)->get();
//
//        $surveyer->tasks()->sync($tasks);
//
//        return redirect()->route('admin.tasks.index')->with('message', 'Tasks assigned successfully.');
//    }

    public function storeAssignedTasks(Request $request)
    {
        $surveyerId = $request->input('surveyer_id');
        $selectedTaskIds = $request->input('selected_tasks', []);

        // Ensure $selectedTaskIds is an array
        if (!is_array($selectedTaskIds)) {
            $selectedTaskIds = [];
        }

        $surveyer = Surveyer::findOrFail($surveyerId);

        $tasks = Task::whereIn('id', $selectedTaskIds)->get();

        $surveyer->tasks()->sync($tasks);


        return redirect()->route('admin.tasks.index')->with('message', 'Tasks assigned successfully.');
    }


//    public function storeAssignedTasks(Request $request)
//    {
//        $surveyerId = $request->input('surveyer_id');
//        $selectedTaskIds = $request->input('selected_tasks', []);
//        dd($surveyerId, $selectedTaskIds);
//
//        $surveyer = Surveyer::findOrFail($surveyerId);
//        $surveyer->tasks()->sync($selectedTaskIds);
//
//        return redirect()->route('admin.tasks.index')->with('message', 'Tasks assigned successfully.');
//    }


    public function index()
    {
        $taskColumns = Schema::getColumnListing('tasks');

        // Remove the id and timestamps columns
        $taskColumns = array_diff($taskColumns, ['id', 'created_at', 'updated_at']);

        return view('admin.tasks.index', compact('taskColumns'));
    }
}
