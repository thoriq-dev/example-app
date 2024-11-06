@extends('layouts.main')

@section('title', $model->model) <!-- Judul halaman menggunakan nama mobil -->

@section('content')

	<link rel="stylesheet"
		href="{{ asset('assets/css/model-show.css') }}">

	<div id="carouselExampleIndicators"
		class="carousel slide"
		data-bs-ride="carousel">
		<div class="carousel-indicators">
			@foreach ($model->images as $index => $image)
				<button type="button"
					data-bs-target="#carouselExampleIndicators"
					data-bs-slide-to="{{ $index }}"
					class="{{ $index === 0 ? 'active' : '' }}"
					aria-current="true"
					aria-label="Slide {{ $index + 1 }}"></button>
			@endforeach
		</div>
		<div class="carousel-inner">
			@foreach ($model->images as $index => $image)
				<div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
					<img src="{{ asset('car_images/' . $image->filename) }}"
						class="d-block w-100"
						alt="Car Image">
				</div>
			@endforeach
		</div>
		<button class="carousel-control-prev"
			type="button"
			data-bs-target="#carouselExampleIndicators"
			data-bs-slide="prev">
			<span class="carousel-control-prev-icon"
				aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next"
			type="button"
			data-bs-target="#carouselExampleIndicators"
			data-bs-slide="next">
			<span class="carousel-control-next-icon"
				aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>

	<div class="container pt-5">
		<h1 class="text-center mt-4 custom-margin">{{ $model->name }}</h1>
	</div>

	<div class="row mb-5">
		<div class="col-md-6">
			<h3>Specifications</h3>
			<ul class="list-unstyled">
				<li><strong>Price:</strong> Rp. {{ number_format($model->price, 0, ',', '.') }}</li>
				<li><strong>Engine:</strong> {{ $model->engine }}</li>
				<li><strong>Power:</strong> {{ $model->power }} HP</li>
				<li><strong>Fuel Type:</strong> {{ $model->fuel_type }}</li>
				<li><strong>Seating Capacity:</strong> {{ $model->seating_capacity }}</li>
			</ul>
		</div>
		<div class="col-md-6">
			<h3>Description</h3>
			<p>{{ $model->description }}</p>
		</div>
	</div>

	<div class="text-center">
		<a href="{{ route('models.index') }}"
			class="btn btn-primary mb-4">Back to Models</a>
	</div>

@endsection
