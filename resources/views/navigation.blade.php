<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<ul>
    @if(Auth::check())
        @php $role = Auth::user()->role; @endphp
        <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
        @if($role == 'admin')
            <li><a href="{{ route('manage.users') }}">Manage Users</a></li>
            <li><a href="{{ route('reports') }}">Reports</a></li>
        @elseif($role == 'faculty')
            <li><a href="{{ route('upload.assignments') }}">Upload Assignments</a></li>
            <li><a href="{{ route('view.students') }}">View Students</a></li>
        @elseif($role == 'student')
            <li><a href="{{ route('view.assignments') }}">View Assignments</a></li>
            <li><a href="{{ route('submit.work') }}">Submit Work</a></li>
        @endif
    @else
        <li><a href="{{ route('login') }}">Login</a></li>
        <li><a href="{{ route('register') }}">Register</a></li>
    @endif
</ul>
</body>
</html>