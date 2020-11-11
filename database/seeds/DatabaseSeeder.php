<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(data::class);
    }
}
