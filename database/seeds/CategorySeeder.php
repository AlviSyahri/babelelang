<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('msproduct_category')->insert([
        	'category_name' 	=> 'Perabotan Rumah',
        	'icon_name'					=> 'icon.gif',
        	'created_by'				=> 'SuperAdmin',
            'flag_delete'               =>0
        ]);
    }
}
