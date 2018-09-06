<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        'name' => 'Hector Crispens',
        'email' => 'hector.or.cr@gmail.com',
        'password' => bcrypt('ingenieria'),
        'cargo' => 'mesadeayuda'
    ]);
        DB::table('users')->insert([
            'name' => 'Franco Pizzutti',
            'email' => 'francopizzutti@gmail.com',
            'password' => bcrypt('franco'),
            'cargo' => 'grupoderesolucion'
        ]);
    }
}
