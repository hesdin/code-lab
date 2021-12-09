<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use App\Models\Profile;
use Illuminate\Http\Request;
use App\Models\User;


class MahasiswaMainController extends Controller
{
    function dashboard()
    {
        $check = User::WhereHas('profile', function ($query) {
            return $query->where('user_id', session('LoggedUser'));
        })->first();

        $fakultas = Fakultas::pluck('nama_fkt', 'id');

        $data = [
            'user' => User::where('id', session('LoggedUser'))->first(),
            'check' =>  $check,
            'fakultas' => $fakultas,

        ];

        return view('mahasiswa.dashboard')->with($data);
    }

    function profile()
    {
        $profile = User::WhereHas('profile', function ($query) {
            return $query->where('user_id', session('LoggedUser'));
        })->first();

        $user = User::where('id', session('LoggedUser'))->with('profile')->first();

        $fakultas = Fakultas::pluck('nama_fkt', 'id');

        $data = [
            'user' => $user,
            'profile' => $profile,
            'fakultas' => $fakultas,
        ];

        return view('mahasiswa.profile', $data);
    }

    function profileStore(Request $request)
    {

        // Insert to table profile
        $profile = new Profile;
        $profile->user_id = $request->id;
        $profile->jk = $request->jk;
        $profile->no_hp = $request->no_hp;
        $profile->fakultas = $request->fakultas;
        $profile->jurusan = $request->jurusan;

        $profile->save();

        return redirect()->route('m.dashboard')->with('storeSuccess', 'Profile berhasil dilengkapi');

    }

    function profileUpdate(Request $request)
    {
        // Update profile and user
        $profile = Profile::find($request->id);
        $profile->user->nama_lengkap = $request->nama_lengkap;
        $profile->user->nim = $request->nim;
        $profile->jk = $request->jk;
        $profile->no_hp = $request->no_hp;
        $profile->fakultas = $request->fakultas;
        $profile->jurusan = $request->jurusan;

        $profile->push();

        return redirect()->route('m.profile');

    }

    function slipPembayaran()
    {
        $user = User::where('id', session('LoggedUser'))->with('profile')->first();

        $data = [
            'user' => $user,
        ];
        return view('mahasiswa.slip-pembayaran', $data);
    }
}
