<!DOCTYPE html>
<html lang="en"
	class="h-full bg-white">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport"
			content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible"
			content="ie=edge">

		{{-- Favicon --}}
		<link rel="icon"
			href="{{ asset('assets/img/logo/favicon.svg') }}"
			type="image/svg+xml">

		{{-- Tailwind CSS --}}
		@vite('resources/css/app.css')

		{{-- Bootstrap CSS --}}
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
			crossorigin="anonymous">

		{{-- Alpine JS --}}
		<script defer
			src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

		{{-- My Fonts: Poppins --}}
		<link rel="preconnect"
			href="https://fonts.googleapis.com">
		<link rel="preconnect"
			href="https://fonts.gstatic.com"
			crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap"
			rel="stylesheet">

		{{-- Custom CSS --}}
		<style>
			body {
				font-family: "Poppins", Arial, Helvetica, sans-serif;
			}
		</style>

		<title>@yield('title')</title>
	</head>

	<body class="h-full">

		<div class="min-h-full">
			<!-- Include Navbar -->
			@include('partials.navbar')
