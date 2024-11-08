<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Section::firstOrCreate([
            'id'          => 1,
            'name'        => 'A',
            'my_class_id' => 7,
        ]);

        Section::firstOrCreate([
            'id'          => 2,
            'name'        => 'B',
            'my_class_id' => 7,
        ]);

        Section::firstOrCreate([
            'id'          => 3,
            'name'        => '1',
            'my_class_id' => 2,
        ]);
    }
}
