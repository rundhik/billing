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
            [
                'id' => 4,
                'nm_customer' => 'Customer D',
                'alamat' => 'Kamar 4',
                'telp' => '031-0000004'
            ],
            [
                'id' => 5,
                'nm_customer' => 'Customer E',
                'alamat' => 'Kamar 5',
                'telp' => '031-0000005'
            ],
        ];

        foreach ($val as $key => $value) {
            Customer::create($value);
        }
    }
}
