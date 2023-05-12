<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('siswa')->insert([
            'nis' => '8949',
            'nama' => 'Mhd. Dzakwan Fahri Siregar',
            'jenis_kelamin' => 'Laki-Laki',
            'kelas' => 'X MIPA 1',
        ]);

        DB::table('siswa')->insert([
            'nis' => '8181',
            'nama' => 'Annisa Dwi Handayani',
            'jenis_kelamin' => 'Perempuan',
            'kelas' => 'X MIPA 2',
        ]);

        DB::table('siswa')->insert([
            'nis' => '8919',
            'nama' => 'Aulia Mulyana Pasaribu',
            'jenis_kelamin' => 'Perempuan',
            'kelas' => 'X MIPA 3',
        ]);

        DB::table('siswa')->insert([
            'nis' => '8554',
            'nama' => 'Rizky Fariansyah Ritonga',
            'jenis_kelamin' => 'Laki-Laki',
            'kelas' => 'X IPS 1',
        ]);

        DB::table('siswa')->insert([
            'nis' => '8491',
            'nama' => 'Sarah Aulia',
            'jenis_kelamin' => 'Perempuan',
            'kelas' => 'X IPS 2',     
        ]);

        DB::table('siswa')->insert([
            'nis' => '8323',
            'nama' => 'Ricky Afandi',
            'jenis_kelamin' => 'Laki-Laki',
            'kelas' => 'XI MIPA 1',
        ]);

        DB::table('siswa')->insert([
            'nis' => '8463',
            'nama' => 'Ahmad Ihsan',
            'jenis_kelamin' => 'Laki-Laki',
            'kelas' => 'XI MIPA 2',
        ]);

        DB::table('siswa')->insert([
            'nis' => '8794',
            'nama' => 'Athirah Khairunnisa Siregar',
            'jenis_kelamin' => 'Perempuan',
            'kelas' => 'XI MIPA 3',
        ]);

        DB::table('siswa')->insert([
            'nis' => '8795',
            'nama' => 'Daffa Al Bariz Mahendra Ritonga',
            'jenis_kelamin' => 'Laki-Laki',
            'kelas' => 'XI IPS 1',
        ]);

        DB::table('siswa')->insert([
            'nis' => '8965',
            'nama' => 'Jaskia Maharani Rambe',
            'jenis_kelamin' => 'Perempuan',
            'kelas' => 'XI IPS 2',
        ]);

        DB::table('siswa')->insert([
            'nis' => '8734',
            'nama' => 'Kaneisya Zahra Lubis',
            'jenis_kelamin' => 'Perempuan',
            'kelas' => 'XII MIPA 1',
        ]);

        DB::table('siswa')->insert([
            'nis' => '8695',
            'nama' => 'Aisyah Sofia',
            'jenis_kelamin' => 'Perempuan',
            'kelas' => 'XII MIPA 2',
        ]);

        DB::table('siswa')->insert([
            'nis' => '8611',
            'nama' => 'Alya Izzati Zafirah Tanjung',
            'jenis_kelamin' => 'Perempuan',
            'kelas' => 'XII MIPA 3',
        ]);

        DB::table('siswa')->insert([
            'nis' => '8862',
            'nama' => 'Rico Syahputra',
            'jenis_kelamin' => 'Laki-Laki',
            'kelas' => 'XII IPS 1',
        ]);

        DB::table('siswa')->insert([
            'nis' => '8195',
            'nama' => 'Muhammad Yan Azri',
            'jenis_kelamin' => 'Laki-Laki',
            'kelas' => 'XII IPS 2',
        ]);
    }
}
