<?php

use Illuminate\Database\Seeder;
use TesBilling\Models\Layanan;

class LayanansTableSeeder extends Seeder
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
                'nm_layanan' => 'Air'
            ],
            [
                'id' => 2,
                'nm_layanan' => 'Listrik'
            ],
        ];

        foreach ($val as $key => $value) {
            Layanan::create($value);
        }
    }
}
