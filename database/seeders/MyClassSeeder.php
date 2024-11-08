<?php

namespace Database\Seeders;

use App\Models\MyClass;
use Illuminate\Database\Seeder;

class MyClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MyClass::firstOrcreate([
            'id'             => 1,
            'name'           => 'Petite section',
            'class_group_id' => 1,
        ]);

        MyClass::firstOrcreate([
            'id'             => 2,
            'name'           => 'Moyenne section',
            'class_group_id' => 1,
        ]);

        MyClass::firstOrcreate([
            'id'             => 3,
            'name'           => 'Grande section',
            'class_group_id' => 1,
        ]);

        MyClass::firstOrcreate([
            'id'             => 4,
            'name'           => 'CP1',
            'class_group_id' => 2,
        ]);

        MyClass::firstOrcreate([
            'id'             => 5,
            'name'           => 'CP2',
            'class_group_id' => 2,
        ]);

        MyClass::firstOrcreate([
            'id'             => 6,
            'name'           => 'CM2',
            'class_group_id' => 2,
        ]);

        MyClass::firstOrcreate([
            'id'             => 7,
            'name'           => '6 ième',
            'class_group_id' => 3,
        ]);

        MyClass::firstOrcreate([
            'id'             => 8,
            'name'           => '3 ième',
            'class_group_id' => 3,
        ]);
    }
}
