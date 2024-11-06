@extends('layouts.main')

@section('title', 'Car Models')

@section('content')
	<div class="container mt-5 pt-5">
		<h1 class="mb-4 text-center">Add New Car Model</h1>

		<form action="{{ route('cars.store') }}"
			method="POST"
			enctype="multipart/form-data">
			@csrf

			<!-- Make -->
			<div class="mb-3">
				<label for="make"
					class="form-label">Make</label>
				<input type="text"
					class="form-control"
					id="make"
					name="make"
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
				 required></textarea>
			</div>

			<!-- Price -->
			<div class="mb-3">
				<label for="price"
					class="form-label">Price</label>
				<input type="number"
					class="form-control"
					id="price"
					name="price"
					required>
			</div>

			<!-- Car Image -->
			<div class="mb-3">
				<label for="image"
					class="form-label">Car Image</label>
				<input class="form-control"
					type="file"
					id="image"
					name="image"
					required>
			</div>

			<!-- Submit Button -->
			<button type="submit"
				class="btn btn-primary">Add Car</button>
		</form>
	</div>
@endsection
