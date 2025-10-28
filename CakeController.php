<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CakeController extends Controller
{
    public function home() {
        return view('home', ['title' => 'Cake Bliss']);
    }

    public function about() {
        return view('about', ['title' => 'About Us']);
    }

    public function menu() {
        return view('menu', ['title' => 'Our Cakes']);
    }

    public function gallery() {
        return view('gallery', ['title' => 'Gallery']);
    }

    public function contact() {
        return view('contact', ['title' => 'Contact Us']);
    }

    public function pesan() {
        return view('pesan', ['title' => 'pesan']);
    }
}
