<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use App\Models\Prodi;
use Illuminate\Http\Request;
use App\Models\User;

class CheckController extends Controller
{
    function check()
    {
        // $fakultas = Fakultas::find(2);

        $fakultas = Fakultas::with('prodis')->get();

        // $prodi = Prodi::with('fakultas')->get();

        // $test = $fakultas->prodis->nama_prodi;

        foreach ($fakultas->prodi as $prodis) {
            $test = $prodis->nama_fkt;
        }





        dd($test);
    }
}

