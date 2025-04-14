<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Student Management System')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .navbar {
            background-color: #333;
            padding: 1rem;
            color: white;
        }
        .navbar ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            gap: 1rem;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            transition: background-color 0.3s;
        }
        .navbar a:hover {
            background-color: #555;
        }
        .content {
            flex: 1;
            padding: 20px;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        .dashboard-links {
            margin: 20px 0;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 8px;
        }
        .dashboard-links a {
            display: block;
            padding: 10px;
            margin: 5px 0;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s;
        }
        .dashboard-links a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <ul>
            @if(request()->is('admin*'))
                <li><a href="{{ route('admin.dashboard') }}">Admin Dashboard</a></li>
                <li><a href="{{ route('admin.manage-users') }}">Manage Users</a></li>
                <li><a href="{{ route('admin.reports') }}">Reports</a></li>
            @elseif(request()->is('faculty*'))
                <li><a href="{{ route('faculty.dashboard') }}">Faculty Dashboard</a></li>
                <li><a href="{{ route('faculty.upload-assignments') }}">Upload Assignments</a></li>
                <li><a href="{{ route('faculty.view-students') }}">View Students</a></li>
            @elseif(request()->is('student*'))
                <li><a href="{{ route('student.dashboard') }}">Student Dashboard</a></li>
                <li><a href="{{ route('student.view-assignments') }}">View Assignments</a></li>
                <li><a href="{{ route('student.submit-work') }}">Submit Work</a></li>
            @else
                <li><a href="{{ route('admin.dashboard') }}">Admin Dashboard</a></li>
                <li><a href="{{ route('faculty.dashboard') }}">Faculty Dashboard</a></li>
                <li><a href="{{ route('student.dashboard') }}">Student Dashboard</a></li>
            @endif
        </ul>
    </nav>

    <!-- Main Content -->
    <main class="content">
        <div class="container">
            @yield('content')
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 