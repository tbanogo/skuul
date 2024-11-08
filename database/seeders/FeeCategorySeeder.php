<?php

namespace Database\Seeders;

use App\Models\FeeCategory;
use Illuminate\Database\Seeder;

class FeeCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { // catégorie de frais
        FeeCategory::firstOrCreate([
            'name'        => 'Frais d\'inscription',
            'school_id'   => 1,
            'description' => 'Frais requis lors de l\'inscription.',
        ]);

        FeeCategory::firstOrCreate([
            'name'        => 'Frais de scolarité',
            'school_id'   => 1,
            'description' => 'Frais payés pour l\'éducation tout au long de l\'année scolaire.',
        ]);

        FeeCategory::firstOrCreate([
            'name'        => 'Frais de matériel',
            'school_id'   => 1,
            'description' => 'Frais pour les fournitures scolaires et autres matériaux.',
        ]);

        FeeCategory::firstOrCreate([
            'name'        => 'Frais de laboratoire',
            'school_id'   => 1,
            'description' => 'Frais pour l\'utilisation des installations de laboratoire.',
        ]);

        FeeCategory::firstOrCreate([
            'name'        => 'Frais de bibliothèque',
            'school_id'   => 1,
            'description' => 'Frais pour l\'utilisation de la bibliothèque de l\'école.',
        ]);
    }
}
