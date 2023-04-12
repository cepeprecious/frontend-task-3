@extends('layouts.app')

@section('title', 'About Us')

<!-- Content -->
@section('content')

    <div class="relative overflow-hidden bg-cover bg-no-repeat" 
        style="background-position: 50%; background-image: url('img/bg-1.jpg'); height: 900px;">
    </div>

{{-- <section class="bg-blue-800 mt-20 p-10">
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:py-12 sm:px-6 lg:py-16 lg:px-8">
        <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">
            <div class="lg:py-15 text-white">
                <h1 class="text-3xl font-black sm:text-5xl mb-5 tracking-wider" style="font-family: 'Oswald', sans-serif;">Get to know us</h1>
                <p class="mt-4 text-2xl" style="font-family: 'Montserrat', sans-serif;">
                    We have been part of the manufacturing industry since
                    JRS Group of Companies was established in 1986.
                    We are one of the leading companies who are
                    continuously innovating from the past decade.
                    <br>
                    <br>
                    Since the past decade where internet were able to saturate our
                    modern activities in the industry, we take up a notch to bringforth
                    the best integrations in the industry.
                </p>
            </div>
            <div class="relative h-64 overflow-hidden rounded-lg sm:h-80 lg:order-last lg:h-full">
                <img alt="" src="{{ asset('img/bg-2.jpg') }}" class="absolute inset-0 h-full w-full object-cover"/>
            </div>
        </div>
    </div>
</section> --}}

    <section class="bg-blue-800 mt-20">
        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:py-12 sm:px-6 lg:py-16 lg:px-8">
            <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">
                <div class="lg:py-20 text-white">
                    <h1 class="text-3xl sm:text-5xl mb-5 tracking-wider" style="font-family: 'Oswald', sans-serif; font-weight: 700">Get to know us</h1>
                    <p class="mt-4 text-2xl" style="font-family: 'Montserrat', sans-serif;">
                        We have been part of the manufacturing industry since
                        JRS Group of Companies was established in 1986.
                        We are one of the leading companies who are
                        continuously innovating from the past decade.
                        <br>
                        <br>
                        Since the past decade where internet were able to saturate our
                        modern activities in the industry, we take up a notch to bringforth
                        the best integrations in the industry.
                    </p>
                </div>
                <div class="relative h-64 overflow-hidden rounded-lg sm:h-80 lg:order-last lg:h-full">
                    <img src="{{ asset('img/bg-2.jpg') }}" class="absolute inset-0 h-full w-full object-cover rounded-lg" alt=""/>
                </div>
            </div>
        </div>
    </section>
  
@endsection

<!-- CSS -->
@section('css')
    {{-- <link rel="stylesheet" href="{{ asset('css/about-us.css') }}"> --}}
@endsection

<!-- JS -->
@section('script')

@endsection
