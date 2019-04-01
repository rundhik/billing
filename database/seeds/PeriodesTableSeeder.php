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
            [
                'id' => 5,
                'kode' => '052014',
                'deskripsi' => 'Mei 2014'
            ],
            [
                'id' => 6,
                'kode' => '062014',
                'deskripsi' => 'Juni 2014'
            ],
            [
                'id' => 7,
                'kode' => '072014',
                'deskripsi' => 'Juli 2014'
            ],
            [
                'id' => 8,
                'kode' => '082014',
                'deskripsi' => 'Agustus 2014'
            ],
            [
                'id' => 9,
                'kode' => '092014',
                'deskripsi' => 'September 2014'
            ],
            [
                'id' => 10,
                'kode' => '102014',
                'deskripsi' => 'Oktober 2014'
            ],
            [
                'id' => 11,
                'kode' => '112014',
                'deskripsi' => 'Nopember 2014'
            ],
            [
                'id' => 12,
                'kode' => '122014',
                'deskripsi' => 'Desember 2014'
            ],
        ];

        foreach ($val as $key => $value) {
            Periode::create($value);
        }
    }
}
