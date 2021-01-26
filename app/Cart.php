<?php

namespace App;

use App\models\SanPham;
use App\Repositories\SanPhamRepository;

class Cart
{
    public static $SESSION_NAME = 'carts';
    public $products;
    public $quanty = 0;
    public $totalPrice = 0;

    public function __construct($oldcart)
    {
        if ($oldcart) {
            $this->products = $oldcart->products;
            $this->quanty = $oldcart->quanty;
            $this->totalPrice = $oldcart->totalPrice;
        }
    }

    function addProduct($id, $products)
    {
        $newProduct = ['productInfo' => $products, 'price' => $products->gia, 'quanty' => 0];
        if ($this->products) {
            if (array_key_exists($id, $this->products)) {
                $newProduct = $this->products[$id];
            }
        }
        $newProduct['quanty'] += 1;
        // $newProduct['price'] =   ($newProduct['price'] != 0) ?  $newProduct['quanty'] * $products->gia : $newProduct['price'];

        $this->products[$id] = $newProduct;
        $this->totalPrice += $newProduct['price'];
        $this->quanty += $newProduct['quanty'];
    }

    function countAllProducts()
    {
        $count = 0;
        if($this->products){
            foreach ($this->products as $product) {
                $count += $product['quanty'];
            }
        }
        return $count;
    }

    function deleteByID($id = 0)
    {
        if ($id == 0) {
            return;
        }
        $product = $this->products[$id];
        $this->quanty-= $product['quanty'];
        $this->totalPrice-=$product['price'];
        unset($this->products[$id]);
    }
}
