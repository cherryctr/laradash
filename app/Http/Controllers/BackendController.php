<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Slider;
use App\Models\About;
use App\Models\Kategori;
use App\Models\WhyChoseUs;

class BackendController extends Controller
{
    //
    
    public function about()
    {
        //
        $data = [];
        $data['about'] = About::all();
        // $data['slider'] = Slider::all();
        return view('layout.backend.about.about-admin',$data);
    }

    public function createabout()
    {
        //
        return view('layout.backend.about.add-about');
    }

    public function prosestambahabout(Request $request)
    {
         $this->validate($request, [
            
            'judul'     => 'required',
            'deskripsi'   => 'required'
        ]);

        //upload image
        $about = new About();
        $about->judul = $request->get('judul');
        $about->deskripsi = $request->get('deskripsi');

        if ($request->hasFile('gambar')) {
            // $post->delete_image();
            $gambar = $request->file('gambar');
            // echo $photo_profile;exit;
            $name = rand(1000, 9999) . $gambar->getClientOriginalName();
            $gambar->move('imags', $name);
            $about->gambar = $name;
        }
        $about->save();


        // dd($slider);
        if($about){
            //redirect dengan pesan sukses
            return redirect()->route('about.dashboard')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('about.dashboard')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

   
}
