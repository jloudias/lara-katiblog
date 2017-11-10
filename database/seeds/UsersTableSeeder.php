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
        $user = App\User::create([
          'name' => 'Duane van',
          'email' => 'd@vt.com',
          'password' => bcrypt('dvt123'),
          'admin' => 1

        ]);

        App\Profile::create([
          'user_id' => $user->id,
          'avatar' => 'uploads/avatars/1.png',
          'about' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit animi corporis recusandae nostrum eligendi ut optio voluptas maxime iste quisquam ea ad numquam fugit dicta, voluptatum hic dolores earum. Odio.20',
          'facebook' => 'facebook.com',
          'youtube' => 'youtube.com'
        ]);
    }
}
