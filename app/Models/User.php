<?php

namespace App\Models;

class User extends Model
{

    protected $table = 'users';

    public function getByEmail(string $email)
    {
        return $this->query("SELECT * FROM {$this->table} WHERE email = ? LIMIT 1 ", [$email], true);
    }
}
