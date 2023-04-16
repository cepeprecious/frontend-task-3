@extends('layouts.app')

@section('title', 'EQISI | Careers')

<!-- Content -->
@section('content')

    {{-- <div class="grid h-screen px-4 bg-white place-content-center">
        <div class="text-center">
            <h1 class="font-black text-gray-200 text-9xl">404</h1>
            <p class="text-2xl font-bold tracking-tight text-gray-900 sm:text-4xl">Uh-oh!</p>
            <p class="mt-4 text-gray-500">We can't find that page.</p>
            <a href="{{ route('home') }}" class="inline-block px-5 py-3 mt-6 text-sm font-medium text-white bg-indigo-600 rounded hover:bg-indigo-700 focus:outline-none focus:ring">
                Go Back Home
            </a>
        </div>
    </div> --}}

    <section class="mb-20 px-0 pt-0 lg:px-24 lg:pt-24">
        <div class="relative overflow-hidden bg-no-repeat bg-cover" style="background-position: 50%; background-image: url('{{ asset('img/group-asia-young-creative-people-smart-casual-wear-smiling-arms-crossed-creative-office-workplace.jpg') }}'); height: 700px;">
            <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full bg-fixed">
                <div class="flex justify-center xl:justify-start items-center h-full m-0 xl:ml-20">
                    <div class="text-orange-600 px-6 md:px-12 bg-white bg-opacity-70 p-10 rounded-lg">
                        <h1 class="font-oswald text-5xl md:text-6xl xl:text-8xl font-bold tracking-tight mb-9">
                            Be part of our team
                        </h1>
                        <p class="font-montserrat text-3xl">We're looking for passionate people.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full xl:w-3/5 mx-auto overflow-hidden">
        <h1 class="font-bold text-5xl mb-24 text-center">
            <span class="font-montserrat border-b-4 border-gray-900 text-center px-4">List of Jobs</span>
        </h1>
        <div class="flex flex-wrap mx-4">
            <div class="w-full md:w-1/2 px-0 md:px-10 mb-12">
                <div class="p-10 bg-white border border-gray-100 rounded-3xl shadow-lg text-center">
                    <a href="#">
                        <h5 class="font-montserrat mb-6 text-2xl md:text-3xl lg:text-4xl font-bold tracking-tight text-gray-900">Lorem Ipsum</h5>
                    </a>
                    <p class="font-montserrat mb-10 font-medium text-gray-700">
                        Lorem ipsum dolor sit amet, consectetur incididunt ut labore et dolore magna aliqua nostrud exercitation ullamco laboris nisi ut.
                    </p>
                    <div class="flex justify-around items-center flex-col mb-10 md:flex-row md:flex-wrap">
                        <div class="bg-gray-200 text-black px-2 py-1 text-base mb-2 lg:mb-0 md:mr-4 md:flex md:flex-col md:justify-center">
                            <span class="font-medium"><i class="fa-solid fa-briefcase mr-2"></i>Full-Time</span>
                        </div>
                        <div class="bg-gray-200 text-black px-2 py-1 text-base md:flex md:flex-col md:justify-center">
                            <span class="font-medium"><i class="fa-solid fa-briefcase mr-2"></i>Monday - Friday</span>
                        </div>
                    </div>                                          
                    <a href="{{ route('careers2') }}" class="inline-flex items-center px-9 py-3 text-xl lg:text-2xl font-bold text-center text-white bg-orange-500 rounded-lg hover:bg-orange-600">
                        Apply Now
                    </a>
                </div>
            </div>                          
            <div class="w-full md:w-1/2 px-0 md:px-10 mb-12">
                <div class="p-10 bg-white border border-gray-100 rounded-3xl shadow-lg text-center">
                    <a href="#">
                        <h5 class="font-montserrat mb-6 text-2xl md:text-3xl lg:text-4xl font-bold tracking-tight text-gray-900">Lorem Ipsum</h5>
                    </a>
                    <p class="font-montserrat mb-10 font-medium text-gray-700">
                        Lorem ipsum dolor sit amet, consectetur incididunt ut labore et dolore magna aliqua nostrud exercitation ullamco laboris nisi ut.
                    </p>
                    <div class="flex justify-around items-center flex-col mb-10 md:flex-row md:flex-wrap">
                        <div class="bg-gray-200 text-black px-2 py-1 text-md mb-2 lg:mb-0 md:mr-4 md:flex md:flex-col md:justify-center">
                            <span class="font-medium"><i class="fa-solid fa-briefcase mr-2"></i>Full-Time</span>
                        </div>
                        <div class="bg-gray-200 text-black px-2 py-1 text-md md:flex md:flex-col md:justify-center">
                            <span class="font-medium"><i class="fa-solid fa-briefcase mr-2"></i>Monday - Friday</span>
                        </div>
                    </div>                                          
                    <a href="{{ route('careers2') }}" class="inline-flex items-center px-9 py-3 text-xl lg:text-2xl font-bold text-center text-white bg-orange-500 rounded-lg hover:bg-orange-600">
                        Apply Now
                    </a>
                </div>
            </div>
            <div class="w-full md:w-1/2 px-0 md:px-10 mb-12">
                <div class="p-10 bg-white border border-gray-100 rounded-3xl shadow-lg text-center">
                    <a href="#">
                        <h5 class="font-montserrat mb-6 text-2xl md:text-3xl lg:text-4xl font-bold tracking-tight text-gray-900">Lorem Ipsum</h5>
                    </a>
                    <p class="font-montserrat mb-10 font-medium text-gray-700">
                        Lorem ipsum dolor sit amet, consectetur incididunt ut labore et dolore magna aliqua nostrud exercitation ullamco laboris nisi ut.
                    </p>
                    <div class="flex justify-around items-center flex-col mb-10 md:flex-row md:flex-wrap">
                        <div class="bg-gray-200 text-black px-2 py-1 text-md mb-2 lg:mb-0 md:mr-4 md:flex md:flex-col md:justify-center">
                            <span class="font-medium"><i class="fa-solid fa-briefcase mr-2"></i>Full-Time</span>
                        </div>
                        <div class="bg-gray-200 text-black px-2 py-1 text-md md:flex md:flex-col md:justify-center">
                            <span class="font-medium"><i class="fa-solid fa-briefcase mr-2"></i>Monday - Friday</span>
                        </div>
                    </div>                                          
                    <a href="{{ route('careers2') }}" class="inline-flex items-center px-9 py-3 text-xl lg:text-2xl font-bold text-center text-white bg-orange-500 rounded-lg hover:bg-orange-600">
                        Apply Now
                    </a>
                </div>
            </div> 
            <div class="w-full md:w-1/2 px-0 md:px-10 mb-12">
                <div class="p-10 bg-white border border-gray-100 rounded-3xl shadow-lg text-center">
                    <a href="#">
                        <h5 class="font-montserrat mb-6 text-2xl md:text-3xl lg:text-4xl font-bold tracking-tight text-gray-900">Lorem Ipsum</h5>
                    </a>
                    <p class="font-montserrat mb-10 font-medium text-gray-700">
                        Lorem ipsum dolor sit amet, consectetur incididunt ut labore et dolore magna aliqua nostrud exercitation ullamco laboris nisi ut.
                    </p>
                    <div class="flex justify-around items-center flex-col mb-10 md:flex-row md:flex-wrap">
                        <div class="bg-gray-200 text-black px-2 py-1 text-md mb-2 lg:mb-0 md:mr-4 md:flex md:flex-col md:justify-center">
                            <span class="font-medium"><i class="fa-solid fa-briefcase mr-2"></i>Full-Time</span>
                        </div>
                        <div class="bg-gray-200 text-black px-2 py-1 text-md md:flex md:flex-col md:justify-center">
                            <span class="font-medium"><i class="fa-solid fa-briefcase mr-2"></i>Monday - Friday</span>
                        </div>
                    </div>                                          
                    <a href="{{ route('careers2') }}" class="inline-flex items-center px-9 py-3 text-xl lg:text-2xl font-bold text-center text-white bg-orange-500 rounded-lg hover:bg-orange-600">
                        Apply Now
                    </a>
                </div>
            </div>
            <div class="w-full md:w-1/2 px-0 md:px-10 mb-12">
                <div class="p-10 bg-white border border-gray-100 rounded-3xl shadow-lg text-center">
                    <a href="#">
                        <h5 class="font-montserrat mb-6 text-2xl md:text-3xl lg:text-4xl font-bold tracking-tight text-gray-900">Lorem Ipsum</h5>
                    </a>
                    <p class="font-montserrat mb-10 font-medium text-gray-700">
                        Lorem ipsum dolor sit amet, consectetur incididunt ut labore et dolore magna aliqua nostrud exercitation ullamco laboris nisi ut.
                    </p>
                    <div class="flex justify-around items-center flex-col mb-10 md:flex-row md:flex-wrap">
                        <div class="bg-gray-200 text-black px-2 py-1 text-md mb-2 lg:mb-0 md:mr-4 md:flex md:flex-col md:justify-center">
                            <span class="font-medium"><i class="fa-solid fa-briefcase mr-2"></i>Full-Time</span>
                        </div>
                        <div class="bg-gray-200 text-black px-2 py-1 text-md md:flex md:flex-col md:justify-center">
                            <span class="font-medium"><i class="fa-solid fa-briefcase mr-2"></i>Monday - Friday</span>
                        </div>
                    </div>                                          
                    <a href="{{ route('careers2') }}" class="inline-flex items-center px-9 py-3 text-xl lg:text-2xl font-bold text-center text-white bg-orange-500 rounded-lg hover:bg-orange-600">
                        Apply Now
                    </a>
                </div>
            </div>
            <div class="w-full md:w-1/2 px-0 md:px-10 mb-12">
                <div class="p-10 bg-white border border-gray-100 rounded-3xl shadow-lg text-center">
                    <a href="#">
                        <h5 class="font-montserrat mb-6 text-2xl md:text-3xl lg:text-4xl font-bold tracking-tight text-gray-900">Lorem Ipsum</h5>
                    </a>
                    <p class="font-montserrat mb-10 font-medium text-gray-700">
                        Lorem ipsum dolor sit amet, consectetur incididunt ut labore et dolore magna aliqua nostrud exercitation ullamco laboris nisi ut.
                    </p>
                    <div class="flex justify-around items-center flex-col mb-10 md:flex-row md:flex-wrap">
                        <div class="bg-gray-200 text-black px-2 py-1 text-md mb-2 lg:mb-0 md:mr-4 md:flex md:flex-col md:justify-center">
                            <span class="font-medium"><i class="fa-solid fa-briefcase mr-2"></i>Full-Time</span>
                        </div>
                        <div class="bg-gray-200 text-black px-2 py-1 text-md md:flex md:flex-col md:justify-center">
                            <span class="font-medium"><i class="fa-solid fa-briefcase mr-2"></i>Monday - Friday</span>
                        </div>
                    </div>                                          
                    <a href="{{ route('careers2') }}" class="inline-flex items-center px-9 py-3 text-xl lg:text-2xl font-bold text-center text-white bg-orange-500 rounded-lg hover:bg-orange-600">
                        Apply Now
                    </a>
                </div>
            </div>
        </div>
    </section>

    
    <nav aria-label="Page navigation example">
        <ul class="flex items-center justify-center -space-x-px font-semibold md:font-normal text-xl md:text-4xl mt-16 mb-28">
            {{-- <li>
                <a href="#" class="block px-7 py-2 leading-tight text-black rounded-r-lg hover:text-orange-500">
                    <span class="sr-only">Next</span>
                    <i class="fa-solid fa-chevron-left fa-sm"></i>
                </a>
            </li> --}}
            <li>
                <a href="#" aria-current="page" class="px-6 md:px-7 py-2 leading-tight text-orange-500 hover:text-orange-500">1</a>
            </li>
            <li>
                <a href="#" class="px-6 py-2 md:px-7 leading-tight text-black hover:text-orange-500">2</a>
            </li>
            <li>
                <a href="#" class="px-6 py-2 md:px-7 leading-tight text-black hover:text-orange-500">3</a>
            </li>
            <li>
                <a href="#" class="px-6 py-2 md:px-7 leading-tight text-black hover:text-orange-500">4</a>
            </li>
            <li>
                <a href="#" class="px-6 py-2 md:px-7 leading-tight text-black hover:text-orange-500">5</a>
            </li>
            <li>
                <a href="#" class="block px-6 py-2 md:px-7 leading-tight text-black rounded-r-lg hover:text-orange-500">
                    <span class="sr-only">Next</span>
                    <i class="fa-solid fa-chevron-right fa-sm"></i>
                </a>
            </li>
        </ul>
    </nav>
      
@endsection

<!-- CSS -->
@section('css')
    {{-- <link rel="stylesheet" href="{{ asset('css/home.css') }}"> --}}
@endsection

<!-- JS -->
@section('script')

@endsection