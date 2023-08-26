<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Survey;
use App\Models\Surveyer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SurveyerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.surveyer.manage', ['surveyers' => Surveyer::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.surveyer.index', ['categories' => Category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string',
            'mobile' => 'required',
            'password' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5000',

        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        Surveyer::newSurveyer($request);
        return back()->with('message', 'Surveyer info create successfully.' );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.surveyer.edit', [
            'surveyer' => Surveyer::find($id),
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Surveyer::updateSurveyer($request, $id);
        return redirect('/surveyer')->with('message', 'Surveyer info update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Surveyer::deleteSurveyer($id);
        return redirect('/surveyer')->with('message', 'Your surveyer delete successfully');
    }

    public function dashboard()
    {
        $surveyerId = auth()->user()->id; // Assuming surveyor is logged-in user
        $assignedSurveys = Survey::where('surveyer_id', $surveyerId)->get();

        return view('surveyer.home.index', compact('assignedSurveys'));
    }













    public function tasks()
    {
        $surveyer = Surveyer::findOrFail(auth()->surveyer()->id);
        $assignedTasks = $surveyer->assignedTasks(); // Implement this method in Surveyor model
        return view('surveyer.tasks', ['tasks' => $assignedTasks]);
    }

    public function completeTask(Request $request, Survey $survey, Task $task)
    {
        $surveyor = Surveyor::findOrFail(auth()->user()->id);

        // Check if the task is assigned to the surveyor's client
        if (!$surveyor->isAssignedTask($task, $survey)) {
            abort(403, 'Unauthorized action.');
        }

        $surveyor->completeTask($task); // Implement this method in Surveyor model

        return redirect()->route('surveyor.tasks')->with('message', 'Task completed successfully.');
    }
}
