<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePrevisiones extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment'=> true],
            'nombre' => ['type' => 'VARCHAR', 'constraint' => 50], 
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addUniqueKey('nombre');
        $this->forge->createTable('previsiones');
    }

    public function down()
    {
        $this->forge->dropTable('previsiones');
    }
}
