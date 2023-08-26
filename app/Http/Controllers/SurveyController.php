<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Module;
use App\Models\Survey;
use App\Models\Surveyer;
use App\Models\SurveyType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.survey.manage', ['surveys' => Survey::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $isActive = true;
        return view('admin.survey.index', [
            'categories' => Category::all(),
            'surveyers' => Surveyer::all(),
            'surveyTypes' => SurveyType::all(),
            'modules' => Module::all(),
            'isActive' =>$isActive,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {

        // Validate the form data
        $validator = Validator::make($request->all(), [
            'category_id' => 'required',
            'surveyer_id' => 'required',
            'survey_type_id' => 'required',
            'modules' => 'required|array',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Convert the selected modules to JSON
        $selectedModules = $request->input('modules');
        $modulesJson = json_encode($selectedModules);

        // Create and save the survey
        $survey = new Survey;
        $survey->category_id = $request->input('category_id');
        $survey->surveyer_id = $request->input('surveyer_id');
        $survey->survey_type_id = $request->input('survey_type_id');
        $survey->modules = $modulesJson; // JSON data for the modules
        $survey->save();

        // You can return a success message or redirect back
        return redirect()->route('survey.create')->with('message', 'Survey data saved successfully. Create New Survey ');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Survey $survey)
    {
        // Delete the survey
        $survey->delete();

        // Redirect back with a success message
        return redirect()->route('survey.index')->with('message', 'Survey deleted successfully.');
    }



    public function surveyerDashboard()
    {
        // Get surveys assigned to the logged-in surveyor
        $surveyorId = auth()->user()->id;
        $assignedSurveys = Survey::where('surveyer_id', $surveyorId)
            ->where('isActive', true)
            ->get();

        return view('surveyer.dashboard', ['assignedSurveys' => $assignedSurveys]);
    }

}
