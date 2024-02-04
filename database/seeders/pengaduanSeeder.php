<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Str;

class pengaduanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {  

        $nik = DB::table("masyarakats")->insertGetId([
            'nik'  => '123456789',
            'nama' => 'Wulansari',
            'username'  => 'ulan',
            'password'  => substr(md5(Str::random(32)), 0, 32),
            'telp'  => '087866332399',
        ]);
            DB::table('pengaduans')->insert([
                'id_pengaduan' => rand(1,30),
                'tgl_pengaduan' => now(),
                'nik' =>'123456789',
                'isi_laporan' => Str::random(255),
                'foto' => Str::random(225),
                'status' => "proses",
            ]);

        
       
        
        

    }
}