<div class="micart__close">
    <span>Đóng</span>
</div>
<div class="items-total d-flex justify-content-between">
    <span>{{ $cart->countAllProducts() }} Sản phẩm</span>
    <span>Cart Subtotal</span>
</div>
<div id='total_price' class="total_amount text-right">
    <span>{{ number_format($cart->totalPrice) }} vnd</span>
</div>
<div class="mini_action checkout">
    <a class="checkout__btn" href="cart.html">Go to Checkout</a>
</div>
<div class="single__items">
    <div class="miniproduct">
        @if ($cart->products)
            @foreach ($cart->products as $key => $item)
                <div class="item01 d-flex mt--20">
                    <div class="thumb">
                        <a href="product-details.html"><img src="{{ asset($item['productInfo']->avatar->duongDan) }}"
                                alt="product images"></a>
                    </div>
                    <div class="content">
                        <h6><a href="product-details.html">{{ $item['productInfo']->tenSP }}</a></h6>
                        <span class="prize">{{ number_format($item['price']) }} vnd</span>
                        <div class="product_prize d-flex justify-content-between">
                            <span class="qun">Qty: {{ $item['quanty'] }}</span>
                            <ul class="d-flex justify-content-end">
                                <li><a href="#"><i class="zmdi zmdi-settings"></i></a></li>
                                <li><a onclick="deleteCart(this,{{ $item['productInfo']->id }})" href="#"><i
                                            class="zmdi zmdi-delete"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
        <div class="micart__close">
            <span>close</span>
        </div>
    </div>
</div>
<div class="mini_action cart">
    <a class="cart__btn" href="cart.html">View and edit cart</a>
</div>
