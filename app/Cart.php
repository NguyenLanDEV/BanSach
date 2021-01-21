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
        $this->products = $oldcart->products;
        $this->quanty = $oldcart->quanty;
        $this->totalPrice = $oldcart->totalPrice;
    }

    function addProduct($id, $products)
    {
        $newProduct = ['productInfo' => $products,'price'=>$products->gia,'quanty'=> 0 ];
        if($this->products){
            if(array_key_exists($id,$this->products)){
                $newProduct = $this->products[$id];
            }
        }
        $newProduct['quanty']+=1;
        $newProduct['price']=   ($newProduct['price'] != 0 ) ?  $newProduct['quanty'] * $products->gia : $newProduct['price'] ;

        $this->products[$id] = $newProduct;
        $this->totalPrice+= $newProduct['price'];
        $this->quanty+= $newProduct['quanty'];
    }
}
