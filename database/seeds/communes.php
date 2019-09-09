<?php

use Illuminate\Database\Seeder;

class communes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::unprepared(file_get_contents(database_path('seeds/sql/communes.sql')));
    }
}
