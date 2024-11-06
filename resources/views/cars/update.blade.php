@extends('layouts.main')

@section('title', 'Car Models')
{{-- My Customs CSS --}}
<link rel="stylesheet"
	href="{{ asset('assets/css/update-cars-style.css') }}">

@section('content')

	<div class="container">
		<h1>Edit Car</h1>

		@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif

		<!-- Form untuk mengedit data mobil -->
		<form action="{{ route('cars.update', $car->id) }}"
			method="POST"
			enctype="multipart/form-data">
			@csrf
			@method('PUT')

			<!-- Make -->
			<div class="mb-3">
				<label for="make"
					class="form-label">Make</label>
				<input type="text"
					class="form-control"
					id="make"
					name="make"
					value="{{ old('make', $car->make) }}"
					required>
			</div>

			<!-- Model -->
			<div class="mb-3">
				<label for="model"
					class="form-label">Model</label>
				<input type="text"
					class="form-control"
					id="model"
					name="model"
					value="{{ old('model', $car->model) }}"
					required>
			</div>

			<!-- Year -->
			<div class="mb-3">
				<label for="year"
					class="form-label">Year</label>
				<input type="number"
					class="form-control"
					id="year"
					name="year"
					value="{{ old('year', $car->year) }}"
					required>
			</div>

			<!-- Engine -->
			<div class="mb-3">
				<label for="engine"
					class="form-label">Engine</label>
				<input type="text"
					class="form-control"
					id="engine"
					name="engine"
					value="{{ old('engine', $car->engine) }}"
					required>
			</div>

			<!-- Power -->
			<div class="mb-3">
				<label for="power"
					class="form-label">Power (HP)</label>
				<input type="number"
					class="form-control"
					id="power"
					name="power"
					value="{{ old('power', $car->power) }}"
					required>
			</div>

			<!-- Fuel Type -->
			<div class="mb-3">
				<label for="fuel_type"
					class="form-label">Fuel Type</label>
				<input type="text"
					class="form-control"
					id="fuel_type"
					name="fuel_type"
					value="{{ old('fuel_type', $car->fuel_type) }}"
					required>
			</div>

			<!-- Seating Capacity -->
			<div class="mb-3">
				<label for="seating_capacity"
					class="form-label">Seating Capacity</label>
				<input type="number"
					class="form-control"
					id="seating_capacity"
					name="seating_capacity"
					value="{{ old('seating_capacity', $car->seating_capacity) }}"
					required>
			</div>

			<!-- Description -->
			<div class="mb-3">
				<label for="description"
					class="form-label">Description</label>
				<textarea class="form-control"
				 id="description"
				 name="description"
				 rows="3"
				 required>{{ old('description', $car->description) }}</textarea>
			</div>

			<!-- Price -->
			<div class="mb-3">
				<label for="price"
					class="form-label">Price</label>
				<input type="number"
					class="form-control"
					id="price"
					name="price"
					value="{{ old('price', $car->price) }}"
					required>
			</div>

			<!-- Car Image -->
			<div class="mb-3">
				<label for="image"
					class="form-label">Car Image</label>
				<input class="form-control"
					type="file"
					id="image"
					name="image">
				<!-- Optional: Show current image -->
				<img src="{{ asset($model->image) }}"
					alt="Current Car Image"
					width="150"
					class="mt-2">
			</div>

			<!-- Submit Button -->
			<button type="submit"
				class="btn btn-primary">Update Car</button>
			<a href="{{ route('cars.index') }}"
				class="btn btn-secondary">Cancel</a>
		</form>
	</div>

@endsection
