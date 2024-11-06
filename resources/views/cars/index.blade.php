@extends('layouts.main')

@section('title', 'Cars') <!-- Judul halaman bisa disesuaikan -->

@section('content')

	{{-- My Customs CSS --}}
	<link rel="stylesheet"
		href="{{ asset('assets/css/') }}">

	<div class="container pt-5"> <!-- Menambahkan padding top -->
		<div>
			<h1 class="text-center mt-4 custom-margin">Cars</h1>
		</div>

		<div class="row">
			@foreach ($models as $model)
				<div class="col-md-4 mb-4">
					<div class="card">
						<a href="{{ route('model.show', $model->id) }}"
							class="text-decoration-none">
							<img src="{{ asset('assets/img/models/' . $model->image_path) }}"
								class="card-img-top img-model"
								alt="{{ $model->name }}">
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
