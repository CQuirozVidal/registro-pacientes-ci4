<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PacientesSeeder extends Seeder
{
    public function run()
    {
        $idDE = fn (string $tabla, string $nombre) =>
            $this->db->table($tabla)->where('nombre', $nombre)->get()->getRow()->id;
        
            $rut = $idDE('tipos_documento', 'RUT');
            $pasaporte = $idDE('tipos_documento', 'Pasaporte');
            $fonasa = $idDE('previsiones', 'Fonasa');
            $isapre = $idDE('previsiones', 'Isapre');
            $particular = $idDE('previsiones', 'Particular');
            $ahora = date('Y-m-d H:i:s');

            $this->db->table('pacientes')->ignore(true)->insertBatch([
                [
                    'tipo_documento_id' => $rut,
                    'numero_documento' => '12345678-9',
                    'nombres' => 'Juan',
                    'apellidos' => 'Pérez',
                    'fecha_nacimiento' => '1980-01-01',
                    'prevision_id' => $fonasa,
                    'created_at' => $ahora,
                    'updated_at' => $ahora,
                ],
                [
                    'tipo_documento_id' => $pasaporte,
                    'numero_documento' => 'A1234567',
                    'nombres' => 'María',
                    'apellidos' => 'González',
                    'fecha_nacimiento' => '1990-05-15',
                    'prevision_id' => $isapre,
                    'created_at' => $ahora,
                    'updated_at' => $ahora,
                ],
                [
                    'tipo_documento_id' => $rut,
                    'numero_documento' => '98765432-1',
                    'nombres' => 'Carlos',
                    'apellidos' => 'Ramírez',
                    'fecha_nacimiento' => '1975-09-30',
                    'prevision_id' => $particular,
                    'created_at' => $ahora,
                    'updated_at' => $ahora,
                ],
            ]);             
    }    
}
