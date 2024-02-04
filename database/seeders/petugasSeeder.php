<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\withoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {



            DB::table('petugases')->insert([
                'id_petugas' => rand(1,50),
                'nama_petugas' => Str::random(35),
                'username' => Str::random(25),
                'password' => Str::random(32),
                'telp' => Str::random(13),
                'level' => "admin",
            ]);
        
    }
}