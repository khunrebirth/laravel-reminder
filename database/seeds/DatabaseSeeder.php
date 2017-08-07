<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ReminderTypeSeeder::class);
        $this->call(ReminderSeeder::class);
    }
}
