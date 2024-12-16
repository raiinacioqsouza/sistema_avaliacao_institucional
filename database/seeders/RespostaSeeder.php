<?php

namespace Database\Seeders;

use App\Models\Resposta;
use Illuminate\Database\Seeder;

class RespostaSeeder extends Seeder
{
    public function run()
    {
        Resposta::factory()->count(100)->create();
    }
}
