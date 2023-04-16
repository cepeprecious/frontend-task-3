@extends('layouts.app')

@section('title', 'EQISI | Contact Us')

<!-- Content -->
@section('content')

    <div class="relative overflow-hidden bg-cover bg-no-repeat" 
        style="background-position: 50%; background-image: url('img/bg-1.jpg'); height: 900px;">
    </div>

    <section class="font-oswald bg-white">
        <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-x-16 gap-y-8 lg:grid-cols-5">
                <div class="lg:col-span-2 lg:py-12 lg:pl-12">
                    <h1 class="font-bold text-5xl text-orange-600 text-center mb-10">Contact Us</h1>
                    <div class="border border-black px-10 py-16">
                        <h1 class="text-2xl font-bold text-orange-500 mb-8">General Inquiries</h1>
                        <div class="mb-10">
                            <div class="mb-3">
                                <p class="max-w-xl text-lg mb-3">
                                    <i class="fa-solid fa-phone-volume mr-3"></i>
                                    + 123 - 456 - 789
                                </p>
                                <p class="max-w-xl text-lg pl-9">
                                    + 123 - 456 - 789
                                </p>
                            </div>
                            <p class="max-w-xl text-xl">
                                <i class="fa-regular fa-envelope fa-lg mr-3"></i>
                                sampleemail@email.com
                            </p>
                        </div>
                        <h1 class="text-2xl font-bold text-orange-500 mb-5">Our Location</h1>
                        <div class="flex">
                            <i class="fa-solid fa-location-dot mr-3 mt-2"></i>
                            <p class="text-xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-8 lg:col-span-3 lg:p-8 lg:mt-12">
                    <h1 class="font-semibold text-3xl mb-3">Send Message</h1>
                    <p class="text-lg mb-7">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor onsequat"</p>
                    <form action="" class="space-y-4">
                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                            <div>
                                <input
                                    class="w-full rounded-lg border border-black p-4 text-lg placeholder:text-black"
                                    placeholder="Name *"
                                    type=""
                                    id=""
                                />
                            </div>
                            <div>
                                <input
                                    class="w-full rounded-lg border border-black p-4 text-lg placeholder:text-black"
                                    placeholder="Email *"
                                    type="email"
                                    id="email"
                                />
                            </div>
                        </div>
                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                            <div>
                                <input
                                    class="w-full rounded-lg border border-black p-4 text-lg placeholder:text-black"
                                    placeholder="Phone No. *"
                                    type=""
                                    id=""
                                />
                            </div>
                            <div>
                                <input
                                    class="w-full rounded-lg border border-black p-4 text-lg placeholder:text-black"
                                    placeholder="Address *"
                                    type=""
                                    id=""
                                />
                            </div>
                        </div>
                        <div>
                            <textarea
                                class="w-full rounded-lg border border-black p-3 text-lg placeholder:text-black"
                                placeholder="Message..."
                                rows="6"
                                id="message"></textarea>
                        </div>
                        <div class="mt-4">
                            <button
                                type="submit"
                                class="inline-block w-full rounded-lg bg-orange-500 hover:bg-orange-600 px-10 py-3 text-2xl text-white sm:w-auto">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <hr class="my-10 border-2 border-black">

    {{-- MAP --}}
    <div class="font-montserrat">
        <div class="text-center mb-12 mt-32">
            <h1 class="text-3xl md:text-6xl font-bold mb-4">Find us on Google Maps</h1>
            <p class="text-xl font-semibold">laboris nisi ut aliquip ex ea commodo consequat. Duis aute</p>
        </div>
        <div class="flex flex-col justify-center relative w-full lg:w-3/4 mx-auto mb-32">
            <img src="{{ asset('img/map.png') }}" class="w-full" alt="Map">
            <div class="relative lg:absolute top-0 left-0 lg:pt-10 lg:pl-10">
                <div class="bg-white p-6">
                    <div class="flex items-center mb-3">
                        <div class="w-12 h-12 rounded-full border border-gray-500 inline-flex items-center justify-center">
                            <i class="fa-solid fa-location-dot fa-lg"></i>
                        </div> 
                        <p class="ml-2 text-lg text-gray-500">Address Line Comes Here 123 <br> lorem lipsum line line1.</p>
                    </div>
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 rounded-full border border-gray-500 inline-flex items-center justify-center">
                            <i class="fa-solid fa-phone fa-lg"></i>
                        </div> 
                        <p class="ml-2 text-lg text-gray-500">+9 123 456 789</p>
                    </div>
                    <div class="flex items-center">
                        <div class="w-12 h-12 rounded-full border border-gray-500 inline-flex items-center justify-center">
                            <i class="fa-solid fa-envelope fa-lg"></i>
                        </div> 
                        <p class="ml-2 text-lg text-gray-500">info@halari.com</p>
                    </div>                
                </div>
            </div>
        </div>
    </div>

  
    
@endsection

<!-- CSS -->
@section('css')
    {{-- <link rel="stylesheet" href="{{ asset('css/contact-us.css') }}"> --}}
@endsection

<!-- JS -->
@section('script')

@endsection