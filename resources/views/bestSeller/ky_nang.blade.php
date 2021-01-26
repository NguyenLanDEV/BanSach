<div class="row single__tab tab-pane fade  show active" id="nav-ky-nang" role="tabpanel">
    <div class="product__indicator--4 arrows_style owl-carousel owl-theme">
        {{-- @php dd($data) @endphp --}}
        @foreach ($data['newProducts']['ky_nang'] as $sach)
            <div class="single__product">
                @include('product.book')
            </div>
        @endforeach
    </div>
</div>
