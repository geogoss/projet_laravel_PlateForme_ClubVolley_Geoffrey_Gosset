<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('clubs')->insert([

            [
                'nom' => 'Diable belge',
                'ville' => 'Bruxelles',
                'pays' => 'Belgique',
                'nombre' => 8,
                'AV' => 1,
                'CE' => 0,
                'AR' => 1,
                'RP' => 0,
                'continent' => 'europe',
            ],
            [
                'nom' => 'Berger allemand',
                'ville' => 'Berlin',
                'pays' => 'Allemagne',
                'nombre' => 8,
                'AV' => 0,
                'CE' => 1,
                'AR' => 1,
                'RP' => 0,
                'continent' => 'europe',
            ],
            [
                'nom' => 'Vipère italienne',
                'ville' => 'Milan',
                'pays' => 'Italie',
                'nombre' => 8,
                'AV' => 1,
                'CE' => 0,
                'AR' => 2,
                'RP' => 1,
                'continent' => 'europe',
            ],
            [
                'nom' => 'Panda chinois',
                'ville' => 'Pekin',
                'pays' => 'Chine',
                'nombre' => 8,
                'AV' => 0,
                'CE' => 2,
                'AR' => 2,
                'RP' => 0,
                'continent' => 'europe',
            ],
            [
                'nom' => 'Scorpion marocain',
                'ville' => 'Tanger',
                'pays' => 'Maroc',
                'nombre' => 8,
                'AV' => 0,
                'CE' => 0,
                'AR' => 0,
                'RP' => 0,
                'continent' => 'afrique',
            ],
            [
                'nom' => 'Gibbon bresilien',
                'ville' => 'Brasilia',
                'pays' => 'Bresil',
                'nombre' => 8,
                'AV' => 0,
                'CE' => 0,
                'AR' => 0,
                'RP' => 0,
                'continent' => 'amerique',
            ],

        ]);

    }
}
