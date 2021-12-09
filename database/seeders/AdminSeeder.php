<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'nama_lengkap'  => 'Admin',
            'email'         => 'admin@localhost.com',
            'role'          => 'admin',
            'password'      => Hash::make(('123')) ,
        ]);

        Admin::create([
            'nama_lengkap'  => 'Dosen',
            'email'         => 'dosen@localhost.com',
            'role'          => 'dosen',
            'password'      => Hash::make(('123')) ,
        ]);

        Admin::create([
            'nama_lengkap'  => 'Asisten',
            'email'         => 'asisten@localhost.com',
            'role'          => 'asisten',
            'password'      => Hash::make(('123')) ,
        ]);
    }
}
