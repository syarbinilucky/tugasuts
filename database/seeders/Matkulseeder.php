<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Matkulseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jadwalkuliahs')->insert([
        'kodemk' => '123',
        'matakuliah' => 'pemerograman',
        'dosen' => 'muhammad azmi M.Kom',
        'jam' => '14:00-16:00',
        'ruangan' => 'ruangan 04',
        'hari' => 'senin',
        'prodi' => 'sistem informasi',
        'angkatan' => '2020',
        'semester' => '2',
        ]);
    }
}
