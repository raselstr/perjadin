<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Laporjadin extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'laporjadin_id'         => [
                'type'              => 'BIGINT',
                'constraint'        => 20,
                'unsigned'          => true,
                'auto_increment'    => true, 
            ],   
            'laporjadin_sptid' => [
                'type'          => 'BIGINT',
            ],
            'laporjadin_nodpa' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255
            ],
            'laporjadin_pembuka' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255
            ],
            'laporjadin_hasil' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255
            ],
            'laporjadin_penutup' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255
            ],
            
        ]);
        $this->forge->addKey('laporjadin_id', true);
        $this->forge->addForeignKey('laporjadin_sptid', 'spts', 'spt_id', 'CASCADE', 'CASCADE', 'FKlaporjadinsptid');

        $this->forge->createTable('laporjadins');
    }

    public function down()
    {
        $this->forge->dropForeignKey('laporjadins', 'FKlaporjadinsptid');
        $this->forge->dropTable('laporjadins');
    }
}

