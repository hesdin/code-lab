<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthUserController extends Controller
{
	function registerPage()
	{
		return view('auth.register');
	}

	function loginPage()
	{
		return view('auth.login');
	}

	function registerSave(Request $request)
	{

        //Validate requests
		$this->validate(
            $request,
			[
                'nama_lengkap' => 'required',
				'nim' => 'required|min:11|unique:users',
				'password' => 'required|min:3',
                'foto' => 'required|mimes:png,jpg,jpeg|max:2084'

			],
			[
                'nama_lengkap.required' => 'Nama tidak boleh kosong',
				'nim.min' => 'Nim tidak valid, harus 12 character',
				'nim.unique' => 'Nim sudah terdaftar',
				'password.min' => 'Password terlalu pendek',
			],
		);

        $namaLengkap = strtolower($request->nama_lengkap);
        $namaProfil = explode(' ', trim($namaLengkap ))[0];
        $nim = $request->nim;

        $namaFoto = $nim . '-' . $namaProfil . '.' . $request->foto->extension();

        $request->foto->move(public_path('img/profile'), $namaFoto);

        // Save into database
        $user = new User;

		$user->nama_lengkap = $request->nama_lengkap;
		$user->nim = $request->nim;
        $user->foto = $namaFoto;
		$user->password = Hash::make($request->password);

		$save = $user->save();


		if ($save) {
			return redirect()->route('m.login')->with('success', 'Registrasi berhasil');
		} else{
			return back()->with('fail, Registrasi gagal, silahkan coba nanti');
        }

	}

	function loginCheck(Request $request)
	{
        $request->validate([
            'nim' => 'required|min:11',
            'password' => 'required|min:3',
        ]);


        $userInfo = User::where('nim', $request->nim)->first();


        if ($userInfo) {
            if ($userInfo->verifikasi == false) {
               return back()->with('verifikasi', 'Akun belum diverifikasi, <br> mohon tunggu atau konfirmasi ke Admin');
            }
        }



        if (!$userInfo) {
            return back()->with('fail', 'Nim tidak terdaftar');

        } else {

            // Check password
            if (Hash::check($request->password, $userInfo->password)) {
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect()->route('m.dashboard');
            } else {
                return back()->with('fail', 'Password salah');
            }
        }

	}

    function logout()
    {
        if (session()->has('LoggedUser')) {
            session()->pull('LoggedUser');
            return redirect()->route('m.login');
        }
    }
}
