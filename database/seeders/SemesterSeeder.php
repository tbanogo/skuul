<?php

namespace Database\Seeders;

use App\Models\Semester;
use Illuminate\Database\Seeder;

class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $semester = Semester::firstOrCreate([
            'id'                   => 1,
        ], [
            'name'             => 'Trimestre 1',
            'academic_year_id' => 1,
            'school_id'        => 1,
        ]);
        $semester->school->semester_id = $semester->id;
        $semester->school->save();

        Semester::firstOrCreate([
            'id'                   => 2,
        ], [
            'name'             => 'Trimestre 2',
            'academic_year_id' => 1,
            'school_id'        => 1,
        ]);

        Semester::firstOrCreate([
            'id'                   => 3,
        ], [
            'name'             => 'Trimestre 3',
            'academic_year_id' => 1,
            'school_id'        => 1,
        ]);
    }
}
