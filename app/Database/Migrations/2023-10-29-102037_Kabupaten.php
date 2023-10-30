<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kabupaten extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'kabupaten_id' => [
                'type'           => 'VARCHAR',
                'constraint'     => 20,
                
            ],
            'kabupaten_nama' => [
                'type'          => 'VARCHAR',
                'constraint'    => '100'
            ],
        ]);
        $this->forge->addKey('kabupaten_id', true);

        $this->forge->createTable('kabupatens');
    }

    public function down()
    {
        $this->forge->dropTable('kabupatens');
    }
}
