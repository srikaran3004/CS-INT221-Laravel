<!DOCTYPE html>
<html>
<head>
    <title>Student Details</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        header, footer {
            background-color: #3498db;
            color: white;
            padding: 20px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        header nav a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
            font-weight: bold;
        }
        header nav a:hover {
            text-decoration: underline;
        }
        .container {
            max-width: 1000px;
            margin: 40px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center;
        }
        h1 {
            color: #2c3e50;
            margin-bottom: 30px;
        }
        table {
            width: 90%;
            margin: 0 auto;
            border-collapse: collapse;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #3498db;
            color: white;
            text-transform: uppercase;
            font-size: 14px;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #e3f2fd;
        }
        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        footer a {
            color: white;
            text-decoration: none;
        }
        footer a:hover {
            text-decoration: underline;
        }
        .empty-message {
            font-style: italic;
            color: #7f8c8d;
        }
    </style>
</head>
<body>
    <header>
        <h2>Student Management System</h2>
        <nav>
            <a href="{{ url('/') }}">Home</a> |
            <a href="{{ url('/students') }}">Students</a>
        </nav>
    </header>

    <div class="container">
        <h1>All Students</h1>

        @if ($students->isEmpty())
            <p>No students found.</p>
        @else
            <table border="1">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Hobbies</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->age }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->gender }}</td>
                            <td>{{ is_array(json_decode($student->hobbies, true)) ? implode(', ', json_decode($student->hobbies, true)) : $student->hobbies }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>

    <footer>
        <p>&copy; {{ date('Y') }} Student Management System. All rights reserved.</p>
        <p><a href="{{ url()->previous() }}">Back</a></p>
    </footer>
</body>
</html>

<!-- SQL Query
INSERT INTO students (name, age, email, gender, hobbies) 
VALUES 
('John Doe', 22, 'johndoe@example.com', 'Male', '["Reading", "Football"]'),
('Jane Smith', 21, 'janesmith@example.com', 'Female', '["Music", "Painting"]'); -->

