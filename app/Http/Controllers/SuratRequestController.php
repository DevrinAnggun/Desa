<?php
namespace App\Http\Controllers;
use App\Models\SuratRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SuratRequestController extends Controller {
    public function create() {
        return view('surat.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'nama_pemohon' => 'required|string|max:255',
            'nik' => 'required|string|max:25',
            'telepon' => 'nullable|string|max:25',
            'email' => 'nullable|email',
            'jenis_surat' => 'required|string|max:255',
            'keterangan' => 'nullable|string',
            'file' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:10240'
        ]);

        if($request->hasFile('file')) {
            $data['file_path'] = $request->file('file')->store('surat_files','public');
        }
        $data['status'] = 'pending';
        SuratRequest::create($data);
        return redirect()->route('surat.thanks')->with('success','Permohonan surat berhasil dikirim. Tunggu konfirmasi.');
    }

    public function thanks() {
        return view('surat.thanks');
    }
}

