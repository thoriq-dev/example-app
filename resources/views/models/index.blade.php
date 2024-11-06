@extends('layouts.main')

@section('title', 'Car Models') <!-- Judul halaman bisa disesuaikan -->

@section('content')

	{{-- Custom CSS --}}
	<link rel="stylesheet"
		href="{{ asset('assets/css/model.css') }}">

	<div class="container pt-5"> <!-- Menambahkan padding top -->
		<div>
			<h1 class="text-center mt-4 custom-margin">Our Car Models</h1>
			<p class="text-center mb-5 fst-italic text-secondary">"Jelajahi keunggulan dan inovasi dari setiap model Chery. Temukan
				mobil impian Anda yang siap menemani setiap perjalanan"</p>
		</div>

		<div class="row">
			@foreach ($models as $model)
				<div class="col-md-4 mb-4">
					<div class="card h-100"> <!-- h-100 to keep card height consistent -->
						<a href="{{ route('model.show', $model->id) }}"
							class="text-decoration-none">
							<!-- Update to make sure image path is correct -->
							<img src="{{ asset($model->image) }}"
								alt="{{ $model->name }}"
								class="card-img-top img-fluid img-model">

							<div class="card-body">
								<h5 class="card-title text-center">{{ $model->name }}</h5>
								<h6 class="card-subtitle mb-2 text-muted text-center">
									Price: Rp. {{ number_format($model->price, 0, ',', '.') }}
								</h6>
							</div>
						</a>
					</div>
				</div>
			@endforeach
		</div>
	</div>
@endsection
