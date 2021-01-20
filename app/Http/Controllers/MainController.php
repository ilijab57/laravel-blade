<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        $photo = "img/home-bg.jpg";
        $title = 'Clean Blog';
        $small = "A Blog Theme By Start Bootstrap";
        return view('index',['title' => $title ,'small' => $small, 'backgroundPhoto' => $photo]);
    }

    public function aboutme() {
        $photo = "img/about-bg.jpg";
        $title = "About Me";
        $small = "This is what I do.";
        return view('aboutme',['title' => $title ,'small' => $small,'backgroundPhoto' => $photo]);
    }

    public function sample() {
        $photo = "img/post-sample-image.jpg";
        $title = "Man must explore, and this is exploration at it's gratest";
        $subtitle = "Problems look mighty small from 150 miles up";
        $small = "Postrd by Start Bootstrap on August 24, 2018";
        return view('sample',['title' => $title ,'small' => $small,'subtitle' => $subtitle, 'backgroundPhoto' => $photo]);
    }

    public function contact() {
        $photo = "img/contact-bg.jpg";
        $title ="Contact me";
        $small = "Have questions? I have answers!";
        return view('contact',['title' => $title ,'small' => $small,'backgroundPhoto' => $photo]);
    }
}
