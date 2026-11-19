<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call('TiposDocumentoSeeder');
        $this->call('PrevisionesSeeder');
        $this->call('PacientesSeeder');
    }
}
