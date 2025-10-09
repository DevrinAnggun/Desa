<?php
namespace App\Http\Controllers;
use App\Models\Berita;
use App\Models\Infografis;
use App\Models\Profile;
use Illuminate\Http\Request;

class HomeController extends Controller {
    public function index() {
        $profile = Profile::first();
        $latestBerita = Berita::where('is_published', true)->orderBy('created_at','desc')->take(5)->get();
        $infografis = Infografis::orderBy('created_at','desc')->take(6)->get();
        return view('home.index', compact('profile','latestBerita','infografis'));
    }

    public function profil() {
        $profile = Profile::first();
        return view('home.profil', compact('profile'));
    }
}
