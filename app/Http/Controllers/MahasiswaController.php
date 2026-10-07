<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        return response()->json(Mahasiswa::all(), 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'npm'   => 'required|string',
            'nama'  => 'required|string',
            'prodi' => 'required|string',
        ]);

        $mhs = Mahasiswa::create($validated);

        return response()->json([
            'message' => 'Data mahasiswa berhasil ditambahkan',
            'data'    => $mhs
        ], 201);
    }
}