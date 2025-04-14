<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StudentRegistrationRequest;

class FormController extends Controller
{
    public function index()
    {
        return view('myForms');
    }

    public function showRegistrationForm()
    {
        return view('myForms');
    }

    public function register(StudentRegistrationRequest $request)
    {
        // Handle the validated data
        $validatedData = $request->validated();
        // Process the data (e.g., save to the database)
        
        // Redirect or return a response
        return redirect()->back()->with('success', 'Registration successful!');
    }
}
