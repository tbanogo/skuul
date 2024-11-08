<?php

namespace Database\Seeders;

use App\Models\Fee;
use Illuminate\Database\Seeder;

class FeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Fee::firstOrCreate([
            'fee_category_id' => 1,
            'name'            => 'Frais d\'inscription',
            'description'     => 'Frais pour l\'inscription annuelle des élèves.',
        ]);
    }
}
