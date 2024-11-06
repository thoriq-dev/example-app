<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport"
			content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible"
			content="ie=edge">
		<link rel="stylesheet"
			href="{{ asset('assets/css/app.css') }}"> <!-- Sesuaikan dengan lokasi CSS -->
		<title>@yield('title', 'My Website')</title>
	</head>

	<body>
		<!-- Wrapper yang mengelilingi seluruh konten untuk mempermudah styling -->
		<div class="min-h-full flex flex-col">

			<!-- Bagian Header -->
			<header>
				@include('partials.header') <!-- Navbar atau elemen header lainnya -->
			</header>

			<!-- Bagian Utama/Konten -->
			<main class="flex-grow">
				@yield('content') <!-- Menampilkan konten dari halaman lainnya -->
			</main>

			<!-- Bagian Footer -->
			<footer class="bg-gray-800 text-white text-center py-4">
				<p>made with a happy heart💗</p>
				@include('partials.footer')
			</footer>

		</div>
	</body>

</html>
