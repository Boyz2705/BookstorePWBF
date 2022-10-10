<!DOCTYPE html>
	<html lang="en">
	<head>
		<title>BetterBooks</title>
		<link rel="icon" type="image/x-icon" href="https://spesialis1.ikf.fk.unair.ac.id/wp-content/uploads/2019/02/logo-unair.png" />
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="format-detection" content="telephone=no">
	    <meta name="apple-mobile-web-app-capable" content="yes">
	    <meta name="author" content="">
	    <meta name="keywords" content="">
	    <meta name="description" content="">
	    <link rel="stylesheet" type="text/css" href="icomoon/icomoon.css">
	    <link rel="stylesheet" type="text/css" href="css/vendor.css">
	    <link rel="stylesheet" type="text/css" href="css/styles.css">

		<!-- script-->
		<script src="js/modernizr.js"></script>

	</head>

<body>

<!-- Modal -->
{{-- <div class="modal fade" id="books" role="dialog" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="books">Product Detail</h1>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Add to Cart</button>
        <button type="button" class="btn btn-primary">Buy Now</button>
      </div>
    </div>
  </div>
</div> --}}

<!-- <div id="entire-wrapper"> -->
@include('partials.header')
<!--header-wrap-->

{{-- <section id="billboard" class="pattern-overlay">
	<button class="prev slick-arrow">
		<i class="icon icon-arrow-left"></i>
	</button>

	<div class="main-slider">
		<div class="slider-item">
			<div class="banner-content" data-aos="fade-up">
				<h2 class="banner-title">Life of the wild</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu feugiat amet, libero ipsum enim pharetra hac. Urna commodo, lacus ut magna velit eleifend. Amet, quis urna, a eu.</p>
				<div class="btn-wrap">
					<a href="#" class="btn-outline-accent btn-accent-arrow">Read More<i class="icon icon-ns-arrow-right"></i></a>
				</div>
			</div><!--banner-content--> 
			<a href=""><img src="images/main-banner1.jpg" alt="banner" class="banner-ima</a>ge">
		</div><!--slider-item-->

		<div class="slider-item">
			<div class="banner-content">
				<h2 class="banner-title">Simple way of piece life</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu feugiat amet, libero ipsum enim pharetra hac. Urna commodo, lacus ut magna velit eleifend. Amet, quis urna, a eu.</p>
				<div class="btn-wrap">
					<a href="#" class="btn-outline-accent btn-accent-arrow">Read More<i class="icon icon-ns-arrow-right"></i></a>
				</div>
			</div><!--banner-content-->
			<a href=""><img src="images/main-banner2.jpg" alt="banner" class="banner-ima</a>ge"> 
		</div><!--slider-item-->
	</div><!--slider-->
		
	<button class="next slick-arrow">
		<i class="icon icon-arrow-right"></i>
	</button>
</section> --}}

{{-- <section id="featured-books" class="bookshelf">
	<div class="container">
		<div class="row">
			<div class="inner-content">

			<div class="section-header align-center">
				<div class="title">
					<span>Some quality items</span>
				</div>
				<h2 class="section-title">Featured Books</h2>
			</div>

			<div class="product-list" data-aos="fade-up">
				<div class="product-grid">
					
					@foreach ($details as $detail)
					<figure class="product-style">
						<a href=""><img src="images/{{ $detail["image"] }}" alt="Books" class="produ</a>ct-item">
						<button class="add-to-cart"><a href="/detailProduct/{{ $detail["slug"] }}" style="color: #fff">Add to Cart</a></button>
						<figcaption>
							<h3>{{ $detail["title"] }}</h3>
							<p>{{ $detail["author"] }}</p>
							<div class="item-price">{{ $detail["price"] }}</div>
						</figcaption>
					</figure>
					@endforeach

			    </div><!--ft-books-slider-->				
			</div><!--grid-->

			<div class="btn-wrap align-right">
				<a href="#" class="btn-accent-arrow">View all products <i class="icon icon-ns-arrow-right"></i></a>
			</div>

			</div><!--inner-content-->
		</div>
	</div>
</section> --}}

