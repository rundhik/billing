<?php

use Illuminate\Database\Seeder;
use TesBilling\Models\Penggunaan;

class PenggunaansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $val = [
            //Air
            [
                'id' => 1,
                'customer_id' => 1,
                'layanan_id' => 1,
                'periode_id' => 1,
                'meter'  => 2000
            ],
            [
                'id' => 2,
                'customer_id' => 1,
                'layanan_id' => 1,
                'periode_id' => 2,
                'meter'  => 2125
            ],
            [
                'id' => 3,
                'customer_id' => 1,
                'layanan_id' => 1,
                'periode_id' => 3,
                'meter'  => 2280
            ],
            [
                'id' => 4,
                'customer_id' => 2,
                'layanan_id' => 1,
                'periode_id' => 1,
                'meter'  => 3500
            ],
            [
                'id' => 5,
                'customer_id' => 2,
                'layanan_id' => 1,
                'periode_id' => 2,
                'meter'  => 3725
            ],
            [
                'id' => 6,
                'customer_id' => 2,
                'layanan_id' => 1,
                'periode_id' => 3,
                'meter'  => 3940
            ],
            [
                'id' => 7,
                'customer_id' => 3,
                'layanan_id' => 1,
                'periode_id' => 1,
                'meter'  => 4300
            ],
            [
                'id' => 8,
                'customer_id' => 3,
                'layanan_id' => 1,
                'periode_id' => 2,
                'meter'  => 4435
            ],
            [
                'id' => 9,
                'customer_id' => 3,
                'layanan_id' => 1,
                'periode_id' => 3,
                'meter'  => 4620
            ],
            //Listrik
            [
                'id' => 10,
                'customer_id' => 1,
                'layanan_id' => 2,
                'periode_id' => 1,
                'meter'  => 21091
            ],
            [
                'id' => 11,
                'customer_id' => 1,
                'layanan_id' => 2,
                'periode_id' => 2,
                'meter'  => 22190
            ],
            [
                'id' => 12,
                'customer_id' => 1,
                'layanan_id' => 2,
                'periode_id' => 3,
                'meter'  => 23210
            ],
            [
                'id' => 13,
                'customer_id' => 2,
                'layanan_id' => 2,
                'periode_id' => 1,
                'meter'  => 11255
            ],
            [
                'id' => 14,
                'customer_id' => 2,
                'layanan_id' => 2,
                'periode_id' => 2,
                'meter'  => 11450
            ],
            [
                'id' => 15,
                'customer_id' => 2,
                'layanan_id' => 2,
                'periode_id' => 3,
                'meter'  => 11879
            ],
            [
                'id' => 16,
                'customer_id' => 3,
                'layanan_id' => 2,
                'periode_id' => 1,
                'meter'  => 31980
            ],
            [
                'id' => 17,
                'customer_id' => 3,
                'layanan_id' => 2,
                'periode_id' => 2,
                'meter'  => 32125
            ],
            [
                'id' => 18,
                'customer_id' => 3,
                'layanan_id' => 2,
                'periode_id' => 3,
                'meter'  => 33341
            ],
        ];

        foreach ($val as $key => $value) {
            Penggunaan::create($value);
        }
    }
}
