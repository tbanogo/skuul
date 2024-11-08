<?php

namespace Database\Seeders;

use App\Models\ClassGroup;
use Illuminate\Database\Seeder;

class ClassGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ClassGroup::firstOrcreate([
            'id'        => 1,
            'name'      => 'Maternelle',
            'school_id' => 1,
        ]);
        ClassGroup::firstOrcreate([
            'id'        => 2,
            'name'      => 'Primaire',
            'school_id' => 1,
        ]);
        ClassGroup::firstOrcreate([
            'id'        => 3,
            'name'      => 'Secondaire',
            'school_id' => 1,
        ]);
    }
}
