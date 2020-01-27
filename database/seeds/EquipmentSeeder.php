<?php

use Illuminate\Database\Seeder;
use App\Models\Equipment;

class EquipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Equipment::create([
            'name'  =>  'Samsung Galaxy S8', 
            'category'  =>  'cellphone', 
            'lifetime_average_year' => '3',
            'manufacturing' => '2017-10-01',
        ]);

        Equipment::create([
            'name'  =>  'Galaxy Note 5', 
            'category'  =>  'tablet', 
            'lifetime_average_year' => '5',
            'manufacturing' => '2019-11-05',
        ]);

        Equipment::create([
            'name'  =>  'Dell XPS', 
            'category'  =>  'notebook', 
            'lifetime_average_year' => '12',
            'manufacturing' => '2011-01-19',
        ]);

        Equipment::create([
            'name'  =>  'Dell All in One', 
            'category'  =>  'pc', 
            'lifetime_average_year' => '7',
            'manufacturing' => '2013-07-04',
        ]);
    }
}
