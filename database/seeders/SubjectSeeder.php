<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subject::firstOrCreate([
            'id' => 1,
        ], [
            'name'        => 'Mathématique',
            'short_name'  => 'mat',
            'my_class_id' => 8,
            'school_id'   => 1,
        ]);

        Subject::firstOrCreate([
            'name'        => 'Anglais',
            'short_name'  => 'eng',
            'my_class_id' => 7,
            'school_id'   => 1,
        ]);
    }
}
