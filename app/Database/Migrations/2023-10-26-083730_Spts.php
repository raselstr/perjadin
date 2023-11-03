<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Spts extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'spt_id' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'spt_tahun' => [
                'type'          => 'INT',
            ],
            'spt_nomor' => [
                'type'          => 'VARCHAR',
                'constraint'    => 100,
                'null'          => true,
            ],
            'spt_tgl' => [
                'type'          => 'DATE',
                'null'          => true,
            ],
            'spt_pjb_tugas' => [
                'type'          => 'VARCHAR',
                'constraint'    => 100,
            ],
            'spt_jenis' => [
                'type'          => 'INT',
                'constraint'    => 100,
            ],
            'spt_dasar' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
                'null'          => true,
            ],
            'spt_uraian' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
            ],
            'spt_lama' => [
                'type'          => 'INT',
                'constraint'    => 20,
            ],
            'spt_mulai' => [
                'type'          => 'DATE',
            ],
            'spt_berakhir' => [
                'type'          => 'DATE',
                
            ],
            'spt_tujuan' => [
                'type'          => 'INT',
                
            ],
            'spt_transport' => [
                'type'          => 'VARCHAR',
                'constraint'     => 50,
            ],
             'created_at'        => [
                'type'          => 'DATETIME',
                'null'          => true,
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
        $this->forge->addKey('spt_id', true);

        $this->forge->createTable('spts');
    }

    public function down()
    {
        $this->forge->dropTable('spts');
    }
}