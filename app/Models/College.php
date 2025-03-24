<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{

    use HasFactory;

    // The $fillable property is used to define which attributes of the model
    // can be mass-assigned (i.e., which columns are allowed to be filled in
    // one go using methods like create or update).
    // In this case, only 'name' and 'address' can be mass-assigned.
    protected $fillable = ['name', 'address'];

    // The 'students' function defines a one-to-many relationship with the Student model.
    // This means each college can have many students associated with it.
    // Eloquent will automatically look for a 'student' table with a 'college_id' field
    // to form the relationship.
    public function students()
    {
        // This method returns a "hasMany" relationship, meaning that a single college 
        // can have multiple students associated with it.
        return $this->hasMany(Student::class);
    }
}