<section id="best-selling" class="leaf-pattern-overlay">
	<div class="corner-pattern-overlay"></div>
	<div class="container">
		<div class="row">
			<div class="inner-content">
			<div class="product-element">
				<div class="grid">
					<figure class="products-thumb">
						<a href=""><img src="images/single-image.jpg" alt="book" class="single-image"></a>
					</figure>
					<div class="product-entry">
						<h2 class="section-title divider">Best Selling Book</h2>

						<div class="products-content">
							<div class="author-name">By Timbur Hood</div>
							<h3 class="item-title">Birds gonna be happy</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu feugiat amet, libero ipsum enim pharetra hac.</p>
							<div class="item-price">$ 45.00</div>
							<div class="btn-wrap">
								<a href="/shop-single" class="btn-accent-arrow">shop it now <i class="icon icon-ns-arrow-right"></i></a>
							</div>
						</div><!--description-->

					</div>
				</div><!--grid-->
			</div>
			</div><!--inner-content-->
		</div>
	</div>
</section>

<section id="popular-books" class="bookshelf">
	<div class="container">
	<div class="row">
		<div class="inner-content">

			<div class="section-header align-center">
				<div class="title">
					<span>Some quality items</span>
				</div>
				<h2 class="section-title">Popular Books</h2>
			</div>
   
			<ul class="tabs">
			  <li data-tab-target="#all-genre" class="active tab">All Genre</li>
			  <li data-tab-target="#business" class="tab">Business</li>
			  <li data-tab-target="#technology" class="tab">Technology</li>
			  <li data-tab-target="#romantic" class="tab">Romantic</li>
			  <li data-tab-target="#adventure" class="tab">Adventure</li>
			  <li data-tab-target="#fictional" class="tab">Fictional</li>
			</ul>

			<div class="tab-content">
			  <div id="all-genre" data-tab-content class="active" data-aos="fade-up">
			  	<div class="grid">

				  	<figure class="product-style">
						<a href="/book1"><img src="images/tab-item1.jpg" alt="Books" class="product-item"></a>
						{{-- <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button> --}}
						<figcaption>
							<h3>Portrait photography</h3>
							<p>Adam Silber</p>
							<div class="item-price">$ 40.00</div>
						</figcaption>
					</figure>

				  	<figure class="product-style">
						<a href=""><img src="images/tab-item2.jpg" alt="Books" class="product-item"></a>
						{{-- <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button> --}}
						<figcaption>
							<h3>Once upon a time</h3>
							<p>Klien Marry</p>
							<div class="item-price">$ 35.00</div>
						</figcaption>
					</figure>

				  	<figure class="product-style">
						<a href=""><img src="images/tab-item3.jpg" alt="Books" class="product-item"></a>
						{{-- <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button> --}}
						<figcaption>
							<h3>Tips of simple lifestyle</h3>
							<p>Bratt Smith</p>
							<div class="item-price">$ 40.00</div>
						</figcaption>
					</figure>

				  	<figure class="product-style">
						<a href=""><img src="images/tab-item4.jpg" alt="Books" class="product-item"></a>
						{{-- <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button> --}}
						<figcaption>
							<h3>Just felt from outside</h3>
							<p>Nicole Wilson</p>
							<div class="item-price">$ 40.00</div>
						</figcaption>
					</figure>

				  	<figure class="product-style">
						<a href=""><img src="images/tab-item5.jpg" alt="Books" class="product-item"></a>
						{{-- <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button> --}}
						<figcaption>
							<h3>Peaceful Enlightment</h3>
							<p>Marmik Lama</p>
							<div class="item-price">$ 40.00</div>
						</figcaption>
					</figure>

				  	<figure class="product-style">
						<a href=""><img src="images/tab-item6.jpg" alt="Books" class="product-item"></a>
						{{-- <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button> --}}
						<figcaption>
							<h3>Great travel at desert</h3>
							<p>Sanchit Howdy</p>
							<div class="item-price">$ 40.00</div>
						</figcaption>
					</figure>

				  	<figure class="product-style">
						<a href=""><img src="images/tab-item7.jpg" alt="Books" class="product-item"></a>
						{{-- <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button> --}}
						<figcaption>
							<h3>Life among the pirates</h3>
							<p>Armor Ramsey</p>
							<div class="item-price">$ 40.00</div>
						</figcaption>
					</figure>

				  	<figure class="product-style">
						<a href=""><img src="images/tab-item8.jpg" alt="Books" class="product-item"></a>
						{{-- <button type="button" class="add-to-cart" data-product-tile="add-to-cart" href="/shop-single">Add to Cart</button> --}}
						<figcaption>
							<h3>Simple way of piece life</h3>
							<p>Armor Ramsey</p>
							<div class="item-price">$ 40.00</div>
						</figcaption>
					</figure>

		    	 </div>

			  </div>
			  <div id="business" data-tab-content>
			  	<div class="grid">
				  	<figure class="product-style">
						<a href=""><img src="images/tab-item2.jpg" alt="Books" class="product-item"></a>
						{{-- <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button> --}}
						<figcaption>
							<h3>Peaceful Enlightment</h3>
							<p>Marmik Lama</p>
							<div class="item-price">$ 40.00</div>
						</figcaption>
					</figure>

				  	<figure class="product-style">
						<a href=""><img src="images/tab-item4.jpg" alt="Books" class="product-item"></a>
						{{-- <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button> --}}
						<figcaption>
							<h3>Great travel at desert</h3>
							<p>Sanchit Howdy</p>
							<div class="item-price">$ 40.00</div>
						</figcaption>
					</figure>

				  	<figure class="product-style">
						<a href=""><img src="images/tab-item6.jpg" alt="Books" class="product-item"></a>
						{{-- <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button> --}}
						<figcaption>
							<h3>Life among the pirates</h3>
							<p>Armor Ramsey</p>
							<div class="item-price">$ 40.00</div>
						</figcaption>
					</figure>

				  	<figure class="product-style">
						<a href=""><img src="images/tab-item8.jpg" alt="Books" class="product-item"></a>
						{{-- <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button> --}}
						<figcaption>
							<h3>Simple way of piece life</h3>
							<p>Armor Ramsey</p>
							<div class="item-price">$ 40.00</div>
						</figcaption>
					</figure>
		    	 </div>
			  </div>

			  <div id="technology" data-tab-content>
			  	<div class="grid">
				  	<figure class="product-style">
						<a href=""><img src="images/tab-item1.jpg" alt="Books" class="product-item"></a>
						{{-- <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button> --}}
						<figcaption>
							<h3>Peaceful Enlightment</h3>
							<p>Marmik Lama</p>
							<div class="item-price">$ 40.00</div>
						</figcaption>
					</figure>

				  	<figure class="product-style">
						<a href=""><img src="images/tab-item3.jpg" alt="Books" class="product-item"></a>
						{{-- <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button> --}}
						<figcaption>
							<h3>Great travel at desert</h3>
							<p>Sanchit Howdy</p>
							<div class="item-price">$ 40.00</div>
						</figcaption>
					</figure>

				  	<figure class="product-style">
						<a href=""><img src="images/tab-item5.jpg" alt="Books" class="product-item"></a>
						{{-- <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button> --}}
						<figcaption>
							<h3>Life among the pirates</h3>
							<p>Armor Ramsey</p>
							<div class="item-price">$ 40.00</div>
						</figcaption>
					</figure>

				  	<figure class="product-style">
						<a href=""><img src="images/tab-item7.jpg" alt="Books" class="product-item"></a>
						{{-- <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button> --}}
						<figcaption>
							<h3>Simple way of piece life</h3>
							<p>Armor Ramsey</p>
							<div class="item-price">$ 40.00</div>
						</figcaption>
					</figure>
		    	 </div>
			  </div>

			  <div id="romantic" data-tab-content>
			  	<div class="grid">
		    	  <figure class="product-style">
						<a href=""><img src="images/tab-item1.jpg" alt="Books" class="product-item"></a>
						{{-- <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button> --}}
						<figcaption>
							<h3>Peaceful Enlightment</h3>
							<p>Marmik Lama</p>
							<div class="item-price">$ 40.00</div>
						</figcaption>
					</figure>

				  	<figure class="product-style">
						<a href=""><img src="images/tab-item3.jpg" alt="Books" class="product-item"></a>
						{{-- <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button> --}}
						<figcaption>
							<h3>Great travel at desert</h3>
							<p>Sanchit Howdy</p>
							<div class="item-price">$ 40.00</div>
						</figcaption>
					</figure>

				  	<figure class="product-style">
						<a href=""><img src="images/tab-item5.jpg" alt="Books" class="product-item"></a>
						{{-- <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button> --}}
						<figcaption>
							<h3>Life among the pirates</h3>
							<p>Armor Ramsey</p>
							<div class="item-price">$ 40.00</div>
						</figcaption>
					</figure>

				  	<figure class="product-style">
						<a href=""><img src="images/tab-item7.jpg" alt="Books" class="product-item"></a>
						{{-- <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button> --}}
						<figcaption>
							<h3>Simple way of piece life</h3>
							<p>Armor Ramsey</p>
							<div class="item-price">$ 40.00</div>
						</figcaption>
					</figure>
		    	 </div>
			  </div>

			  <div id="adventure" data-tab-content>
			  	<div class="grid">
				  	<figure class="product-style">
						<a href=""><img src="images/tab-item5.jpg" alt="Books" class="product-item"></a>
						{{-- <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button> --}}
						<figcaption>
							<h3>Life among the pirates</h3>
							<p>Armor Ramsey</p>
							<div class="item-price">$ 40.00</div>
						</figcaption>
					</figure>

				  	<figure class="product-style">
						<a href=""><img src="images/tab-item7.jpg" alt="Books" class="product-item"></a>
						{{-- <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button> --}}
						<figcaption>
							<h3>Simple way of piece life</h3>
							<p>Armor Ramsey</p>
							<div class="item-price">$ 40.00</div>
						</figcaption>
					</figure>
		    	 </div>
			  </div>

			  <div id="fictional" data-tab-content>
			  	<div class="grid">
				  	<figure class="product-style">
						<a href=""><img src="images/tab-item5.jpg" alt="Books" class="product-item"></a>
						{{-- <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button> --}}
						<figcaption>
							<h3>Life among the pirates</h3>
							<p>Armor Ramsey</p>
							<div class="item-price">$ 40.00</div>
						</figcaption>
					</figure>

				  	<figure class="product-style">
						<a href=""><img src="images/tab-item7.jpg" alt="Books" class="product-item"></a>
						{{-- <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button> --}}
						<figcaption>
							<h3>Simple way of piece life</h3>
							<p>Armor Ramsey</p>
							<div class="item-price">$ 40.00</div>
						</figcaption>
					</figure>
		    	 </div>
			  </div>

			</div>

		</div><!--inner-tabs-->
	</div>
