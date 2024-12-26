<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SantriController extends Controller
{
    function index(){
        $santris = DB::table('santris')->get();
        // return $santris;
  return view ('santri', ['santris' => $santris]);
    }
}
