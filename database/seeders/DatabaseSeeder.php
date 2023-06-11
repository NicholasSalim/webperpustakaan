<?php

namespace Database\Seeders;



use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the Application's database.
     *
     * @return void
     */
    public function run()
    {
     //App\models\User::factory(10)->create();
     $this->call([
      UserSeeder::class,
      ProfileSeeder::class,
      CategorySeeder::class,
      BookSeeder::class,  
  ]);
     
     

}
}
