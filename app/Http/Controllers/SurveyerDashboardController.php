<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\PendingApproval;
use App\Models\Survey;
use App\Models\Surveyer;
use App\Models\SurveyerModuleTask;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SurveyerDashboardController extends Controller
{
    public function index()
    {
        $surveyerId = Session::get('surveyer_id'); // Assuming you store the surveyer ID in the session
        $assignedSurveys = Survey::where('surveyer_id', $surveyerId)->get();

        return view('surveyer.home.index', compact('assignedSurveys'));
    }

    public function surveyDetails($id)
    {
        $survey = Survey::with('category', 'surveyType')->find($id);

        // Check if survey exists and belongs to the logged-in surveyer
        if (!$survey || $survey->surveyer_id != Session::get('surveyer_id')) {
            abort(404); // Return a 404 error if not found or not authorized
        }

        return view('surveyer.survey.details', compact('survey'));
    }


    public function logout()
    {
        Session::forget('surveyer_id');
        Session::forget('surveyer_name');

        return redirect('/login')->with('message','Surveyer');
    }

    public function submitAmount(Request $request, $id)
    {
        $request->validate([
            'survey_id' => 'required|exists:surveys,id',
            'category_id' => 'required|exists:categories,id',
            'client_amount' => 'required|numeric|min:0',
        ]);

        $pendingApproval = new PendingApproval;
        $pendingApproval->survey_id = $request->input('survey_id');
        $pendingApproval->category_id = $request->input('category_id');
        $pendingApproval->amount = $request->input('client_amount');
        $pendingApproval->save();

        return back()->with('message', 'Amount Submitted For The Approval');
    }

    public function uploadClientFile(Request $request, $id)
    {

        $request->validate([
            'file' => 'required|mimes:pdf,doc,docx|max:10000', // 10MB max size
        ]);

        $path = $request->file('file')->store('client_files');

        $pendingApproval = new PendingApproval;
        $pendingApproval->survey_id = $id;
        $pendingApproval->category_id = $request->input('category_id'); // you'll need to make sure this is set in your form
        $pendingApproval->file_path = $path;
        $pendingApproval->save();

        return back()->with('message', 'File uploaded for the approval');
    }

    public function completeModule(Request $request, $surveyId, $moduleId)
    {
        // Find the associated models
        $survey = Survey::find($surveyId);
        $module = Module::find($moduleId);

        $surveyerId = Session::get('surveyer_id');
        $surveyer = Surveyer::find($surveyerId);

        // Validate the survey, module, and surveyer belong together (customize logic as needed)
        if (!$survey || !$module || !$survey->surveyer->is($surveyer)) {
            abort(403, 'Unauthorized action');
        }

        // Mark the module as completed for this surveyer and survey
        $completion = new SurveyerModuleTask;
        $completion->survey_id = $survey->id;
        $completion->module_id = $module->id;
        $completion->surveyer_id = $surveyer->id;
        $completion->status = 1;
        $completion->save();

        // Redirect back with success message
        return redirect()->back()->with('message', 'Task' . $module->id . 'completed successfully!');
    }




}
