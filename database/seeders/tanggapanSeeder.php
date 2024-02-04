<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class tanggapanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      
        $pengaduan = DB::table("pengaduans")->insertGetId([
            'id_pengaduan' => rand(1,30),
            'tgl_pengaduan' => now(),
            'nik' =>"123456789",
            'isi_laporan' => Str::random(255),
            'foto' => Str::random(225),
            'status' => "proses",
        ]);

        $petugas = DB::table("petugases")->insertGetId([
            'id_petugas' => rand(1,50),
            'nama_petugas' => Str::random(35),
            'username' => Str::random(25),
            'password' => Str::random(32),
            'telp' => Str::random(13),
            'level' => "admin",
        ]);
        DB::table('tanggapans')->insert([
            'id_tanggapan' => rand(1,45),
            'id_pengaduan' => $pengaduan,
            'tanggal_tanggapan' => now(),
            'tanggapan' => Str::random(),
            'id_petugas' => $petugas,
        ]);
       }
    
}