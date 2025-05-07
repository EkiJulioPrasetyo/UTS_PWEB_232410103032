<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login')->with([
            'showNavbar' => false,
            'fullPage'   => true,
        ]);
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username', 'Guest');

        return view('dashboard', compact('username'))->with([
            'showNavbar' => true,
            'fullPage'   => false,
        ]);
    }

    public function profile(Request $request)
    {
        $username = $request->query('username', 'Guest');
        $role     = 'Member';
        $email     = 'Email@email.com';

        return view('profile', compact('username', 'role', 'email'))->with([
            'showNavbar' => true,
            'fullPage'   => false,
        ]);
    }

    public function pengelolaan(Request $request)
    {
        $username = $request->query('username', 'Guest');

        $animes = [
            ['judul' => 'Naruto',           'genre' => 'Action',        'rating' => 9.9],
            ['judul' => 'Bleach',           'genre' => 'Supernatural',  'rating' => 9.9],
            ['judul' => 'One Piece',        'genre' => 'Fantasy',       'rating' => 9.9],
            ['judul' => 'Attack on Titan',  'genre' => 'Action',        'rating' => 9.1],
            ['judul' => 'Jujutsu Kaisen',   'genre' => 'Supernatural',  'rating' => 8.7],
            ['judul' => 'Your Name',        'genre' => 'Romance',       'rating' => 8.9],
            ['judul' => 'Sword Art Online', 'genre' => 'Isekai',        'rating' => 8.9],
            ['judul' => 'Boruto',           'genre' => 'Trash',         'rating' => 0.1],
        ];

        return view('pengelolaan', compact('username', 'animes'))->with([
            'showNavbar' => true,
            'fullPage'   => false,
        ]);
    }
}
