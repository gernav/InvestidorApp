<?php

use Illuminate\Database\Seeder;
use App\Entities\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'cpf'               => '11122233344',
            'name'              => 'João',
            'phone'             => '3590909090',
            'birth'             => '1980-10-05',
            'gender'            => 'M',
            'email'             => 'joao@sistema.com',
            'password'          => bcrypt('123456'),

        ]);
    }
}
