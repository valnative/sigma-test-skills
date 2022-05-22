<?php

namespace App\Models;

use PDO;
use Framework\Db;

class ProductModel
{
    public int $id;
    public float $price;
    public string $image;

    /**
     * @return array
     */
    public function getCatalog(): array
    {
        $db = Db::getConnection();

        $catalog = [];
        $sql = 'SELECT * FROM product';
        $objectArray = $db->query($sql)->fetchAll(PDO::FETCH_CLASS, __CLASS__);
        foreach ($objectArray as $object) {
            $product = new self();
            $this->extracted($object, $product);
            $catalog[] = $product;
        }
        return $catalog;
    }

    /**
     * @param $object
     * @param ProductModel $product
     * @return void
     */
    private function extracted($object, ProductModel $product): void
    {
        $product->id = $object->id;
        $product->price = $object->price;
        $product->image = $object->image;
    }
}