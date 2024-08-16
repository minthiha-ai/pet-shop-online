@extends('master')

@section('contents')
<!-- Start Page Title Area -->
        <div class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h1>Shop Left Sidebar</h1>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Shop Left Sidebar</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Products Area -->
        <div class="products-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <aside class="widget-area">
                            <div class="widget widget_categories">
                                <h3 class="widget-title"><span>Categories</span></h3>
                                <ul>
                                    <li><a href="#">Business</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Technology</a></li>
                                    <li><a href="#">Tips</a></li>
                                    <li><a href="#">Log in</a></li>
                                    <li><a href="#">Uncategorized</a></li>
                                </ul>
                            </div>
                            <div class="widget widget_price_filter">
                                <h3 class="widget-title"><span>Filter by Price</span></h3>
                                <div class="collection_filter_by_price">
                                    <input class="js-range-of-price" type="text" data-min="0" data-max="1055" name="filter_by_price" data-step="10">
                                </div>
                            </div>
                            <div class="widget widget_patoi_posts_thumb">
                                <h3 class="widget-title"><span>Our Best Sellers</span></h3>
                                <article class="item">
                                    <a href="#" class="thumb">
                                        <img src="{{ asset('assets/img/products/products1.jpg') }}" alt="blog-image">
                                    </a>
                                    <div class="info">
                                        <h4 class="title"><a href="#">Pet brash</a></h4>
                                        <div class="star-rating">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <span class="price">$150.00</span>
                                    </div>
                                </article>
                                <article class="item">
                                    <a href="#" class="thumb">
                                        <img src="{{ asset('assets/img/products/products2.jpg') }}" alt="blog-image">
                                    </a>
                                    <div class="info">
                                        <h4 class="title"><a href="#">Automatic dog blue leash</a></h4>
                                        <div class="star-rating">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <span class="price">$150.00</span>
                                    </div>
                                </article>
                                <article class="item">
                                    <a href="#" class="thumb">
                                        <img src="{{ asset('assets/img/products/products3.jpg') }}" alt="blog-image">
                                    </a>
                                    <div class="info">
                                        <h4 class="title"><a href="#">Cat toilet bowl</a></h4>
                                        <div class="star-rating">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <span class="price">$150.00</span>
                                    </div>
                                </article>
                                <article class="item">
                                    <a href="#" class="thumb">
                                        <img src="{{ asset('assets/img/products/products4.jpg') }}" alt="blog-image">
                                    </a>
                                    <div class="info">
                                        <h4 class="title"><a href="#">Bowl with rubber toy</a></h4>
                                        <div class="star-rating">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <span class="price">$150.00</span>
                                    </div>
                                </article>
                            </div>
                            <div class="widget widget_tag_cloud">
                                <h3 class="widget-title"><span>Tags</span></h3>
                                <div class="tagcloud">
                                    <a href="#">Advertisment</a>
                                    <a href="#">Business</a>
                                    <a href="#">Life</a>
                                    <a href="#">Lifestyle</a>
                                    <a href="#">Fashion</a>
                                    <a href="#">Ads</a>
                                    <a href="#">Advertisment</a>
                                </div>
                            </div>
                            <div class="widget widget_follow_us">
                                <h3 class="widget-title"><span>Follow Us</span></h3>
                                <ul>
                                    <li><a href="#" target="_blank">Facebook</a></li>
                                    <li><a href="#" target="_blank">Twitter</a></li>
                                    <li><a href="#" target="_blank">Instagram</a></li>
                                    <li><a href="#" target="_blank">Pinterest</a></li>
                                    <li><a href="#" target="_blank">Linkedin</a></li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="patoi-grid-sorting row align-items-center">
                            <div class="col-lg-6 col-md-6 result-count">
                                <p>We found <span class="count">12</span> products available for you</p>
                            </div>
                            <div class="col-lg-6 col-md-6 ordering">
                                <div class="select-box">
                                    <label>Sort By:</label>
                                    <select>
                                        <option>Default</option>
                                        <option>Popularity</option>
                                        <option>Latest</option>
                                        <option>Price: low to high</option>
                                        <option>Price: high to low</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="single-products-box">
                                    <div class="image">
                                        <a href="#" class="d-block">
                                            <img src="{{ asset('assets/img/products/products1.jpg') }}" alt="products-image">
                                        </a>
                                        <ul class="products-button">
                                            <li><a href="#"><i class='bx bx-cart-alt'></i></a></li>
                                            <li><a href="#"><i class='bx bx-heart'></i></a></li>
                                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView"><i class='bx bx-show'></i></a></li>
                                            <li><a href="#"><i class='bx bx-link-alt'></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="content">
                                        <h3><a href="#">Pet brash</a></h3>
                                        <div class="price">
                                            <span class="new-price">$35.00</span>
                                        </div>
                                        <div class="rating">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="single-products-box">
                                    <div class="image">
                                        <a href="#" class="d-block">
                                            <img src="{{ asset('assets/img/products/products2.jpg') }}" alt="products-image">
                                        </a>
                                        <span class="hot">Hot!</span>
                                        <ul class="products-button">
                                            <li><a href="#"><i class='bx bx-cart-alt'></i></a></li>
                                            <li><a href="#"><i class='bx bx-heart'></i></a></li>
                                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView"><i class='bx bx-show'></i></a></li>
                                            <li><a href="#"><i class='bx bx-link-alt'></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="content">
                                        <h3><a href="#">Automatic dog blue leash</a></h3>
                                        <div class="price">
                                            <span class="new-price">$75.00</span>
                                        </div>
                                        <div class="rating">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star-half'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="single-products-box">
                                    <div class="image">
                                        <a href="#" class="d-block">
                                            <img src="{{ asset('assets/img/products/products3.jpg') }}" alt="products-image">
                                        </a>
                                        <ul class="products-button">
                                            <li><a href="#"><i class='bx bx-cart-alt'></i></a></li>
                                            <li><a href="#"><i class='bx bx-heart'></i></a></li>
                                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView"><i class='bx bx-show'></i></a></li>
                                            <li><a href="#"><i class='bx bx-link-alt'></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="content">
                                        <h3><a href="#">Cat toilet bowl</a></h3>
                                        <div class="price">
                                            <span class="new-price">$49.00</span>
                                            <span class="old-price">$55.00</span>
                                        </div>
                                        <div class="rating">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bx-star'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="single-products-box">
                                    <div class="image">
                                        <a href="#" class="d-block">
                                            <img src="{{ asset('assets/img/products/products4.jpg') }}" alt="products-image">
                                        </a>
                                        <span class="on-sale">On Sale!</span>
                                        <ul class="products-button">
                                            <li><a href="#"><i class='bx bx-cart-alt'></i></a></li>
                                            <li><a href="#"><i class='bx bx-heart'></i></a></li>
                                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView"><i class='bx bx-show'></i></a></li>
                                            <li><a href="#"><i class='bx bx-link-alt'></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="content">
                                        <h3><a href="#">Bowl with rubber toy</a></h3>
                                        <div class="price">
                                            <span class="new-price">$60.00</span>
                                        </div>
                                        <div class="rating">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="single-products-box">
                                    <div class="image">
                                        <a href="#" class="d-block">
                                            <img src="{{ asset('assets/img/products/products5.jpg') }}" alt="products-image">
                                        </a>
                                        <span class="on-sale">On Sale!</span>
                                        <ul class="products-button">
                                            <li><a href="#"><i class='bx bx-cart-alt'></i></a></li>
                                            <li><a href="#"><i class='bx bx-heart'></i></a></li>
                                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView"><i class='bx bx-show'></i></a></li>
                                            <li><a href="#"><i class='bx bx-link-alt'></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="content">
                                        <h3><a href="#">Stack pet collars</a></h3>
                                        <div class="price">
                                            <span class="new-price">$99.00</span>
                                        </div>
                                        <div class="rating">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="single-products-box">
                                    <div class="image">
                                        <a href="#" class="d-block">
                                            <img src="{{ asset('assets/img/products/products6.jpg') }}" alt="products-image">
                                        </a>
                                        <ul class="products-button">
                                            <li><a href="#"><i class='bx bx-cart-alt'></i></a></li>
                                            <li><a href="#"><i class='bx bx-heart'></i></a></li>
                                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView"><i class='bx bx-show'></i></a></li>
                                            <li><a href="#"><i class='bx bx-link-alt'></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="content">
                                        <h3><a href="#">Dog toy</a></h3>
                                        <div class="price">
                                            <span class="new-price">$15.00</span>
                                        </div>
                                        <div class="rating">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="single-products-box">
                                    <div class="image">
                                        <a href="#" class="d-block">
                                            <img src="{{ asset('assets/img/products/products7.jpg') }}" alt="products-image">
                                        </a>
                                        <ul class="products-button">
                                            <li><a href="#"><i class='bx bx-cart-alt'></i></a></li>
                                            <li><a href="#"><i class='bx bx-heart'></i></a></li>
                                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView"><i class='bx bx-show'></i></a></li>
                                            <li><a href="#"><i class='bx bx-link-alt'></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="content">
                                        <h3><a href="#">Plastic muzzle</a></h3>
                                        <div class="price">
                                            <span class="new-price">$29.00</span>
                                            <span class="old-price">$35.00</span>
                                        </div>
                                        <div class="rating">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="single-products-box">
                                    <div class="image">
                                        <a href="#" class="d-block">
                                            <img src="{{ asset('assets/img/products/products8.jpg') }}" alt="products-image">
                                        </a>
                                        <ul class="products-button">
                                            <li><a href="#"><i class='bx bx-cart-alt'></i></a></li>
                                            <li><a href="#"><i class='bx bx-heart'></i></a></li>
                                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView"><i class='bx bx-show'></i></a></li>
                                            <li><a href="#"><i class='bx bx-link-alt'></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="content">
                                        <h3><a href="#">Pet toy</a></h3>
                                        <div class="price">
                                            <span class="new-price">$25.00</span>
                                        </div>
                                        <div class="rating">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="pagination-area">
                                    <div class="nav-links">
                                        <a href="#" class="previous page-numbers" title="Next Page"><i class='bx bx-chevrons-left'></i></a>
                                        <span class="page-numbers current">1</span>
                                        <a href="#" class="page-numbers">2</a>
                                        <a href="#" class="page-numbers">3</a>
                                        <a href="#" class="next page-numbers" title="Next Page"><i class='bx bx-chevrons-right'></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Products Area -->
@endsection
