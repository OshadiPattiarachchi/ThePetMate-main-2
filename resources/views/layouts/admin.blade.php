<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Add your CSS and other links here -->
</head>
<body>

    <div class="navbar">
        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
        <a href="{{ route('admin.users') }}">Users</a>
        <a href="{{ route('admin.pets') }}">Pets</a>
        <a href="{{ route('admin.pet-ads') }}">Pet Ads</a>
    </div>

    @yield('content')

</body>
</html>
