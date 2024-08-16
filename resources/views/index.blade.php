@extends('master')

@section('contents')
<!-- Start Main Banner Area -->
        <div class="main-banner-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="main-banner-content">
                            <span class="sub-title">Welcome to Best Friend</span>
                            <h1>We provide best pet products</h1>
                            <p>Save 20% off your first order</p>
                            <a href="#" class="default-btn"><span>Shop Now</span></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="main-banner-image">
                            <img src="{{ asset('assets/img/banner/banner1.png') }}" alt="banner-image">
                            <img src="{{ asset('assets/img/banner/banner2.png') }}" alt="banner-image">
                            <img src="{{ asset('assets/img/banner/banner3.png') }}" alt="banner-image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Main Banner Area -->

        <!-- Start Offer Area -->
        <div class="offer-area pt-100 pb-75">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-offer-box">
                            <a href="#" class="d-block">
                                <img src="{{ asset('assets/img/offer/offer1.jpg') }}" alt="offer-image">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-offer-box">
                            <a href="#" class="d-block">
                                <img src="{{ asset('assets/img/offer/offer2.jpg') }}" alt="offer-image">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-offer-box">
                            <a href="#" class="d-block">
                                <img src="{{ asset('assets/img/offer/offer3.jpg') }}" alt="offer-image">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Offer Area -->

        <!-- Start Categories Area -->
        <div class="categories-area pb-75">
            <div class="container">
                <div class="section-title">
                    <h2>Shop by Categories</h2>
                </div>
                <div class="categories-slides owl-carousel owl-theme">
                    <div class="single-categories-box">
                        <a href="#" class="d-block">
                            <img src="{{ asset('assets/img/categories/categories1.jpg') }}" alt="categories-image">
                            <h3>Dog food</h3>
                        </a>
                    </div>
                    <div class="single-categories-box">
                        <a href="#" class="d-block">
                            <img src="{{ asset('assets/img/categories/categories2.jpg') }}" alt="categories-image">
                            <h3>Cat food</h3>
                        </a>
                    </div>
                    <div class="single-categories-box">
                        <a href="#" class="d-block">
                            <img src="{{ asset('assets/img/categories/categories3.jpg') }}" alt="categories-image">
                            <h3>Pet accessories</h3>
                        </a>
                    </div>
                    <div class="single-categories-box">
                        <a href="#" class="d-block">
                            <img src="{{ asset('assets/img/categories/categories4.jpg') }}" alt="categories-image">
                            <h3>Dry food</h3>
                        </a>
                    </div>
                    <div class="single-categories-box">
                        <a href="#" class="d-block">
                            <img src="{{ asset('assets/img/categories/categories5.jpg') }}" alt="categories-image">
                            <h3>Pet toys</h3>
                        </a>
                    </div>
                    <div class="single-categories-box">
                        <a href="#" class="d-block">
                            <img src="{{ asset('assets/img/categories/categories6.jpg') }}" alt="categories-image">
                            <h3>Cat toys</h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Categories Area -->

        <!-- Start Products Area -->
        <div class="products-area pb-75">
            <div class="container">
                <div class="section-title">
                    <h2>New Arrivals</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="single-products-box">
                            <div class="image">
                                <a href="#" class="d-block">
                                    <img src="{{ asset('assets/img/products/products1.jpg') }}" alt="products-image" class="w-100">
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
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="single-products-box">
                            <div class="image">
                                <a href="#" class="d-block">
                                    <img class="w-100" src="{{ asset('assets/img/products/products2.jpg') }}" alt="products-image">
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
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="single-products-box">
                            <div class="image">
                                <a href="#" class="d-block">
                                    <img class="w-100" src="{{ asset('assets/img/products/products3.jpg') }}" alt="products-image">
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
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="single-products-box">
                            <div class="image">
                                <a href="#" class="d-block">
                                    <img class="w-100" src="{{ asset('assets/img/products/products4.jpg') }}" alt="products-image">
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
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="single-products-box">
                            <div class="image">
                                <a href="#" class="d-block">
                                    <img class="w-100" src="{{ asset('assets/img/products/products5.jpg') }}" alt="products-image">
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
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="single-products-box">
                            <div class="image">
                                <a href="#" class="d-block">
                                    <img class="w-100" src="{{ asset('assets/img/products/products6.jpg') }}" alt="products-image">
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
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="single-products-box">
                            <div class="image">
                                <a href="#" class="d-block">
                                    <img class="w-100" src="{{ asset('assets/img/products/products7.jpg') }}" alt="products-image">
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
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="single-products-box">
                            <div class="image">
                                <a href="#" class="d-block">
                                    <img class="w-100" src="{{ asset('assets/img/products/products8.jpg') }}" alt="products-image">
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
                </div>
            </div>
        </div>
        <!-- End Products Area -->

        <!-- Start Offer Area -->
        <div class="offer-area pb-75">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="single-offer-box">
                            <a href="#" class="d-block">
                                <img src="{{ asset('assets/img/offer/offer4.jpg') }}" alt="offer-image">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-offer-box">
                            <a href="#" class="d-block">
                                <img src="{{ asset('assets/img/offer/offer5.jpg') }}" alt="offer-image">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Offer Area -->

        <!-- Start Products Area -->
        <div class="products-area pb-75">
            <div class="container">
                <div class="section-title">
                    <h2>Best Sellers</h2>
                </div>
                <div class="products-slides owl-carousel owl-theme">
                    <div class="single-products-box">
                        <div class="image">
                            <a href="#" class="d-block">
                                <img src="{{ asset('assets/img/products/products9.jpg') }}" alt="products-image">
                            </a>
                            <ul class="products-button">
                                <li><a href="#"><i class='bx bx-cart-alt'></i></a></li>
                                <li><a href="#"><i class='bx bx-heart'></i></a></li>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView"><i class='bx bx-show'></i></a></li>
                                <li><a href="#"><i class='bx bx-link-alt'></i></a></li>
                            </ul>
                            <div class="new">New!</div>
                        </div>
                        <div class="content">
                            <h3><a href="#">Pet chair</a></h3>
                            <div class="price">
                                <span class="new-price">$150.00</span>
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
                    <div class="single-products-box">
                        <div class="image">
                            <a href="#" class="d-block">
                                <img src="{{ asset('assets/img/products/products10.jpg') }}" alt="products-image">
                            </a>
                            <ul class="products-button">
                                <li><a href="#"><i class='bx bx-cart-alt'></i></a></li>
                                <li><a href="#"><i class='bx bx-heart'></i></a></li>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView"><i class='bx bx-show'></i></a></li>
                                <li><a href="#"><i class='bx bx-link-alt'></i></a></li>
                            </ul>
                        </div>
                        <div class="content">
                            <h3><a href="#">Pink ceramic cat bowl</a></h3>
                            <div class="price">
                                <span class="new-price">$39.00</span>
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
                    <div class="single-products-box">
                        <div class="image">
                            <a href="#" class="d-block">
                                <img src="{{ asset('assets/img/products/products11.jpg') }}" alt="products-image">
                            </a>
                            <ul class="products-button">
                                <li><a href="#"><i class='bx bx-cart-alt'></i></a></li>
                                <li><a href="#"><i class='bx bx-heart'></i></a></li>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView"><i class='bx bx-show'></i></a></li>
                                <li><a href="#"><i class='bx bx-link-alt'></i></a></li>
                            </ul>
                            <span class="sold">Sold!</span>
                        </div>
                        <div class="content">
                            <h3><a href="#">Red dog bed</a></h3>
                            <div class="price">
                                <span class="new-price">$125.00</span>
                                <span class="old-price">$145.00</span>
                            </div>
                            <div class="rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star-half'></i>
                                <i class='bx bx-star'></i>
                            </div>
                        </div>
                    </div>
                    <div class="single-products-box">
                        <div class="image">
                            <a href="#" class="d-block">
                                <img src="{{ asset('assets/img/products/products12.jpg') }}" alt="products-image">
                            </a>
                            <ul class="products-button">
                                <li><a href="#"><i class='bx bx-cart-alt'></i></a></li>
                                <li><a href="#"><i class='bx bx-heart'></i></a></li>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView"><i class='bx bx-show'></i></a></li>
                                <li><a href="#"><i class='bx bx-link-alt'></i></a></li>
                            </ul>
                        </div>
                        <div class="content">
                            <h3><a href="#">Pet carrier</a></h3>
                            <div class="price">
                                <span class="new-price">$39.00</span>
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
            </div>
        </div>
        <!-- End Products Area -->

        <!-- Start Offer Area -->
        <div class="offer-area pb-75">
            <div class="container">
                <div class="single-offer-box">
                    <a href="#" class="d-block">
                        <img src="{{ asset('assets/img/offer/offer6.jpg') }}" alt="offer-image">
                    </a>
                </div>
            </div>
        </div>
        <!-- End Offer Area -->

        <!-- Start Brands Area -->
        <div class="brands-area pb-75">
            <div class="container">
                <div class="section-title">
                    <h2>Top Brands</h2>
                </div>
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-2 col-md-3 col-sm-4 col-4">
                        <div class="single-brands-box">
                            <a href="#" class="d-block">
                                <img src="{{ asset('assets/img/brands/brands1.png') }}" alt="brands">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-4">
                        <div class="single-brands-box">
                            <a href="#" class="d-block">
                                <img src="{{ asset('assets/img/brands/brands2.png') }}" alt="brands">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-4">
                        <div class="single-brands-box">
                            <a href="#" class="d-block">
                                <img src="{{ asset('assets/img/brands/brands3.png') }}" alt="brands">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-4">
                        <div class="single-brands-box">
                            <a href="#" class="d-block">
                                <img src="{{ asset('assets/img/brands/brands4.png') }}" alt="brands">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-4">
                        <div class="single-brands-box">
                            <a href="#" class="d-block">
                                <img src="{{ asset('assets/img/brands/brands5.png') }}" alt="brands">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-4">
                        <div class="single-brands-box">
                            <a href="#" class="d-block">
                                <img src="{{ asset('assets/img/brands/brands6.png') }}" alt="brands">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Brands Area -->

        <!-- Start Products Area -->
        <div class="products-area pb-75">
            <div class="container">
                <div class="section-title">
                    <h2>Special Offers</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="offer-box">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6">
                                    <div class="image">
                                        <img src="{{ asset('assets/img/offer/offer7.png') }}" alt="offer-image">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="content">
                                        <h3><a href="#">Premium lamb rice</a></h3>
                                        <span class="price">$240.00</span>
                                        <div class="rating">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit, sed do eiusmod tempor.</p>
                                        <h3>Place an order now</h3>
                                        <span class="discount">Enjoy 30% OFF</span>
                                        <div class="counter-class" data-date="2024-12-24 24:00:00">
                                            <div><span class="counter-days"></span> Days</div>
                                            <div><span class="counter-hours"></span> Hours</div>
                                            <div><span class="counter-minutes"></span> Minutes</div>
                                            <div><span class="counter-seconds"></span> Seconds</div>
                                        </div>
                                        <a href="#" class="default-btn"><span>Shop Now</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                        <div class="single-products-box">
                            <div class="image">
                                <a href="#" class="d-block">
                                    <img src="{{ asset('assets/img/products/products13.jpg') }}" alt="products-image">
                                </a>
                                <ul class="products-button">
                                    <li><a href="#"><i class='bx bx-cart-alt'></i></a></li>
                                    <li><a href="#"><i class='bx bx-heart'></i></a></li>
                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView"><i class='bx bx-show'></i></a></li>
                                    <li><a href="#"><i class='bx bx-link-alt'></i></a></li>
                                </ul>
                            </div>
                            <div class="content">
                                <h3><a href="#">Premium beef rice</a></h3>
                                <div class="price">
                                    <span class="new-price">$139.00</span>
                                    <span class="old-price">$200.00</span>
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
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                        <div class="single-products-box">
                            <div class="image">
                                <a href="#" class="d-block">
                                    <img src="{{ asset('assets/img/products/products14.jpg') }}" alt="products-image">
                                </a>
                                <ul class="products-button">
                                    <li><a href="#"><i class='bx bx-cart-alt'></i></a></li>
                                    <li><a href="#"><i class='bx bx-heart'></i></a></li>
                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView"><i class='bx bx-show'></i></a></li>
                                    <li><a href="#"><i class='bx bx-link-alt'></i></a></li>
                                </ul>
                            </div>
                            <div class="content">
                                <h3><a href="#">Premium pork rice</a></h3>
                                <div class="price">
                                    <span class="new-price">$100.00</span>
                                    <span class="old-price">$120.00</span>
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
                </div>
            </div>
        </div>
        <!-- End Products Area -->

        <!-- Start Facility Area -->
        <div class="facility-area">
            <div class="container">
                <div class="facility-inner">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="single-facility-box">
                                <img src="{{ asset('assets/img/icon/icon1.png') }}" alt="icon">
                                <h3>Best collection</h3>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="single-facility-box">
                                <img src="{{ asset('assets/img/icon/icon2.png') }}" alt="icon">
                                <h3>Fast delivery</h3>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="single-facility-box">
                                <img src="{{ asset('assets/img/icon/icon3.png') }}" alt="icon">
                                <h3>24/7 customer support</h3>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="single-facility-box">
                                <img src="{{ asset('assets/img/icon/icon4.png') }}" alt="icon">
                                <h3>Secured payment</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Facility Area -->

        <!-- Start Blog Area -->
        <div class="blog-area pt-100 pb-75">
            <div class="container">
                <div class="section-title">
                    <h2>Latest Blog</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-post">
                            <div class="image">
                                <a href="#" class="d-block">
                                    <img src="{{ asset('assets/img/blog/blog1.jpg') }}" alt="blog-image">
                                </a>
                            </div>
                            <div class="content">
                                <span class="date">
                                    <span>10 Aug</span> 2024
                                </span>
                                <a href="#" class="category">Training</a>
                                <h3><a href="#">Properly a pet training guide</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-post">
                            <div class="image">
                                <a href="#" class="d-block">
                                    <img src="{{ asset('assets/img/blog/blog2.jpg') }}" alt="blog-image">
                                </a>
                            </div>
                            <div class="content">
                                <span class="date">
                                    <span>11 Aug</span> 2024
                                </span>
                                <a href="#" class="category">Behaviour</a>
                                <h3><a href="#">The exact rules of how to travel with pets</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-post">
                            <div class="image">
                                <a href="#" class="d-block">
                                    <img src="{{ asset('assets/img/blog/blog3.jpg') }}" alt="blog-image">
                                </a>
                            </div>
                            <div class="content">
                                <span class="date">
                                    <span>12 Aug</span> 2024
                                </span>
                                <a href="#" class="category">Solutions</a>
                                <h3><a href="#">Creating proper guidelines for pet food </a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Blog Area -->
@endsection
