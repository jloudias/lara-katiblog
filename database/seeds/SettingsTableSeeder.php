<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        App\Setting::create([
          'site_name' => 'Laravel KatiBlog',
          'contact_email' => 'd@vt.com',
          'contact_number' => '8 890 2356',
          'address' => 'Russia, Peterburg'

        ]);
    }
}
