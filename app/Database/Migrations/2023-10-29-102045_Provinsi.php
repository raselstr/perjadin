<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Provinsi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'provinsi_id' => [
                'type'           => 'VARCHAR',
                'constraint'     => 4,
                'unsigned'       => true,

            ],
            'provinsi_nama' => [
                'type'          => 'VARCHAR',
                'constraint'    => '100'
            ],
        ]);
        $this->forge->addKey('provinsi_id', true);

        $this->forge->createTable('provinsis');
    }

    public function down()
    {
        $this->forge->dropTable('provinsis');
    }
}
