<?php

namespace Database\Seeders;

use App\Models\FeeInvoiceRecord;
use Illuminate\Database\Seeder;

class FeeInvoiceRecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FeeInvoiceRecord::firstOrCreate([
            'fee_id'         => 1,
            'fee_invoice_id' => 1,
            'amount'         => 5000, // Montant typique pour un frais scolaire
            'waiver'         => 0,    // Aucune dispense
            'paid'           => 1,    // Frais payé
            'fine'           => 0,    // Pas d'amende
        ]);

        FeeInvoiceRecord::firstOrCreate([
            'fee_id'         => 1,
            'fee_invoice_id' => 1,
            'amount'         => 10000, // Montant typique pour un frais de bibliothèque
            'waiver'         => 500,   // Dispense partielle
            'paid'           => 0,     // Frais non payé
            'fine'           => 200,   // Amende pour retard
        ]);

    }
}
