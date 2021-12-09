<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;

class ManajemenUserController extends Controller
{
    function manajemenUser()
    {

        $user = User::all();
        // $user = User::orderBy('updated_at', 'desc')->paginate(10);

        $user = User::select('*')
                        ->orderBy('updated_at', 'desc')
                        ->get();

        return view('admin.manajemen-user', ['daftarUser' => $user]);

    }

    function manajemenUserEdit()
    {

    }

    function verifikasiUser($id)
    {
        $user = User::where('id', $id)->first();

        $user->verifikasi = true;

        $save = $user->save();

        if ($save) {
            return back();
        }
    }

    function verifikasiAll()
    {
        User::query()->update(['verifikasi' => 1]);

        return back();
    }

}
