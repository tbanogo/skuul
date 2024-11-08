<?php

namespace Database\Seeders;

use App\Models\GradeSystem;
use Illuminate\Database\Seeder;

class GradeSystemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Système de notation pour le primaire (notation sur 10)
        GradeSystem::firstOrCreate([
            'id'             => 1,
            'name'           => 'Excéllent',
            'remark'         => 'Excéllent',
            'grade_from'     => '9',
            'grade_till'     => '10',
            'class_group_id' => 2,
        ]);

        GradeSystem::firstOrCreate([
            'id'             => 2,
            'name'           => 'Très bien',
            'remark'         => 'Très bien',
            'grade_from'     => '7',
            'grade_till'     => '8',
            'class_group_id' => 2,
        ]);

        GradeSystem::firstOrCreate([
            'id'             => 3,
            'name'           => 'Bien',
            'remark'         => 'Bien',
            'grade_from'     => '5',
            'grade_till'     => '6',
            'class_group_id' => 2,
        ]);

        GradeSystem::firstOrCreate([
            'id'             => 4,
            'name'           => 'Passable',
            'remark'         => 'Passable',
            'grade_from'     => '3',
            'grade_till'     => '4',
            'class_group_id' => 2,
        ]);

        GradeSystem::firstOrCreate([
            'id'             => 5,
            'name'           => 'Inssufisant',
            'remark'         => 'Inssufisant',
            'grade_from'     => '0',
            'grade_till'     => '2',
            'class_group_id' => 2,
        ]);

        // Système de notation pour le secondaire (notation sur 20)
        GradeSystem::firstOrCreate([
            'id'             => 6,
            'name'           => 'Excéllent',
            'remark'         => 'Excéllent',
            'grade_from'     => '18',
            'grade_till'     => '20',
            'class_group_id' => 3,
        ]);

        GradeSystem::firstOrCreate([
            'id'             => 7,
            'name'           => 'Très bien',
            'remark'         => 'Très bien',
            'grade_from'     => '15',
            'grade_till'     => '17',
            'class_group_id' => 3,
        ]);

        GradeSystem::firstOrCreate([
            'id'             => 8,
            'name'           => 'Bien',
            'remark'         => 'Bien',
            'grade_from'     => '12',
            'grade_till'     => '14',
            'class_group_id' => 3,
        ]);

        GradeSystem::firstOrCreate([
            'id'             => 9,
            'name'           => 'Passable',
            'remark'         => 'Passable',
            'grade_from'     => '10',
            'grade_till'     => '11',
            'class_group_id' => 3,
        ]);

        GradeSystem::firstOrCreate([
            'id'             => 10,
            'name'           => 'Inssufisant',
            'remark'         => 'Inssufisant',
            'grade_from'     => '0',
            'grade_till'     => '9',
            'class_group_id' => 3,
        ]);
    }
}
