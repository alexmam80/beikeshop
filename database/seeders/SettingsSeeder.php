<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsSeeder extends Seeder
{
    public function run(): void
    {
        // ia cheia din .env prin config/services.php
        $stripeSecret = config('services.stripe.secret');

        if (blank($stripeSecret)) {
            // NU oprim seederul, doar avertizăm
            $this->command?->warn('STRIPE_SECRET lipsește din .env — nu s-a scris nicio valoare în settings.');
            return;
        }

        DB::table('settings')->updateOrInsert(
            ['key' => 'stripe_secret'],                  // identificator
            [
                'value'      => $stripeSecret,           // valoarea reală din .env
                'updated_at' => now(),
                'created_at' => now(),
            ]
        );

        $this->command?->info('Stripe secret setat din .env în tabelul settings.');
    }
}