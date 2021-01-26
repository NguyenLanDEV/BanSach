@include('homepage.header')
<div class="wrapper" id="wrapper">

    <!-- Header -->
    <header id="wn__header" class="oth-page header__area header__absolute sticky__header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-7 col-lg-2">
                    <div class="logo">
                        <a href="/">
                            <img src="{{asset('images/logo/logo.png')}}" alt="logo images">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 d-none d-lg-block">
                    <nav class="mainmenu__nav">
                        <ul class="meninmenu d-flex justify-content-start">
                            <li class="drop with--one--item"><a href="index.html">Home</a></li>
                            <li class="drop"><a href="shop-grid.html">Books</a>
                                <div class="megamenu mega03">
                                    <ul class="item item03">
                                        <li class="title">Categories</li>
                                        <li><a href="shop-grid.html">Biography </a></li>
                                        <li><a href="shop-grid.html">Business </a></li>
                                        <li><a href="shop-grid.html">Cookbooks </a></li>
                                        <li><a href="shop-grid.html">Health & Fitness </a></li>
                                        <li><a href="shop-grid.html">History </a></li>
                                    </ul>
                                    <ul class="item item03">
                                        <li class="title">Customer Favourite</li>
                                        <li><a href="shop-grid.html">Mystery</a></li>
                                        <li><a href="shop-grid.html">Religion & Inspiration</a></li>
                                        <li><a href="shop-grid.html">Romance</a></li>
                                        <li><a href="shop-grid.html">Fiction/Fantasy</a></li>
                                        <li><a href="shop-grid.html">Sleeveless</a></li>
                                    </ul>
                                    <ul class="item item03">
                                        <li class="title">Collections</li>
                                        <li><a href="shop-grid.html">Science </a></li>
                                        <li><a href="shop-grid.html">Fiction/Fantasy</a></li>
                                        <li><a href="shop-grid.html">Self-Improvemen</a></li>
                                        <li><a href="shop-grid.html">Home & Garden</a></li>
                                        <li><a href="shop-grid.html">Humor Books</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-8 col-sm-8 col-5 col-lg-2">
                    <ul class="header__sidebar__right d-flex justify-content-end align-items-center">
                        <li class="shop_search"><a class="search__active" href="#"></a></li>
                        <li class="wishlist"><a href="#"></a></li>
                        <li class="shopcart"><a class="cartbox_active" href="#"><span class="product_qun">3</span></a>
                            <!-- Start Shopping Cart -->
                            <div class="block-minicart minicart__active">
                                <div id="mini_cart"class="minicart-content-wrapper">
                                        @include('cart.mini_cart')
                                </div>
                            </div>
                            <!-- End Shopping Cart -->
                        </li>
                        <li class="setting__bar__icon"><a class="setting__active" href="#"></a>
                            <div class="searchbar__content setting__block">
                                <div class="content-inner">
                                    <div class="switcher-currency">
                                        <strong class="label switcher-label">
                                            <span>Currency</span>
                                        </strong>
                                        <div class="switcher-options">
                                            <div class="switcher-currency-trigger">
                                                <span class="currency-trigger">USD - US Dollar</span>
                                                <ul class="switcher-dropdown">
                                                    <li>GBP - British Pound Sterling</li>
                                                    <li>EUR - Euro</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="switcher-currency">
                                        <strong class="label switcher-label">
                                            <span>Language</span>
                                        </strong>
                                        <div class="switcher-options">
                                            <div class="switcher-currency-trigger">
                                                <span class="currency-trigger">English01</span>
                                                <ul class="switcher-dropdown">
                                                    <li>English02</li>
                                                    <li>English03</li>
                                                    <li>English04</li>
                                                    <li>English05</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="switcher-currency">
                                        <strong class="label switcher-label">
                                            <span>Select Store</span>
                                        </strong>
                                        <div class="switcher-options">
                                            <div class="switcher-currency-trigger">
                                                <span class="currency-trigger">Fashion Store</span>
                                                <ul class="switcher-dropdown">
                                                    <li>Furniture</li>
                                                    <li>Shoes</li>
                                                    <li>Speaker Store</li>
                                                    <li>Furniture</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="switcher-currency">
                                        <strong class="label switcher-label">
                                            <span>My Account</span>
                                        </strong>
                                        <div class="switcher-options">
                                            <div class="switcher-currency-trigger">
                                                <div class="setting__menu">
                                                    <span><a href="#">Compare Product</a></span>
                                                    <span><a href="#">My Account</a></span>
                                                    <span><a href="#">My Wishlist</a></span>
                                                    <span><a href="#">Sign In</a></span>
                                                    <span><a href="#">Create An Account</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Start Mobile Menu -->
            <div class="row d-none">
                <div class="col-lg-12 d-none">
                    <nav class="mobilemenu__nav">
                        <ul class="meninmenu">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Pages</a>
                                <ul>
                                    <li><a href="about.html">About Page</a></li>
                                    <li><a href="portfolio.html">Portfolio</a>
                                        <ul>
                                            <li><a href="portfolio.html">Portfolio</a></li>
                                            <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="cart.html">Cart Page</a></li>
                                    <li><a href="checkout.html">Checkout Page</a></li>
                                    <li><a href="wishlist.html">Wishlist Page</a></li>
                                    <li><a href="error404.html">404 Page</a></li>
                                    <li><a href="faq.html">Faq Page</a></li>
                                    <li><a href="team.html">Team Page</a></li>
                                </ul>
                            </li>
                            <li><a href="shop-grid.html">Shop</a>
                                <ul>
                                    <li><a href="shop-grid.html">Shop Grid</a></li>
                                    <li><a href="single-product.html">Single Product</a></li>
                                </ul>
                            </li>
                            <li><a href="blog.html">Blog</a>
                                <ul>
                                    <li><a href="blog.html">Blog Page</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- End Mobile Menu -->
            <div class="mobile-menu d-block d-lg-none">
            </div>
            <!-- Mobile Menu -->
        </div>
    </header>
    <!-- //Header -->

    <!-- Start Search Popup -->
    <div class="box-search-content search_active block-bg close__top">
        <form id="search_mini_form" class="minisearch" action="#">
            <div class="field__search">
                <input type="text" placeholder="Search entire store here...">
                <div class="action">
                    <a href="#"><i class="zmdi zmdi-search"></i></a>
                </div>
            </div>
        </form>
        <div class="close__wrap">
            <span>close</span>
        </div>
    </div>
    <!-- End Search Popup -->
    <div class="ht__bradcaump__area bg-image--4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bradcaump__inner text-center">
                        <h2 class="bradcaump-title">Shop Single</h2>
                        <nav class="bradcaump-content">
                            <a class="breadcrumb_item" href="index.html">Home</a>
                            <span class="brd-separetor">/</span>
                            <span class="breadcrumb_item active">Shop Single</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->
    <!-- Start main Content -->

    <div class="maincontent bg--white pt--80 pb--55">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-12">

                    <div class="wn__single__product">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="wn__fotorama__wrapper">
                                    <div class="fotorama wn__fotorama__action" data-nav="thumbs">
                                        @foreach ($data['sach']['avatars'] as $avatar)
                                            <a href="{{ asset($avatar['duongDan']) }}"><img src="{{ asset($avatar['duongDan']) }}"
                                                    alt=""></a>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="product__info__main">
                                    <h1>{{ $data['sach']['tenSP'] }}</h1>
                                    <div class="product-reviews-summary d-flex">
                                        <ul class="rating-summary d-flex">
                                            <li><i class="zmdi zmdi-star-outline"></i></li>
                                            <li><i class="zmdi zmdi-star-outline"></i></li>
                                            <li><i class="zmdi zmdi-star-outline"></i></li>
                                            <li class="off"><i class="zmdi zmdi-star-outline"></i></li>
                                            <li class="off"><i class="zmdi zmdi-star-outline"></i></li>
                                        </ul>
                                    </div>
                                    <div class="price-box">
                                        <span>{{ number_format($data['sach']['gia'], 0, '.', ',') }} VNĐ</span>
                                    </div>
                                    <div class="product__overview">
                                        {{ $data['sach']['moTa'] }}
                                    </div>
                                    <div class="box-tocart d-flex">
                                        <span>Qty</span>
                                        <input id="qty" class="input-text qty" name="qty" min="1" value="1" title="Qty" type="number">
                                        <div class="addtocart__actions">
                                            <button onclick="addCart2({{$data['sach']['id']}})" class="tocart" type="submit" title="Add to Cart">Add to Cart</button>
                                        </div>
                                        <div class="product-addto-links clearfix">
                                            <a class="wishlist" href="#"></a>
                                            <a class="compare" href="#"></a>
                                        </div>
                                    </div>
                                    <div class="product_meta">
                                        <span class="posted_in">Categories:
                                            <a href="#">Adventure</a>,
                                            <a href="#">Kids' Music</a>
                                        </span>
                                    </div>
                                    <div class="product-share">
                                        <ul>
                                            <li class="categories-title">Share :</li>
                                            <li>
                                                <a href="#">
                                                    <i class="icon-social-twitter icons"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="icon-social-tumblr icons"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="icon-social-facebook icons"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="icon-social-linkedin icons"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="product__info__detailed">
                                <div class="pro_details_nav nav justify-content-start" role="tablist">
                                    <a class="nav-item nav-link active" data-toggle="tab" href="#nav-details" role="tab">Details</a>
                                    <a class="nav-item nav-link" data-toggle="tab" href="#nav-review" role="tab">Reviews</a>
                                </div>
                                <div class="tab__container">
                                    <!-- Start Single Tab Content -->
                                    <div class="pro__tab_label tab-pane fade show active" id="nav-details" role="tabpanel">
                                        <div class="description__attribute">
                                            <p> {{ $data['sach']['moTa'] }} </p>
                                        </div>
                                    </div>
                                    <!-- End Single Tab Content -->
                                    <!-- Start Single Tab Content -->
                                    <div class="pro__tab_label tab-pane fade" id="nav-review" role="tabpanel">
                                        <div class="review__attribute">
                                            <h1>Customer Reviews</h1>
                                            <h2>Hastech</h2>
                                            <div class="review__ratings__type d-flex">
                                                <div class="review-ratings">
                                                    <div class="rating-summary d-flex">
                                                        <span>Quality</span>
                                                        <ul class="rating d-flex">
                                                            <li><i class="zmdi zmdi-star"></i></li>
                                                            <li><i class="zmdi zmdi-star"></i></li>
                                                            <li><i class="zmdi zmdi-star"></i></li>
                                                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                                                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                                                        </ul>
                                                    </div>

                                                    <div class="rating-summary d-flex">
                                                        <span>Price</span>
                                                        <ul class="rating d-flex">
                                                            <li><i class="zmdi zmdi-star"></i></li>
                                                            <li><i class="zmdi zmdi-star"></i></li>
                                                            <li><i class="zmdi zmdi-star"></i></li>
                                                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                                                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="rating-summary d-flex">
                                                        <span>value</span>
                                                        <ul class="rating d-flex">
                                                            <li><i class="zmdi zmdi-star"></i></li>
                                                            <li><i class="zmdi zmdi-star"></i></li>
                                                            <li><i class="zmdi zmdi-star"></i></li>
                                                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                                                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="review-content">
                                                    <p>Hastech</p>
                                                    <p>Review by Hastech</p>
                                                    <p>Posted on 11/6/2018</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review-fieldset">
                                            <h2>You're reviewing:</h2>
                                            <h3>Chaz Kangeroo Hoodie</h3>
                                            <div class="review-field-ratings">
                                                <div class="product-review-table">
                                                    <div class="review-field-rating d-flex">
                                                        <span>Quality</span>
                                                        <ul class="rating d-flex">
                                                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                                                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                                                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                                                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                                                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="review-field-rating d-flex">
                                                        <span>Price</span>
                                                        <ul class="rating d-flex">
                                                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                                                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                                                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                                                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                                                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="review-field-rating d-flex">
                                                        <span>Value</span>
                                                        <ul class="rating d-flex">
                                                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                                                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                                                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                                                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                                                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="review_form_field">
                                                <div class="input__box">
                                                    <span>Nickname</span>
                                                    <input id="nickname_field" type="text" name="nickname">
                                                </div>
                                                <div class="input__box">
                                                    <span>Summary</span>
                                                    <input id="summery_field" type="text" name="summery">
                                                </div>
                                                <div class="input__box">
                                                    <span>Review</span>
                                                    <textarea name="review"></textarea>
                                                </div>
                                                <div class="review-form-actions">
                                                    <button>Submit Review</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Tab Content -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="wn__related__product pt--80 pb--50">
                        <div class="section__title text-center">
                            <h2 class="title__be--2">Related Products</h2>
                        </div>
                        <div class="row mt--60">
                            <div class="productcategory__slide--2 arrows_style owl-carousel owl-theme">
                                <!-- Start Single Product -->
                                @foreach ($data['related_product'] as $sach)
                                    @include('product.book-related')
                                @endforeach
                                <!-- Start Single Product -->
                                <!-- Start Single Product -->
                            </div>
                        </div>
                    </div>

                </div>
                @include('detail.shop_slidebar')

            </div>
        </div>
    </div>
    <!-- End main Content -->
@include('homepage.footer')
