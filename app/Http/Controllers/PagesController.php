<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = "Welcome to My Application";
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title); 
    }

    public function gallery()
    {
        
        $title = "Gallery";
        return view('pages.gallery')->with('title', $title); 
    }

    public function services()
    {
        $data = array
        (
            'title' => 'Pricing',
            'plan1' => 'Free',
            'plan2' => 'Premium',
            'plan3' => 'Enterprise',
            
            
            'free' => ['Limited Hosting','2GB Storage','SEO not included'],
            'premium' => ['Unlimited Hosting','10GB Storage','SEO included'],
            'enterprise' => ['Unlimited Hosting','Unlimited Storage','SEO included']
             
        );
        return view('pages.services')->with($data);
    }
}
