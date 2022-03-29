<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('photos')->insert([

           ['src' => 'aicha.jpg'],
           ['src' => 'alexe.jpg'],
           ['src' => 'benja.jpg'],
           ['src' => 'bernadette.jpg'],
           ['src' => 'bruno.jpg'],
           ['src' => 'charles.jpg'],
           ['src' => 'esteban.jpg'],
           ['src' => 'ines.jpg'],
           ['src' => 'jean.jpg'],
           ['src' => 'jimy.jpg'],
           ['src' => 'joelle.jpg'],
           ['src' => 'julie.jpg'],
           ['src' => 'kevin.jpg'],
           ['src' => 'kim.jpg'],
           ['src' => 'leila.jpg'],
           ['src' => 'magali.jpg'],
           ['src' => 'marc.jpg'],
           ['src' => 'mathieu.jpg'],
           ['src' => 'michele.jpg'],
           ['src' => 'nadia.jpg'],
           ['src' => 'nathalie.jpg'],
           ['src' => 'pierre.jpg'],
           ['src' => 'sophie.jpg'],
           ['src' => 'steph.jpg'],
           ['src' => 'steve.jpg'],
           ['src' => 'tom.jpg']

        ]);
    }
}
