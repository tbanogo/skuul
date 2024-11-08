<?php

namespace Database\Seeders;

use App\Models\School;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        School::updateOrCreate(
            ['id' => 1],
            [
                'name'     => 'Complexe scolaire somdé de kosoghin',
                'address'  => 'Enseignement général',
                'code'     => Str::Random(10),
                'initials' => 'LPCSSK',
            ]
        );

        // School::factory()
        //         ->count(3)
        //         ->create();
    }
}
