<?php

namespace Database\Seeders;

use App\Models\Timetable;
use Illuminate\Database\Seeder;

class TimetableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Timetable::firstOrCreate([
            'id' => 1,
        ], [
            'name'        => 'Emploi du temps 6 ième',
            'description' => 'Emploi du temps de la classe de 6 ième',
            'my_class_id' => 7,
            'semester_id' => 1,
        ]);
    }
}
