<?php

use App\User;
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
        $user = new User();
        $user->name='Arturo';
        $user->email='arturo@arturo.com';
        $user->password=bcrypt('Ortega');

        $user->save();

    }
}
