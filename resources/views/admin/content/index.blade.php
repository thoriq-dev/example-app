@extends('layouts.app')

@section('title', 'Content Management')

@section('content')
	<div class="container mx-auto py-8">
		<h1 class="text-3xl font-bold mb-6">Content Management</h1>

		<div class="mb-4">
			<a href="{{ route('admin.content.create') }}"
				class="inline-block bg-blue-500 text-white px-4 py-2 rounded">Add New Content</a>
		</div>

		<table class="min-w-full bg-white border border-gray-300">
			<thead>
				<tr>
					<th class="py-2 px-4 border-b">ID</th>
					<th class="py-2 px-4 border-b">Title</th>
					<th class="py-2 px-4 border-b">Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($contents as $content)
					<tr>
						<td class="py-2 px-4 border-b">{{ $content->id }}</td>
						<td class="py-2 px-4 border-b">{{ $content->title }}</td>
						<td class="py-2 px-4 border-b">
							<a href="{{ route('admin.content.edit', $content) }}"
								class="text-yellow-500">Edit</a>
							<form action="{{ route('admin.content.destroy', $content) }}"
								method="POST"
								class="inline">
								@csrf
								@method('DELETE')
								<button type="submit"
									class="text-red-500">Delete</button>
							</form>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection
