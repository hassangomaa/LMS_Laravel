<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
/// Import your table model
use App\Models\User;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //use factory here to fill the data
        User::factory()->times(100)->create();
    }
}