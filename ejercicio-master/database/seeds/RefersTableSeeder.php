<?php

use Illuminate\Database\Seeder;

class RefersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Refer::class,3)->create();
    }
}
