<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'afriContacts';
    protected $primaryKey = 'contactId';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['contactId', 'contactName', 'contactEmail', 'contactPhone', 'contactObject', 'contactMessage', 'contactDate'];

}
