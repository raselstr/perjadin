<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\RawSql;
use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'user_id' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'user_nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '60',
            ],
            'user_email' => [
                'type'       => 'VARCHAR',
                'constraint' => '60',
            ],
            'user_password' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'user_info' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'user_active' => [
                'type' => 'ENUM',
                'constraint'    => ['true','false'],
                'default'       =>  'true',
            ],
            'user_status' => [
                'type' => 'ENUM',
                'constraint'    => ['Admin','Operator'],
                'default'       =>  'Operator',
            ],
            'role_id' => [
                'type' => 'BIGINT',
                'null'  => true,
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
        $this->forge->addKey('user_id', true);
        $this->forge->addForeignKey('role_id', 'roles', 'role_id','','','roleidFK');
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropForeignKey('users','roleidFK');
        $this->forge->dropTable('users');
    }
}
