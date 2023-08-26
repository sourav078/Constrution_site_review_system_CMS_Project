<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Survey;

class SurveyerSurveyController extends Controller
{
    public function index()
    {
        // Retrieve the assigned surveys for the logged-in surveyer
        $assignedSurveys = Survey::where('assigned_surveyor_id', auth()->user()->id)->get();

        return view('surveyer.assigned-surveys.index', ['assignedSurveys' => $assignedSurveys]);
    }

    public function show($id)
    {
        $survey = Survey::findOrFail($id);

        // Make sure the survey is assigned to the current surveyer
        if ($survey->assigned_surveyor_id != auth()->user()->id) {
            return redirect()->route('surveyer.assigned-surveys')->with('error', 'You are not authorized to view this survey.');
        }

        return view('surveyer.assigned-surveys.show', ['survey' => $survey]);
    }

    public function completeSurvey($id)
    {
        $survey = Survey::findOrFail($id);

        // Make sure the survey is assigned to the current surveyer
        if ($survey->assigned_surveyor_id != auth()->user()->id) {
            return redirect()->route('surveyer.assigned-surveys')->with('error', 'You are not authorized to complete this survey.');
        }

        // Perform the completion logic here (e.g., update status, move to next task, etc.)

        return redirect()->route('surveyer.assigned-surveys')->with('success', 'Survey completed successfully.');
    }
}
