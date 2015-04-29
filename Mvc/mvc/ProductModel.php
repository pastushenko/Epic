<?php
/**
 * Created by PhpStorm.
 * User: pastushenko
 * Date: 29.04.15
 * Time: 20:38
 */
require_once('BaseModel.php');

class ProductModel extends BaseModel
{
    /**
     * @return array
     */
    public function findAllProducts()
    {
        $query = 'SELECT `id`, `title`, `description` FROM `product`';
        $results = $this->query($query);

        $products = [];
        foreach ($results as $product) {
            $products[] = $product;
        }

        return $products;
    }
}