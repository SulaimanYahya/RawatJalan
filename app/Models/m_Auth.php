<?php

namespace App\Models;

use CodeIgniter\Model;

class m_Auth extends Model
{
    protected $table = 'auth';
    protected $useTimestamps = false;
    protected $allowedFields = ['name', 'is_active'];

    public function getAuth()
    {
        return $this->first();
    }
}
