<?php

namespace App\Models;

class color extends Model
{
    protected $table = 'colors';

    public function products()
    {
        return $this->query(
            "SELECT prod.* FROM products prod
            INNER JOIN product_color pc ON pc.product_id =  prod.id
            WHERE pc.color_id = ?",
            [$this->id]
        );
    }
}
