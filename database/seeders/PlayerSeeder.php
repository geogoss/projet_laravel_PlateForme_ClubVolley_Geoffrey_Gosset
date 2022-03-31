<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('players')->insert([
            [
               'nom' => 'Geoffrey',
               'prenom' => 'Gosset',
               'age' => 28,
               'tel' => '0494502299',
               'email' => 'geoffrey@gmail.com',
               'genre' => 'Homme',
               'pays' => 'Belgique',
               'role_id' => 1,
               'club_id' => null,
               'photo_id' => 1 
            ],
            [
               'nom' => 'Benoit',
               'prenom' => 'Gosset',
               'age' => 38,
               'tel' => '0494502299',
               'email' => 'benoit@gmail.com',
               'genre' => 'Homme',
               'pays' => 'Belgique',
               'role_id' => 1,
               'club_id' => null,
               'photo_id' => 2 
            ],
            [
               'nom' => 'Ismael',
               'prenom' => 'Faquiri',
               'age' => 24,
               'tel' => '0494502288',
               'email' => 'ismael@gmail.com',
               'genre' => 'Homme',
               'pays' => 'Belgique',
               'role_id' => 2,
               'club_id' => null,
               'photo_id' => 3 
            ],
            [
               'nom' => 'Hedi',
               'prenom' => 'Hassan',
               'age' => 22,
               'tel' => '0494502212',
               'email' => 'hedi@gmail.com',
               'genre' => 'Homme',
               'pays' => 'Belgique',
               'role_id' => 2,
               'club_id' => 1,
               'photo_id' => 4 
            ],
            [
               'nom' => 'Hidalgo',
               'prenom' => 'Hassanji',
               'age' => 22,
               'tel' => '0494502212',
               'email' => 'hedi@gmail.com',
               'genre' => 'Homme',
               'pays' => 'Belgique',
               'role_id' => 3,
               'club_id' => 1,
               'photo_id' => 5 
            ],
            [
               'nom' => 'Jonathan',
               'prenom' => 'Staveau',
               'age' => 29,
               'tel' => '0494505412',
               'email' => 'Jo@gmail.com',
               'genre' => 'Homme',
               'pays' => 'Belgique',
               'role_id' => 3,
               'club_id' => 1,
               'photo_id' => 6 
            ],
            [
               'nom' => 'Soufiane',
               'prenom' => 'Abou',
               'age' => 33,
               'tel' => '0494505147',
               'email' => 'Soufian@gmail.com',
               'genre' => 'Homme',
               'pays' => 'Belgique',
               'role_id' => 4,
               'club_id' => 1,
               'photo_id' => 7 
            ],
            [
               'nom' => 'Alix',
               'prenom' => 'Nyange',
               'age' => 38,
               'tel' => '0494505521',
               'email' => 'alix@gmail.com',
               'genre' => 'Femme',
               'pays' => 'Italie',
               'role_id' => 4,
               'club_id' => 1,
               'photo_id' => 8 
            ],
            [
               'nom' => 'Louis',
               'prenom' => 'lafont',
               'age' => 21,
               'tel' => '0494505478',
               'email' => 'louis@gmail.com',
               'genre' => 'Homme',
               'pays' => 'Algérie',
               'role_id' => 4,
               'club_id' => 1,
               'photo_id' => 9 
            ],
            [
               'nom' => 'Ines',
               'prenom' => 'Mazoin',
               'age' => 28,
               'tel' => '0494502299',
               'email' => 'ines@gmail.com',
               'genre' => 'Femme',
               'pays' => 'Belgique',
               'role_id' => 1,
               'club_id' => 2,
               'photo_id' => 10 
            ],
            [
               'nom' => 'Cindy',
               'prenom' => 'Laupers',
               'age' => 38,
               'tel' => '0494502299',
               'email' => 'cindy@gmail.com',
               'genre' => 'Femme',
               'pays' => 'France',
               'role_id' => 1,
               'club_id' => 2,
               'photo_id' => 11 
            ],
            [
               'nom' => 'Fatouma',
               'prenom' => 'Faquiri',
               'age' => 24,
               'tel' => '0494502288',
               'email' => 'fatou@gmail.com',
               'genre' => 'Femme',
               'pays' => 'Belgique',
               'role_id' => 2,
               'club_id' => 2,
               'photo_id' => 12 
            ],
            [
               'nom' => 'Marcel',
               'prenom' => 'Cerdan',
               'age' => 22,
               'tel' => '0494502212',
               'email' => 'marcel@gmail.com',
               'genre' => 'Homme',
               'pays' => 'Argentine',
               'role_id' => 2,
               'club_id' => 2,
               'photo_id' => 13 
            ],
            [
               'nom' => 'Hedi',
               'prenom' => 'Hassan',
               'age' => 22,
               'tel' => '0494502212',
               'email' => 'hedi@gmail.com',
               'genre' => 'Homme',
               'pays' => 'Belgique',
               'role_id' => 3,
               'club_id' => 2,
               'photo_id' => 14 
            ],
            [
               'nom' => 'Marie',
               'prenom' => 'Staveau',
               'age' => 29,
               'tel' => '0494505412',
               'email' => 'marie@gmail.com',
               'genre' => 'Femme',
               'pays' => 'Perou',
               'role_id' => 3,
               'club_id' => 2,
               'photo_id' => 15 
            ],
            [
               'nom' => 'Stephan',
               'prenom' => 'Michou',
               'age' => 33,
               'tel' => '0494505147',
               'email' => 'steph@gmail.com',
               'genre' => 'Homme',
               'pays' => 'Chine',
               'role_id' => 4,
               'club_id' => 2,
               'photo_id' => 16 
            ],
            [
               'nom' => 'Alicia',
               'prenom' => 'Nyange',
               'age' => 38,
               'tel' => '0494505521',
               'email' => 'alicia@gmail.com',
               'genre' => 'Femme',
               'pays' => 'Bresil',
               'role_id' => 4,
               'club_id' => 2,
               'photo_id' => 17 
            ],
            [
               'nom' => 'Madona',
               'prenom' => 'Chaude',
               'age' => 21,
               'tel' => '0494505478',
               'email' => 'mado@gmail.com',
               'genre' => 'Femme',
               'pays' => 'Pakistan',
               'role_id' => 4,
               'club_id' => null,
               'photo_id' => 18 
            ],
            [
               'nom' => 'Maryse',
               'prenom' => 'Citron',
               'age' => 28,
               'tel' => '0494502299',
               'email' => 'maryse@gmail.com',
               'genre' => 'Femme',
               'pays' => 'Belgique',
               'role_id' => 1,
               'club_id' => null,
               'photo_id' => 19 
            ],
            [
               'nom' => 'Samuel',
               'prenom' => 'Jackson',
               'age' => 38,
               'tel' => '0494502299',
               'email' => 'samuel@gmail.com',
               'genre' => 'Homme',
               'pays' => 'Canada',
               'role_id' => 1,
               'club_id' => 3,
               'photo_id' => 20 
            ],
            [
               'nom' => 'Mel',
               'prenom' => 'Gibson',
               'age' => 24,
               'tel' => '0494502288',
               'email' => 'mel@gmail.com',
               'genre' => 'Homme',
               'pays' => 'UE',
               'role_id' => 2,
               'club_id' => 3,
               'photo_id' => 21 
            ],
            [
               'nom' => 'Angela',
               'prenom' => 'salin',
               'age' => 22,
               'tel' => '0494502212',
               'email' => 'angela@gmail.com',
               'genre' => 'Femme',
               'pays' => 'Inde',
               'role_id' => 2,
               'club_id' => 3,
               'photo_id' => 22 
            ],
            [
               'nom' => 'Aicha',
               'prenom' => 'gibbon',
               'age' => 22,
               'tel' => '0494502212',
               'email' => 'aicha@gmail.com',
               'genre' => 'Femme',
               'pays' => 'Tunisie',
               'role_id' => 3,
               'club_id' => 3,
               'photo_id' => 23 
            ],
            [
               'nom' => 'Therese',
               'prenom' => 'Staveau',
               'age' => 29,
               'tel' => '0494505412',
               'email' => 'marie@gmail.com',
               'genre' => 'Femme',
               'pays' => 'Perou',
               'role_id' => 3,
               'club_id' => 3,
               'photo_id' => 24 
            ],
            [
               'nom' => 'Stephanie',
               'prenom' => 'Gabi',
               'age' => 33,
               'tel' => '0494505147',
               'email' => 'stephanie@gmail.com',
               'genre' => 'Femme',
               'pays' => 'Australie',
               'role_id' => 4,
               'club_id' => 3,
               'photo_id' => 25 
            ],
            [
               'nom' => 'Benjamen',
               'prenom' => 'Nyange',
               'age' => 38,
               'tel' => '0494505521',
               'email' => 'benja@gmail.com',
               'genre' => 'Homme',
               'pays' => 'Bresil',
               'role_id' => 4,
               'club_id' => 3,
               'photo_id' => 26 
            ],
            [
               'nom' => 'Justin',
               'prenom' => 'Timberlak',
               'age' => 21,
               'tel' => '0494505478',
               'email' => 'justin@gmail.com',
               'genre' => 'Homme',
               'pays' => 'Irak',
               'role_id' => 4,
               'club_id' => null,
               'photo_id' => 27 
            ],
            [
               'nom' => 'Britney',
               'prenom' => 'Fraise',
               'age' => 28,
               'tel' => '0494502299',
               'email' => 'britney@gmail.com',
               'genre' => 'Femme',
               'pays' => 'Belgique',
               'role_id' => 1,
               'club_id' => 4,
               'photo_id' => 28 
            ],
            [
               'nom' => 'Denzel',
               'prenom' => 'wache',
               'age' => 38,
               'tel' => '0494502299',
               'email' => 'denzel@gmail.com',
               'genre' => 'Homme',
               'pays' => 'Irlande',
               'role_id' => 1,
               'club_id' => 4,
               'photo_id' => 29 
            ],
            [
               'nom' => 'Melissa',
               'prenom' => 'ofgood',
               'age' => 24,
               'tel' => '0494502288',
               'email' => 'melissa@gmail.com',
               'genre' => 'Femme',
               'pays' => 'UE',
               'role_id' => 2,
               'club_id' => 4,
               'photo_id' => 30 
            ],
            [
               'nom' => 'marion',
               'prenom' => 'Coti',
               'age' => 22,
               'tel' => '0494502212',
               'email' => 'marion@gmail.com',
               'genre' => 'Femme',
               'pays' => 'Hollande',
               'role_id' => 2,
               'club_id' => 4,
               'photo_id' => 31 
            ],
            [
               'nom' => 'Benedicte',
               'prenom' => 'Daubi',
               'age' => 22,
               'tel' => '0494502212',
               'email' => 'bene@gmail.com',
               'genre' => 'Femme',
               'pays' => 'Grece',
               'role_id' => 3,
               'club_id' => 4,
               'photo_id' => 32 
            ],
            [
               'nom' => 'Tessa',
               'prenom' => 'bullet',
               'age' => 29,
               'tel' => '0494505412',
               'email' => 'tessa@gmail.com',
               'genre' => 'Femme',
               'pays' => 'France',
               'role_id' => 3,
               'club_id' => 4,
               'photo_id' => 33 
            ],
            [
               'nom' => 'Mohamed',
               'prenom' => 'Hassan',
               'age' => 33,
               'tel' => '0494505147',
               'email' => 'momo@gmail.com',
               'genre' => 'Homme',
               'pays' => 'Australie',
               'role_id' => 4,
               'club_id' => 4,
               'photo_id' => 34 
            ],
            [
               'nom' => 'Benjamen',
               'prenom' => 'Franklin',
               'age' => 38,
               'tel' => '0494505521',
               'email' => 'benjamen@gmail.com',
               'genre' => 'Homme',
               'pays' => 'Bresil',
               'role_id' => 4,
               'club_id' => 4,
               'photo_id' => 35 
            ],
            [
               'nom' => 'Justin',
               'prenom' => 'Bieber',
               'age' => 21,
               'tel' => '0494505478',
               'email' => 'justin@gmail.com',
               'genre' => 'Homme',
               'pays' => 'Iran',
               'role_id' => 4,
               'club_id' => null,
               'photo_id' => 36 
            ],
            
        ]);
    }
}
