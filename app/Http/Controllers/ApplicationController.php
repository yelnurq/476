<?php
namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function showForm()
    {
        return view('application');
    }

    public function submitForm(Request $request)
    {
        $validated = $request->validate([
            'student_name' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'grade' => 'required|integer|min:1|max:11',
            'parent_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'nullable|string|max:1000',
        ]);

        Application::create($validated);

        return redirect()->route('application.form')->with('success', 'Өтінішіңіз сәтті қабылданды!');
    }
}
