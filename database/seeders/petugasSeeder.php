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
        $petugas = DB::table('petugases')->pluck('id')->toArray();

        if(!empty($petugasIds)) {
            DB::table('petugases')->insert([
                'petugas_id' => $petugasIds[array_rand($petugasIds)],
                'nama_petugas' => Str::random(35),
                'username' => Str::random(25),
                'password' => Str::random(32),
                'telp' => Str::random(13),
                'status' => collect(['proses', 'selesai'])->random(),
            ]);
        }
    }
}