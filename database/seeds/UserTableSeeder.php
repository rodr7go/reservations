<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class)->create([
            'name'            => 'Rodrigo',
            'last_name_1'     => 'Lopez',
            'last_name_2'     => 'Guzmán',
            'username'        => 'rodr7go',
            'email'           => 'rodr7go.lg@gmail.com',
            'phone'           => '55555555',
            'mobile'          => '5517324531',
            'password'        => bcrypt('123456'),
            'active'          => true,
            'street_address'  => 'Metepec',
            'colony'          => 'Nueva Ixtacala',
            'exterior_number' => '11',
            'interior_number' => '',
            'postal_zip'      => '54160',
            'city'            => 'Ciudad de México',
            'state'           => 'Estado de México',
            'role'            => 'admin'
        ]);
        factory(\App\User::class, 49)->create();
    }
}
