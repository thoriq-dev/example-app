<!-- resources/views/layouts/admin.blade.php -->
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport"
			content="width=device-width, initial-scale=1.0">
		<title>Admin Dashboard</title>
		<link rel="stylesheet"
			href="{{ asset('css/app.css') }}">
	</head>

	<body>
		<div class="admin-sidebar">
			<!-- Sidebar Admin -->
			<ul>
				<li><a href="{{ route('admin.dashboard') }}">Dashboard Admin</a></li>
				<li><a href="{{ route('admin.users.index') }}">Manage Users</a></li>
				<!-- Link lainnya -->
			</ul>
		</div>
		<div class="admin-content">
			@yield('content')
		</div>
	</body>

</html>
