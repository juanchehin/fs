<?php

use Illuminate\Database\Seeder;

class UsersSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'email' => 'test@yahoo.es',
                'password' => \Hash::make('654321'),
                'rol' => 'Administrador',
                'name' => 'Test',
                'fotografia' => 'foto_base.png',
            ],
            [
                'email' => 'test@yahoo.es',
                'password' => \Hash::make('123456'),
                'rol' => 'Vendedor',
                'name' => 'test',
                'fotografia' => 'foto_base.png',
            ],
        ]);
    }
}
