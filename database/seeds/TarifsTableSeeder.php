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
                'tarif' => [
                        [0,10,1000],
                        [10,20,1200],
                        [20,30,1500],
                        [30,'',2000]
                ],
                'satuan' => '(m3)'
            ],
            [
                'id' => 2,
                'layanan_id' => 2,
                'tarif' => [
                        [0,10,2000],
                        [10,20,3000],
                        [20,30,4500],
                        [30,'',7500]
                ],
                'satuan' => '(KWh)'
            ],
        ];
        foreach ($val as $key => $value) {
            Tarif::create($value);
        }
    }
}
