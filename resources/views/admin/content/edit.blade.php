@extends('layouts.app')

@section('title', 'Create Content')

@section('content')
	<div class="container mx-auto py-8">
		<h1 class="text-3xl font-bold mb-6">Create New Content</h1>

		<form action="{{ route('admin.content.store') }}"
			method="POST">
			@csrf
			<div class="mb-4">
				<label for="title"
					class="block text-sm font-medium text-gray-700">Title</label>
				<input type="text"
					name="title"
					id="title"
					class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm"
					required>
			</div>
			<div class="mb-4">
				<label for="body"
					class="block text-sm font-medium text-gray-700">Body</label>
				<textarea name="body"
				 id="body"
				 class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm"
				 required></textarea>
			</div>
			<button type="submit"
				class="bg-blue-500 text-white px-4 py-2 rounded">Create</button>
		</form>
	</div>
@endsection
