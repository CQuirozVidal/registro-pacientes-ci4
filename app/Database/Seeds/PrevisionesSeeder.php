<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PrevisionesSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('previsiones')->ignore(true)->insertBatch([
            ['nombre' => 'Fonasa'],
            ['nombre' => 'Isapre'],
            ['nombre' => 'Particular'],
        ]);
    }
}
