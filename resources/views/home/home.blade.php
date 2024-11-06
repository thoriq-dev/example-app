@extends('layouts.main')

@section('title', 'Home')

@section('content')
	<div class="container ">

		<!-- Bootstrap icons-->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
			rel="stylesheet" />

		<!-- Core theme CSS (includes Bootstrap)-->
		<link rel="stylesheet"
			href="{{ asset('assets/css/home.css') }}">

		{{-- My Style --}}
		<link rel="stylesheet"
			href="{{ asset('assets/css/my-style-home.css') }}">

		{{-- Header --}}
		<header class="bg-dark py-5 mt-5">
			<div class="container px-5">
				<div class="row gx-5 justify-content-center">
					<div class="col-lg-6">
						<div class="text-center my-5">
							<h1 class="display-5 fw-bolder text-white mb-2 highlight">Rasakan Inovasi dan Kenyamanan dengan Mobil Chery</h1>
							<p class="text-white-50 font-weight-bold shadow highlight ">Temukan pengalaman
								berkendara yang tak tertandingi dengan
								mobil Chery, yang
								menggabungkan desain modern, teknologi canggih, dan efisiensi bahan bakar. </p>
							<div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
								<a class="btn btn-primary btn-lg px-4 me-sm-3"
									href="models">Lihat Model</a>
								<a class="btn btn-outline-light btn-lg px-4"
									href="#pricing">Penawaran Special</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<!-- Features section-->
		<!-- Pricing section-->
		<section class="bg-light py-5 border-bottom text-center"
			id="pricing">
			<div class="container px-5 my-5">
				<div class="text-center mb-5">
					<h2 class="fw-bolder">Promo Cicilan Mobil Menarik</h2>
					<p class="lead mb-0">Dapatkan mobil impian Anda dengan cicilan ringan dan banyak keuntungan!</p>
				</div>
				<div class="row gx-5 justify-content-center">
					<!-- Pricing card non-member-->
					<div class="col-lg-6 col-xl-4">
						<div class="card mb-5 mb-xl-0">
							<div class="card-body p-5">
								<div class="small text-uppercase fw-bold text-muted">Cicilan Regular</div>
								<div class="mb-3 text-center">
									<span class="display-4 fw-bold price">Rp 2.000.000</span>
									<span class="text-muted">/ bulan</span>
								</div>
								<ul class="list-unstyled mb-4">
									<li class="mb-2">
										<i class="bi bi-check text-primary"></i>
										Cicilan hingga 5 tahun
									</li>
									<li class="mb-2">
										<i class="bi bi-check text-primary"></i>
										Diskon 10% untuk pembayaran awal
									</li>
									<li class="mb-2">
										<i class="bi bi-check text-primary"></i>
										Asuransi mobil gratis selama 1 tahun
									</li>
									<li class="mb-2">
										<i class="bi bi-check text-primary"></i>
										Layanan purna jual dan perawatan gratis
									</li>
								</ul>
								<div class="d-grid"><a class="btn btn-outline-primary"
										href="#!">Pilih Rencana</a></div>
							</div>
						</div>
					</div>
					<!-- Pricing card pro-->
					<div class="col-lg-6 col-xl-4">
						<div class="card mb-5 mb-xl-0">
							<div class="card-body p-5">
								<div class="small text-uppercase fw-bold">
									<i class="bi bi-star-fill text-warning"></i>
									Cicilan Pro
								</div>
								<div class="mb-3 text-center">
									<span class="display-4 fw-bold price">Rp 3.500.000</span>
									<span class="text-muted">/ bulan</span>
								</div>
								<ul class="list-unstyled mb-4">
									<li class="mb-2">
										<i class="bi bi-check text-primary"></i>
										Cicilan hingga 5 tahun
									</li>
									<li class="mb-2">
										<i class="bi bi-check text-primary"></i>
										Diskon 15% untuk pembayaran awal
									</li>
									<li class="mb-2">
										<i class="bi bi-check text-primary"></i>
										Asuransi mobil gratis selama 2 tahun
									</li>
									<li class="mb-2">
										<i class="bi bi-check text-primary"></i>
										Servis gratis setiap 6 bulan
									</li>
									<li class="mb-2">
										<i class="bi bi-check text-primary"></i>
										Konsultasi purna jual gratis
									</li>
								</ul>
								<div class="d-grid"><a class="btn btn-primary"
										href="#!">Pilih Rencana</a></div>
							</div>
						</div>
					</div>
					<!-- Pricing card enterprise-->
					<div class="col-lg-6 col-xl-4">
						<div class="card">
							<div class="card-body p-5">
								<div class="small text-uppercase fw-bold ">
									<i class="bi bi-star-fill star-purple"></i>
									Cicilan Enterprise
								</div>
								<div class="mb-3 text-center">
									<span class="display-4 fw-bold price">Rp 5.000.000</span>
									<span class="text-muted">/ bulan</span>
								</div>
								<ul class="list-unstyled mb-4">
									<li class="mb-2">
										<i class="bi bi-check text-primary"></i>
										Cicilan hingga 5 tahun
									</li>
									<li class="mb-2">
										<i class="bi bi-check text-primary"></i>
										Diskon 20% untuk pembayaran awal
									</li>
									<li class="mb-2">
										<i class="bi bi-check text-primary"></i>
										Asuransi mobil gratis selama 3 tahun
									</li>
									<li class="mb-2">
										<i class="bi bi-check text-primary"></i>
										Servis dan perawatan gratis selama 3 tahun
									</li>
									<li class="mb-2">
										<i class="bi bi-check text-primary"></i>
										Konsultasi dan dukungan purna jual 24/7
									</li>
								</ul>
								<div class="d-grid"><a class="btn btn-outline-primary"
										href="#!">Pilih Rencana</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Testimonials section-->
		<section class="py-5 border-bottom">
			<div class="container px-5 my-5 ">
				<div class="text-center mb-5">
					<h2 class="fw-bolder">Customer testimonials</h2>
					<p class="lead mb-0">Our customers love working with us</p>
				</div>
				<div class="row gx-5 justify-content-center">
					<div class="col-lg-6">
						<!-- Testimonial 1-->
						<div class="card mb-4">
							<div class="card-body p-4">
								<div class="d-flex">
									<div class="flex-shrink-0"><i class="bi bi-chat-right-quote-fill text-primary fs-1"></i></div>
									<div class="ms-4">
										<p class="mb-1"><i>"Tim ini sangat membantu dalam proses pembelian mobil kami. Pelayanan yang luar biasa!
												Kami
												pasti akan menghubungi mereka lagi di masa depan"</i></p>
										<div class="small text-muted">- Thoriq , Tangerang</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Testimonial 2-->
						<div class="card">
							<div class="card-body p-4">
								<div class="d-flex">
									<div class="flex-shrink-0"><i class="bi bi-chat-right-quote-fill text-primary fs-1"></i></div>
									<div class="ms-4">
										<p class="mb-1"><i>"Seluruh tim memberikan bantuan luar biasa dalam mengkoordinasikan segala sesuatunya
												untuk
												perusahaan dan merek kami. Kami sangat puas dengan pelayanan mereka dan pasti akan menggunakan jasa mereka
												lagi di masa mendatang untuk proyek tambahan"</i></p>
										<div class="small text-muted">- Bayquni, Jakarta Pusat</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Bootstrap core JS-->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
		<!-- Core theme JS-->
		<script src="{{ asset('assets/js/home.js') }}"></script>

		{{-- <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script> --}}

	</div>
@endsection
