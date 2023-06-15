<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MahasiswaController extends Controller
{
    public function table(): View{
        $data_mahasiswa = Mahasiswa::latest()->paginate(10);
        return view('mahasiswa.table', compact('data_mahasiswa'));
    }
}