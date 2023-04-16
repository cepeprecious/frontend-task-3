@extends('layouts.app')

@section('title', 'EQISI | Home')

<!-- Content -->
@section('content')

    <!-- Hero section with background image, heading, subheading and button -->
    {{-- <div class="relative overflow-hidden bg-cover bg-no-repeat" style="background-position: 50%; background-image: url('img/bg-1.jpg'); height: 900px;">
        <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed">
            <div class="flex h-full items-center justify-items-center">
                <div class="px-6 text-white md:px-12">
                    <h1 class="mb-6 text-6xl" style="font-family: 'Oswald', sans-serif; font-weight: 700">Lorem Ipsum</h1>
                    <p class="mb-8 text-lg">
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do <br>
                        eiusmod tempor incididunt ut labore et dolore magna aliqua."
                    </p>
                    <button type="button" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md font-semibold bg-orange-600 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                        Discover More
                    </button>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="relative overflow-hidden bg-cover bg-no-repeat" style="background-position: 50%; background-image: url('img/bg-1.jpg'); height: 900px;">
        <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed">
            <div class="flex h-full w-full md:w-3/5 items-center justify-center">
                <div class="px-6 text-white md:px-12">
                    <h1 class="font-oswald mb-6 text-6xl" style="font-weight: 700">Lorem Ipsum</h1>
                    <p class="text-xl">
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    </p>
                    <p class="mb-8 text-xl">
                        eiusmod tempor incididunt ut labore et dolore magna aliqua."
                    </p>
                    <button type="button" class="py-4 px-6 inline-flex justify-center items-center gap-2 rounded-md font-medium bg-orange-600 text-white hover:bg-orange-700 text-lg">
                        Discover More
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- About Section --}}
    <div class="mt-20 px-4 md:py-0 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="grid gap-x-28 row-gap-10 lg:grid-cols-2 md:px-12 lg:px-0">
            <div class="flex flex-col justify-start">
                <div class="lg:max-w-xl mb-6">
                    <h1 class="font-oswald text-2xl text-gray-900 font-bold md:text-4xl">Welcome to EQISI Excel Quality Integrated Solutions</h1>
                    <p class="mt-6 text-orange-500 font-semibold text-lg text-justify">
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua."
                    </p>
                    <p class="mt-4 mb-4 text-gray-600 text-base leading-8 text-justify">
                        "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
                        beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur
                        aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi
                        nesciunt."
                    </p>
                    <p class="text-lg text-orange-500 font-medium"><i class="fa-solid fa-circle-check mr-5 mb-4" style="color: #e25923"></i>Perspiciatis unde omnis iste</p>
                    <p class="text-lg text-orange-500 font-medium"><i class="fa-solid fa-circle-check mr-5 mb-4" style="color: #e25923"></i>Perspiciatis unde omnis iste</p>
                    <p class="text-lg text-orange-500 font-medium"><i class="fa-solid fa-circle-check mr-5 mb-4" style="color: #e25923"></i>Perspiciatis unde omnis iste</p>
                    <p class="text-lg text-orange-500 font-medium"><i class="fa-solid fa-circle-check mr-5" style="color: #e25923"></i>Perspiciatis unde omnis iste</p>
                </div>
            </div>
            <div>
                <img class="object-cover w-full h-56 rounded-lg shadow-lg sm:h-full" src="{{ asset('img/bg-2.jpg') }}" alt="" />
            </div>
        </div>
    </div>
    {{-- About Section End --}}

    {{-- Services Section Start --}}
    <section class="services-section pt-[250px] md:pt-[200px] lg:pt-[270px] lg:pb-[90px] overflow-hidden" style="background-image: url('{{ asset('img/bg-3.jpg') }}'); background-size: cover; background-position: center;">
        <div class="container max-w-screen-xl mx-auto">
            <div class="mx-4 flex flex-wrap">
                <div class="w-full px-4">
                    <div class="mx-auto mb-12 max-w-[510px] text-center lg:mb-20 text-white">
                        <h2 class="font-oswald text-5xl font-bold md:text-5xl md:leading-tight">Our Services</h2>
                        <p class="font-roboto-flex mt-5 text-xl" style="font-weight: 500">
                            Exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid
                            ex ea commodi consequatur. Quis autem.
                        </p>
                    </div>
                </div>
            </div>
            <div class="mx-4 flex flex-wrap">
                <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div class="mb-8 rounded-[20px] bg-white p-10 shadow-md hover:shadow-lg md:px-7 xl:px-10 text-center">
                        <div class="p-4 rounded-full shadow-lg inline-block mb-6" style="background-color: #fc7837">
                            <img src="{{ asset('img/support.png') }}" alt="" class="w-12 h-auto">
                        </div>
                        <p class="text-body-color text-lg text-justify font-medium text-gray-500">
                            Nemo enim ipsam voluptatem quia voluptas sit
                            aspernatur aut odit aut fugit, sed
                            consequuntur magni dolores eos qui ratione
                            voluptatem sequi nesciunt.
                        </p>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div class="mb-8 rounded-[20px] bg-white p-10 shadow-md hover:shadow-lg md:px-7 xl:px-10 text-center">
                        <div class="p-4 rounded-full shadow-lg inline-block mb-6" style="background-color: #fc7837">
                            <img src="{{ asset('img/technical-support.png') }}" alt="" class="w-12 h-auto">
                        </div>
                        <p class="text-body-color text-lg text-justify font-medium text-gray-500">
                            Nemo enim ipsam voluptatem quia voluptas sit
                            aspernatur aut odit aut fugit, sed
                            consequuntur magni dolores eos qui ratione
                            voluptatem sequi nesciunt.
                        </p>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div class="mb-8 rounded-[20px] bg-white p-10 shadow-md hover:shadow-lg md:px-7 xl:px-10 text-center">
                        <div class="p-4 rounded-full shadow-lg inline-block mb-6" style="background-color: #fc7837">
                            <img src="{{ asset('img/customer-support.png') }}" alt="" class="w-12 h-auto">
                        </div>
                        <p class="text-body-color text-lg text-justify font-medium text-gray-500">
                            Nemo enim ipsam voluptatem quia voluptas sit
                            aspernatur aut odit aut fugit, sed
                            consequuntur magni dolores eos qui ratione
                            voluptatem sequi nesciunt.
                        </p>
                    </div>
                </div>
            </div>
            <div class="mt-10 mb-10 grid justify-center">
                <button type="submit" class="w-40 inline-flex justify-center items-center text-center text-lg lg:text-xl bg-orange-600 hover:bg-orange-700 text-white font-medium rounded-lg transition py-5 px-5">View More</button>
            </div>
        </div>
    </section>
    {{-- Services Section End --}}

    <section class="bg-white mb-24">
        <div class="h-[300px] pt-[55px] lg:h-[550px] lg:pt-[80px] bg-gray-100 px-4 py-10 sm:px-6 lg:px-8 lg:py-14">
            <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
                <h2 class="font-oswald text-5xl font-bold md:text-5xl md:leading-tight">Our Employment</h2>
                <p class="font-roboto-flex mt-5 text-base md:text-xl text-orange-600" style="font-weight: 500">
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod br
                    tempor incididunt ut labore et dolore magna aliqua."
                </p>
            </div>
        </div>
        <div class="container px-4 mx-auto mt-[-50px] lg:mt-[-250px]">
            <div class="max-w-6xl mx-auto">
                <div class="flex flex-wrap -mx-4 -mb-8">
                    <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                        <div class="max-w-xs md:max-w-none mx-auto h-full pb-5 bg-white text-gray-500 hover:bg-orange-500 hover:text-white group">
                            <img class="block w-full mb-4 h-80 object-cover" src="{{ asset('img/businessman-with-leather-briefcase.jpg') }}" alt="">
                            <div class="text-center mt-8 p-4">
                                <h5 class="font-oswald text-2xl font-bold mb-5 text-black group-hover:text-white">
                                Lorem Ipsum
                                </h5>
                                <p class="font-roboto-flex text-lg text-justify">
                                Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed consequuntur magni dolores eos qui ratione voluptatem sequi
                                </p>
                            </div>
                        </div>
                    </div>                      
                    <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                        <div class="max-w-xs md:max-w-none mx-auto h-full pb-5 bg-white text-gray-500 hover:bg-orange-500 hover:text-white group">
                            <img class="block w-full mb-4 h-80 object-cover" src="{{ asset('img/businessman-with-leather-briefcase.jpg') }}" alt="">
                            <div class="text-center mt-8 p-4">
                                <h5 class="font-oswald text-2xl font-bold mb-5 text-black group-hover:text-white">
                                Lorem Ipsum
                                </h5>
                                <p class="font-roboto-flex text-lg text-justify">
                                Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed consequuntur magni dolores eos qui ratione voluptatem sequi
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                        <div class="max-w-xs md:max-w-none mx-auto h-full pb-5 bg-white text-gray-500 hover:bg-orange-500 hover:text-white group">
                            <img class="block w-full mb-4 h-80 object-cover" src="{{ asset('img/businessman-with-leather-briefcase.jpg') }}" alt="">
                            <div class="text-center mt-8 p-4">
                                <h5 class="font-oswald text-2xl font-bold mb-5 text-black group-hover:text-white">
                                Lorem Ipsum
                                </h5>
                                <p class="font-roboto-flex text-lg text-justify">
                                Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed consequuntur magni dolores eos qui ratione voluptatem sequi
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="relative py-20 md:py-32 overflow-hidden bg-gray-100">
        <div class="container px-4 mx-auto">
            <div class="max-w-6xl mx-auto">
                <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-20">
                    <h2 class="font-oswald text-5xl font-bold md:text-5xl md:leading-tight">Our Employment</h2>
                    <p class="font-roboto-flex mt-5 text-xl text-orange-600" style="font-weight: 500">
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod br
                        tempor incididunt ut labore et dolore magna aliqua."
                    </p>
                </div>
                <div class="flex flex-wrap -mx-4 -mb-8">
                    <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                        <div class="max-w-xs md:max-w-none mx-auto h-full pb-5 bg-white text-gray-500 hover:bg-orange-500 hover:text-white">
                            <img class="block w-full mb-4 h-80 object-cover" src="{{ asset('img/businessman-with-leather-briefcase.jpg') }}" alt="">
                            <div class="text-center mt-8 p-4">
                                <h5 class="font-oswald text-2xl font-bold mb-5">Lorem Ipsum</h5>
                                <p class="font-roboto-flex text-lg text-justify">
                                    Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed consequuntur
                                    magni dolores eos qui ratione voluptatem sequi
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                        <div class="max-w-xs md:max-w-none mx-auto h-full pb-5 bg-white text-gray-500 hover:bg-orange-500 hover:text-white">
                            <img class="block w-full mb-4 h-80 object-cover" src="{{ asset('img/businessman-with-leather-briefcase.jpg') }}" alt="">
                            <div class="text-center mt-8 p-4">
                                <h5 class="font-oswald text-2xl font-bold mb-5">Lorem Ipsum</h5>
                                <p class="font-roboto-flex text-lg text-justify">
                                    Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed consequuntur
                                    magni dolores eos qui ratione voluptatem sequi
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                        <div class="max-w-xs md:max-w-none mx-auto h-full pb-5 bg-white text-gray-500 hover:bg-orange-500 hover:text-white">
                            <img class="block w-full mb-4 h-80 object-cover" src="{{ asset('img/businessman-with-leather-briefcase.jpg') }}" alt="">
                            <div class="text-center mt-8 p-4">
                                <h5 class="font-oswald text-2xl font-bold mb-5">Lorem Ipsum</h5>
                                <p class="font-roboto-flex text-lg text-justify">
                                    Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed consequuntur
                                    magni dolores eos qui ratione voluptatem sequi
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
      

    {{-- Blogs Section Start --}}
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Title -->
        <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
            <h2 class="font-oswald text-5xl font-bold md:text-5xl md:leading-tight">Blogs</h2>
            <p class="font-roboto-flex mt-5 text-base md:text-xl text-orange-600" style="font-weight: 500">
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod br
                tempor incididunt ut labore et dolore magna aliqua."
            </p>
        </div>
        <!-- End Title -->
  
        <!-- Grid -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <a class="group flex flex-col h-full hover:border-transparent hover:text-orange-500" href="#">
                <div class="relative aspect-w-16 aspect-h-11 group">
                    <img class="w-full object-cover" src="{{ asset('img/newspaper-top-view.jpg') }}" alt="Newspaper">
                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 opacity-0 group-hover:opacity-100 transition-all duration-500">
                        <i class="fa-solid fa-link text-gray-200 text-4xl group-hover:text-gray-100"></i>
                    </div>
                </div>
            
                <div class="my-6">
                    <div class="flex items-center">
                        <div class="box bg-orange-50 w-14 h-14 flex justify-center items-center text-4xl text-orange-500">
                          01
                        </div>
                        <div class="date text-lg font-semibold text-orange-500 ml-2">August 02, 2018</div>
                    </div>
                    <p class="mt-3 text-lg font-semibold">
                        Discover the power of financial power management.
                    </p>
                </div>
            </a>
            <a class="group flex flex-col h-full hover:border-transparent hover:text-orange-500" href="#">
                <div class="relative aspect-w-16 aspect-h-11 group">
                    <img class="w-full object-cover" src="{{ asset('img/newspaper-top-view.jpg') }}" alt="Newspaper">
                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 opacity-0 group-hover:opacity-100 transition-all duration-500">
                        <i class="fa-solid fa-link text-gray-200 text-4xl group-hover:text-gray-100"></i>
                    </div>
                </div>
            
                <div class="my-6">
                    <div class="flex items-center">
                        <div class="box bg-orange-50 w-14 h-14 flex justify-center items-center text-4xl text-orange-500">
                          02
                        </div>
                        <div class="date text-lg font-semibold text-orange-500 ml-2">July 01, 2018</div>
                    </div>
                    <p class="mt-3 text-lg font-semibold">
                        Accounting, Legal, Engineering, Dental, Architectural ....
                    </p>
                </div>
            </a>
            <a class="group flex flex-col h-full hover:border-transparent hover:text-orange-500" href="#">
                <div class="relative aspect-w-16 aspect-h-11 group">
                    <img class="w-full object-cover" src="{{ asset('img/newspaper-top-view.jpg') }}" alt="Newspaper">
                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 opacity-0 group-hover:opacity-100 transition-all duration-500">
                        <i class="fa-solid fa-link text-gray-200 text-4xl group-hover:text-gray-100"></i>
                    </div>
                </div>
            
                <div class="my-6">
                    <div class="flex items-center">
                        <div class="box bg-orange-50 w-14 h-14 flex justify-center items-center text-4xl text-orange-500">
                          03
                        </div>
                        <div class="date text-lg font-semibold text-orange-500 ml-2">July 03, 2018</div>
                    </div>
                    <p class="mt-3 text-lg font-semibold">
                        When a business can no longer meet the demands of its short/long
                    </p>
                </div>
            </a>
        </div>
        <!-- End Grid -->
    </div>
    {{-- Blog Section End --}}

    {{-- Get in Touch section --}}
    <section class="bg-stone-100">
        <div class="max-w-[85rem] px-5 py-12 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <div class="max-w-3xl">
                <div class="text-start">
                    <h1 class="font-oswald text-3xl font-bold text-gray-800 sm:text-5xl mb-3">
                    Get In Touch
                    </h1>
                    <p class="mt-1 text-black text-xl font-semibold">
                    If you got any questions, please do not hesitate to send us a message.
                    We reply within 24 hours!
                    </p>
                </div>
                <div class="mt-12">
                    <form>
                        <div class="grid gap-4 lg:gap-6">
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                                <div>
                                    <input type="text" name="" id="" placeholder="Your Name *" class="py-3 px-4 block w-full border border-gray-200 rounded-md text-base font-medium" required>
                                </div>
                    
                                <div>
                                    <input type="text" name="" id="" placeholder="Your Email *" class="py-3 px-4 block w-full border border-gray-200 rounded-md text-base font-medium" required>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                                <div>
                                    <input type="text" name="" id="" placeholder="Phone" class="py-3 px-4 block w-full border border-gray-200 rounded-md text-base font-medium">
                                </div>
                                <div>
                                    <input type="text" name="" id="" placeholder="Address" class="py-3 px-4 block w-full border border-gray-200 rounded-md text-base font-medium">
                                </div>
                            </div>
                        </div>
                        <div class="mt-10 grid">
                            <button type="submit" class="w-full md:w-40 inline-flex justify-center items-center gap-x-3 text-center text-lg lg:text-xl bg-orange-500 hover:bg-orange-600 text-white font-semibold rounded-md transition py-3 px-4">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    {{-- Get in Touch section End --}}
  
@endsection

<!-- CSS -->
@section('css')
    {{-- <link rel="stylesheet" href="{{ asset('css/home.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('/css/homepage.css') }}">
@endsection

<!-- JS -->
@section('script')

@endsection