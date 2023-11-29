<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Spjhotel extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'hotel_id' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'hotel_pelaksanaid' => [
                'type'          => 'INT',
                'unsigned'       => true,
            ],
            'hotel_nama'        => [
                'type'          => 'VARCHAR',
                'constraint'    => 25,
            ],
            'hotel_nokamar'     => [
                'type'          => 'INT',
                'constraint'    => 10,
            ],
            'hotel_typekamar'   => [
                'type'          => 'VARCHAR',
                'constraint'    => 20,
            ],
            'hotel_checkin'     => [
                'type'          => 'DATETIME',
            ],
            'hotel_checkout'    => [
                'type'          => 'DATETIME',
            ],
            'hotel_hargapermlm' => [
                'type'          => 'INT',
                'unsigned'       => true,
            ],
            'hotel_totalharga' => [
                'type'          => 'BIGINT',
                'unsigned'       => true,
            ],
            'hotel_foto' => [
                'type'          => 'VARCHAR',
                'constraint'    => 100,
            ],
            'hotel_bill' => [
                'type'          => 'VARCHAR',
                'constraint'    => 100,
            ],
             'hotel_created_at'        => [
                'type'          => 'DATETIME',
                'null'          => true,
            ],
            'hotel_updated_at'        => [
                'type'          => 'DATETIME',
                'null'          => true,
            ],
            'hotel_deleted_at'        => [
                'type'          => 'DATETIME',
                'null'          => true,
            ],
            
        ]);
        $this->forge->addKey('hotel_id', true);
        $this->forge->addForeignKey('hotel_pelaksanaid','pelaksanas','pelaksana_id','CASCADE','CASCADE','FKpelaksanahotel');
        
        $this->forge->createTable('spjhotels');
    }

    public function down()
    {
        $this->forge->dropForeignKey('spjhotels','FKpelaksanahotel');

        $this->forge->dropTable('pejabats');
    }
}
