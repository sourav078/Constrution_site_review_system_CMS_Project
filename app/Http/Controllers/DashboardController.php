<?php

namespace App\Http\Controllers;

use App\Models\PendingApproval;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.home.index');
    }
    public function pendingApprovals()
    {
        $pendingApprovals = \App\Models\PendingApproval::with('survey', 'category')->get();
        return view('admin.pending_approvals', compact('pendingApprovals'));
    }
    public function viewFile($id)
    {
        $approval = PendingApproval::find($id);

        if (!$approval) {
            return abort(404); // Approval not found
        }

        $path = $approval->file_path;
        if (!file_exists($path)) {
            return abort(404); // File not found
        }
        return response()->file($path);
    }

    public function approve($id)
    {
        // Get the approval object
        $approval = PendingApproval::findOrFail($id);

        // Get the corresponding category (client)
        $category = $approval->category;

        // Deduct the approved amount from the client's main amount
        $category->amount -= $approval->amount;

        // Save the approved file path to the client's file column
        $category->file = $approval->file_path;

        // Save the updated client
        $category->save();

        // Mark the approval as approved or do other necessary actions...

        // Redirect back with success message
        return redirect()->back()->with('message', 'Approval has been successfully processed.');
    }

    public function reject($id)
    {
        $pendingApproval = PendingApproval::find($id);

        if (!$pendingApproval) {
            return redirect()->back()->with('error', 'Request not found.');
        }

        $pendingApproval->status = 'rejected';
        $pendingApproval->save();

        return redirect()->back()->with('message', 'Request rejected successfully.');
    }
}
