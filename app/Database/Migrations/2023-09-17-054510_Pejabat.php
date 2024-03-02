<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pejabat extends Migration
{
     public function up()
    {
        $this->forge->addField([
            'pejabat_id' => [
                'type'              => 'BIGINT',
                'unsigned'          => true,
                'auto_increment'    => true, 
            ],
            'pejabat_kode' => [
                'type'          => 'VARCHAR',
                'constraint'    => 20
            ],
            'pejabat_nama' => [
                'type'          => 'VARCHAR',
                'constraint'    => 120
            ],
            'pejabat_namajabatan' => [
                'type'          => 'VARCHAR',
                'constraint'    => 120
            ],
            'pejabat_nip' => [
                'type'          => 'VARCHAR',
                'constraint'    => 18
            ],
            'pejabat_pangkat' => [
                'type'          => 'VARCHAR',
                'constraint'    => 50
            ],
            'pejabat_aktif' => [
                'type'          => 'INT',
                'default'    => 1
            ],
            
        ]);
        $this->forge->addKey('pejabat_id', true);
        $this->forge->createTable('pejabats');
    }

    public function down()
    {
        $this->forge->dropTable('pejabats');
    }
}
