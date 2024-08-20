<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    // profil
    public function index()
    {
        return view('satpolpp.page.home',[
            'title'     => 'Home',
        ]);
    }
    public function strukturorganisasi()
    {
        return view('satpolpp.page.strukturorganisasi',[
            'title'     => 'strukturorganisasi',
        ]);
    }
    public function profilpemimpin()
    {
        return view('satpolpp.page.profilpemimpin',[
            'title'     => 'profilpemimpin',
        ]);
    }
    public function visidanmisi()
    {
        return view('satpolpp.page.visidanmisi',[
            'title'     => 'visidanmisi',
        ]);
    }
    public function sejarah()
    {
        return view('satpolpp.page.sejarah',[
            'title'     => 'sejarah',
        ]);
    }
    public function tupoksi()
    {
        return view('satpolpp.page.tupoksi',[
            'title'     => 'tupoksi',
        ]);
    }

    // publikasi
    public function berita()
    {
        return view('satpolpp.page.berita',[
            'title'     => 'berita',
        ]);
    }  
}