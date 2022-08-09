<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        Umroh::create([
          'nama' => 'Haji Plus',
          'biaya' => '50000000',
          'durasi' => '30',
          'hotel' => '4',
          'keberangkatan' => 'Solo',
          'maskapai' => 'Saudi Airlines',
          'img' => '300x300.png'
        ]);

        Umroh::create([
          'nama' => 'Umroh VVIP',
          'biaya' => '50000000',
          'durasi' => '30',
          'hotel' => '4',
          'keberangkatan' => 'Solo',
          'maskapai' => 'Saudi Airlines',
          'img' => '300x300.png'
        ]);

        Umroh::create([
          'nama' => 'Haji Plus',
          'biaya' => '50000000',
          'durasi' => '30',
          'hotel' => '4',
          'keberangkatan' => 'Solo',
          'maskapai' => 'Saudi Airlines',
          'img' => '300x300.png'
        ]);
    }
}
