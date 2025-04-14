<!DOCTYPE html>
<html>
<head>
    <title>University Student Portal</title>
</head>
<body>
    @include('components.navigation') <!-- Include the dynamic menu -->
    
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
