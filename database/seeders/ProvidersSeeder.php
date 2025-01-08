<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Providers;


class ProvidersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $providers = [
            'XL',
            'Telkomsel',
            'Indosat',
            'Tri',
        ];

        foreach ($providers as $prvd)
         Providers::create([
            'name' => $prvd,
         ]);

    }
}