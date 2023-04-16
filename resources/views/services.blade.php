@extends('layouts.app')

@section('title', 'EQISI | Services')

<!-- Content -->
@section('content')

    <div class="relative overflow-hidden bg-cover bg-no-repeat" 
        style="background-position: 50%; background-image: url('img/bg-1.jpg'); height: 900px;">
    </div>

    <!-- ====== Services Section Start -->
    <section class="services-section pt-20 pb-12 lg:pb-[90px] mt-20 overflow-hidden" style="background-image: url('{{ asset('img/bg-4-1.jpg') }}'); background-size: cover;">
        <div class="container max-w-screen-xl mx-auto">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4">
                    <div class="mx-auto mb-12 max-w-[510px] text-center lg:mb-20 text-white">
                        <h2 class="font-oswald text-5xl font-bold md:text-6xl md:leading-tight">Our Services</h2>
                        <p class="font-roboto-flex mt-5 text-lg md:text-xl" style="font-weight: 500">
                            Exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid
                            ex ea commodi consequatur. Quis autem.
                        </p>
                    </div>
                </div>
            </div>
            <div class="mx-4 flex flex-wrap">
                <div class="w-full px-4 md:w-full lg:w-1/3">
                    <div class="mb-8 rounded-[20px] bg-white p-10 shadow-md hover:shadow-lg md:px-7 xl:px-10 text-center">
                        <div class="p-4 rounded-full shadow-lg inline-block mb-6" style="background-color: #e25923">
                            <img src="{{ asset('img/support.png') }}" alt="" class="w-12 h-auto">
                        </div>
                        <p class="text-body-color text-lg text-start font-medium text-gray-500">
                            Nemo enim ipsam voluptatem quia voluptas sit
                            aspernatur aut odit aut fugit, sed
                            consequuntur magni dolores eos qui ratione
                            voluptatem sequi nesciunt.
                        </p>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div class="mb-8 rounded-[20px] bg-white p-10 shadow-md hover:shadow-lg md:px-7 xl:px-10 text-center">
                        <div class="p-4 rounded-full shadow-lg inline-block mb-6" style="background-color: #e25923">
                            <img src="{{ asset('img/technical-support.png') }}" alt="" class="w-12 h-auto">
                        </div>
                        <p class="text-body-color text-lg text-start font-medium text-gray-500">
                            Nemo enim ipsam voluptatem quia voluptas sit
                            aspernatur aut odit aut fugit, sed
                            consequuntur magni dolores eos qui ratione
                            voluptatem sequi nesciunt.
                        </p>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div class="mb-8 rounded-[20px] bg-white p-10 shadow-md hover:shadow-lg md:px-7 xl:px-10 text-center">
                        <div class="p-4 rounded-full shadow-lg inline-block mb-6" style="background-color: #e25923">
                            <img src="{{ asset('img/customer-support.png') }}" alt="" class="w-12 h-auto">
                        </div>
                        <p class="text-body-color text-lg text-start font-medium text-gray-500">
                            Nemo enim ipsam voluptatem quia voluptas sit
                            aspernatur aut odit aut fugit, sed
                            consequuntur magni dolores eos qui ratione
                            voluptatem sequi nesciunt.
                        </p>
                    </div>
                </div>
            </div>
            <div class="mx-4 flex flex-wrap">
                <div class="w-full px-4 md:w-full lg:w-1/3">
                    <div class="mb-8 rounded-[20px] bg-white p-10 shadow-md hover:shadow-lg md:px-7 xl:px-10 text-center">
                        <div class="p-4 rounded-full shadow-lg inline-block mb-6" style="background-color: #e25923">
                            <img src="{{ asset('img/support.png') }}" alt="" class="w-12 h-auto">
                        </div>
                        <p class="text-body-color text-lg text-start font-medium text-gray-500">
                            Nemo enim ipsam voluptatem quia voluptas sit
                            aspernatur aut odit aut fugit, sed
                            consequuntur magni dolores eos qui ratione
                            voluptatem sequi nesciunt.
                        </p>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div class="mb-8 rounded-[20px] bg-white p-10 shadow-md hover:shadow-lg md:px-7 xl:px-10 text-center">
                        <div class="p-4 rounded-full shadow-lg inline-block mb-6" style="background-color: #e25923">
                            <img src="{{ asset('img/technical-support.png') }}" alt="" class="w-12 h-auto">
                        </div>
                        <p class="text-body-color text-lg text-start font-medium text-gray-500">
                            Nemo enim ipsam voluptatem quia voluptas sit
                            aspernatur aut odit aut fugit, sed
                            consequuntur magni dolores eos qui ratione
                            voluptatem sequi nesciunt.
                        </p>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div class="mb-8 rounded-[20px] bg-white p-10 shadow-md hover:shadow-lg md:px-7 xl:px-10 text-center">
                        <div class="p-4 rounded-full shadow-lg inline-block mb-6" style="background-color: #e25923">
                            <img src="{{ asset('img/customer-support.png') }}" alt="" class="w-12 h-auto">
                        </div>
                        <p class="text-body-color text-lg text-start font-medium text-gray-500">
                            Nemo enim ipsam voluptatem quia voluptas sit
                            aspernatur aut odit aut fugit, sed
                            consequuntur magni dolores eos qui ratione
                            voluptatem sequi nesciunt.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Services Section End -->

    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Grid -->
        <div class="grid lg:grid-cols-2 gap-4 md:gap-8 xl:gap-8 md:items-center">
            <!-- Column 1 -->
            <div class="">
                <div class="relative">
                    <!-- Card -->
                    <div class="flex flex-col border border-black rounded-3xl py-20 px-10">
                        <div class="text-center">
                            <h1 class="font-oswald text-3xl font-bold text-gray-800 sm:text-5xl mb-3">
                                Get In Touch
                            </h1>
                            <p class="mt-1 text-black text-xl font-semibold">
                                If you got any questions, please do not hesitate to send us a message.
                                We reply within 24 hours!
                            </p>
                        </div>
                        <form>
                            <div class="mt-6 grid gap-4 lg:gap-6">
                                <!-- Grid -->
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                                    <div>
                                        <input type="text" name="" id="" placeholder="Your Name *" class="py-3 px-4 block w-full border border-black rounded-lg text-base" required>
                                    </div>
                                    <div>
                                        <input type="text" name="" id="" placeholder="Your Email *" class="py-3 px-4 block w-full border border-black rounded-lg text-base" required>
                                    </div>
                                </div>
                                <!-- End Grid -->
    
                                <div>
                                    <input type="email" name="" id="" autocomplete="email" placeholder="Your Email *" class="py-3 px-4 block w-full border border-black rounded-lg text-base" required>
                                </div>
    
                                <div>
                                    <textarea id="" name="" rows="5" placeholder="Your Email *" class="py-3 px-4 block w-full border border-black rounded-lg text-base" required></textarea>
                                </div>
                            </div>
                            <!-- End Grid -->
                            <div class="mt-10 grid justify-center">
                                <button type="submit" class="w-40 inline-flex justify-center items-center gap-x-3 text-center text-lg lg:text-xl bg-orange-500 hover:bg-orange-600 text-white font-semibold rounded-lg transition py-3 px-4">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- End Card -->
                </div>
            </div>
            <!-- End Column 1 -->
            <!-- Column 2 -->
            <div class="relative">
                <!-- Card -->
                <div class="flex flex-col p-4 sm:p-6 lg:p-10 h-auto lg:h-[770px]">
                    <img src="{{ asset('img/aerial-view-city-buildings-3d-rendering-with-red-point-map.jpg') }}" alt="" class="h-full rounded-3xl">
                </div>
            </div>
        </div>
        <!-- End Grid -->
    </div>
    <!-- Get in Touch Section End -->
  
    
@endsection

<!-- CSS -->
@section('css')
    {{-- <link rel="stylesheet" href="{{ asset('css/home.css') }}"> --}}
@endsection

<!-- JS -->
@section('script')

@endsection