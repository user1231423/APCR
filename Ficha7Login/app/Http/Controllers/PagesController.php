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
    
        return view('main/welcome',[
            'text' => 'ACR', 
            'title' => 'Index',
            'tasks' => $tasks]
        );
    }

    public function contact(){
        return view('main/contact', ['title' => 'Contact']);
    }

    public function about(){
        return view('main/about', ['title' => 'About']);
    }
}
