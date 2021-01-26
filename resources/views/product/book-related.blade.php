<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
    <div class="product__thumb">
        <a class="first__img" href="/product/{{$sach->id}}">
            <img src="@php echo $sach->avatar['duongDan'] ?  asset($sach->avatar['duongDan'])  : asset('images/books/1.jpg') @endphp"
                alt="product image">
        </a>
    </div>
    <div class="product__content content--center">
        <h4><a href="single-product.html">{{ $sach['tenSP'] }}</a></h4>
        <ul class="prize d-flex">
            <li>{{ number_format($sach['gia'], 0, '.', ',') }} VNĐ</li>
        </ul>
        <div class="action">
            <div class="actions_inner">
                <ul class="add_to_links">
                    <form>
                        <input name="id" type="hidden" value="{{ $sach['id'] }}">
                    </form>
                    <li><a class="cart" href="cart.html"><i onclick="addCart(this)" class="bi bi-shopping-bag4"></i></a>
                    </li>
                    <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link"
                            href="#productmodal"><i class="bi bi-search"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
