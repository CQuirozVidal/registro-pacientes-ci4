<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePacientes extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'tipo_documento_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
            'numero_documento' => ['type' => 'VARCHAR', 'constraint' => 20],
            'nombres' => ['type' => 'VARCHAR', 'constraint' => 100],
            'apellidos' => ['type' => 'VARCHAR', 'constraint' => 100],
            'fecha_nacimiento' => ['type' => 'DATE'],
            'prevision_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
            'telefono' => ['type' => 'VARCHAR', 'constraint' => 20, 'null' => true],
            'correo_electronico' => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => true],
            'created_at' => ['type' => 'DATETIME', 'null' => true],
            'updated_at' => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addUniqueKey(['tipo_documento_id', 'numero_documento']);
        $this->forge->addForeignKey('tipo_documento_id', 'tipos_documento', 'id', 'RESTRICT', 'RESTRICT');
        $this->forge->addForeignKey('prevision_id', 'previsiones', 'id', 'RESTRICT', 'RESTRICT');
        $this->forge->createTable('pacientes');
    }

    public function down()
    {
        $this->forge->dropTable('pacientes');
    }
}
