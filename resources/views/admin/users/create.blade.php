@extends('layouts.app')

@section('content')
	<h1>Tambah Pengguna</h1>

	<form action="{{ route('admin.users.store') }}"
		method="POST">
		@csrf
		<div>
			<label for="name">Nama:</label>
			<input type="text"
				name="name"
				id="name"
				required>
		</div>
		<div>
			<label for="email">Email:</label>
			<input type="email"
				name="email"
				id="email"
				required>
		</div>
		<div>
			<label for="password">Password:</label>
			<input type="password"
				name="password"
				id="password"
				required>
		</div>
		<div>
			<label for="password_confirmation">Konfirmasi Password:</label>
			<input type="password"
				name="password_confirmation"
				id="password_confirmation"
				required>
		</div>
		<div>
			<label for="is_admin">Admin:</label>
			<input type="checkbox"
				name="is_admin"
				id="is_admin"
				value="1">
		</div>
		<button type="submit">Simpan</button>
	</form>
@endsection
