<form action="{{ route('cars.update', $car->id) }}"
	method="POST"
	enctype="multipart/form-data">
	@csrf
	@method('PUT') <!-- Pastikan menggunakan metode PUT -->
	<input type="text"
		name="make"
		placeholder="Make"
		required>
	<input type="text"
		name="model"
		placeholder="Model"
		required>
	<input type="number"
		name="year"
		placeholder="Year"
		required>
	<input type="text"
		name="engine"
		placeholder="Engine"
		required>
	<input type="number"
		name="power"
		placeholder="Power"
		required>
	<input type="text"
		name="fuel_type"
		placeholder="Fuel Type"
		required>
	<input type="number"
		name="seating_capacity"
		placeholder="Seating Capacity"
		required>
	<textarea name="description"
	 placeholder="Description"
	 required></textarea>
	<input type="file"
		name="image"
		accept="image/*"
		required>
	<button type="submit">Submit</button>
</form>
