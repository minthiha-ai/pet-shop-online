@extends('master')

@section('contents')
<!-- Start Page Title Area -->
        <div class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h1>Products Details</h1>
                    <ul>
                        <li><a href="{{ url('/shop') }}">Home</a></li>
                        <li>Products Details</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Products Details Area -->
        <div class="products-details-area ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-12">
                        <div class="products-details-thumbs-image">
                            <ul class="products-details-thumbs-image-slides">
                                <li><img src="{{ asset('assets/img/products/products4.jpg') }}" alt="image"></li>
                                <li><img src="{{ asset('assets/img/products/products5.jpg') }}" alt="image"></li>
                                <li><img src="{{ asset('assets/img/products/products6.jpg') }}" alt="image"></li>
                                <li><img src="{{ asset('assets/img/products/products7.jpg') }}" alt="image"></li>
                                <li><img src="{{ asset('assets/img/products/products8.jpg') }}" alt="image"></li>
                            </ul>
                            <div class="slick-thumbs">
                                <ul>
                                    <li><img src="{{ asset('assets/img/products/products4.jpg') }}" alt="image"></li>
                                    <li><img src="{{ asset('assets/img/products/products5.jpg') }}" alt="image"></li>
                                    <li><img src="{{ asset('assets/img/products/products6.jpg') }}" alt="image"></li>
                                    <li><img src="{{ asset('assets/img/products/products7.jpg') }}" alt="image"></li>
                                    <li><img src="{{ asset('assets/img/products/products8.jpg') }}" alt="image"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <div class="products-details-desc">
                            <h3>Stack pet collars</h3>
                            <div class="price">
                                <span class="new-price">$35.00</span>
                                <span class="old-price">$55.00</span>
                            </div>
                            <div class="rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                            <p>Santiago who travels from his homeland in Spain to the Egyptian desert in search of a treasure buried near the Pyramids. Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipiscing elitet.</p>
                            <div class="products-add-to-cart">
                                <div class="input-counter">
                                    <span class="minus-btn"><i class='bx bx-minus'></i></span>
                                    <input type="text" value="1">
                                    <span class="plus-btn"><i class='bx bx-plus'></i></span>
                                </div>
                                <button type="submit" class="default-btn"><span>Add to Cart</span></button>
                            </div>
                            <a href="#" class="add-to-wishlist"><i class='bx bx-heart'></i> Add to wishlist</a>
                            <ul class="products-info">
                                <li><span>SKU:</span> 007</li>
                                <li><span>Categories:</span> <a href="shop-grid.html">Brash</a></li>
                                <li><span>Availability:</span> In stock (7 items)</li>
                                <li><span>Tag:</span> Accessories</li>
                            </ul>
                            <div class="products-share">
                                <ul class="social">
                                    <li><span>Share:</span></li>
                                    <li><a href="#" class="facebook" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                                    <li><a href="#" class="twitter" target="_blank"><i class='bx bxl-twitter'></i></a></li>
                                    <li><a href="#" class="linkedin" target="_blank"><i class='bx bxl-linkedin'></i></a></li>
                                    <li><a href="#" class="instagram" target="_blank"><i class='bx bxl-instagram'></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="products-details-tabs">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="false">Description</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" id="additional-information-tab" data-bs-toggle="tab" data-bs-target="#additional-information" type="button" role="tab" aria-controls="additional-information" aria-selected="false">Additional Info</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button" role="tab" aria-controls="reviews" aria-selected="false">Reviews</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="description" role="tabpanel">
                                    <p>This story, dazzling in its powerful simplicity and soul-stirring wisdom, is about an Andalusian shepherd boy named Santiago who travels from his homeland in Spain to the Egyptian desert in search of a treasure buried near the Pyramids. Lorem ipsum dolor sit.</p>
                                    <ul>
                                        <li>Instant <strong>Patoi</strong> bestseller</li>
                                        <li>Translated into 18 languages</li>
                                        <li>#1 Most Recommended Book of the year.</li>
                                        <li>A neglected project, widely dismissed, its champion written off as unhinged.</li>
                                        <li>Yields a negative result in an experiment because of a flaw in the design of the experiment.</li>
                                        <li>An Amazon, Bloomberg, Financial Times, Forbes, Inc., Newsweek, Strategy + Business, Tech Crunch, Washington Post Best Business Book of the year</li>
                                    </ul>
                                    <p><i>This story, dazzling in its powerful simplicity and soul-stirring wisdom, is about an Andalusian shepherd boy named Santiago who travels from his homeland in Spain to the Egyptian desert in search of a treasure buried near the Pyramids. Lorem ipsum dolor sit.</i></p>
                                </div>
                                <div class="tab-pane fade" id="additional-information" role="tabpanel">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <tbody>
                                                <tr>
                                                    <td>Handle Height</td>
                                                    <td>40-45″</td>
                                                </tr>
                                                <tr>
                                                    <td>Width</td>
                                                    <td>24″</td>
                                                </tr>
                                                <tr>
                                                    <td>Wheels</td>
                                                    <td>12″</td>
                                                </tr>
                                                <tr>
                                                    <td>Dimensions</td>
                                                    <td>10 × 10 × 10 cm</td>
                                                </tr>
                                                <tr>
                                                    <td>Material</td>
                                                    <td>Iron</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="reviews" role="tabpanel">
                                    <div class="products-review-comments">
                                        <div class="user-review">
                                            <img src="{{ asset('assets/img/user/user1.jpg') }}" alt="image">
                                            <div class="review-rating">
                                                <div class="review-stars">
                                                    <i class='bx bxs-star checked'></i>
                                                    <i class='bx bxs-star checked'></i>
                                                    <i class='bx bxs-star checked'></i>
                                                    <i class='bx bxs-star checked'></i>
                                                    <i class='bx bxs-star checked'></i>
                                                </div>
                                            </div>
                                            <span class="d-block sub-name">James Anderson</span>
                                            <p>Very well built theme, couldn't be happier with it. Can't wait for future updates to see what else they add in.</p>
                                        </div>
                                        <div class="user-review">
                                            <img src="{{ asset('assets/img/user/user2.jpg') }}" alt="image">
                                            <div class="review-rating">
                                                <div class="review-stars">
                                                    <i class='bx bxs-star checked'></i>
                                                    <i class='bx bxs-star checked'></i>
                                                    <i class='bx bxs-star checked'></i>
                                                    <i class='bx bxs-star'></i>
                                                    <i class='bx bxs-star'></i>
                                                </div>
                                            </div>
                                            <span class="d-block sub-name">Sarah Taylor</span>
                                            <p>Santiago who travels from his homeland in Spain to the Egyptian desert in search of a treasure buried near the Pyramids. Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipiscing elitet.</p>
                                        </div>
                                        <div class="user-review">
                                            <img src="{{ asset('assets/img/user/user3.jpg') }}" alt="image">
                                            <div class="review-rating">
                                                <div class="review-stars">
                                                    <i class='bx bxs-star checked'></i>
                                                    <i class='bx bxs-star checked'></i>
                                                    <i class='bx bxs-star checked'></i>
                                                    <i class='bx bxs-star checked'></i>
                                                    <i class='bx bxs-star checked'></i>
                                                </div>
                                            </div>
                                            <span class="d-block sub-name">David Warner</span>
                                            <p>Stunning design, very dedicated crew who welcome new ideas suggested by customers, nice support.</p>
                                        </div>
                                        <div class="user-review">
                                            <img src="{{ asset('assets/img/user/user4.jpg') }}" alt="image">
                                            <div class="review-rating">
                                                <div class="review-stars">
                                                    <i class='bx bxs-star checked'></i>
                                                    <i class='bx bxs-star checked'></i>
                                                    <i class='bx bxs-star checked'></i>
                                                    <i class='bx bxs-star checked'></i>
                                                    <i class='bx bxs-star'></i>
                                                </div>
                                            </div>
                                            <span class="d-block sub-name">King Kong</span>
                                            <p>Stunning design, very dedicated crew who welcome new ideas suggested by customers, nice support.</p>
                                        </div>
                                    </div>
                                    <div class="review-form-wrapper">
                                        <h3>Add a review</h3>
                                        <p class="comment-notes">Your email address will not be published. Required fields are marked <span>*</span></p>
                                        <form>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="rating">
                                                        <input type="radio" id="star5" name="rating" value="5" /><label for="star5"></label>
                                                        <input type="radio" id="star4" name="rating" value="4" /><label for="star4"></label>
                                                        <input type="radio" id="star3" name="rating" value="3" /><label for="star3"></label>
                                                        <input type="radio" id="star2" name="rating" value="2" /><label for="star2"></label>
                                                        <input type="radio" id="star1" name="rating" value="1" /><label for="star1"></label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Name *">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" placeholder="Email *">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <textarea placeholder="Your review" class="form-control" cols="30" rows="6"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <p class="comment-form-cookies-consent">
                                                        <input type="checkbox" id="test1">
                                                        <label for="test1">Save my name, email, and website in this browser for the next time I comment.</label>
                                                    </p>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <button type="submit">SUBMIT</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Products Details Area -->
@endsection
