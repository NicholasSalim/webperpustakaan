<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\Kategori;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Kategori::create([
            'nama'=>'Novel',
            'deskripsi' => 'Kumpulan Novel'
        ]);
        Kategori::create([
            'nama'=>'Pelajaran',
            'deskripsi' => 'Kumpulan Buku materi pelajaran'
        ]);
        Kategori::create([
            'nama'=>'Romance',
        ]);
        Kategori::create([
            'nama'=>'Drama',
        ]);
        Kategori::create([
            'nama'=>'Fiksi',
        ]);
        Kategori::create([
            'nama'=>'Pemrograman',
        ]);
        Kategori::create([
            'nama'=>'Science',
        ]);
        Kategori::create([
            'nama'=>'Horror',
        ]);
    }
}
