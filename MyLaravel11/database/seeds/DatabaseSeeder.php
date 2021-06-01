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
        $this->call([
          EmployeeSeeder::class, //prima quello senza chiave esterna
          TaskSeeder::class,
        ]);
    }
}