<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    // Menangani form kontak (POST)
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'nullable|email',
            'telepon' => 'nullable|string|max:25',
            'pesan' => 'required|string',
        ]);

        Contact::create($data);

        return redirect()->back()->with('success', 'Pesan terkirim. Terima kasih.');
    }
}
