<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        App\User::create([
          'name' => 'Duane van',
          'email' => 'd@vt.com',
          'password' => bcrypt('dvt123')
        ]);
    }
}
