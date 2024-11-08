<?php

namespace Database\Seeders;

use App\Models\Exam;
use Illuminate\Database\Seeder;

class ExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Exam::firstOrCreate([
            'id'          => 1,
            'name'        => 'Composition 1',
            'description' => 'Composition du trimestre 1',
            'semester_id' => '1',
            'start_date'  => '2024-10-20',
            'stop_date'   => '2025-02-20',
        ]);
    }
}
