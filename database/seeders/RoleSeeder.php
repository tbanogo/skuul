<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::firstOrCreate([
            'name' => 'super-admin',
        ]);
        Role::firstOrCreate([
            'name' => 'admin',
        ]);
        Role::firstOrCreate([
            'name' => 'teacher', // enseignant
        ]);
        Role::firstOrCreate([
            'name' => 'student', // apprenant
        ]);
        Role::firstOrCreate([
            'name' => 'parent', // parent
        ]);
        Role::firstOrCreate([
            'name' => 'accountant', // comptable
        ]);
        Role::firstOrCreate([
            'name' => 'librarian', // bibliothèquaire
        ]);
        Role::firstOrCreate([
            'name' => 'applicant', // postulant pour un poste (ci dessus)
        ]);
    }
}
