<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'category_name' => 'monuments',
                'category_description'=>'Découvrez tous les monuments célèbres de Nantes',
                'category_slug'=>'monuments',
                'term_category_id' => '1',


            ],
            [
                'category_name' => 'musées',
                'category_description'=>'Découvrez tous les musées de Nantes',
                'category_slug'=>'musees',
                'term_category_id' => '1',


            ],
            [
                'category_name' => 'boutiques',
                'category_description'=>'Découvrez toutes mes boutiques souvenis de Nantes',
                'category_slug'=>'boutiques',
                'term_category_id' => '1',


            ],
            [
                'category_name' => 'Sortir',
                'category_description'=>'Découvrez toutes les sorties à faire à Nantes',
                'category_slug'=>'sortir',
                'term_category_id' => '2',


            ],
            [
                'category_name' => 'visiter',
                'category_description'=>'Découvrez toutes les visites à faire à Nantes',
                'category_slug'=>'visiter',
                'term_category_id' => '2',


            ],
            [
                'category_name' => 'art',
                'category_description'=>'Découvrez la culture artistique de Nantes',
                'category_slug'=>'art',
                'term_category_id' => '2',


            ],
        ]);
    }
}
