<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function tv()
    {
        $pages = config('pages');
        return view('tv', compact('pages'));
    }
    public function shop()
    {
        $pages = config('pages');
        return view('shop', compact('pages'));
    }
    public function news()
    {
        $pages = config('pages');
        return view('news', compact('pages'));
    }
    public function fans()
    {
        $pages = config('pages');
        return view('fans', compact('pages'));
    }
    public function games()
    {
        $pages = config('pages');
        return view('games', compact('pages'));
    }
    public function videos()
    {
        $pages = config('pages');
        return view('videos', compact('pages'));
    }
    public function movies()
    {
        $pages = config('pages');
        return view('movies', compact('pages'));
    }
    public function characters()
    {
        $pages = config('pages');
        return view('characters', compact('pages'));
    }
    public function collectibles()
    {
        $pages = config('pages');
        return view('collectibles', compact('pages'));
    }
    public function home()
    {
        $pages = config('pages');
        return view('home', compact('pages'));
    }
    public function comics()
    {
        $comics = Comic::all();
        $pages = config('pages');
        $banner = config('banner');
        $pages = config('pages');
        return view('comics', compact('comics', 'pages', 'banner'));
    }
    public function comic(Comic $comic)
    {
        //dd($lightsaber);
        return view('comic', compact('comic'));
    }
}