</section>

<section id="quotation" class="align-center">
	<div class="inner-content">
		<h2 class="section-title divider">Quote of the day</h2>
		<blockquote data-aos="fade-up">
			<q>“The more that you read, the more things you will know. The more that you learn, the more places you'll go.”</q>
			<div class="author-name">Dr. Seuss</div>			
		</blockquote>
	</div>		
</section>

{{-- <footer id="footer">
	<div class="container">
		<div class="row">
			<div class="inner-content">				
				<div class="footer-menu-list">
					<div class="grid">
						<div class="footer-menu">
							<h5>About Us</h5>
							<ul class="menu-list">
								<li class="menu-item">
									<a href="#">vision</a>
								</li>
								<li class="menu-item">
									<a href="#">articles </a>
								</li>
								<li class="menu-item">
									<a href="#">careers</a>
								</li>
								<li class="menu-item">
									<a href="#">service terms</a>
								</li>
								<li class="menu-item">
									<a href="#">donate</a>
								</li>
							</ul>
						</div>

						<div class="footer-menu">
							<h5>Discover</h5>
							<ul class="menu-list">
								<li class="menu-item">
									<a href="#">Home</a>
								</li>
								<li class="menu-item">
									<a href="#">Books</a>
								</li>
								<li class="menu-item">
									<a href="#">Authors</a>
								</li>
								<li class="menu-item">
									<a href="#">Subjects</a>
								</li>
								<li class="menu-item">
									<a href="#">Advanced Search</a>
								</li>
							</ul>
						</div>

						<div class="footer-menu">
							<h5>My account</h5>
							<ul class="menu-list">
								<li class="menu-item">
									<a href="#">Sign In</a>
								</li>
								<li class="menu-item">
									<a href="#">View Cart</a>
								</li>
								<li class="menu-item">
									<a href="#">My Wishtlist</a>
								</li>
								<li class="menu-item">
									<a href="#">Track My Order</a>
								</li>
							</ul>
						</div>

						<div class="footer-menu">
							<h5>Help</h5>
							<ul class="menu-list">
								<li class="menu-item">
									<a href="#">Help center</a>
								</li>
								<li class="menu-item">
									<a href="#">Report a problem</a>
								</li>
								<li class="menu-item">
									<a href="#">Suggesting edits</a>
								</li>
								<li class="menu-item">
									<a href="#">Contact us</a>
								</li>
							</ul>
						</div>

					</div>
				</div>
			</div><!--inner-content-->
		</div>
	</div>
</footer> --}}

<div id="footer-bottom">
	<div class="container">
		<div class="row">
			<div class="inner-content">
				<div class="copyright">
					{{-- <div class="grid">
						<p>© 2021 All rights reserved. A free Template by <a href="https://www.templatesjungle.com/">Templates Jungle</a></p>
					</div> --}}
				</div><!--grid-->
			</div><!--footer-bottom-content-->			
		</div>
	</div>
</div>

<!-- </div>   -->

	<script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/slideNav.min.js"></script>
	<script src="js/slideNav.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/script.js"></script>	

</body>
</html>	