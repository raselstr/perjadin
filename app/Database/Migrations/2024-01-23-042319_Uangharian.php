<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Uangharian extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'uangharian_id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'uangharian_idpelaksana' => [
                'type' => 'BIGINT',
                'constraint' => 20,
                'unsigned' => true,
            ],
            'uangharian_sptid' => [
                'type' => 'BIGINT',
                'constraint' => 20,
                'unsigned' => true,
            ],
            'uangharian_tingkatid' => [
                'type'           => 'INT',
                'unsigned'       => true,
            ],
            'uangharian_lokasiid' => [
                'type'           => 'INT',
                'unsigned'       => true,
            ],
            'uangharian_lama' => [
                'type'       => 'INT',
            ],
            'uangharian_perhari' => [
                'type'       => 'DOUBLE',
            ],
            'uangharian_jlhhari' => [
                'type'       => 'INT',
            ],
            'uangharian_jumlahpersen' => [
                'type'       => 'VARCHAR',
                'constraint' => 10,
            ],
            'uangharian_jumlah' => [
                'type'       => 'DOUBLE',
            ],
            'uangharian_harianundangan' => [
                'type'       => 'DOUBLE',
            ],
            'uangharian_hariundangan' => [
                'type'       => 'INT',
            ],
            'uangharian_jlhharianundangan' => [
                'type'       => 'DOUBLE',
            ],
            'uangharian_biayatransport' => [
                'type'       => 'DOUBLE',
            ],
            'uangharian_jumlahbiayatransport' => [
                'type'       => 'DOUBLE',
            ],
            'uangharian_representasi' => [
                'type'       => 'DOUBLE',
            ],
            'uangharian_jumlahrepresentasi' => [
                'type'       => 'DOUBLE',
            ],
            'uangharian_sewamobil' => [
                'type'       => 'DOUBLE',
            ],
            'uangharian_jumlahsewamobil' => [
                'type'       => 'DOUBLE',
            ],
            'uangharian_total' => [
                'type'       => 'DOUBLE',
            ],
            'uangharian_verif' => [
                'type'       => 'INT',
                'default'   => 0,
            ],
        ]);
        $this->forge->addKey('uangharian_id', true);
        $this->forge->addForeignKey('uangharian_tingkatid', 'tingkats', 'tingkat_id', '', '', 'uanghariantingkatidFK');
        $this->forge->addForeignKey('uangharian_lokasiid', 'lokasiperjadins', 'lokasiperjadin_id', '', '', 'uangharianlokasiidFK');
        $this->forge->addForeignKey('uangharian_idpelaksana', 'pelaksanas', 'pelaksana_id', '', '', 'uangharianpelaksanaidFK');
        $this->forge->addForeignKey('uangharian_sptid', 'spts', 'spt_id', '', '', 'uangharianpsptidFK');

        $this->forge->createTable('uangharians');

    }

    public function down()
    {
        $this->forge->dropForeignKey('uangharians', 'uanghariantingkatidFK');
        $this->forge->dropForeignKey('uangharians', 'uangharianlokasiidFK');
        $this->forge->dropForeignKey('uangharians', 'uangharianpelaksanaidFK');
        $this->forge->dropForeignKey('uangharians', 'uangharianpsptidFK');

        $this->forge->dropTable('uangharians');
    }
}
