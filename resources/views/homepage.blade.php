@extends('homepage.index')
@section('content')
    <section class="wn__bestseller__area bg--white pt--80  pb--30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section__title text-center">
                        <h2 class="title__be--2">All <span class="color--theme">Products</span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                            lebmid alteration in some ledmid form</p>
                    </div>
                </div>
            </div>
            <div class="row mt--50">
                <div class="col-md-12 col-lg-12 col-sm-12">
                    <div class="product__nav nav justify-content-center" role="tablist">
                        <a class="nav-item nav-link active" data-toggle="tab" href="#nav-ky-nang" role="tab" aria-selected="true">Kỹ năng</a>
                        <a class="nav-item nav-link" data-toggle="tab" href="#nav-van-hoc" role="tab">Văn học</a>
                        <a class="nav-item nav-link" data-toggle="tab" href="#nav-tre-em" role="tab">Trẻ em</a>
                        <a class="nav-item nav-link" data-toggle="tab" href="#nav-kinh-te" role="tab">Kinh tế</a>
                    </div>
                </div>
            </div>
            <div class="tab__container mt--60">
                @include('bestSeller.content')
            </div>
        </div>
    </section>
@endsection
