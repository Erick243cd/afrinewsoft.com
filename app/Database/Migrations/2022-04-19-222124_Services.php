<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Services extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'serviceId'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'serviceName_fr'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'serviceDescription_fr' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'serviceName_en'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'serviceDescription_en' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'serviceImage' => [
                'type' => 'VARCHAR',
                'null' => false,
                'constraint' => '100'
            ],
            'data_aos_delay' =>[
                'type' => 'INT',
                'null' => false,
                'constraint' => '11'
            ]
        ]);

        $this->forge->addKey('serviceId', true);
        $this->forge->createTable('afriServices');
    }

    public function down()
    {
        //$this->forge->dropTable('afriServices');
    }
}
