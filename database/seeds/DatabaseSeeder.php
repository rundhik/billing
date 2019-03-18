<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CustomersTableSeeder::class);
        $this->call(LayanansTableSeeder::class);
        $this->call(PeriodesTableSeeder::class);
        $this->call(TarifsTableSeeder::class);
        $this->call(PenggunaansTableSeeder::class);
        // $this->call(TagihansTableSeeder::class);
    }
}
