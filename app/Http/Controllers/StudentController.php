<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Student::query();

        // Filtering by college
        if ($request->has('college_id') && $request->college_id != '') {
            $query->where('college_id', $request->college_id);
        }

        // Sorting by name
        $query->orderBy('name', 'asc');

        $students = $query->get();
        $colleges = College::all(); // For dropdown filter

        return view('students.index', compact('students', 'colleges'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $colleges = College::all();
        return view('students.create', compact('colleges'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students,email',
            'phone' => 'required|regex:/^(\+?\d{1,3}[-.\s]?)?\d{10}$/',
            'dob' => 'required|date',
            'college_id' => 'required|exists:colleges,id',
        ]);

        Student::create($request->all());
        return redirect()->route('students.index')->with('success', 'Student added successfully!');
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
    public function edit(Student $students)
    {
        $colleges = College::all();
        return view('students.edit', compact('student', 'colleges'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students,email,' . $student->id,
            'phone' => 'required|regex:/^(\+?\d{1,3}[-.\s]?)?\d{10}$/',
            'dob' => 'required|date',
            'college_id' => 'required|exists:colleges,id',
        ]);

        $student->update($request->all());
        return redirect()->route('students.index')->with('success', 'Student updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully!');
    }
}
