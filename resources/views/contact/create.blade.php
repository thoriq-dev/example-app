@extends('layouts.main')

@section('title', 'Tambah Data Sales')

@section('content')
	<div class="container mt-5 pt-5">
		<h1 class="text-center">Tambah Data Sales Contacts</h1>
		<form action="{{ route('contact.store') }}"
			method="POST"
			enctype="multipart/form-data">
			@csrf

			<div class="form-group mt-4">
				<label for="name">Nama:</label>
				<input type="text"
					class="form-control"
					id="name"
					name="name"
					required>
			</div>

			<div class="form-group">
				<label for="email"
					class="mt-4">Email:</label>
				<input type="email"
					class="form-control"
					id="email"
					name="email"
					required>
			</div>

			<div class="form-group">
				<label for="phone"
					class="mt-4">Telepon:</label>
				<input type="text"
					class="form-control"
					id="phone"
					name="phone"
					required>
			</div>

			<div class="form-group">
				<label for="position"
					class="mt-4">Jabatan:</label>
				<input type="text"
					class="form-control"
					id="position"
					name="position"
					required>
			</div>

			<div class="form-group">
				<label for="photo"
					class="mt-4">Foto:</label>
				<input type="file"
					class="form-control-file"
					id="photo"
					name="photo"
					accept="image/*">
			</div>

			<button type="submit"
				class="btn btn-primary my-4">Tambah Data</button>
		</form>
	</div>
@endsection
