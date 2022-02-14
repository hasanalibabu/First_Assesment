<?php


namespace App\classes;


class Product
{
    protected $products = [];
    protected $search_product;
    protected $result = [];
    protected $search_id;

    public function __construct($post = null)
    {
        if (isset($post['search_btn'])) {
            $this->search_id = $post['search'];
        }
    }

    public function getAllProduct(){

        return [
            0 => [
                'id'            => '1',
                'name'          => 'Shirt',
                'description'   => 'Description',
                'price'         => '2000 tk',
                'image'         => 'w1.jpg',
                'brand'         => 'Best By',
                'category'      => 'Men'
            ],
            1 => [
                'id'            => '2',
                'name'          => 'T-Shirt',
                'description'   => 'Description',
                'price'         => '1500 tk',
                'image'         => 'w2.jpg',
                'brand'         => 'Best By',
                'category'      => 'Men'
            ],
            2 => [
                'id'            => '3',
                'name'          => 'Cap',
                'description'   => 'Description',
                'price'         => '500 tk',
                'image'         => 'h8.jfif',
                'brand'         => 'Best By',
                'category'      => 'Men'
            ],
            3 => [
                'id'            => '4',
                'name'          => 'Shoes',
                'description'   => 'Description',
                'price'         => '3000 tk',
                'image'         => 'w4.jpg',
                'brand'         => 'Best By',
                'category'      => 'Men'
            ],
            4 => [
                'id'            => '5',
                'name'          => 'Cap',
                'description'   => 'Description',
                'price'         => '1000 tk',
                'image'         => 'h6.jfif',
                'brand'         => 'Best By',
                'category'      => 'Men'
            ],
            5 => [
                'id'            => '6',
                'name'          => 'Cap',
                'description'   => 'Description',
                'price'         => '500 tk',
                'image'         => 'h7.jfif',
                'brand'         => 'Best By',
                'category'      => 'Men'
            ],
        ];
    }
    public function getProductById($id){

        $this->products = $this->getAllProduct();
        foreach ($this->products as $product){

            if ($product['id'] == $id){
                return $product;
            }
        }
    }

    public function searchProduct(){

        $this->search_product = $this->getAllProduct();
        foreach ($this->search_product as $prod){
            if ($this->search_id == $prod['id']){
                $this->result = $prod;
                break;
            }
        }
        return $this->result;
    }
}