<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\RawSql;
use CodeIgniter\Database\Migration;

class Rolemenus extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'rolemenu_id' => [
                'type'           => 'BIGINT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'role_id' => [
                'type'       => 'BIGINT',
                'unsigned'       => true,
            ],
            'menu_id' => [
                'type'          => 'BIGINT',
                'unsigned'       => true,
            ],
            'submenu_id' => [
                'type'          => 'BIGINT',
                'unsigned'       => true,
            ],
            'lihat' => [
                'type'          => 'ENUM',
                'constraint'    => ['true','false'],
                'default'       =>  'false',
            ],
            'tambah' => [
                'type'          => 'ENUM',
                'constraint'    => ['true','false'],
                'default'       =>  'false',
            ],
            'ubah' => [
                'type'          => 'ENUM',
                'constraint'    => ['true','false'],
                'default'       =>  'false',
            ],
            'hapus' => [
                'type'          => 'ENUM',
                'constraint'    => ['true','false'],
                'default'       =>  'false',
            ],
            
        ]);
        $this->forge->addKey('rolemenu_id', true);
        $this->forge->addForeignKey('role_id', 'roles', 'role_id','CASCADE','CASCADE','roleidmenuFK');
        $this->forge->addForeignKey('submenu_id', 'submenus', 'submenu_id','CASCADE','CASCADE','submenuidroleFK');

        $this->forge->createTable('rolemenus');
    }

    public function down()
    {
        $this->forge->dropForeignKey('rolemenus','roleidmenuFK');
        $this->forge->dropForeignKey('rolemenus','submenuidroleFK');

        $this->forge->dropTable('rolemenus');
    }
}
