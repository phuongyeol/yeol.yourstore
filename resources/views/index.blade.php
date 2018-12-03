@extends('layouts.master')

@section('header')

@endsection

@section('content')
	<!--=== box-baners ===-->
	<div class="container-fluid box-baners">
		<div class="row">
			<!-- col-left -->
			<div class="col-xs-12 col-sm-12 col-md-6">
				<!-- banner-slider -->
				<div class="banner-slider banner-slider-button">
					<div>
						<a href="listing.html" class="banner zoom-in font-size-responsive">
							<span class="figure">
								<img src=" {{ asset('../blog_assets/images/custom//banner-04.jpg') }}" alt=""/>
								<span class="figcaption  text-center">
									<span class="block-table">
										<span class="block-table-cell">
											<span class="font-size50 text-uppercase color">Season sale!</span>
											<span class="block text-uppercase font-size100 font-bold">Get huge savings!</span>
											<span class="btn btn--ys btn--l">Shop now!</span>
										</span>
									</span>
								</span>
							</span>
						</a>
					</div>
					<div>
						<a href="listing.html" class="banner zoom-in font-size-responsive">
							<span class="figure">
								<img src=" {{ asset('../blog_assets/images/custom//banner-05.jpg') }}" alt=""/>
								<span class="figcaption text-left">
									<span class="block-table">
										<span class="block-table-cell">
											<em class="block main-font font-size30">A great selection of superb brands </em>
											<span class="block font-size160 font-bold text-uppercase">50% off</span>
											<span class="block font-size70 text-uppercase font-light">on all lingerie</span>
											<span class="text_sm font-light">
												Donec eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet, nunc. Ut sit amet turpis. In est arcu, sollicitudin eu, vehicula venenatis, sociis natoque penatibus et magnis. Dolor sit amet, consectetuer adipiscing elit. Donec eros tellus.
											</span>
											<span class="btn btn--ys btn--l">Shop now!</span>
										</span>
									</span>
								</span>
							</span>
						</a>
					</div>
					<div>
						<a href="listing.html" class="banner zoom-in font-size-responsive">
							<span class="figure">
								<img src=" {{ asset('../blog_assets/images/custom//banner-06.jpg') }}" alt=""/>
								<span class="figcaption text-left">
									<span class="block-table">
										<span class="block-table-cell">
											<em class="block top-indent  font-size20 main-font font-light">Spring -Summer 2016</em>
											<span class="block top-indent-sm font-size80 text-uppercase line-height-small">Save 20% on</span>
											<span class="block font-size90 text-uppercase font-bold line-height-small">new arrivals</span>
											<span class="btn top-indent-md btn--ys btn--l">Shop now!</span>
										</span>
									</span>
								</span>
							</span>
						</a>
					</div>
				</div>
				<!-- /banner-slider -->
			</div>
			<!-- /col-left -->
			<!-- col-right -->
			<div class="col-xs-12 col-sm-12 col-md-6">
				<div class="row">
					<div class="col-sm-6 col-md-6">
						<a href="listing.html" class="banner zoom-in">
							<span class="figure">
								<img src=" {{ asset('../blog_assets/images/custom//banner-07.jpg') }}" alt=""/>
								<span class="figcaption text-left">
									<span class="block-table">
										<span class="block-table-cell">
											<span class="block font-size82 text-uppercase text-dark font-medium">New</span>
											<span class="block color text-uppercase font-size26">season essentials!</span>
											<em class="link-btn-20 main-font text-dark">Shop now! <span class="icon icon-navigate_next"></span></em>
										</span>
									</span>
								</span>
							</span>
						</a>
					</div>
					<div class="col-sm-6  col-md-6">
						<a href="listing.html" class="banner zoom-in">
							<span class="figure">
								<img src=" {{ asset('../blog_assets/images/custom//banner-08.jpg') }}" alt=""/>
								<span class="figcaption text-center">
									<span class="block-table">
										<span class="block-table-cell">
											<span class="block text-uppercase font-medium  font-size82">15% off</span>
											<span class="block text-uppercase font-medium font-size26">your first purchase</span>
										</span>
									</span>
								</span>
							</span>
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<a href="listing.html" class="banner zoom-in">
							<span class="figure">
								<img src=" {{ asset('../blog_assets/images/custom//banner-09.jpg') }}" alt=""/>
								<span class="figcaption">
									<span class="block-table">
										<span class="block-table-cell">
											<span class="block text-uppercase font-medium font-size62">New collection</span>
											<span class="block text-uppercase font-medium font-size26">of fashion clothes</span>
											<span class="btn btn--ys btn--xl top-indent-sm1 main-font text-inherit"><em>Shop now!</em> <span class="icon icon-navigate_next"></span></span>
										</span>
									</span>
								</span>
							</span>
						</a>
					</div>
				</div>
			</div>
			<!-- /col-right -->
		</div>
	</div>
	<!--=== /box-baners ===-->
	<!--=== box-select  ===-->
	<div class="content">
		<div class="container">
			<!-- nav-select-item -->
			<ul class="nav-select-item">
				<li><a href="listing.html">
					<span class="icon-clothes icon-clothes-01"></span>
					Outerwear
				</a></li>
				<li><a href="listing.html">
					<span class="icon-clothes icon-clothes-02"></span>
					Sweaters
				</a></li>
				<li><a href="listing.html">
					<span class="icon-clothes icon-clothes-03"></span>
					Sweatshirts
				</a></li>
				<li><a href="listing.html">
					<span class="icon-clothes icon-clothes-04"></span>
					Pants
				</a></li>
				<li><a href="listing.html">
					<span class="icon-clothes icon-clothes-05"></span>
					Shirts
				</a></li>
				<li><a href="listing.html">
					<span class="icon-clothes icon-clothes-06"></span>
					T-Shirts
				</a></li>
				<li><a href="listing.html">
					<span class="icon-clothes icon-clothes-07"></span>
					Jackets
				</a></li>
				<li><a href="listing.html">
					<span class="icon-clothes icon-clothes-08"></span>
					Shorts
				</a></li>
				<li><a href="listing.html">
					<span class="icon-clothes icon-clothes-09"></span>
					Dresses
				</a></li>
				<li><a href="listing.html">
					<span class="icon-clothes icon-clothes-10"></span>
					skirts
				</a></li>
			</ul>
			<!-- /nav-select-item -->
			
			
		</div>
	</div>
	<div class="content separator-section">
		<div class="container">
			<hr>
		</div>
	</div>	
	<div class="content">
		<div class="container">
			<!-- title -->
			<div class="title-with-button">
				<div class="carousel-products__button pull-right"> <span class="btn-prev"></span> <span class="btn-next"></span> </div>
				<h2 class="text-center text-uppercase title-under">FEATURED PRODUCTS</h2>
			</div>
			<!-- /title --> 
			<!-- carousel -->
			<div class="carousel-products row" id="carouselFeatured">
				<div class="col-lg-3">
					<!-- product -->
					<div class="product">
						<div class="product__inside">
							<!-- product image -->
							<div class="product__inside__image">
								<a href="product.html"> <img src="{{ asset('../blog_assets/images/product/product-10.jpg') }}" alt=""> </a> 
								<!-- quick-view --> 
								<a href="#" data-toggle="modal" data-target="#quickViewModal" class="quick-view"><b><span class="icon icon-visibility"></span> Quick view</b> </a>  
								<!-- /quick-view --> 
							</div>
							<!-- /product image --> 											
							<!-- product name -->
							<div class="product__inside__name">
								<h2><a href="product.html">Mauris lacinia lectus</a></h2>
							</div>
							<!-- /product name --> 
							<!-- product price -->
							<div class="product__inside__price price-box">$86.00</div>
							<!-- /product price --> 
							<div class="product__inside__hover">
								<!-- product info -->
								<div class="product__inside__info">
									<div class="product__inside__info__btns"> <a href="#" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
									<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
									<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
									<a href="#" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a> </div>
									<ul class="product__inside__info__link hidden-xs">
										<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
										<li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#" class="compare-link"><span class="text">Add to compare</span></a></li>
									</ul>
								</div>
								<!-- /product info --> 
								<!-- product rating -->
								<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
								<!-- /product rating --> 
							</div>
						</div>
					</div>
					<!-- /product --> 
				</div>
				<div class="col-lg-3">
					<!-- product -->
					<div class="product">
						<div class="product__inside">
							<!-- product image -->
							<div class="product__inside__image">
								<a href="product.html"> <img src="{{ asset('../blog_assets/images/product/product-21.jpg') }}" alt=""> </a> 
								<!-- quick-view --> 
								<a href="#" data-toggle="modal" data-target="#quickViewModal" class="quick-view"><b><span class="icon icon-visibility"></span> Quick view</b> </a>  
								<!-- /quick-view --> 
							</div>
							<!-- /product image --> 											
							<!-- product name -->
							<div class="product__inside__name">
								<h2><a href="product.html">Mauris lacinia lectus</a></h2>
							</div>
							<!-- /product name --> 
							<!-- product price -->
							<div class="product__inside__price price-box">$46.00</div>
							<!-- /product price --> 
							<div class="product__inside__hover">
								<!-- product info -->
								<div class="product__inside__info">
									<div class="product__inside__info__btns"> <a href="#" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
									<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
									<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
									<a href="#" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a> </div>
									<ul class="product__inside__info__link hidden-xs">
										<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
										<li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#" class="compare-link"><span class="text">Add to compare</span></a></li>
									</ul>
								</div>
								<!-- /product info --> 
								<!-- product rating -->
								<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
								<!-- /product rating --> 
							</div>
						</div>
					</div>
					<!-- /product --> 
				</div>
				<div class="col-lg-3">
					<!-- product -->
					<div class="product">
						<div class="product__inside">
							<!-- product image -->
							<div class="product__inside__image">
								<a href="product.html"> <img src="{{ asset('../blog_assets/images/product/product-6.jpg') }}" alt=""> </a> 
								<!-- quick-view --> 
								<a href="#" data-toggle="modal" data-target="#quickViewModal" class="quick-view"><b><span class="icon icon-visibility"></span> Quick view</b> </a>  
								<!-- /quick-view --> 
							</div>
							<!-- /product image --> 											
							<!-- product name -->
							<div class="product__inside__name">
								<h2><a href="product.html">Mauris lacinia lectus</a></h2>
							</div>
							<!-- /product name --> 
							<!-- product price -->
							<div class="product__inside__price price-box">$133.00</div>
							<!-- /product price --> 
							<div class="product__inside__hover">
								<!-- product info -->
								<div class="product__inside__info">
									<div class="product__inside__info__btns"> <a href="#" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
									<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
									<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
									<a href="#" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a> </div>
									<ul class="product__inside__info__link hidden-xs">
										<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
										<li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#" class="compare-link"><span class="text">Add to compare</span></a></li>
									</ul>
								</div>
								<!-- /product info --> 
								<!-- product rating -->
								<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
								<!-- /product rating --> 
							</div>
						</div>
					</div>
					<!-- /product --> 
				</div>
				<div class="col-lg-3">
					<!-- product -->
					<div class="product sold-out">
						<div class="product__inside">
							<!-- product image -->
							<div class="product__inside__image">
								<a href="product.html"> <img src="{{ asset('../blog_assets/images/product/product-3.jpg') }}" alt=""> </a> 
								<!-- label sold-out -->
								<div class="product__label--sold-out"> <span>sold<br>
									out</span> 
								</div>
								<!-- /label sold-out --> 
							</div>
							<!-- /product image --> 
							<!-- product name -->
							<div class="product__inside__name">
								<h2><a href="product.html">Mauris lacinia lectus</a></h2>
							</div>
							<!-- /product name -->                 <!-- product description --> 
							<!-- visible only in row-view mode -->
							<div class="product__inside__description row-mode-visible"> Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. </div>
							<!-- /product description -->                 <!-- product price -->
							<div class="product__inside__price price-box">$73.00</div>
							<!-- /product price -->                 <!-- product review --> 
							<!-- visible only in row-view mode -->
							<div class="product__inside__review row-mode-visible">
								<div class="rating row-mode-visible"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
								<a href="#">1 Review(s)</a> <a href="#">Add Your Review</a> 
							</div>
							<!-- /product review --> 
							<div class="product__inside__hover">
								<!-- product info -->
								<div class="product__inside__info">
									<div class="product__inside__info__btns"> <a href="#" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
									<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
									<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
									<a href="#" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a> </div>
									<ul class="product__inside__info__link hidden-xs">
										<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
										<li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#" class="compare-link"><span class="text">Add to compare</span></a></li>
									</ul>
								</div>
								<!-- /product info --> <!-- product rating -->
								<div class="rating row-mode-hide"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
								<!-- /product rating --> 
							</div>
						</div>
					</div>
					<!-- /product -->
				</div>
				<div class="col-lg-3">
					<!-- product -->
					<div class="product">
						<div class="product__inside">
							<!-- product image -->
							<div class="product__inside__image">
								<a href="product.html"> <img src="{{ asset('../blog_assets/images/product/product-12.jpg') }}" alt=""> </a> 
								<!-- quick-view --> 
								<a href="#" data-toggle="modal" data-target="#quickViewModal" class="quick-view"><b><span class="icon icon-visibility"></span> Quick view</b> </a>  
								<!-- /quick-view --> 
							</div>
							<!-- /product image --> 											
							<!-- product name -->
							<div class="product__inside__name">
								<h2><a href="product.html">Mauris lacinia lectus</a></h2>
							</div>
							<!-- /product name --> 
							<!-- product price -->
							<div class="product__inside__price price-box">$128.00</div>
							<!-- /product price --> 
							<div class="product__inside__hover">
								<!-- product info -->
								<div class="product__inside__info">
									<ul class="options-swatch options-swatch--color">
										<li><a href="#"><span class="swatch-label"><img src="{{ asset('../blog_assets/images/colors/blue.png')}} " width="10" height="10" alt=""/></span></a></li>
										<li><a href="#"><span class="swatch-label"><img src="{{ asset('../blog_assets/images/colors/yellow.png')}} " width="10" height="10" alt=""/></span></a></li>
										<li><a href="#"><span class="swatch-label"><img src="{{ asset('../blog_assets/images/colors/red.png')}} " width="10" height="10" alt=""/></span></a></li>
									</ul>
									<div  class="product__inside__info__btns"> <a href="#" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
									<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
									<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
									<a href="#" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a> </div>
									<ul class="product__inside__info__link hidden-xs">
										<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
										<li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#" class="compare-link"><span class="text">Add to compare</span></a></li>
									</ul>
								</div>
								<!-- /product info --> 
								<!-- product rating -->
								<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
								<!-- /product rating --> 
							</div>
						</div>
					</div>
					<!-- /product --> 
				</div>
				<div class="col-lg-3">
					<!-- product -->
					<div class="product">
						<div class="product__inside">
							<!-- product image -->
							<div class="product__inside__image">
								<a href="product.html"> <img src="{{ asset('../blog_assets/images/product/product-10.jpg') }}" alt=""> </a> 
								<!-- quick-view --> 
								<a href="#" data-toggle="modal" data-target="#quickViewModal" class="quick-view"><b><span class="icon icon-visibility"></span> Quick view</b> </a>  
								<!-- /quick-view --> 
							</div>
							<!-- /product image --> 											
							<!-- product name -->
							<div class="product__inside__name">
								<h2><a href="product.html">Mauris lacinia lectus</a></h2>
							</div>
							<!-- /product name --> 
							<!-- product price -->
							<div class="product__inside__price price-box">$86.00</div>
							<!-- /product price --> 
							<div class="product__inside__hover">
								<!-- product info -->
								<div class="product__inside__info">
									<div class="product__inside__info__btns"> <a href="#" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
									<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
									<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
									<a href="#" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a> </div>
									<ul class="product__inside__info__link hidden-xs">
										<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
										<li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#" class="compare-link"><span class="text">Add to compare</span></a></li>
									</ul>
								</div>
								<!-- /product info --> 
								<!-- product rating -->
								<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
								<!-- /product rating --> 
							</div>
						</div>
					</div>
					<!-- /product --> 
				</div>
				<div class="col-lg-3">
					<!-- product -->
					<div class="product">
						<div class="product__inside">
							<!-- product image -->
							<div class="product__inside__image">
								<a href="product.html"> <img src="{{ asset('../blog_assets/images/product/product-21.jpg') }}" alt=""> </a> 
								<!-- quick-view --> 
								<a href="#" data-toggle="modal" data-target="#quickViewModal" class="quick-view"><b><span class="icon icon-visibility"></span> Quick view</b> </a>  
								<!-- /quick-view --> 
							</div>
							<!-- /product image --> 											
							<!-- product name -->
							<div class="product__inside__name">
								<h2><a href="product.html">Mauris lacinia lectus</a></h2>
							</div>
							<!-- /product name --> 
							<!-- product price -->
							<div class="product__inside__price price-box">$46.00</div>
							<!-- /product price --> 
							<div class="product__inside__hover">
								<!-- product info -->
								<div class="product__inside__info">
									<div class="product__inside__info__btns"> <a href="#" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
									<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
									<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
									<a href="#" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a> </div>
									<ul class="product__inside__info__link hidden-xs">
										<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
										<li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#" class="compare-link"><span class="text">Add to compare</span></a></li>
									</ul>
								</div>
								<!-- /product info --> 
								<!-- product rating -->
								<!-- <div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div> -->
								<!-- /product rating --> 
							</div>
						</div>
					</div>
					<!-- /product --> 
				</div>
				<div class="col-lg-3">
					<!-- product -->
					<div class="product">
						<div class="product__inside">
							<!-- product image -->
							<div class="product__inside__image">
								<a href="product.html"> <img src="{{ asset('../blog_assets/images/product/product-6.jpg') }}" alt=""> </a> 
								<!-- quick-view --> 
								<a href="#" data-toggle="modal" data-target="#quickViewModal" class="quick-view"><b><span class="icon icon-visibility"></span> Quick view</b> </a>  
								<!-- /quick-view --> 
							</div>
							<!-- /product image --> 											
							<!-- product name -->
							<div class="product__inside__name">
								<h2><a href="product.html">Mauris lacinia lectus</a></h2>
							</div>
							<!-- /product name --> 
							<!-- product price -->
							<div class="product__inside__price price-box">$133.00</div>
							<!-- /product price --> 
							<div class="product__inside__hover">
								<!-- product info -->
								<div class="product__inside__info">
									<div class="product__inside__info__btns"> <a href="#" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
									<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
									<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
									<a href="#" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a> </div>
									<ul class="product__inside__info__link hidden-xs">
										<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
										<li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#" class="compare-link"><span class="text">Add to compare</span></a></li>
									</ul>
								</div>
								<!-- /product info --> 
								<!-- product rating -->
								<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
								<!-- /product rating --> 
							</div>
						</div>
					</div>
					<!-- /product --> 
				</div>
				<div class="col-lg-3">
					<!-- product -->
					<div class="product sold-out">
						<div class="product__inside">
							<!-- product image -->
							<div class="product__inside__image">
								<a href="product.html"> <img src="{{ asset('../blog_assets/images/product/product-3.jpg') }}" alt=""> </a> 
								<!-- label sold-out -->
								<div class="product__label--sold-out"> <span>sold<br>
									out</span> 
								</div>
								<!-- /label sold-out --> 
							</div>
							<!-- /product image --> 
							<!-- product name -->
							<div class="product__inside__name">
								<h2><a href="product.html">Mauris lacinia lectus</a></h2>
							</div>
							<!-- /product name -->                 <!-- product description --> 
							<!-- visible only in row-view mode -->
							<div class="product__inside__description row-mode-visible"> Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. </div>
							<!-- /product description -->                 <!-- product price -->
							<div class="product__inside__price price-box">$73.00</div>
							<!-- /product price -->                 <!-- product review --> 
							<!-- visible only in row-view mode -->
							<div class="product__inside__review row-mode-visible">
								<div class="rating row-mode-visible"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
								<a href="#">1 Review(s)</a> <a href="#">Add Your Review</a> 
							</div>
							<!-- /product review --> 
							<div class="product__inside__hover">
								<!-- product info -->
								<div class="product__inside__info">
									<div class="product__inside__info__btns"> <a href="#" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
									<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
									<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
									<a href="#" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a> </div>
									<ul class="product__inside__info__link hidden-xs">
										<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
										<li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#" class="compare-link"><span class="text">Add to compare</span></a></li>
									</ul>
								</div>
								<!-- /product info --> <!-- product rating -->
								<div class="rating row-mode-hide"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
								<!-- /product rating --> 
							</div>
						</div>
					</div>
					<!-- /product -->
				</div>
				<div class="col-lg-3">
					<!-- product -->
					<div class="product">
						<div class="product__inside">
							<!-- product image -->
							<div class="product__inside__image">
								<a href="product.html"> <img src="{{ asset('../blog_assets/images/product/product-12.jpg') }}" alt=""> </a> 
								<!-- quick-view --> 
								<a href="#" data-toggle="modal" data-target="#quickViewModal" class="quick-view"><b><span class="icon icon-visibility"></span> Quick view</b> </a>  
								<!-- /quick-view --> 
							</div>
							<!-- /product image --> 											
							<!-- product name -->
							<div class="product__inside__name">
								<h2><a href="product.html">Mauris lacinia lectus</a></h2>
							</div>
							<!-- /product name --> 
							<!-- product price -->
							<div class="product__inside__price price-box">$128.00</div>
							<!-- /product price --> 
							<div class="product__inside__hover">
								<!-- product info -->
								<div class="product__inside__info">
									<ul class="options-swatch options-swatch--color">
										<li><a href="#"><span class="swatch-label"><img src="{{ asset('../blog_assets/images/colors/blue.png')}} " width="10" height="10" alt=""/></span></a></li>
										<li><a href="#"><span class="swatch-label"><img src="{{ asset('../blog_assets/images/colors/yellow.png')}} " width="10" height="10" alt=""/></span></a></li>
										<li><a href="#"><span class="swatch-label"><img src="{{ asset('../blog_assets/images/colors/red.png')}} " width="10" height="10" alt=""/></span></a></li>
									</ul>
									<div  class="product__inside__info__btns"> <a href="#" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
									<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
									<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
									<a href="#" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a> </div>
									<ul class="product__inside__info__link hidden-xs">
										<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
										<li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#" class="compare-link"><span class="text">Add to compare</span></a></li>
									</ul>
								</div>
								<!-- /product info --> 
								<!-- product rating -->
								<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
								<!-- /product rating --> 
							</div>
						</div>
					</div>
					<!-- /product --> 
				</div>
			</div>
			
			<!-- /carousel --> 
		</div>
	</div>
	<div class="content separator-section">
		<div class="container">
			<hr>
		</div>
	</div>	
	<div class="content">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-6 col-xl-6">
					<div class="divider--lg visible-sm visible-xs"></div>
					<!-- title -->
					<div class="title-with-button">
						<div class="carousel-products__button  pull-right"> <span class="btn-prev"></span> <span class="btn-next"></span> </div>
						<h2 class="text-center text-uppercase title-under">New</h2>
					</div>
					<!-- /title --> 
					<!-- carousel -->
					<div class="carousel-products row" id="carouselNew">
						<div class="col-lg-3">
							<!-- product -->
							<div class="product">
								<div class="product__inside">
									<!-- product image -->
									<div class="product__inside__image">
										<a href="product.html"> <img src="{{ asset('../blog_assets/images/product/product-7.jpg') }}" alt=""> </a> 
										<!-- quick-view --> 
										<a href="#" data-toggle="modal" data-target="#quickViewModal" class="quick-view"><b><span class="icon icon-visibility"></span> Quick view</b> </a>  
										<!-- /quick-view --> 
									</div>
									<!-- /product image --> 
									<!-- label news -->
									<div class="product__label product__label--right product__label--new"> <span>new</span> </div>
									<!-- /label news -->
									<!-- product name -->
									<div class="product__inside__name">
										<h2><a href="product.html">Mauris lacinia lectus</a></h2>
									</div>
									<!-- /product name --> 
									<!-- product price -->
									<div class="product__inside__price price-box">$86.00</div>
									<!-- /product price --> 
									<div class="product__inside__hover">
										<!-- product info -->
										<div class="product__inside__info">
											<div class="product__inside__info__btns"> <a href="#" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
											<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
											<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
											<a href="#" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a> </div>
											<ul class="product__inside__info__link hidden-xs">
												<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
												<li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#" class="compare-link"><span class="text">Add to compare</span></a></li>
											</ul>
										</div>
										<!-- /product info --> 
										<!-- product rating -->
										<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
										<!-- /product rating --> 
									</div>
								</div>
							</div>
							<!-- /product --> 
						</div>
						<div class="col-lg-3">
							<!-- product -->
							<div class="product">
								<div class="product__inside">
									<!-- product image -->
									<div class="product__inside__image">
										<a href="product.html"> <img src="{{ asset('../blog_assets/images/product/product-2.jpg') }}" alt=""> </a> 
										<!-- quick-view --> 
										<a href="#" data-toggle="modal" data-target="#quickViewModal" class="quick-view"><b><span class="icon icon-visibility"></span> Quick view</b> </a>  
										<!-- /quick-view --> 
									</div>
									<!-- /product image --> 
									<!-- label news -->
									<div class="product__label product__label--right product__label--new"> <span>new</span> </div>
									<!-- /label news --> 
									<!-- product name -->
									<div class="product__inside__name">
										<h2><a href="product.html">Mauris lacinia lectus</a></h2>
									</div>
									<!-- /product name --> 
									<!-- product price -->
									<div class="product__inside__price price-box">$23.00</div>
									<!-- /product price --> 
									<div class="product__inside__hover">
										<!-- product info -->
										<div class="product__inside__info">
											<div class="product__inside__info__btns"> <a href="#" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
											<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
											<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
											<a href="#" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a> </div>
											<ul class="product__inside__info__link hidden-xs">
												<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
												<li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#" class="compare-link"><span class="text">Add to compare</span></a></li>
											</ul>
										</div>
										<!-- /product info --> 
										<!-- product rating -->
										<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
										<!-- /product rating --> 
									</div>
								</div>
							</div>
							<!-- /product --> 
						</div>
						<div class="col-lg-3">
							<!-- product -->
							<div class="product">
								<div class="product__inside">
									<!-- product image -->
									<div class="product__inside__image">
										<a href="product.html"> <img src="{{ asset('../blog_assets/images/product/product-7.jpg') }}" alt=""> </a> 
										<!-- quick-view --> 
										<a href="#" data-toggle="modal" data-target="#quickViewModal" class="quick-view"><b><span class="icon icon-visibility"></span> Quick view</b> </a>  
										<!-- /quick-view --> 
									</div>
									<!-- /product image --> 
									<!-- label news -->
									<div class="product__label product__label--right product__label--new"> <span>new</span> </div>
									<!-- /label news -->
									<!-- product name -->
									<div class="product__inside__name">
										<h2><a href="product.html">Mauris lacinia lectus</a></h2>
									</div>
									<!-- /product name --> 
									<!-- product price -->
									<div class="product__inside__price price-box">$86.00</div>
									<!-- /product price --> 
									<div class="product__inside__hover">
										<!-- product info -->
										<div class="product__inside__info">
											<div class="product__inside__info__btns"> <a href="#" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
											<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
											<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
											<a href="#" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a> </div>
											<ul class="product__inside__info__link hidden-xs">
												<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
												<li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#" class="compare-link"><span class="text">Add to compare</span></a></li>
											</ul>
										</div>
										<!-- /product info --> 
										<!-- product rating -->
										<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
										<!-- /product rating --> 
									</div>
								</div>
							</div>
							<!-- /product --> 
						</div>
						<div class="col-lg-3">
							<!-- product -->
							<div class="product">
								<div class="product__inside">
									<!-- product image -->
									<div class="product__inside__image">
										<a href="product.html"> <img src="{{ asset('../blog_assets/images/product/product-2.jpg') }}" alt=""> </a> 
										<!-- quick-view --> 
										<a href="#" data-toggle="modal" data-target="#quickViewModal" class="quick-view"><b><span class="icon icon-visibility"></span> Quick view</b> </a>  
										<!-- /quick-view --> 
									</div>
									<!-- /product image --> 
									<!-- label news -->
									<div class="product__label product__label--right product__label--new"> <span>new</span> </div>
									<!-- /label news --> 
									<!-- product name -->
									<div class="product__inside__name">
										<h2><a href="product.html">Mauris lacinia lectus</a></h2>
									</div>
									<!-- /product name --> 
									<!-- product price -->
									<div class="product__inside__price price-box">$23.00</div>
									<!-- /product price --> 
									<div class="product__inside__hover">
										<!-- product info -->
										<div class="product__inside__info">
											<div class="product__inside__info__btns"> <a href="#" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
											<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
											<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
											<a href="#" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a> </div>
											<ul class="product__inside__info__link hidden-xs">
												<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
												<li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#" class="compare-link"><span class="text">Add to compare</span></a></li>
											</ul>
										</div>
										<!-- /product info --> 
										<!-- product rating -->
										<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
										<!-- /product rating --> 
									</div>
								</div>
							</div>
							<!-- /product --> 
						</div>
					</div>
					<!-- /carousel --> 

				</div>
				<div class="divider divider--lg hidden  visible-sm visible-xs"></div>	
				<div class="col-sm-12 col-md-6 col-xl-6">							
					<!-- title -->
					<div class="title-with-button">
						<div class="carousel-products__button pull-right"> <span class="btn-prev"></span> <span class="btn-next"></span> </div>
						<h2 class="text-center text-uppercase title-under">On Sale</h2>
					</div>
					<!-- /title --> 
					<!-- carousel -->
					<div class="carousel-products row" id="carouselSale">
						<div class="col-lg-3">
							<!-- product -->
							<div class="product">
								<div class="product__inside">
									<!-- product image -->
									<div class="product__inside__image">
										<a href="product.html"> <img src="{{ asset('../blog_assets/images/product/product-8.jpg') }}" alt=""> </a> 
										<!-- quick-view --> 
										<a href="#" data-toggle="modal" data-target="#quickViewModal" class="quick-view"><b><span class="icon icon-visibility"></span> Quick view</b> </a>  
										<!-- /quick-view --> 
									</div>
									<!-- /product image --> 
									<!-- label sale -->
									<div class="product__label product__label--left product__label--sale"> <span>Sale<br>
										-20%</span> 
									</div>
									<!-- /label sale --> 
									<!-- product name -->
									<div class="product__inside__name">
										<h2><a href="product.html">Mauris lacinia lectus</a></h2>
									</div>
									<!-- /product name --> 
									<!-- product price -->
									<div class="product__inside__price price-box">$26.00<span class="price-box__old">$28.00</span></div>
									<!-- /product price --> 
									<div class="product__inside__hover">
										<!-- product info -->
										<div class="product__inside__info">
											<ul class="options-swatch options-swatch--color">
												<li><a href="#"><span class="swatch-label"><img src="{{ asset('../blog_assets/images/colors/blue.png')}}" width="10" height="10" alt=""/></span></a></li>
												<li><a href="#"><span class="swatch-label"><img src="{{ asset('../blog_assets/images/colors/yellow.png')}} " width="10" height="10" alt=""/></span></a></li>
											</ul>
											<div  class="product__inside__info__btns"> <a href="#" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
											<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
											<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
											<a href="#" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a> </div>
											<ul class="product__inside__info__link hidden-xs">
												<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
												<li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#" class="compare-link"><span class="text">Add to compare</span></a></li>
											</ul>
										</div>
										<!-- /product info --> 
										<!-- product rating -->
										<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
										<!-- /product rating --> 
									</div>
								</div>
							</div>
							<!-- /product --> 
						</div>
						<div class="col-lg-3">
							<!-- product -->
							<div class="product">
								<div class="product__inside">
									<!-- product image -->
									<div class="product__inside__image">
										<a href="product.html"> <img src="{{ asset('../blog_assets/images/product/product-1.jpg') }}" alt=""> </a> 
										<!-- quick-view --> 
										<a href="#" data-toggle="modal" data-target="#quickViewModal" class="quick-view"><b><span class="icon icon-visibility"></span> Quick view</b> </a>  
										<!-- /quick-view --> 
									</div>
									<!-- /product image --> 
									<!-- label sale -->
									<div class="product__label product__label--left product__label--sale"> <span>Sale<br>
										-20%</span> 
									</div>
									<!-- /label sale --> 
									<!-- product name -->
									<div class="product__inside__name">
										<h2><a href="product.html">Mauris lacinia lectus</a></h2>
									</div>
									<!-- /product name --> 
									<!-- product price -->
									<div class="product__inside__price price-box">$26.00<span class="price-box__old">$28.00</span></div>
									<!-- /product price --> 
									<div class="product__inside__hover">
										<!-- product info -->
										<div class="product__inside__info">
											<div class="product__inside__info__btns"> <a href="#" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
											<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
											<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
											<a href="#" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a> </div>
											<ul class="product__inside__info__link hidden-xs">
												<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
												<li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#" class="compare-link"><span class="text">Add to compare</span></a></li>
											</ul>
										</div>
										<!-- /product info --> 
										<!-- product rating -->
										<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
										<!-- /product rating --> 
									</div>
								</div>
							</div>
							<!-- /product --> 
						</div>
						<div class="col-lg-3">
							<!-- product -->
							<div class="product">
								<div class="product__inside">
									<!-- product image -->
									<div class="product__inside__image">
										<a href="product.html"> <img src="{{ asset('../blog_assets/images/product/product-5.jpg') }}" alt=""> </a> 
										<!-- quick-view --> 
										<a href="#" data-toggle="modal" data-target="#quickViewModal" class="quick-view"><b><span class="icon icon-visibility"></span> Quick view</b> </a>  
										<!-- /quick-view --> 
									</div>
									<!-- /product image --> 
									<!-- label sale -->
									<div class="product__label product__label--left product__label--sale"> <span>Sale<br>
										-20%</span> 
									</div>
									<!-- /label sale --> 
									<!-- product name -->
									<div class="product__inside__name">
										<h2><a href="product.html">Mauris lacinia lectus</a></h2>
									</div>
									<!-- /product name --> 
									<!-- product price -->
									<div class="product__inside__price price-box">$46.00</div>
									<!-- /product price -->
									<div class="product__inside__hover">
										<!-- product info -->
										<div class="product__inside__info">
											<div class="product__inside__info__btns"> <a href="#" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
											<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
											<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
											<a href="#" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a> </div>
											<ul class="product__inside__info__link hidden-xs">
												<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
												<li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#" class="compare-link"><span class="text">Add to compare</span></a></li>
											</ul>
										</div>
										<!-- /product info --> 
										<!-- product rating -->
										<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
										<!-- /product rating --> 
									</div>
								</div>
							</div>
							<!-- /product --> 
						</div>
						<div class="col-lg-3">
							<!-- product -->
							<div class="product">
								<div class="product__inside">
									<!-- product image -->
									<div class="product__inside__image">
										<a href="product.html"> <img src="{{ asset('../blog_assets/images/product/product-8.jpg') }}" alt=""> </a> 
										<!-- quick-view --> 
										<a href="#" data-toggle="modal" data-target="#quickViewModal" class="quick-view"><b><span class="icon icon-visibility"></span> Quick view</b> </a>  
										<!-- /quick-view --> 
									</div>
									<!-- /product image --> 
									<!-- label sale -->
									<div class="product__label product__label--left product__label--sale"> <span>Sale<br>
										-20%</span> 
									</div>
									<!-- /label sale --> 
									<!-- product name -->
									<div class="product__inside__name">
										<h2><a href="product.html">Mauris lacinia lectus</a></h2>
									</div>
									<!-- /product name --> 
									<!-- product price -->
									<div class="product__inside__price price-box">$26.00<span class="price-box__old">$28.00</span></div>
									<!-- /product price --> 
									<div class="product__inside__hover">
										<!-- product info -->
										<div class="product__inside__info">
											<ul class="options-swatch options-swatch--color">
												<li><a href="#"><span class="swatch-label"><img src="{{ asset('../blog_assets/images/colors/blue.png') }}" width="10" height="10" alt=""/></span></a></li>
												<li><a href="#"><span class="swatch-label"><img src="{{ asset('../blog_assets/images/colors/yellow.png') }} " width="10" height="10" alt=""/></span></a></li>
											</ul>
											<div  class="product__inside__info__btns"> <a href="#" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
											<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
											<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
											<a href="#" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a> </div>
											<ul class="product__inside__info__link hidden-xs">
												<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
												<li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#" class="compare-link"><span class="text">Add to compare</span></a></li>
											</ul>
										</div>
										<!-- /product info --> 
										<!-- product rating -->
										<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
										<!-- /product rating --> 
									</div>
								</div>
							</div>
							<!-- /product --> 
						</div>
						<div class="col-lg-3">
							<!-- product -->
							<div class="product">
								<div class="product__inside">
									<!-- product image -->
									<div class="product__inside__image">
										<a href="product.html"> <img src="{{ asset('../blog_assets/images/product/product-1.jpg') }}" alt=""> </a> 
										<!-- quick-view --> 
										<a href="#" data-toggle="modal" data-target="#quickViewModal" class="quick-view"><b><span class="icon icon-visibility"></span> Quick view</b> </a>  
										<!-- /quick-view --> 
									</div>
									<!-- /product image --> 
									<!-- label sale -->
									<div class="product__label product__label--left product__label--sale"> <span>Sale<br>
										-20%</span> 
									</div>
									<!-- /label sale --> 
									<!-- product name -->
									<div class="product__inside__name">
										<h2><a href="product.html">Mauris lacinia lectus</a></h2>
									</div>
									<!-- /product name --> 
									<!-- product price -->
									<div class="product__inside__price price-box">$26.00<span class="price-box__old">$28.00</span></div>
									<!-- /product price --> 
									<div class="product__inside__hover">
										<!-- product info -->
										<div class="product__inside__info">
											<div class="product__inside__info__btns"> <a href="#" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
											<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
											<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
											<a href="#" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a> </div>
											<ul class="product__inside__info__link hidden-xs">
												<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
												<li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#" class="compare-link"><span class="text">Add to compare</span></a></li>
											</ul>
										</div>
										<!-- /product info --> 
										<!-- product rating -->
										<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
										<!-- /product rating --> 
									</div>
								</div>
							</div>
							<!-- /product --> 
						</div>
						<div class="col-lg-3">
							<!-- product -->
							<div class="product">
								<div class="product__inside">
									<!-- product image -->
									<div class="product__inside__image">
										<a href="product.html"> <img src="{{ asset('../blog_assets/images/product/product-5.jpg') }}" alt=""> </a> 
										<!-- quick-view --> 
										<a href="#" data-toggle="modal" data-target="#quickViewModal" class="quick-view"><b><span class="icon icon-visibility"></span> Quick view</b> </a>  
										<!-- /quick-view --> 
									</div>
									<!-- /product image --> 
									<!-- label sale -->
									<div class="product__label product__label--left product__label--sale"> <span>Sale<br>
										-20%</span> 
									</div>
									<!-- /label sale --> 
									<!-- product name -->
									<div class="product__inside__name">
										<h2><a href="product.html">Mauris lacinia lectus</a></h2>
									</div>
									<!-- /product name --> 
									<!-- product price -->
									<div class="product__inside__price price-box">$46.00</div>
									<!-- /product price -->
									<div class="product__inside__hover">
										<!-- product info -->
										<div class="product__inside__info">
											<div class="product__inside__info__btns"> <a href="#" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
											<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
											<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
											<a href="#" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a> </div>
											<ul class="product__inside__info__link hidden-xs">
												<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
												<li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#" class="compare-link"><span class="text">Add to compare</span></a></li>
											</ul>
										</div>
										<!-- /product info --> 
										<!-- product rating -->
										<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
										<!-- /product rating --> 
									</div>
								</div>
							</div>
							<!-- /product --> 
						</div>
					</div>
					<!-- /carousel --> 																
				</div>
			</div>
			<hr>
		</div>
	</div>
	
	<div class="content">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h4 class="title-icon text-uppercase"><span class="icon color icon-local_shipping icon--flippedX"></span>Shipping AND Delivery</h4>
					<p>
						We're dedicated to delivering your purchase as quickly and affordably as possible. We offer a range of delivery and pickup options, so you can choose the shipping method that best meets your needs.
					</p>
				</div>
				<div class="divider divider--md visible-sm visible-xs"></div>
				<div class="col-md-4">
					<h4 class="title-icon text-uppercase"><span class="icon color icon-payment"></span>Payment Methods</h4>
					<p>
						Every country and shopper has their prefered method to pay online. Offering your buyers safe and convenient payment choices can help your sale go smoothly, earn you positive Feedback, and bring them back for more.
					</p>
				</div>
				<div class="divider divider--md visible-sm visible-xs"></div>
				<div class="col-md-4">
					<h4 class="title-icon text-uppercase"><span class="icon color icon-email"></span>Contact us</h4>
					<p>
						Drop us a line or give us a ring. We love to hear about your experience and are happy to answer any questions.Your questions and comments are important to us.
					</p>
				</div>
				<div class="divider divider--lg visible-sm visible-xs"></div>
			</div>
		</div>
	</div>	
@endsection

@section('footer')
		<script src="{{ asset('../blog_assets/js/js-index-03.js')}} "></script>

@endsection