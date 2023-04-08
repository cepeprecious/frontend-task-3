<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage(Request $request) {
        return view('homepage');
    }

    public function about_us(Request $request) {
        return view('about-us');
    }

    public function careers(Request $request) {
        return view('careers');
    }

    public function careers2(Request $request) {
        return view('careers2');
    }

    public function services(Request $request) {
        return view('services');
    }

    public function employers(Request $request) {
        return view('employers');
    }

    public function contact_us(Request $request) {
        return view('contact-us');
    }
}
