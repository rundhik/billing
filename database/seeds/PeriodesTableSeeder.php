<?php

use Illuminate\Database\Seeder;
use TesBilling\Models\Periode;

class PeriodesTableSeeder extends Seeder
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
                'kode' => '012014',
                'deskripsi' => 'Januari 2014'
            ],
            [
                'id' => 2,
                'kode' => '022014',
                'deskripsi' => 'Pebruari 2014'
            ],
            [
                'id' => 3,
                'kode' => '032014',
                'deskripsi' => 'Maret 2014'
            ],
            [
                'id' => 4,
                'kode' => '042014',
                'deskripsi' => 'April 2014'
            ],
        ];

        foreach ($val as $key => $value) {
            Periode::create($value);
        }
    }
}
