@extends('layouts.main')

@section('title', 'Team Contacts')

@section('content')

	{{-- CSS --}}
	<link rel="stylesheet"
		href="{{ asset('assets/css/sales-contact.css') }}">

	<div class="container bg-white py-5 mt-5">
		<div class="row">

			<!-- Heading section -->
			<div class="col-lg-4">
				<h2 class="display-5 fw-bold text-dark">Sales Team</h2>
				<p class="mt-3 text-muted">Hubungi kami sekarang untuk penawaran menarik, kendaraan berkualitas, dan layanan terbaik
					dari Chery</p>
			</div>

			<!-- Sales team members section -->
			<div class="col-lg-8">
				<div class="row row-cols-1 row-cols-sm-2 g-4">
					@foreach ($contacts as $salescontact)
						<div class="col">
							<div class="d-flex align-items-center">
								<img
									src="{{ $salescontact->photo ? asset('images/' . ltrim($salescontact->photo, 'images/')) : asset('images/default-avatar.png') }}"
									class="rounded-circle me-3"
									alt="{{ $salescontact->name }}"
									width="64"
									height="64">

								<div>
									<h5 class="mb-0 fw-semibold">{{ $salescontact->name }}</h5>
									<small class="text-primary">{{ $salescontact->position }}</small>
									<p class="mb-0">Email: {{ $salescontact->email }}</p>
									<p class="mb-0">Phone: {{ $salescontact->phone }}</p>
									<a href="mailto:{{ $salescontact->email }}"
										class="btn btn-primary btn-sm mt-2">Contact</a>
								</div>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>

@endsection
