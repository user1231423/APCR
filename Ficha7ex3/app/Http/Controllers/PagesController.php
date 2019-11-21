<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        $tasks = [
            'go to store',
            'go home',
            'go to the market'
        ];
    
        return view('welcome',[
            'text' => 'ACR', 
            'title' => 'Index',
            'tasks' => $tasks]
        );
    }

    public function contact(){
        return view('contact', ['title' => 'Contact']);
    }

    public function about(){
        return view('about', ['title' => 'About']);
    }
}
