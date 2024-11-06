<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport"
			content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible"
			content="ie=edge">
		<title>Car Details - {{ $car->name }}</title>

		{{-- Bootstrap CSS --}}
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
			crossorigin="anonymous">

		{{-- My Fonts --}}
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap"
			rel="stylesheet">

		{{-- Custom CSS --}}
		<style>
			body {
				font-family: "Poppins", sans-serif;
			}

			.car-details {
				margin-top: 50px;
			}

			.car-image {
				max-width: 100%;
				height: auto;
			}

			.price {
				font-size: 1.5rem;
				color: #555;
			}
		</style>
	</head>

	<body>
		<div class="container car-details">
			<div class="row">
				<div class="col-md-6">
					<img src="{{ asset('assets/img/car/' . $car->image_path) }}"
						alt="{{ $car->name }}"
						class="car-image">
				</div>
				<div class="col-md-6">
					<h1>{{ $car->name }}</h1>
					<p class="price">Starting From: Rp. {{ number_format($car->price, 0, ',', '.') }}</p>
					<p><strong>Description:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sit amet
						convallis velit.</p>
					<a href="{{ url('/') }}"
						class="btn btn-primary">Back to Home</a>
				</div>
			</div>
		</div>

		{{-- Bootstrap JS --}}
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
			crossorigin="anonymous"></script>
	</body>

</html>
