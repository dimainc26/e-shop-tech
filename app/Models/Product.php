<?php

namespace App\Models;

class Product extends Model
{
    protected $table = 'products';

    public function preview(): array
    {
        return $this->query("SELECT * FROM {$this->table}  ORDER BY id DESC  LIMIT 12");
    }


    public function getExerpt(): string
    {
        return substr($this->content, 0, 150) . '...';
    }

    public function colors()
    {
        return $this->query(
            "SELECT c.* FROM colors c 
            INNER JOIN product_color pc ON pc.color_id = c.id
            WHERE pc.product_id =  ?",
            [$this->id]
        );
    }

    public function create(array $data, ?array $relations = null)
    {
        parent::create($data);

        $id = $this->db->getPDO()->lastInsertId();

        foreach ($relations  as $colorId) {
            $stmt = $this->db->getPDO()->prepare("INSERT INTO product_color(product_id, color_id) VALUES (?, ?)");

            $stmt->execute(([$id, $colorId]));
        }

        return true;
    }

    public function update(int $id, array $data, ?array $relations = null)
    {
        parent::update($id, $data);

        $stmt = $this->db->getPDO()->prepare("DELETE FROM product_color  WHERE product_id = ? ");

        $result = $stmt->execute([$id]);

        foreach ($relations  as $colorId) {
            $stmt = $this->db->getPDO()->prepare("INSERT INTO product_color(product_id, color_id) VALUES (?, ?)");

            $stmt->execute(([$id, $colorId]));
        }

        if ($result) {
            return true;
        }
    }
}
