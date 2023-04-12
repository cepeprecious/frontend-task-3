@extends('layouts.app')

@section('title', 'Employers')

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

    <div class="max-w-screen-xl mx-4 lg:mx-auto border border-gray-300 rounded-3xl p-8 lg:p-16 my-20 shadow-lg">
        <p class="mb-10 font-semibold text-lg">Fill up all the required fields for your manpower request to be processed. </p>
        <h1 class="font-bold text-3xl mb-10">
            <span class="border-b-4 border-gray-900">Business Details</span>
        </h1>
        <form>
            <div class="mb-6 flex flex-col lg:flex-row items-center">
                <label for="" class="w-full lg:w-1/5 mb-2 text-lg font-medium text-gray-900 order-1">Business Name <span class="text-red-500">*</span></label>
                <input type="" id="" class="w-full lg:w-3/6 border border-black text-gray-900 text-lg rounded-2xl block p-3 order-2" required>
            </div>
            <div class="mb-6 flex flex-col lg:flex-row items-center">
                <label for="" class="w-full lg:w-1/5 mb-2 text-lg font-medium text-gray-900 order-1">Business Address <span class="text-red-500">*</span></label>
                <input type="" id="" class="w-full lg:w-3/6 border border-black text-gray-900 text-lg rounded-2xl block p-3 order-2" required>
            </div>
            <div class="mb-6 flex flex-col lg:flex-row items-center">
                <label for="" class="w-full lg:w-1/5 mb-2 text-lg font-medium text-gray-900 order-1">Business License No.</label>
                <input type="" id="" class="w-full lg:w-3/6 border border-black text-gray-900 text-lg rounded-2xl block p-3 order-2" required>
            </div>
            <div class="mb-6 flex flex-col lg:flex-row items-center">
                <label for="" class="w-full lg:w-1/5 mb-2 text-lg font-medium text-gray-900 order-1">Nature of Business</label>
                <input type="" id="" class="w-full lg:w-3/6 border border-black text-gray-900 text-lg rounded-2xl block p-3 order-2" required>
            </div>
        </form>
    </div>

    <div class="max-w-screen-xl mx-4 lg:mx-auto border border-gray-300 rounded-3xl p-8 lg:p-16 mb-20 shadow-lg">
        <h1 class="font-bold text-3xl mb-10">
            <span class="border-b-4 border-gray-900">Contact Information</span>
        </h1>
        <form>
            <div class="mb-6 flex flex-col lg:flex-row items-center">
                <label for="" class="w-full lg:w-1/5 mb-2 text-lg font-medium text-gray-900 order-1">Contact Person <span class="text-red-500">*</span></label>
                <input type="" id="" class="w-full lg:w-3/6 border border-black text-gray-900 text-lg rounded-2xl block p-3 order-2" required>
            </div>
            <div class="mb-6 flex flex-col lg:flex-row items-center">
                <label for="" class="w-full lg:w-1/5 mb-2 text-lg font-medium text-gray-900 order-1">Position <span class="text-red-500">*</span></label>
                <input type="" id="" class="w-full lg:w-3/6 border border-black text-gray-900 text-lg rounded-2xl block p-3 order-2" required>
            </div>
            <div class="mb-6 flex flex-col lg:flex-row items-center">
                <label for="" class="w-full lg:w-1/5 mb-2 text-lg font-medium text-gray-900 order-1">Tel. No. <span class="text-red-500">*</span></label>
                <input type="" id="" class="w-full lg:w-3/6 border border-black text-gray-900 text-lg rounded-2xl block p-3 order-2" required>
            </div>
            <div class="mb-6 flex flex-col lg:flex-row items-center">
                <label for="" class="w-full lg:w-1/5 mb-2 text-lg font-medium text-gray-900 order-1">Email <span class="text-red-500">*</span></label>
                <input type="" id="" class="w-full lg:w-3/6 border border-black text-gray-900 text-lg rounded-2xl block p-3 order-2" required>
            </div>
            <div class="mb-6 flex flex-col lg:flex-row items-center">
                <label for="" class="w-full lg:w-1/5 mb-2 text-lg font-medium text-gray-900 order-1">Website</label>
                <input type="" id="" class="w-full lg:w-3/6 border border-black text-gray-900 text-lg rounded-2xl block p-3 order-2">
            </div>
        </form>
    </div>

    <div class="section-3 max-w-screen-xl mx-4 lg:mx-auto border border-gray-300 rounded-3xl p-8 lg:p-16 m-10 shadow-lg">
        <form>
            <div class="mb-6 flex flex-col lg:flex-row items-center">
                <label for="" class="w-full lg:w-1/5 mb-2 text-lg font-medium text-gray-900 order-1">Position: </label>
                <input type="" id="" class="w-full lg:w-3/6 border border-black text-gray-900 text-lg rounded-2xl block p-3 mb-5 lg:mb-0 mr-0 lg:mr-20 order-2">
                <button type="button" class="text-white font-bold py-3 px-16 rounded-lg text-lg order-3 lg:mt-0 " style="background-color: #e25923">+ Add More</button>
            </div>    
            <div class="mb-6 flex flex-col lg:flex-row items-center">
                <label for="" class="w-full lg:w-1/5 mb-2 text-lg font-medium text-gray-900 order-1">No. Required: </label>
                <input type="" id="" class="w-full lg:w-3/6 border border-black text-gray-900 text-lg rounded-2xl block p-3 order-2">
            </div>
            <div class="mb-6 flex flex-col lg:flex-row">
                <label for="" class="w-full lg:w-1/5 mb-2 text-lg font-medium text-gray-900 order-1">Job Description: </label>
                <textarea type="" id="" rows="5" class="w-full lg:w-3/6 border border-black text-gray-900 text-lg rounded-2xl block p-3 order-2"></textarea>
            </div>            
        </form>
    </div>

    <div class="flex items-center justify-center">
        <button type="button" class="mx-auto text-white font-bold py-3 px-16 rounded-lg text-lg mt-10 mb-20" style="background-color: #e25923">Submit</button>
    </div>
      
@endsection

<!-- CSS -->
@section('css')
    {{-- <link rel="stylesheet" href="{{ asset('css/home.css') }}"> --}}
@endsection

<!-- JS -->
@section('script')

@endsection