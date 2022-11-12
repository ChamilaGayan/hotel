@extends('layouts.app')

@section('content')

<!DOCTYPE HTML>

        <!--loader-->
        <div class="loader-wrap">
            <div class="pin">
                <div class="pulse"></div>
            </div>
        </div>
        <!--loader end-->
        <!-- Main  -->
        <div id="main">
            <!-- header-->
            @include('layouts.header')
            <!--  header end -->
            <!--  wrapper  -->
            <div id="wrapper">
                <!-- content-->
                <div class="content">
                    <!--  section  -->
                    <section class="parallax-section single-par" data-scrollax-parent="true">
                        <div class="bg par-elem "  data-bg="images/bg/9.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="section-title center-align big-title">
                                <div class="section-title-separator"><span></span></div>
                                <h2><span>New York Hotels</span></h2>
                                <span class="section-separator"></span>
                                <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec tincidunt arcu, sit amet fermentum sem.</h4>
                            </div>
                        </div>
                        <div class="header-sec-link">
                            <div class="container"><a href="#sec1" class="custom-scroll-link color-bg"><i class="fal fa-angle-double-down"></i></a></div>
                        </div>
                    </section>
                    <!--  section  end-->
                    <div class="breadcrumbs-fs fl-wrap">
                        <div class="container">
                            <div class="breadcrumbs fl-wrap"><a href="#">Home</a><a href="#">Listings</a><span>Listings Without Map</span></div>
                        </div>
                    </div>
                    <!--section -->
                    <section class="grey-blue-bg small-padding" id="sec1">
                        <div class="container">
                            <div class="row">
                                <!--listing -->
                                <div class="col-md-12">
                                    <div class="mobile-list-controls fl-wrap mar-bot-cont">
                                        <div class="mlc show-list-wrap-search fl-wrap"><i class="fal fa-filter"></i> Filter</div>
                                    </div>
                                    <!--list-wrap-search   -->
                                    <div class="list-wrap-search lisfw fl-wrap lws_mobile">
                                        <div class="container">
                                            <div class="row">
                                                <!-- col-list-search-input-item -->
                                                <div class="col-md-4">
                                                    <div class="col-list-search-input-item in-loc-dec fl-wrap not-vis-arrow">
                                                        <label>City/Category</label>
                                                        <div class="listsearch-input-item">
                                                            <select data-placeholder="City" class="chosen-select" >
                                                                <option>All Cities</option>
                                                                <option>New York</option>
                                                                <option>London</option>
                                                                <option>Paris</option>
                                                                <option>Kiev</option>
                                                                <option>Moscow</option>
                                                                <option>Dubai</option>
                                                                <option>Rome</option>
                                                                <option>Beijing</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- col-list-search-input-item end -->
                                                <!-- col-list-search-input-item -->
                                                <div class="col-md-5">
                                                    <div class="col-list-search-input-item fl-wrap location autocomplete-container">
                                                        <label>Destination</label>
                                                        <span class="header-search-input-item-icon"><i class="fal fa-map-marker-alt"></i></span>
                                                        <input type="text" placeholder="Destination or Hotel Name" class="autocomplete-input" id="autocompleteid3" value=""/>
                                                        <a href="#"><i class="fal fa-dot-circle"></i></a>
                                                    </div>
                                                </div>
                                                <!-- col-list-search-input-item end -->
                                                <!-- col-list-search-input-item -->
                                                <div class="col-md-3">
                                                    <div class="col-list-search-input-item in-loc-dec date-container  fl-wrap">
                                                        <label>Date In-Out </label>
                                                        <span class="header-search-input-item-icon"><i class="fal fa-calendar-check"></i></span>
                                                        <input type="text"   placeholder="When" name="dates"   value=""/>
                                                    </div>
                                                </div>
                                                <!-- col-list-search-input-item end -->
                                            </div>
                                            <div class="search-opt-wrap fl-wrap">
                                                <div class="search-opt-wrap-container">
                                                    <!-- col-list-search-input-item -->
                                                    <div class="search-input-item midd-input">
                                                        <div class="col-list-search-input-item fl-wrap">
                                                            <div class="quantity-item">
                                                                <label>Rooms</label>
                                                                <div class="quantity">
                                                                    <input type="number" min="1" max="3" step="1" value="1">
                                                                </div>
                                                            </div>
                                                            <div class="quantity-item">
                                                                <label>Adults</label>
                                                                <div class="quantity">
                                                                    <input type="number" min="1" max="5" step="1" value="1">
                                                                </div>
                                                            </div>
                                                            <div class="quantity-item">
                                                                <label>Children</label>
                                                                <div class="quantity">
                                                                    <input type="number" min="0" max="3" step="1" value="0">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- col-list-search-input-item end -->
                                                    <!-- col-list-search-input-item -->
                                                    <div class="search-input-item">
                                                        <div class="range-slider-title">Price range</div>
                                                        <div class="range-slider-wrap fl-wrap">
                                                            <input class="range-slider" data-from="300" data-to="1200" data-step="50" data-min="50" data-max="2000" data-prefix="$">
                                                        </div>
                                                    </div>
                                                    <!-- col-list-search-input-item end -->
                                                    <!-- col-list-search-input-item -->
                                                    <div class="search-input-item small-input ">
                                                        <div class="col-list-search-input-item fl-wrap">
                                                            <button class="header-search-button" onclick="window.location.href='listing.html'">Search <i class="far fa-search"></i></button>
                                                        </div>
                                                    </div>
                                                    <!-- col-list-search-input-item end -->
                                                    <!-- hidden-listing-filter -->
                                                    <div class="hidden-listing-filter fl-wrap">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <!--col-list-search-input-item -->
                                                                <div class="col-list-search-input-item fl-wrap">
                                                                    <h4>Review Score</h4>
                                                                    <div class="search-opt-container fl-wrap">
                                                                        <!-- Checkboxes -->
                                                                        <ul class="fl-wrap filter-tags">
                                                                            <li class="five-star-rating">
                                                                                <input id="check-aa2" type="checkbox" name="check" checked>
                                                                                <label for="check-aa2"><span class="listing-rating card-popup-rainingvis" data-starrating2="5"><span>5 Stars</span></span></label>
                                                                            </li>
                                                                            <li class="four-star-rating">
                                                                                <input id="check-aa3" type="checkbox" name="check">
                                                                                <label for="check-aa3"><span class="listing-rating card-popup-rainingvis" data-starrating2="5"><span>4 Star</span></span></label>
                                                                            </li>
                                                                            <li class="three-star-rating">
                                                                                <input id="check-aa4" type="checkbox" name="check">
                                                                                <label for="check-aa4"><span class="listing-rating card-popup-rainingvis" data-starrating2="5"><span>3 Star</span></span></label>
                                                                            </li>
                                                                        </ul>
                                                                        <!-- Checkboxes end -->
                                                                    </div>
                                                                </div>
                                                                <!--col-list-search-input-item end-->
                                                            </div>
                                                            <div class="col-md-8">
                                                                <!--col-list-search-input-item -->
                                                                <div class="col-list-search-input-item fl-wrap">
                                                                    <h4>Facilities</h4>
                                                                    <div class="search-opt-container fl-wrap">
                                                                        <!-- Checkboxes -->
                                                                        <ul class="fl-wrap filter-tags half-tags">
                                                                            <li>
                                                                                <input id="check-aaa5" type="checkbox" name="check" checked>
                                                                                <label for="check-aaa5">Free WiFi</label>
                                                                            </li>
                                                                            <li>
                                                                                <input id="check-bb5" type="checkbox" name="check" checked>
                                                                                <label for="check-bb5">Parking</label>
                                                                            </li>
                                                                            <li>
                                                                                <input id="check-dd5" type="checkbox" name="check">
                                                                                <label for="check-dd5">Fitness Center</label>
                                                                            </li>
                                                                        </ul>
                                                                        <!-- Checkboxes end -->
                                                                        <!-- Checkboxes -->
                                                                        <ul class="fl-wrap filter-tags half-tags">
                                                                            <li>
                                                                                <input id="check-cc5" type="checkbox" name="check">
                                                                                <label for="check-cc5">Non-smoking Rooms</label>
                                                                            </li>
                                                                            <li>
                                                                                <input id="check-ff5" type="checkbox" name="check" checked>
                                                                                <label for="check-ff5">Airport Shuttle</label>
                                                                            </li>
                                                                            <li>
                                                                                <input id="check-c4" type="checkbox" name="check">
                                                                                <label for="check-c4">Air Conditioning</label>
                                                                            </li>
                                                                        </ul>
                                                                        <!-- Checkboxes end -->
                                                                    </div>
                                                                </div>
                                                                <!--col-list-search-input-item end-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- hidden-listing-filter end -->
                                                </div>
                                                <div class="show-more-filters act-hiddenpanel color3-bg"><i class="fal fa-plus"></i><span>More options</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--list-wrap-search end -->
                                    <!--col-list-wrap -->
                                    <div class="col-list-wrap fw-col-list-wrap">
                                        <!-- list-main-wrap-->
                                        <div class="list-main-wrap fl-wrap card-listing">
                                            <!-- list-main-wrap-opt-->
                                            <div class="list-main-wrap-opt fl-wrap">
                                                <div class="list-main-wrap-title fl-wrap col-title">
                                                    <h2>Results For : <span>New York </span></h2>
                                                </div>
                                                <!-- price-opt-->
                                                <div class="price-opt">
                                                    <span class="price-opt-title">Sort results by:</span>
                                                    <div class="listsearch-input-item">
                                                        <select data-placeholder="Popularity" class="chosen-select no-search-select" >
                                                            <option>Popularity</option>
                                                            <option>Average rating</option>
                                                            <option>Price: low to high</option>
                                                            <option>Price: high to low</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- price-opt end-->
                                                <!-- price-opt-->
                                                <div class="grid-opt">
                                                    <ul>
                                                        <li><span class="two-col-grid act-grid-opt"><i class="fas fa-th-large"></i></span></li>
                                                        <li><span class="one-col-grid"><i class="fas fa-bars"></i></span></li>
                                                    </ul>
                                                </div>
                                                <!-- price-opt end-->
                                            </div>
                                            <!-- list-main-wrap-opt end-->
                                            <!-- listing-item-container -->
                                            <div class="listing-item-container init-grid-items fl-wrap three-columns-grid">
                                                <!-- listing-item  -->
                                                <div class="listing-item">
                                                    <article class="geodir-category-listing fl-wrap">
                                                        <div class="geodir-category-img">
                                                            <a href="listing-single.html"><img src="images/gal/8.jpg" alt=""></a>
                                                            <div class="listing-avatar"><a href="author-single.html"><img src="images/avatar/1.jpg" alt=""></a>
                                                                <span class="avatar-tooltip">Added By  <strong>Alisa Noory</strong></span>
                                                            </div>
                                                            <div class="sale-window">Sale 20%</div>
                                                            <div class="geodir-category-opt">
                                                                <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                                                <div class="rate-class-name">
                                                                    <div class="score"><strong>Very Good</strong>27 Reviews </div>
                                                                    <span>5.0</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="geodir-category-content fl-wrap title-sin_item">
                                                            <div class="geodir-category-content-title fl-wrap">
                                                                <div class="geodir-category-content-title-item">
                                                                    <h3 class="title-sin_map"><a href="listing-single.html">Premium Plaza Hotel</a></h3>
                                                                    <div class="geodir-category-location fl-wrap"><a href="#" class="map-item"><i class="fas fa-map-marker-alt"></i> 27th Brooklyn New York, USA</a></div>
                                                                </div>
                                                            </div>
                                                            <p>Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.</p>
                                                            <ul class="facilities-list fl-wrap">
                                                                <li><i class="fal fa-wifi"></i><span>Free WiFi</span></li>
                                                                <li><i class="fal fa-parking"></i><span>Parking</span></li>
                                                                <li><i class="fal fa-smoking-ban"></i><span>Non-smoking Rooms</span></li>
                                                                <li><i class="fal fa-utensils"></i><span> Restaurant</span></li>
                                                            </ul>
                                                            <div class="geodir-category-footer fl-wrap">
                                                                <div class="geodir-category-price">Awg/Night <span>$ 320</span></div>
                                                                <div class="geodir-opt-list">
                                                                    <a href="#" class="single-map-item" data-newlatitude="40.72956781" data-newlongitude="-73.99726866"><i class="fal fa-map-marker-alt"></i><span class="geodir-opt-tooltip">On the map</span></a>
                                                                    <a href="#" class="geodir-js-favorite"><i class="fal fa-heart"></i><span class="geodir-opt-tooltip">Save</span></a>
                                                                    <a href="#" class="geodir-js-booking"><i class="fal fa-exchange"></i><span class="geodir-opt-tooltip">Find Directions</span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                                <!-- listing-item end -->
                                                <!-- listing-item  -->
                                                <div class="listing-item">
                                                    <article class="geodir-category-listing fl-wrap">
                                                        <div class="geodir-category-img">
                                                            <a href="listing-single.html"><img src="images/gal/4.jpg" alt=""></a>
                                                            <div class="listing-avatar"><a href="author-single.html"><img src="images/avatar/2.jpg" alt=""></a>
                                                                <span class="avatar-tooltip">Added By  <strong>Julie Cramp</strong></span>
                                                            </div>
                                                            <div class="sale-window big-sale">Sale 50%</div>
                                                            <div class="geodir-category-opt">
                                                                <div class="listing-rating card-popup-rainingvis" data-starrating2="4"></div>
                                                                <div class="rate-class-name">
                                                                    <div class="score"><strong>Good</strong>12 Reviews </div>
                                                                    <span>4.2</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="geodir-category-content fl-wrap title-sin_item">
                                                            <div class="geodir-category-content-title fl-wrap">
                                                                <div class="geodir-category-content-title-item">
                                                                    <h3 class="title-sin_map"><a href="listing-single.html">Grand Hero Palace</a></h3>
                                                                    <div class="geodir-category-location fl-wrap"><a href="#" class="map-item"><i class="fas fa-map-marker-alt"></i> W 85th St, New York,  USA</a></div>
                                                                </div>
                                                            </div>
                                                            <p> Morbi suscipit erat in diam bibendum rutrum in nisl. Aliquam et purus ante.</p>
                                                            <ul class="facilities-list fl-wrap">
                                                                <li><i class="fal fa-wifi"></i><span>Free WiFi</span></li>
                                                                <li><i class="fal fa-parking"></i><span>Parking</span></li>
                                                                <li><i class="fal fa-smoking-ban"></i><span>Non-smoking Rooms</span></li>
                                                                <li><i class="fal fa-utensils"></i><span> Restaurant</span></li>
                                                            </ul>
                                                            <div class="geodir-category-footer fl-wrap">
                                                                <div class="geodir-opt-link">
                                                                    <div class="geodir-category-price">Awg/Night <span>$ 120</span></div>
                                                                </div>
                                                                <div class="geodir-opt-list">
                                                                    <a href="#" class="single-map-item" data-newlatitude="40.76221766" data-newlongitude="-73.96511769"><i class="fal fa-map-marker-alt"></i><span class="geodir-opt-tooltip">On the map</span></a>
                                                                    <a href="#" class="geodir-js-favorite"><i class="fal fa-heart"></i><span class="geodir-opt-tooltip">Save</span></a>
                                                                    <a href="#" class="geodir-js-booking"><i class="fal fa-exchange"></i><span class="geodir-opt-tooltip">Find Directions</span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                                <!-- listing-item end -->
                                                <!-- listing-item  -->
                                                <div class="listing-item">
                                                    <article class="geodir-category-listing fl-wrap">
                                                        <div class="geodir-category-img">
                                                            <a href="listing-single.html"><img src="images/gal/6.jpg" alt=""></a>
                                                            <div class="listing-avatar"><a href="author-single.html"><img src="images/avatar/3.jpg" alt=""></a>
                                                                <span class="avatar-tooltip">Added By  <strong>Andy Moore</strong></span>
                                                            </div>
                                                            <div class="geodir-category-opt">
                                                                <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                                                <div class="rate-class-name">
                                                                    <div class="score"><strong>Good</strong>6 Reviews </div>
                                                                    <span>4.7</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="geodir-category-content fl-wrap title-sin_item">
                                                            <div class="geodir-category-content-title fl-wrap">
                                                                <div class="geodir-category-content-title-item">
                                                                    <h3 class="title-sin_map"><a href="listing-single.html">Park Central</a></h3>
                                                                    <div class="geodir-category-location fl-wrap"><a href="#" class="map-item"><i class="fas fa-map-marker-alt"></i>40 Journal Square Plaza, NJ,  USA</a></div>
                                                                </div>
                                                            </div>
                                                            <p> Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa.</p>
                                                            <ul class="facilities-list fl-wrap">
                                                                <li><i class="fal fa-wifi"></i><span>Free WiFi</span></li>
                                                                <li><i class="fal fa-parking"></i><span>Parking</span></li>
                                                                <li><i class="fal fa-smoking-ban"></i><span>Non-smoking Rooms</span></li>
                                                                <li><i class="fal fa-utensils"></i><span> Restaurant</span></li>
                                                            </ul>
                                                            <div class="geodir-category-footer fl-wrap">
                                                                <div class="geodir-opt-link">
                                                                    <div class="geodir-category-price">Awg/Night <span>$ 80</span></div>
                                                                </div>
                                                                <div class="geodir-opt-list">
                                                                    <a href="#" class="single-map-item" data-newlatitude="40.88496706" data-newlongitude="-73.88191222"><i class="fal fa-map-marker-alt"></i><span class="geodir-opt-tooltip">On the map</span></a>
                                                                    <a href="#" class="geodir-js-favorite"><i class="fal fa-heart"></i><span class="geodir-opt-tooltip">Save</span></a>
                                                                    <a href="#" class="geodir-js-booking"><i class="fal fa-exchange"></i><span class="geodir-opt-tooltip">Find Directions</span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                                <!-- listing-item end -->
                                                <!-- listing-item  -->
                                                <div class="listing-item">
                                                    <article class="geodir-category-listing fl-wrap">
                                                        <div class="geodir-category-img">
                                                            <a href="listing-single.html"><img src="images/gal/2.jpg" alt=""></a>
                                                            <div class="listing-avatar"><a href="author-single.html"><img src="images/avatar/4.jpg" alt=""></a>
                                                                <span class="avatar-tooltip">Added By  <strong>Mary Jones</strong></span>
                                                            </div>
                                                            <div class="sale-window">Sale 20%</div>
                                                            <div class="geodir-category-opt">
                                                                <div class="listing-rating card-popup-rainingvis" data-starrating2="3"></div>
                                                                <div class="rate-class-name">
                                                                    <div class="score"><strong>Pleasant</strong>10 Reviews </div>
                                                                    <span>3.2</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="geodir-category-content fl-wrap title-sin_item">
                                                            <div class="geodir-category-content-title fl-wrap">
                                                                <div class="geodir-category-content-title-item">
                                                                    <h3 class="title-sin_map"><a href="listing-single.html">Holiday Home</a></h3>
                                                                    <div class="geodir-category-location fl-wrap"><a href="#" class="map-item"><i class="fas fa-map-marker-alt"></i> 75 Prince St,  NY, USA</a></div>
                                                                </div>
                                                            </div>
                                                            <p>  Mauris ac maximus neque. Nam in mauris quis libero sodales eleifend.</p>
                                                            <ul class="facilities-list fl-wrap">
                                                                <li><i class="fal fa-wifi"></i><span>Free WiFi</span></li>
                                                                <li><i class="fal fa-parking"></i><span>Parking</span></li>
                                                                <li><i class="fal fa-smoking-ban"></i><span>Non-smoking Rooms</span></li>
                                                                <li><i class="fal fa-utensils"></i><span> Restaurant</span></li>
                                                            </ul>
                                                            <div class="geodir-category-footer fl-wrap">
                                                                <div class="geodir-opt-link">
                                                                    <div class="geodir-category-price">Awg/Night <span>$ 50</span></div>
                                                                </div>
                                                                <div class="geodir-opt-list">
                                                                    <a href="#" class="single-map-item" data-newlatitude="40.72228267" data-newlongitude="-73.99246214"><i class="fal fa-map-marker-alt"></i><span class="geodir-opt-tooltip">On the map</span></a>
                                                                    <a href="#" class="geodir-js-favorite"><i class="fal fa-heart"></i><span class="geodir-opt-tooltip">Save</span></a>
                                                                    <a href="#" class="geodir-js-booking"><i class="fal fa-exchange"></i><span class="geodir-opt-tooltip">Find Directions</span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                                <!-- listing-item end -->
                                                <!-- listing-item  -->
                                                <div class="listing-item">
                                                    <article class="geodir-category-listing fl-wrap">
                                                        <div class="geodir-category-img">
                                                            <a href="listing-single.html"><img src="images/gal/3.jpg" alt=""></a>
                                                            <div class="listing-avatar"><a href="author-single.html"><img src="images/avatar/5.jpg" alt=""></a>
                                                                <span class="avatar-tooltip">Added By  <strong>Fider Mamby</strong></span>
                                                            </div>
                                                            <div class="sale-window">Sale 10%</div>
                                                            <div class="geodir-category-opt">
                                                                <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                                                <div class="rate-class-name">
                                                                    <div class="score"><strong>Very Good</strong>102 Reviews </div>
                                                                    <span>4.7</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="geodir-category-content fl-wrap title-sin_item">
                                                            <div class="geodir-category-content-title fl-wrap">
                                                                <div class="geodir-category-content-title-item">
                                                                    <h3 class="title-sin_map"><a href="listing-single.html">Gold Plaza Hotel</a></h3>
                                                                    <div class="geodir-category-location fl-wrap"><a href="#" class="map-item"><i class="fas fa-map-marker-alt"></i> 34-42 Montgomery St , NY, USA</a></div>
                                                                </div>
                                                            </div>
                                                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec tincidunt arcu, sit amet . </p>
                                                            <ul class="facilities-list fl-wrap">
                                                                <li><i class="fal fa-wifi"></i><span>Free WiFi</span></li>
                                                                <li><i class="fal fa-parking"></i><span>Parking</span></li>
                                                                <li><i class="fal fa-smoking-ban"></i><span>Non-smoking Rooms</span></li>
                                                                <li><i class="fal fa-utensils"></i><span> Restaurant</span></li>
                                                            </ul>
                                                            <div class="geodir-category-footer fl-wrap">
                                                                <div class="geodir-opt-link">
                                                                    <div class="geodir-category-price">Awg/Night <span>$ 210</span></div>
                                                                </div>
                                                                <div class="geodir-opt-list">
                                                                    <a href="#" class="single-map-item" data-newlatitude="40.94982541" data-newlongitude="-73.84357452"><i class="fal fa-map-marker-alt"></i><span class="geodir-opt-tooltip">On the map</span></a>
                                                                    <a href="#" class="geodir-js-favorite"><i class="fal fa-heart"></i><span class="geodir-opt-tooltip">Save</span></a>
                                                                    <a href="#" class="geodir-js-booking"><i class="fal fa-exchange"></i><span class="geodir-opt-tooltip">Find Directions</span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                                <!-- listing-item end -->
                                                <!-- listing-item  -->
                                                <div class="listing-item">
                                                    <article class="geodir-category-listing fl-wrap">
                                                        <div class="geodir-category-img">
                                                            <a href="listing-single.html"><img src="images/gal/5.jpg" alt=""></a>
                                                            <div class="listing-avatar"><a href="author-single.html"><img src="images/avatar/1.jpg" alt=""></a>
                                                                <span class="avatar-tooltip">Added By  <strong>Alisa Noory</strong></span>
                                                            </div>
                                                            <div class="sale-window big-sale">Sale 70%</div>
                                                            <div class="geodir-category-opt">
                                                                <div class="listing-rating card-popup-rainingvis" data-starrating2="4"></div>
                                                                <div class="rate-class-name">
                                                                    <div class="score"><strong> Good</strong>8 Reviews </div>
                                                                    <span>4.1</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="geodir-category-content fl-wrap title-sin_item">
                                                            <div class="geodir-category-content-title fl-wrap">
                                                                <div class="geodir-category-content-title-item">
                                                                    <h3 class="title-sin_map"><a href="listing-single.html">Moonlight Hotel</a></h3>
                                                                    <div class="geodir-category-location fl-wrap"><a href="#" class="map-item"><i class="fas fa-map-marker-alt"></i> 70 Bright St New York, USA</a></div>
                                                                </div>
                                                            </div>
                                                            <p> Class aptent taciti  Mauris ac maximus neque. Nam in mauris quis libero sodales eleifend.</p>
                                                            <ul class="facilities-list fl-wrap">
                                                                <li><i class="fal fa-wifi"></i><span>Free WiFi</span></li>
                                                                <li><i class="fal fa-parking"></i><span>Parking</span></li>
                                                                <li><i class="fal fa-smoking-ban"></i><span>Non-smoking Rooms</span></li>
                                                                <li><i class="fal fa-utensils"></i><span> Restaurant</span></li>
                                                            </ul>
                                                            <div class="geodir-category-footer fl-wrap">
                                                                <div class="geodir-opt-link">
                                                                    <div class="geodir-category-price">Awg/Night <span>$ 105</span></div>
                                                                </div>
                                                                <div class="geodir-opt-list">
                                                                    <a href="#" class="single-map-item" data-newlatitude="40.90261483" data-newlongitude="-74.15737152"><i class="fal fa-map-marker-alt"></i><span class="geodir-opt-tooltip">On the map</span></a>
                                                                    <a href="#" class="geodir-js-favorite"><i class="fal fa-heart"></i><span class="geodir-opt-tooltip">Save</span></a>
                                                                    <a href="#" class="geodir-js-booking"><i class="fal fa-exchange"></i><span class="geodir-opt-tooltip">Find Directions</span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                                <!-- listing-item end -->
                                            </div>
                                            <!-- listing-item-container end-->
                                            <!-- pagination-->
                                            <div class="pagination">
                                                <a href="#" class="prevposts-link"><i class="fa fa-caret-left"></i></a>
                                                <a href="#" >1</a>
                                                <a href="#" class="current-page">2</a>
                                                <a href="#">3</a>
                                                <a href="#">4</a>
                                                <a href="#" class="nextposts-link"><i class="fa fa-caret-right"></i></a>
                                            </div>
                                            <!-- pagination end-->
                                        </div>
                                        <!-- list-main-wrap end-->
                                    </div>
                                    <!--col-list-wrap end -->
                                </div>
                                <!--listing  end-->
                            </div>
                            <!--row end-->
                        </div>
                    </section>
                    <!--section end -->
                </div>
                <!-- content end-->
            </div>
            <!--wrapper end -->
            <!--footer -->
            @include('layouts.footer')
            <!--footer end -->
            <!--map-modal -->
            <div class="map-modal-wrap">
                <div class="map-modal-wrap-overlay"></div>
                <div class="map-modal-item">
                    <div class="map-modal-container fl-wrap">
                        <div class="map-modal fl-wrap">
                            <div id="singleMap" data-latitude="40.7" data-longitude="-73.1"></div>
                        </div>
                        <h3><i class="fal fa-location-arrow"></i><a href="#">Hotel Title</a></h3>
                        <input id="pac-input" class="controls fl-wrap controls-mapwn" type="text" placeholder="What Nearby ?   Bar , Gym , Restaurant ">
                        <div class="map-modal-close"><i class="fal fa-times"></i></div>
                    </div>
                </div>
            </div>
            <!--map-modal end -->
            <!--register form -->
            <div class="main-register-wrap modal">
                <div class="reg-overlay"></div>
                <div class="main-register-holder">
                    <div class="main-register fl-wrap">
                        <div class="close-reg color-bg"><i class="fal fa-times"></i></div>
                        <ul class="tabs-menu">
                            <li class="current"><a href="#tab-1"><i class="fal fa-sign-in-alt"></i> Login</a></li>
                            <li><a href="#tab-2"><i class="fal fa-user-plus"></i> Register</a></li>
                        </ul>
                        <!--tabs -->
                        <div id="tabs-container">
                            <div class="tab">
                                <!--tab -->
                                <div id="tab-1" class="tab-content">
                                    <h3>Sign In <span>Easy<strong>Book</strong></span></h3>
                                    <div class="custom-form">
                                        <form method="post"  name="registerform">
                                            <label>Username or Email Address <span>*</span> </label>
                                            <input name="email" type="text"   onClick="this.select()" value="">
                                            <label >Password <span>*</span> </label>
                                            <input name="password" type="password"   onClick="this.select()" value="" >
                                            <button type="submit"  class="log-submit-btn"><span>Log In</span></button>
                                            <div class="clearfix"></div>
                                            <div class="filter-tags">
                                                <input id="check-a" type="checkbox" name="check">
                                                <label for="check-a">Remember me</label>
                                            </div>
                                        </form>
                                        <div class="lost_password">
                                            <a href="#">Lost Your Password?</a>
                                        </div>
                                    </div>
                                </div>
                                <!--tab end -->
                                <!--tab -->
                                <div class="tab">
                                    <div id="tab-2" class="tab-content">
                                        <h3>Sign Up <span>Easy<strong>Book</strong></span></h3>
                                        <div class="custom-form">
                                            <form method="post"   name="registerform" class="main-register-form" id="main-register-form2">
                                                <label >Full Name <span>*</span> </label>
                                                <input name="name" type="text"   onClick="this.select()" value="">
                                                <label>Email Address <span>*</span></label>
                                                <input name="email" type="text"  onClick="this.select()" value="">
                                                <label >Password <span>*</span></label>
                                                <input name="password" type="password"   onClick="this.select()" value="" >
                                                <button type="submit"     class="log-submit-btn"  ><span>Register</span></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!--tab end -->
                            </div>
                            <!--tabs end -->
                            <div class="log-separator fl-wrap"><span>or</span></div>
                            <div class="soc-log fl-wrap">
                                <p>For faster login or register use your social account.</p>
                                <a href="#" class="facebook-log"><i class="fab fa-facebook-f"></i>Connect with Facebook</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--register form end -->
            <a class="to-top"><i class="fas fa-caret-up"></i></a>
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwJSRi0zFjDemECmFl9JtRj1FY7TiTRRo&libraries=places&callback=initAutocomplete"></script>
        <script type="text/javascript" src="js/map-single.js"></script>


@endsection
