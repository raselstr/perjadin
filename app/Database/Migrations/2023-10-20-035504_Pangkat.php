<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\RawSql;
use CodeIgniter\Database\Migration;

class Pangkat extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'pangkat_id' => [
                'type'           => 'INT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'pangkat_nama' => [
                'type'          => 'VARCHAR',
                'constraint'    => '100'
            ],
            'pangkat_gol' => [
                'type'          => 'VARCHAR',
                'constraint'    => '100'
            ],
            'pangkat_pajak' => [
                'type'          => 'FLOAT',
            ],
             'created_at'        => [
                'type'          => 'TIMESTAMP',
                'default'       => new RawSql('CURRENT_TIMESTAMP'),
            ],
            'updated_at'        => [
                'type'          => 'DATETIME',
                'null'          => true,
            ],
            'deleted_at'        => [
                'type'          => 'DATETIME',
                'null'          => true,
            ],
        ]);
        $this->forge->addKey('pangkat_id', true);

        $this->forge->createTable('pangkats');
    }

    public function down()
    {
        $this->forge->dropTable('pangkats');
    }
}
