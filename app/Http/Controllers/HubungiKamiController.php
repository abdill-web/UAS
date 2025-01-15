<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesan;

class HubungiKamiController extends Controller
{
    public function store(Request $request)
    {
        try {
            // Validasi data
            $request->validate([
                'nama' => 'required|string|max:100',
                'email' => 'required|email|max:100',
                'pesan' => 'required|string',
            ]);
    
            // Simpan ke database
            Pesan::create([
                'nama' => $request->nama,
                'email' => $request->email,
                'perusahaan' => $request->perusahaan,
                'telepon' => $request->telepon,
                'pesan' => $request->pesan,
            ]);
    
            return response()->json(['message' => 'Pesan berhasil dikirim'], 200);
        } catch (\Exception $e) {
            // Log error untuk debugging
            \Log::error($e->getMessage());
            return response()->json(['message' => 'Terjadi kesalahan'], 500);
        }
    }    
}
