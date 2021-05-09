<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*Crear registro con credenciales propias*/
       User::create([
           'name'=>'Jonathan Plasencia',
           'email'=>'Jonathan@gmail.com',
           'password'=>bcrypt('123456789')
       ]) ;
       User::factory(99)->create();
    }
}
