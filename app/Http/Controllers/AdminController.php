<?php

namespace App\Http\Controllers;

use App\Models\PendingApproval;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {

        $pendingApprovals = PendingApproval::all();
        return view('admin.home.index', ['pendingApprovals' => $pendingApprovals]);
    }
    public function approve($id)
    {
        $approval = PendingApproval::findOrFail($id);
        // Logic for approving the item, like moving to the correct table or updating status
        $approval->delete(); // If necessary
        return redirect()->route('admin.home.index')->with('status', 'Approved successfully');
    }

    public function reject($id)
    {
        $approval = PendingApproval::findOrFail($id);
        // Logic for rejecting the item
        $approval->delete(); // If necessary
        return redirect()->route('admin.home.index')->with('status', 'Rejected successfully');
    }
}
