<?php

use Illuminate\Database\Seeder;
use TesBilling\Models\Tarif;

class TarifsTableSeeder extends Seeder
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
                'layanan_id' => 1,
                'tarif' => ["1000","1200","1500","2000"]
            ],
            [
                'id' => 2,
                'layanan_id' => 2,
                'tarif' => ["2000","3000","4500","8000"]
            ],
        ];
        foreach ($val as $key => $value) {
            Tarif::create($value);
        }
    }
}
