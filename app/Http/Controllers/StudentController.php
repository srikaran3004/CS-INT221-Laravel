<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function dashboard()
    {
        return view('student.dashboard');
    }

    public function viewAssignments()
    {
        return view('student.view-assignments');
    }

    public function showSubmitWork()
    {
        return view('student.submit-work');
    }

    public function submitWork(Request $request)
    {
        $validated = $request->validate([
            'assignment_id' => 'required',
            'file' => 'required|file|mimes:pdf,doc,docx|max:10240',
            'comments' => 'nullable|string'
        ]);

        // In a real application, you would store the file and save to database
        return redirect()->route('view-assignments')->with('success', 'Work submitted successfully');
    }
}
