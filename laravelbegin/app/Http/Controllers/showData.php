<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\Pesantren;
use App\Models\User;
use Illuminate\Http\Request;

class showData extends Controller
{
    //show data kota
    public function showData(){
        $kota = Kota::all();
        $pesantren = Pesantren::all();
        $user = User::all();
        return view('welcome', compact('kota','pesantren', 'user'));
    }
}
