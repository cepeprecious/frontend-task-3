{{-- <!-- Navbar Start -->
<div class="container-fluid" style="background: #eff2f5">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid p-0 pt-5 pb-3 d-flex">
                <a class="navbar-brand" href="#">
                    <img class="img-fluid" src="{{ asset('/img/logo.png') }}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end fw-bold" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('/') ? 'active' : '' }} me-3 fs-5" aria-current="page" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('about-us') ? 'active' : '' }} me-3 fs-5" href="{{ url('/about-us') }}">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('services') ? 'active' : '' }} me-3 fs-5" href="{{ url('/services') }}">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('careers') ? 'active' : '' }} me-3 fs-5" href="{{ url('/careers') }}">Careers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('employers') ? 'active' : '' }} me-3 fs-5" href="{{ url('/employers') }}">Employers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('contact-us') ? 'active' : '' }} fs-5" href="{{ url('/contact-us') }}">Contact us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>    
<!-- Navbar End --> --}}

{{-- Tailwind CSS Code --}}
<nav class="bg-white shadow">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="#" class="flex items-center">
            <img src="{{ asset('img/logo.png') }}" class="mr-3" alt="EQISI Logo"/>
        </a>
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
        </button>
        <div class="font-open-sans hidden w-full lg:block md:w-auto" id="navbar-default">
            <ul class="font-bold text-lg flex flex-col p-4 md:p-0 mt-4 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white">
                <li>
                    <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-orange-600' : 'text-gray-900' }} block py-2 pl-3 pr-4 rounded md:bg-transparent text-gray-900 md:p-0">Home</a>
                </li>
                <li>
                    <a href="{{ route('about-us') }}" class="{{ request()->routeIs('about-us') ? 'text-orange-600' : 'text-gray-900' }} block py-2 pl-3 pr-4 rounded hover:text-orange-600 md:hover:bg-transparent md:border-0 md:hover:text-orange-600 md:p-0">About Us</a>
                </li>
                <li>
                    <a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'text-orange-600' : 'text-gray-900' }} block py-2 pl-3 pr-4 rounded hover:text-orange-600 md:hover:bg-transparent md:border-0 md:hover:text-orange-600 md:p-0">Services</a>
                </li>
                <li>
                    <a href="{{ route('careers') }}" class="{{ request()->routeIs('careers') || request()->routeIs('careers2') ? 'text-orange-600' : 'text-gray-900' }} block py-2 pl-3 pr-4 rounded hover:text-orange-600 md:hover:bg-transparent md:border-0 md:hover:text-orange-600 md:p-0">Careers</a>
                </li>
                <li>
                    <a href="{{ route('employers') }}" class="{{ request()->routeIs('employers') ? 'text-orange-600' : 'text-gray-900' }} block py-2 pl-3 pr-4 rounded hover:text-orange-600 md:hover:bg-transparent md:border-0 md:hover:text-orange-600 md:p-0">Employers</a>
                </li>
                <li>
                    <a href="{{ route('contact-us') }}" class="{{ request()->routeIs('contact-us') ? 'text-orange-600' : 'text-gray-900' }} block py-2 pl-3 pr-4 rounded hover:text-orange-600 md:hover:bg-transparent md:border-0 md:hover:text-orange-600 md:p-0">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
  