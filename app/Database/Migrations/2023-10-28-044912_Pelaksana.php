<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pelaksana extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'pelaksana_id' => [
                'type' => 'BIGINT',
                'constraint' => 20,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'spt_id' => [
                'type' => 'BIGINT',
                'constraint' => 20,
                'unsigned' => true,
            ],
            'pegawai_id' => [
                'type' => 'BIGINT',
                'constraint' => 20,
                'unsigned' => true,
            ],
            'pelaksana_utama' => [
                'type' => 'INT',
                'constraint' => 1,
                'default' => 0,
            ],
        ]);
        $this->forge->addKey('pelaksana_id', true);
        // $this->forge->addForeignKey('spt_id', 'spts', 'spt_id', '', '', 'myfkpelaksanaspt');
        // $this->forge->addForeignKey('pegawai_id', 'pegawais', 'pegawai_id', '', '', 'myfkpelaksanapegawai');
        $this->forge->addUniqueKey(['spt_id', 'pegawai_id'], 'uniqkey');

        $this->forge->createTable('pelaksanas');
    }

    public function down()
    {

        $this->forge->dropForeignKey('pelaksanas', 'myfkpelaksanaspt');
        $this->forge->dropForeignKey('pelaksanas', 'myfkpelaksanapegawai');

        $this->forge->dropTable('pelaksanas');
    }
}
