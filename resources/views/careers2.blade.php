@extends('layouts.app')

@section('title', 'EQISI | Careers')

<!-- Content -->
@section('content')

    <div class="max-w-screen-2xl mx-4 lg:mx-auto border border-black rounded-3xl p-8 lg:p-16 my-20">
        <h1 class="font-montserrat font-bold text-3xl md:text-5xl mb-1">Sales Manager</h1>
        <p class="font-bold text-lg text-orange-500 mb-1">Emobile Matrix and Logistics Corporation</p>
        <p class="mb-4 font-medium text-lg">Quezon City, Philippines</p>
        <div class="mb-5">
            <span class="bg-gray-200 text-gray-800 text-base font-medium inline-flex items-center px-2 py-1 mr-2 mb-2 md:mb-0">
                <i class="fa-solid fa-briefcase mr-2"></i>
                Full-Time
            </span>
            <span class="bg-gray-200 text-gray-800 text-base font-medium inline-flex items-center px-2 py-1 mr-2">
                <i class="fa-solid fa-briefcase mr-2"></i>
                Monday - Friday
            </span>
        </div>           
        <a href="#application_form" class="inline-flex items-center px-10 py-3 text-xl lg:text-2xl font-bold text-center text-white bg-orange-500 rounded-lg hover:bg-orange-600">
            Apply Now
        </a>
        <hr class="my-10 border-2 border-black">
        <div class="font-montserrat mb-8">
            <h1 class="font-bold text-3xl mb-4">Job Description</h1>
            <p class="font-medium text-xl">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
        </div>
        <div class="font-montserrat mb-8">
            <h1 class="font-bold text-3xl mb-4">Qualifications</h1>
            <p class="font-medium text-xl">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
        </div>
        <div class="font-montserrat mb-8">
            <h1 class="font-bold text-3xl mb-4">Requirements</h1>
            <p class="font-medium text-xl">
                Lorem ipsum dolor sit amet, consectetur. Ut enim ad minim veniam, quis nostrud.
            </p>
        </div>
        <div class="font-montserrat mb-8">
            <h1 class="font-bold text-3xl mb-4">Location</h1>
            <p class="font-medium text-xl">
                Quezon City, Philippines.
            </p>
        </div>
    </div>

    <div id="application_form" class="max-w-screen-2xl mx-4 lg:mx-auto rounded-3xl p-8 lg:p-16 my-20 font-montserrat">
        <h1 class="font-bold text-3xl md:text-5xl mb-1">Job Application Form</h1>
        <hr class="my-10 border-2 border-black">
        <p class="mb-10 font-medium text-lg w-full lg:w-3/5 leading-8">
            Thank you for your interest in working with us. Please check below for available
            job opportunities that meets your criteria and send your application by filling up the form.
        </p>
        <div class="grid gap-10">
            <div class="font-montserrat">
                <select id="" class="block w-full px-4 py-5 text-base font-bold text-black border border-gray-500 rounded-lg bg-white" required>
                    <option value="" disabled selected hidden>WHAT POSITION ARE YOU APPLYING FOR? *</option>
                    <option value="">Logistics Manager</option>
                    <option value="">Warehouse Manager</option>
                    <option value="">Operations Manager</option>
                    <option value="">Transport Manager</option>
                    <option value="">Customer Service Representative</option>
                    <option value="">Sales Representative</option>
                    <option value="">Supply Chain Analyst</option>
                    <option value="">Customs Specialist</option>
                    <option value="">Freight Forwarder</option>
                </select>            
            </div>
            <div class="grid grid-cols-1 gap-10 lg:grid-cols-2">
                <div class="w-full md:pr-2">
                    <input type="text" id="" placeholder="FIRST NAME *" class="block w-full p-4 font-bold text-black border border-gray-500 rounded-lg bg-white sm:text-md placeholder-gray-500" required>
                </div>
                <div class="w-full md:pr-2">
                    <input type="text" id="" placeholder="LAST NAME *" class="block w-full p-4 font-bold text-black border border-gray-500 rounded-lg bg-white sm:text-md placeholder-gray-500" required>
                </div>
                <div class="w-full md:pr-2">
                    <input type="text" id="" placeholder="EMAIL ADDRESS *" class="block w-full p-4 font-bold text-black border border-gray-500 rounded-lg bg-white sm:text-md placeholder-gray-500" required>
                </div>
                <div class="w-full md:pr-2">
                    <input type="text" id="" placeholder="PHONE NO. *" class="block w-full p-4 font-bold text-black border border-gray-500 rounded-lg bg-white sm:text-md placeholder-gray-500" required>
                </div>
            </div>
        </div>         
        <div class="pl-0 lg:pl-5 mt-10">
            <div class="mb-10">
                <p class="mb-4 text-lg font-bold text-gray-500">WHAT IS YOUR CURRENT EMPLOYMENT STATUS? *</p>
                <div class="flex items-center mb-2">
                    <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="default-radio-1" class="ml-2 text-lg font-bold text-gray-500">EMPLOYED</label>
                </div>
                <div class="flex items-center mb-2">
                    <input checked id="default-radio-2" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="default-radio-2" class="ml-2 text-lg font-bold text-gray-500">SELF-EMPLOYED</label>
                </div>
                <div class="flex items-center mb-2">
                    <input checked id="default-radio-2" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="default-radio-2" class="ml-2 text-lg font-bold text-gray-500">UNEMPLOYED</label>
                </div>
                <div class="flex items-center mb-2">
                    <input checked id="default-radio-2" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="default-radio-2" class="ml-2 text-lg font-bold text-gray-500">STUDENT</label>
                </div>
            </div>
            <div>
                <p class="mb-4 text-lg font-bold text-gray-500">UPLOAD RESUME *</p>
                <form class="mb-3">
                    <label class="block">
                        <span class="sr-only"></span>
                        <input type="file" class="block w-full text-sm text-gray-500
                            file:mr-4 file:py-2 file:px-6
                            file:rounded-md file:text-base 
                            file:font-bold
                            file:border file:border-black
                            file:bg-white file:text-black
                            hover:file:bg-orange-600
                        "/>
                    </label>
                </form>
                <p class="font-medium italic text-gray-600">* Upload your resume or any other relevant file. Max. file size: 50mb</p>
            </div>
        </div>  
        <button type="button" class="mx-auto bg-orange-500 hover:bg-orange-600 text-white font-bold py-3 px-16 rounded-lg text-lg mt-10 mb-20">Submit</button>
    </div>

@endsection

<!-- CSS -->
@section('css')
    {{-- <link rel="stylesheet" href="{{ asset('css/home.css') }}"> --}}
@endsection

<!-- JS -->
@section('script')

@endsection