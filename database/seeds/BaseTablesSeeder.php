<?php

use Illuminate\Database\Seeder;

class BaseTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    factory(App\Models\Admin::class, 10)->create();
	    factory(App\Models\User::class, 10)->create();
    }
}
