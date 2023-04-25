<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produtos;

class ProdutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produtos::factory(20)->create();
    }
}
