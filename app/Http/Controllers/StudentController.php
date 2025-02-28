<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\College;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $colleges = College::all(); // Get all colleges for the filter dropdown

        // Get the selected college from the request
        $collegeFilter = $request->input('college_filter');
    
        // Build query
        $query = Student::query();
    
        if ($collegeFilter) {
            $query->where('college_id', $collegeFilter);
        }
    
        if ($request->input('sort') === 'name') {
            $query->orderBy('name');
        }
    
        $students = $query->get(); // Fetch students based on filter and sorting
    
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
     * Store a newly created resource in storage. Store a new student
     */
  
     public function store(Request $request)
     {
         $request->validate([
             'name' => 'required',
             'email' => 'required|email|unique:students,email',
             'phone' => 'required|regex:/^[0-9]{8}$/|unique:students,phone',
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
