<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Comator Studio',
            'tes' => ['satu', 'dua', 'tiga']
        ];

        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Us | Comator Studio'
        ];
        return view('pages/about', $data);
    }

    public function characterDesign()
    {
        $data = [
            'title' => 'Products | Comator Studio'
        ];
        return view('pages/character_design', $data);
    }

    public function vtuber()
    {
        $data = [
            'title' => 'Products | Comator Studio'
        ];
        return view('pages/vtuber', $data);
    }

    public function admin()
    {
        $data = [
            'title' => 'Admin | Comator Studio'
        ];
        return view('pages/admin', $data);
    }

    public function ghibli()
    {
        $data = [
            'title' => 'Products | Comator Studio'
        ];
        return view('pages/ghibli', $data);
    }

    public function cute()
    {
        $data = [
            'title' => 'Products | Comator Studio'
        ];
        return view('pages/cute', $data);
    }


    public function gigs()
    {
        $data = [
            'title' => 'Gigs'
        ];
        return view('pages/gigs', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jl. abc No.123',
                    'kota' => 'Tangsel'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jl. bca No.123',
                    'kota' => 'Tangsel'
                ]

            ],
        ];

        return view('pages/contact', $data);
    }
}
