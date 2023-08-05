<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartenairesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $img1 = asset('public/img/01.png');
        $img2 = asset('/img/02.png');
        $img3 = asset('/img/03.png');
        $img4 = asset('/img/04.png');
        $img5 = asset('/img/05.png');
        $img6 = asset('/img/06.png');
        $img7 = asset('/img/07.png');

        DB::table('partenaires')->insert([
            ['titre' => 'Partenaire 1', 'image' => $img1],
            ['titre' => 'Partenaire 2', 'image' => $img2],
            ['titre' => 'Partenaire 3', 'image' => $img3],
            ['titre' => 'Partenaire 4', 'image' => $img4],
            ['titre' => 'Partenaire 5', 'image' => $img5],
            ['titre' => 'Partenaire 6', 'image' => $img6],
            ['titre' => 'Partenaire 7', 'image' => $img7],
        ]);
    }
}
