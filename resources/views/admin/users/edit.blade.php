@extends('layouts.app')

@section('content')
	<h1>Edit Pengguna</h1>

	<form action="{{ route('admin.users.update', $user->id) }}"
		method="POST">
		@csrf
		@method('PUT')
		<div>
			<label for="name">Nama:</label>
			<input type="text"
				name="name"
				id="name"
				value="{{ $user->name }}"
				required>
		</div>
		<div>
			<label for="email">Email:</label>
			<input type="email"
				name="email"
				id="email"
				value="{{ $user->email }}"
				required>
		</div>
		<div>
			<label for="password">Password (biarkan kosong jika tidak ingin mengubah):</label>
			<input type="password"
				name="password"
				id="password">
		</div>
		<div>
			<label for="password_confirmation">Konfirmasi Password:</label>
			<input type="password"
				name="password_confirmation"
				id="password_confirmation">
		</div>
		<div>
			<label for="is_admin">Admin:</label>
			<input type="checkbox"
				name="is_admin"
				id="is_admin"
				value="1"
				{{ $user->is_admin ? 'checked' : '' }}>
		</div>
		<button type="submit">Simpan</button>
	</form>
@endsection
