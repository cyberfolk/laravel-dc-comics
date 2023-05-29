<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function tv()
    {
        return view('tv');
    }
    public function shop()
    {
        return view('shop');
    }
    public function news()
    {
        return view('news');
    }
    public function fans()
    {
        return view('fans');
    }
    public function games()
    {
        return view('games');
    }
    public function videos()
    {
        return view('videos');
    }
    public function movies()
    {
        return view('movies');
    }
    public function characters()
    {
        return view('characters');
    }
    public function collectibles()
    {
        return view('collectibles');
    }
    public function home()
    {
        return view('home');
    }
    public function comics()
    {
        $comics = Comic::all();
        $banner = config('banner');
        return view('comics', compact('comics', 'banner'));
    }
    public function comic(Comic $comic)
    {
        return view('comic', compact('comic'));
    }
}
