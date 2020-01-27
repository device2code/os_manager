<?php

use Illuminate\Database\Seeder;
use App\Models\ServiceOrder;

class ServiceOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ServiceOrder::create([
            'report'    => 'Esquentando muito e depois de um tempo, desliga e não liga mais',
            'solution'    => '',
            'entry'    => '2019-11-01',
            'start'    => '',
            'end'    => '2019-11-01',
            'exit'    => '2019-11-01',
            'value'    => '150.00',
            'feedback'    => '0',
            'status'    => 'entry',
            'owner_id'    => '1',
            'technician_id'    => '2',
            'equipment_id'  =>  '1',
        ]);
    }
}
