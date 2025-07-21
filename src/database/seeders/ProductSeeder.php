<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'name' => 'Kain Majun Putih',
            'description' => 'Kain majun berkualitas, cocok untuk keperluan industri dan kebersihan.',
            'price' => 15000.00,
            'stock' => 100,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
