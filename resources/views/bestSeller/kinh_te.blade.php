<div class="row single__tab tab-pane fade" id="nav-kin-te" role="tabpanel">
    <div class="product__indicator--4 arrows_style owl-carousel owl-theme">
        @foreach ($data['newProducts']['kinh_te'] as $sach)
            <div class="single__product">
                @include('product.book')
            </div>
        @endforeach
    </div>
</div>
