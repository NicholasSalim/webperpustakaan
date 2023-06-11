<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\User;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name'=> 'Admin',
            'email'=>'admin@admin.com',
            'password' => Hash::make('admin123'),
            'isAdmin' => '1',
         ]);

         User::create([
            'name'=> 'Bunga Namira',
            'email'=>'bunga@gmail.com',
            'password' => Hash::make('bunga'),
            'isAdmin' => '0',
         ]);
         User::create([
            'name'=> 'Ayu Syafira',
            'email'=>'ayu@gmail.com',
            'password' => Hash::make('ayu'),
            'isAdmin' => '0',
         ]);
         User::create([
            'name'=> 'Rahma Ayu',
            'email'=>'rahma@gmail.com',
            'password' => Hash::make('rahma'),
            'isAdmin' => '0',
         ]);
         User::create([
            'name'=> 'Emi Nurmasari',
            'email'=>'emi@gmail.com',
            'password' => Hash::make('emi'),
            'isAdmin' => '0',
         ]);
         User::create([
            'name'=> 'Aura Syafira',
            'email'=>'aura@gmail.com',
            'password' => Hash::make('aura'),
            'isAdmin' => '0',
         ]);
         User::create([
            'name'=> 'Erizon',
            'email'=>'erizon@gmail.com',
            'password' => Hash::make('erizon'),
            'isAdmin' => '0',
         ]);
         User::create([
            'name'=> 'Wulan Idianti',
            'email'=>'wulan@gmail.com',
            'password' => Hash::make('wulan'),
            'isAdmin' => '0',
         ]);
         User::create([
            'name'=> 'Yuliantika',
            'email'=>'yuli@gmail.com',
            'password' => Hash::make('yuli'),
            'isAdmin' => '0',
         ]);
         User::create([
            'name'=> 'Juliana',
            'email'=>'juli@gmail.com',
            'password' => Hash::make('juli'),
            'isAdmin' => '0',
         ]);
         User::create([
            'name'=> 'Maulana',
            'email'=>'maulana@gmail.com',
            'password' => Hash::make('maulana'),
            'isAdmin' => '0',
         ]);
         User::create([
            'name'=> 'Ferran',
            'email'=>'ferran@gmail.com',
            'password' => Hash::make('ferran'),
            'isAdmin' => '0',
         ]);
         User::create([
            'name'=> 'Nabila',
            'email'=>'nabila@gmail.com',
            'password' => Hash::make('nabila'),
            'isAdmin' => '0',
         ]);
         User::create([
            'name'=> 'Ilham',
            'email'=>'ilham@gmail.com',
            'password' => Hash::make('ilham'),
            'isAdmin' => '0',
         ]);
         User::create([
            'name'=> 'Taufan Alim',
            'email'=>'taufan@gmail.com',
            'password' => Hash::make('taufan'),
            'isAdmin' => '0',
         ]);
         User::create([
            'name'=> 'Muhammad Rizky Nasution',
            'email'=>'rizkynst@gmail.com',
            'password' => Hash::make('rizkynst'),
            'isAdmin' => '0',
         ]);
         
         User::create([
            'name'=> 'Muhammad Syarif',
            'email'=>'syarif@gmail.com',
            'password' => Hash::make('syarif'),
            'isAdmin' => '0',
         ]);
         User::create([
            'name'=> 'Muhammad Fadil Yahya',
            'email'=>'fadil@gmail.com',
            'password' => Hash::make('fadil'),
            'isAdmin' => '0',
         ]);
         User::create([
            'name'=> 'Muhammad Rizky',
            'email'=>'rizky@gmail.com',
            'password' => Hash::make('rizky'),
            'isAdmin' => '0',
         ]);
         User::create([
            'name'=> 'Muhammad Andre Ritonga',
            'email'=>'andre@gmail.com',
            'password' => Hash::make('andre'),
            'isAdmin' => '0',
         ]);
         User::create([
            'name'=> 'Yusuf Ari Wibowo',
            'email'=>'yusuf@gmail.com',
            'password' => Hash::make('yusuf'),
            'isAdmin' => '0',
         ]);
         User::create([
            'name'=> 'Bambang',
            'email'=>'bambang@gmail.com',
            'password' => Hash::make('bambang'),
            'isAdmin' => '0',
         ]);
         User::create([
            'name'=> 'Yuma',
            'email'=>'yuma@gmail.com',
            'password' => Hash::make('yuma'),
            'isAdmin' => '0',
         ]);
         User::create([
            'name'=> 'Diki',
            'email'=>'diki@gmail.com',
            'password' => Hash::make('diki'),
            'isAdmin' => '0',
         ]);
         User::create([
            'name'=> 'Adam',
            'email'=>'adam@gmail.com',
            'password' => Hash::make('adam'),
            'isAdmin' => '0',
         ]);
         User::create([
            'name'=> 'Wahyu',
            'email'=>'wahyu@gmail.com',
            'password' => Hash::make('wahyu'),
            'isAdmin' => '0',
         ]);
         User::create([
            'name'=> 'Fina',
            'email'=>'fina@gmail.com',
            'password' => Hash::make('fina'),
            'isAdmin' => '0',
         ]);
         User::create([
            'name'=> 'Farel',
            'email'=>'farel@gmail.com',
            'password' => Hash::make('farel'),
            'isAdmin' => '0',
         ]);
         User::create([
            'name'=> 'Agus',
            'email'=>'agus@gmail.com',
            'password' => Hash::make('agus'),
            'isAdmin' => '0',
         ]);
         User::create([
            'name'=> 'Reza',
            'email'=>'reza@gmail.com',
            'password' => Hash::make('reza'),
            'isAdmin' => '0',
         ]);

         for ($userId = 31; $userId <= 200; $userId++) {
            User::create([
                'name' => 'User ' . $userId,
                'email' => 'user' . $userId . '@gmail.com',
                'password' => Hash::make('password' . $userId),
                'isAdmin' => '0',
            ]);
         }
    }
}
