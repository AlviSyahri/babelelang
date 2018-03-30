<?php

use Illuminate\Database\Seeder;

class superadminseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('msuser')->insert([
        	'nama'				=>	'SuperAdmin',
        	'alamat'			=>	'Regency Melati Mas Blok E2/17A',
        	'email'				=>	'superadmin@sevenplaces.net',
        	'password'			=>	'rahasia',
        	'no_telepon'		=>	'081294530216',
        	'dob'				=>	'2017-10-10',
        	'jenis_kelamin'		=>	'1',
        	'foto'				=>	'User/superadmin.jpg',
        	'saldo'				=>	'999999',
        	'role'				=>	3,
        	'foto_ktp'			=>	'SevenPlaces101020173',
        	'user_activation'	=>	2,
        	'flag_delete'		=>	0,
        ]);
         
    }
}
