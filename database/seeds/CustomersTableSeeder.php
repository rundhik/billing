<?php

use Illuminate\Database\Seeder;
use TesBilling\Models\Customer;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $val = [
            [
                'id' => 1,
                'nm_customer' => 'Customer A',
                'alamat' => 'Kamar 1',
                'telp' => '031-0000001'
            ],
            [
                'id' => 2,
                'nm_customer' => 'Customer B',
                'alamat' => 'Kamar 2',
                'telp' => '031-0000002'
            ],
            [
                'id' => 3,
                'nm_customer' => 'Customer C',
                'alamat' => 'Kamar 3',
                'telp' => '031-0000003'
            ],
        ];

        foreach ($val as $key => $value) {
            Customer::create($value);
        }
    }
}
