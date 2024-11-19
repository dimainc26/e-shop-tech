<?php

namespace App\Models;

class Creator extends Model
{
    protected $table = 'creator';

    public function myData(): Model
    {
        return $this->query("SELECT * FROM {$this->table}", null, true);
    }
}
