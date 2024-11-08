<?php

namespace Database\Seeders;

use App\Models\FeeInvoice;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class FeeInvoiceSeeder extends Seeder
{ // factures de frais
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FeeInvoice::firstOrCreate([
            'name'       => 'Frais Scolaire trimestre 1',
            'note'       => 'Frais pour le premier trimestre de l’année scolaire.',
            'user_id'    => 4,
            'issue_date' => Carbon::now()->startOfMonth()->format('Y-m-d'),
            'due_date'   => Carbon::now()->addMonths(1)->endOfMonth()->format('Y-m-d'),
        ]);

        FeeInvoice::firstOrCreate([
            'name'       => 'Frais de Bibliothèque',
            'note'       => 'Frais pour l’utilisation des ressources de la bibliothèque.',
            'user_id'    => 4,
            'issue_date' => Carbon::now()->startOfMonth()->format('Y-m-d'),
            'due_date'   => Carbon::now()->addWeeks(2)->endOfMonth()->format('Y-m-d'),
        ]);
    }
}
