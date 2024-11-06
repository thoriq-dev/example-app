<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

	<head>
		<meta charset="utf-8">
		<meta name="viewport"
			content="width=device-width, initial-scale=1">
		<link rel="icon"
			href="{{ asset('assets/img/logo/favicon.svg') }}"
			type="image/svg+xml">
		<title>@yield('title', 'Default Title')</title>
		@vite(['resources/css/app.css', 'resources/js/app.js'])
	</head>

	<body>
		<x-navigation>
			<div class="container mx-auto">
				@yield('content') <!-- Pastikan menggunakan yield di sini -->
			</div>
		</x-navigation>
	</body>

</html>
