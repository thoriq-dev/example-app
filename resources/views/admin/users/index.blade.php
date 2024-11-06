@extends('layouts.app')

@section('content')
	<h1>Daftar Pengguna</h1>
	<a href="{{ route('admin.users.create') }}">Tambah Pengguna</a>

	@if (session('success'))
		<div>{{ session('success') }}</div>
	@endif

	<table>
		<thead>
			<tr>
				<th>Nama</th>
				<th>Email</th>
				<th>Admin</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($users as $user)
				<tr>
					<td>{{ $user->name }}</td>
					<td>{{ $user->email }}</td>
					<td>{{ $user->is_admin ? 'Ya' : 'Tidak' }}</td>
					<td>
						<a href="{{ route('admin.users.edit', $user->id) }}">Edit</a>
						<form action="{{ route('admin.users.destroy', $user->id) }}"
							method="POST"
							style="display:inline;">
							@csrf
							@method('DELETE')
							<button type="submit">Hapus</button>
						</form>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection
