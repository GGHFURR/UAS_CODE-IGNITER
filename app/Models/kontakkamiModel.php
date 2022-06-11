<?php

namespace App\Models;

use CodeIgniter\Model;

class kontakkamiModel extends Model
{
    protected $table = 'kontakkami';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'email', 'subjek', 'pesan'];
}
