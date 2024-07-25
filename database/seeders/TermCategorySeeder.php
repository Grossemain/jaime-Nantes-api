<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\TermCategory;


class TermCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('term_categories')->insert([
            [
                'term_category_name' => 'article',
                'term_category_description'=>'Bienvenue dans notre catégorie dédiée à Nantes, une ville riche en histoire et en culture. Découvrez ses monuments emblématiques comme le Château des Ducs de Bretagne et la majestueuse Cathédrale Saint-Pierre-et-Saint-Paul. Plongez dans l\'ambiance créative de l\'Île de Nantes avec les Machines de l\'Île et le Carrousel des Mondes Marins. Flânez dans le quartier animé du Bouffay, parfait pour une sortie nocturne entre amis. Explorez l\'art contemporain au Lieu Unique et le Musée d\'Arts de Nantes. Cette rubrique vous guidera à travers les trésors cachés et les incontournables de cette ville fascinante.',
            ],
            [
                'term_category_name' => 'place',
                'term_category_description'=>'À Nantes, les musées sont incontournables pour les amateurs d\'histoire et d\'art. Le Château des Ducs de Bretagne, un monument emblématique, abrite le musée d\'histoire de Nantes, riche en expositions fascinantes. Le Musée d\'Arts de Nantes offre une collection exceptionnelle, mêlant œuvres anciennes et contemporaines. Pour une expérience unique, visitez Les Machines de l\'Île, où des créatures mécaniques inspirées des mondes de Jules Verne prennent vie. Enfin, flânez dans les boutiques de souvenirs du Passage Pommeraye, une galerie marchande historique, pour ramener un morceau de Nantes chez vous. Chaque lieu promet une immersion culturelle captivante et mémorable.',
            ],
        ]);
    }
    
}
