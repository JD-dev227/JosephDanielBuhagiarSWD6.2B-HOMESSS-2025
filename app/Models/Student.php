<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // The $fillable property is used to define which attributes of the model
    // can be mass-assigned (i.e., which columns are allowed to be filled in
    // one go using methods like create or update).
    // In this case, 'name', 'email', 'phone', 'dob', and 'college_id' are allowed
    // to be mass-assigned.
    protected $fillable = ['name', 'email', 'phone', 'dob', 'college_id'];

    // The 'college' function defines an inverse one-to-many relationship with the College model.
    // This means that each student belongs to a single college.
    // Eloquent will automatically look for a 'college_id' field in the 'students' table 
    // to form the relationship.
    public function college()
    {
        // This method returns a "belongsTo" relationship, meaning that a student
        // is associated with a single college.
        return $this->belongsTo(College::class);
    }
}
