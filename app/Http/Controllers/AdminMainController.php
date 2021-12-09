<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use App\Models\Matakuliah;
use App\Models\Prodi;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminMainController extends Controller
{
    function dashboard()
    {
        $users = User::count();
        $dosenCount = Admin::where('role', 'dosen')->get()->count();

        $data = [
            'jml_user' => $users,
            'jml_dosen' => $dosenCount,
        ];

        return view('admin.dashboard', $data);
    }

    //------------------------------------FAKULTAS------------------------------------//
    function fakultas()
    {
        $fakultas = Fakultas::all();

        return view('admin.fakultas', ['daftar_fkt' => $fakultas]);
    }

    function fakultasAdd(Request $request)
    {
        //Validate request
        $this->validate(
            $request,
            [
                'nama_fkt' => 'required|unique:fakultas',
            ],
            [
                'nama_fkt.required' => 'Fakultas tidak boleh kosong',
				'nama_fkt.unique' => 'Fakultas sudah ada',
            ]
        );

        // Insert to database
        $fkt = new Fakultas;
        $fkt->nama_fkt = $request->nama_fkt;
        $fkt->save();

        return back()->with('success', 'Berhasil ditambahkan');
    }

    function fakultasEdit($id)
    {
        $fkt = Fakultas::find($id);

        return view('admin.fakultas-edit', ['fkt' => $fkt]);
    }

    function fakultasUpdate(Request $request, $id)
    {
        $fkt = Fakultas::find($id);
        $fkt->nama_fkt = $request->nama_fkt;
        $fkt->save();

        return redirect()->route('a.fakultas')->with('success', 'Berhasil diubah');
    }

    function fakultasDelete($id)
    {
        $fkt = Fakultas::find($id);
        $fkt->delete();

        return back()->with('success', 'Berhasil dihapus');
    }

    //------------------------------------PRODI------------------------------------//
    function prodi()
    {

        $prodis = Prodi::with('fakultas')->get();

        $fakultas = Fakultas::with('prodis')->get(['id', 'nama_mtk']);

        $data = [
            'daftar_prodi' => $prodis,
            'daftar_fakultas' => $fakultas,
        ];

        return view('admin.prodi', $data);
    }

    function prodiAdd(Request $request)
    {

        //Validate requests
		$this->validate(
			$request,
			[
				'nama_prodi' => 'required|unique:prodis',

			],
			[
				'nama_prodi.required' => 'Program studi tidak boleh kosong',
				'nama_prodi.unique' => 'Program studi sudah ada',


			],
		);

        // Insert to database

        $prodi = new Prodi;
        $prodi->fakultas_id = $request->fakultas_id;
        $prodi->nama_prodi = $request->nama_prodi;
        $prodi->save();

        return back()->with('success', 'Berhasil ditambahkan');
    }

    function prodiEdit($id)
    {
        $prodi = Prodi::find($id);

        return view('admin.prodi-edit', ['prodi' => $prodi]);
    }

    function prodiUpdate(Request $request)
    {

        //Validate requests
		$this->validate(
			$request,
			[
				'nama_prodi' => 'required|unique:prodis',

			],
			[
				'nama_prodi.required' => 'Program studi tidak boleh kosong',
				'nama_prodi.unique' => 'Program studi sudah ada',


			],
		);

        $prodi = Prodi::find($request->id);
        $prodi->nama_prodi = $request->nama_prodi;
        $prodi->save();

        return redirect()->route('a.prodi')->with('success', 'Berhasil diubah');

    }

    function prodiDelete($id)
    {
        $prodi = Prodi::find($id);
        $prodi->delete();

        return back()->with('success', 'Berhasil dihapus');

    }

//------------------------------------MATA KULIAH------------------------------------//
    function matakuliah(Request $request)
    {


        $mtk = Matakuliah::orderBy('prodi_id', 'asc')->paginate(10);

        if ($request->table_search) {
            $mtk = Matakuliah::where('nama_mtk', 'LIKE', '%'.$request->table_search.'%')
                            ->orWhere('nama_prodi', 'LIKE', '%'.$request->table_search.'%')
                            ->orWhere('nama_fkt', 'LIKE', '%'.$request->table_search.'%')
                            ->paginate(10);
        }

        $data = [

            // 'daftar_prodi' => $prodi,
            'daftar_mtk' => $mtk,
        ];

        return view('admin.matakuliah', $data);
    }

    function matakuliahAdd(Request $request)
    {
        //Validate requests
		$this->validate(
			$request,
			[
				'nama_mtk' => 'required|unique:matakuliahs',


			],
			[
				'nama_mtk.required' => 'Mata kuliah tidak boleh kosong',
				'nama_mtk.unique' => 'Mata kuliah sudah ada',



			],
		);

        // Insert to database

        $mtk = new Matakuliah;
        $mtk->prodi_id = $request->prodi_id;
        $mtk->nama_mtk = $request->nama_mtk;

        $save = $mtk->save();

		if ($save) {
			return back()->with('success', 'Berhasil ditambahkan');
		} else{
			return back()->with('error', 'Gagal ditambahkan');
        }

    }

    function matakuliahEdit($id)
    {
        $mtk = Matakuliah::find($id);
        return view('admin.matakuliah-edit', ['mtk' => $mtk]);
    }

    function matakuliahUpdate(Request $request)
    {
        $mtk = Matakuliah::find($request->id);
        $mtk->nama_mtk = $request->nama_mtk;
        $save = $mtk->save();

        if ($save) {
            return redirect()->route('a.matakuliah')->with('success', 'Berhasil diubah');
        } else {
            return back()->with('fail', 'Gagal diubah');

        }
    }

    function matakuliahDelete($id)
    {
        $mtk = Matakuliah::find($id);
        $mtk->delete();

        return back()->with('success', 'Berhasil dihapus');
    }


    //------------------------------------DATA MAHASISWA------------------------------------//
     function dataMahasiswa()
     {
         return view('admin.data-mahasiswa');
     }

}
