<?php

namespace Database\Seeders;

use App\Models\ExamSlot;
use Illuminate\Database\Seeder;

class ExamSlotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ExamSlot::firstOrCreate([
            'name'        => 'Évaluation Écrite',
            'description' => 'Évaluation Écrite',
            'total_marks' => 20,
            'exam_id'     => 1,
        ]);

        ExamSlot::firstOrCreate([
            'name'        => 'Évaluation Oral',
            'description' => 'Évaluation Oral',
            'total_marks' => 20,
            'exam_id'     => 1,
        ]);

        ExamSlot::firstOrCreate([
            'name'        => 'Évaluation Pratique',
            'description' => 'Évaluation Pratique',
            'total_marks' => 20,
            'exam_id'     => 1,
        ]);

        ExamSlot::firstOrCreate([
            'name'        => 'Travail de Recherche',
            'description' => 'Travail de Recherche',
            'total_marks' => 20,
            'exam_id'     => 1,
        ]);
    }
}
