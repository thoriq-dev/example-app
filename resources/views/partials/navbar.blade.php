<link rel="stylesheet"
	href="{{ asset('assets/css/navbar.css') }}">

<nav class="bg-gray-800">
	<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
		<div class="flex h-16 items-center justify-between">
			<!-- Logo di pojok kanan atas -->
			<div class="flex-shrink-0">
				<img class="h-8 w-8"
					src="{{ asset('assets/img/logo/favicon.svg') }}"
					alt="Logo Cherry">
			</div>

			<!-- Menu di tengah -->
			<div class="hidden md:flex md:ml-10">
				<div class="flex items-baseline space-x-4">
					<a href="{{ url('/') }}"
						class="{{ Request::is('/') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white transition' }} rounded-md px-3 py-2 text-sm font-medium no-underline"
						aria-current="page">
						Home
					</a>
					<a href="{{ route('models.index') }}"
						class="{{ Request::is('models') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white transition' }} rounded-md px-3 py-2 text-sm font-medium no-underline">
						Car Models
					</a>
					<a href="{{ url('/contact') }}"
						class="{{ Request::is('contact') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white transition' }} rounded-md px-3 py-2 text-sm font-medium no-underline">
						Team Contacts
					</a>
					<a href="{{ url('/login') }}"
						class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium no-underline">
						Login
					</a>
					<a href="{{ url('/register') }}"
						class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium no-underline">
						Register
					</a>
				</div>
			</div>

			<!-- Tombol Menu Hamburger -->
			<div class="block md:hidden">
				<button @click="isOpen = !isOpen"
					type="button"
					class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:bg-gray-700 focus:text-white"
					aria-controls="mobile-menu"
					aria-expanded="false">
					<span class="sr-only">Buka menu utama</span>
					<svg class="block h-6 w-6"
						xmlns="http://www.w3.org/2000/svg"
						fill="none"
						viewBox="0 0 24 24"
						stroke="currentColor"
						aria-hidden="true">
						<path stroke-linecap="round"
							stroke-linejoin="round"
							stroke-width="2"
							d="M4 6h16M4 12h16M4 18h16" />
					</svg>
				</button>
			</div>
		</div>
	</div>

	<!-- Menu mobile, tampilkan/sembunyikan berdasarkan status menu -->
	<div class="md:hidden"
		x-show="isOpen"
		x-transition>
		<div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
			<a href="{{ url('/') }}"
				class="{{ Request::is('/') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white transition' }} block rounded-md px-3 py-2 text-base font-medium no-underline"
				aria-current="page">
				Beranda
			</a>
			<a href="{{ route('models.index') }}"
				class="{{ Request::is('models') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white transition' }} block rounded-md px-3 py-2 text-base font-medium no-underline">
				Model
			</a>
			<a href="{{ url('/contact') }}"
				class="{{ Request::is('contact') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white transition' }} block rounded-md px-3 py-2 text-base font-medium no-underline">
				Kontak Tim
			</a>
			<a href="{{ url('/login') }}"
				class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium no-underline">
				Login
			</a>
			<a href="{{ url('/register') }}"
				class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium no-underline">
				Register
			</a>
		</div>
	</div>
</nav>
