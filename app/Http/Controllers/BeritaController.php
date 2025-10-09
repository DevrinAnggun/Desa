<?php
namespace App\Http\Controllers;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BeritaController extends Controller {
    public function index() {
        $beritas = Berita::where('is_published', true)->orderBy('created_at','desc')->paginate(10);
        return view('berita.index', compact('beritas'));
    }

    public function show(Berita $berita) {
        if(!$berita->is_published) abort(404);
        return view('berita.show', compact('berita'));
    }

    // functions for admin (store, create, edit) can be added similarly if needed
    public function store(Request $request) {
        $data = $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required',
            'thumbnail' => 'nullable|image'
        ]);
        $data['slug'] = Str::slug($data['judul']).'-'.time();
        if($request->hasFile('thumbnail')) {
            $path = $request->file('thumbnail')->store('thumbnails','public');
            $data['thumbnail'] = $path;
        }
        $data['is_published'] = $request->has('is_published');
        Berita::create($data);
        return redirect()->back()->with('success','Berita dibuat');
    }
}
