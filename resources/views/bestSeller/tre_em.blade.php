<div class="row single__tab tab-pane fade" id="nav-tre-em" role="tabpanel">
    <div class="product__indicator--4 arrows_style owl-carousel owl-theme">
        @foreach ($data['newProducts']['tre_em'] as $sach)
            <div class="single__product">
                @include('product.book')
            </div>
        @endforeach
    </div>
</div>
