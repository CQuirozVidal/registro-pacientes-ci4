<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TiposDocumentoSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('tipos_documento')->ignore(true)->insertBatch([
            ['nombre' => 'RUT'],
            ['nombre' => 'Pasaporte'],
            ['nombre' => 'Otro'],
        ]);
    }
}
