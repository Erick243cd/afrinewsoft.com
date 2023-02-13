<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Contacts extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'contactId'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'auto_increment' => true,
            ],
            'contactName'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'contactEmail' => [
                'type' => 'TEXT',
                'constraint' => '100',
            ],
            'contactPhone'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'=>true
            ],
            'contactObject'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'=>true
            ],
            'contactMessage' => [
                'type' => 'TEXT',
            ],
            'contactDate' => [
                'type' => 'DATE'
            ]
        ]);
        $this->forge->addKey('contactId', true);
        $this->forge->createTable('afriContacts');
    }

    public function down()
    {
        //
    }
}
