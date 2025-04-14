<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacultyController extends Controller
{
    public function dashboard()
    {
        return view('faculty.dashboard');
    }

    public function uploadAssignments()
    {
        return view('faculty.upload-assignments');
    }

    public function storeAssignment(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'due_date' => 'required|date',
            'file' => 'required|file|mimes:pdf,doc,docx|max:10240'
        ]);

        // In a real application, you would store the file and save to database
        return redirect()->route('view-students')->with('success', 'Assignment uploaded successfully');
    }

    public function viewStudents()
    {
        return view('faculty.view-students');
    }
}
