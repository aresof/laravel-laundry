<?php

use App\Client;
use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('es_ES');

        for($i=0;$i<100;$i++){
            $client = new Client();

            $client->name = $faker->name;

            $client->nif = $faker->vat;
            $client->address = $faker->address;
            $client->postcode = $faker->postcode;
            $client->phone = $faker->phoneNumber;
            $client->is_company = $faker->boolean;
            $client->save();
        }
    }
}
