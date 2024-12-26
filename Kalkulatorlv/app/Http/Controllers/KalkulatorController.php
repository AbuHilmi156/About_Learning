<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class KalkulatorController extends Controller
{
    //Menampilkan view
    public function index()
    {
        return view('kalkulator');
    }
    public function tambah(Request $request)
    {
        //validate dr sisi backend
        $request->validate(
            [
                'angka1' => 'required|numeric',
                'angka2' => 'required|numeric'
            ],
            [
                'angka1.required' => 'Angka 1 Wajib Diisi.',
                'angka1.numeric' => 'Angka 1 Harus Angka.',
                'angka2.required' => 'Angka 2 harus angka.',
                'angka2.numeric' => 'Angka 2 Harus Angka.',
            ]
        );
        $angka1 = $request->input('angka1');
        $angka2 = $request->input('angka2');

        $hasil = $angka1 + $angka2;

        return view('kalkulator', compact('hasil'));
    }
}
