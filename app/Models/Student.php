<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students'; // Specify the table name if it's not pluralized

    // Function to fetch student data
    public function fetchStudentData($id)
    {
        $studentData = self::find($id); // Fetch student by ID

        if (!$studentData) {
            return 'No data found'; // Return message if no data is found
        }

        return $studentData; // Return the student data if found
    }

    // Function to fetch all student data
    public static function fetchAllStudents()
    {
        return self::all(); // Fetch all records from the students table
    }
}
