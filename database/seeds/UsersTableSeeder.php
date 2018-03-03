<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Model\User::Class, 29)->create();

        App\Model\User::create([
            'name' => 'Leonardo Dino',
            'email' => 'alexdino0416@gmail.com',
            'password' => bcrypt('123')
        ]);
    }
}
