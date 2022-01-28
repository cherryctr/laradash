<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Slider;
use App\Models\About;
use App\Models\Kategori;
use App\Models\WhyChoseUs;

class FrontendController extends Controller
{
    //
    
    public function index()
    {
        //
        $data = [];
        $data['kategori'] = Kategori::all();
        $data['slider'] = Slider::all();
        return view('layout.frontend.content.home-content',$data);
    }

    public function about()
    {
        //
        $data = [];
        $data['about'] = About::all();
        $data['why'] = WhyChoseUs::all();
        return view('layout.frontend.content.about-content',$data);
    }

    public function services()
    {
        //
        
        return view('layout.frontend.content.services-content');
    }

    public function contact()
    {
        //
        
        return view('layout.frontend.content.contact-content');
    }
}
