<?php
include 'header.php';
?>



<!--================================
=            Page Title            =
=================================-->

<section class="page-title bg-title overlay-dark">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<div class="title">
					<h3>Our Gallery</h3>
				</div>
				<ol class="breadcrumb p-0 m-0">
				  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
				  <li class="breadcrumb-item active">Our Gallery</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<!--====  End of Page Title  ====-->


<!--=============================
=            Gallery            =
==============================-->

<section class="section gallery">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="controls">
		            <button type="button" class="control mixitup-control-active" data-filter="all">All</button>
		            <button type="button" class="control" data-filter=".conference">Conference</button>
		            <button type="button" class="control" data-filter=".meeting">Meeting</button>
		            <button type="button" class="control" data-filter=".events">Events</button>
		            <button type="button" class="control" data-filter=".party">Party</button>
		            <button type="button" class="control" data-filter=".concert">Concert</button>
		        </div>
		        <div class="gallery-wrapper">
		        	<div class="gallery-item mix meeting">
		        		<div class="image-block">
			        		<div class="image">
			        			<img src="images/gallery/gallery-one.jpg" alt="gallery-image" class="img-fluid">
			        			<div class="primary-overlay">
			        				<a class="image-popup" data-effect="mfp-with-zoom" href="images/gallery/gallery-popup-one.jpg"><i class="fa fa-picture-o"></i></a>
			        			</div>
			        		</div>
		        		</div>
		        	</div>
		        	<div class="gallery-item mix party events">
		        		<div class="image-block">
			        		<div class="image">
			        			<img src="images/gallery/gallery-two.jpg" alt="gallery-image" class="img-fluid">
			        			<div class="primary-overlay">
			        				<a class="image-popup" data-effect="mfp-with-zoom" href="images/gallery/gallery-popup-two.jpg"><i class="fa fa-picture-o"></i></a>
			        			</div>
			        		</div>
		        		</div>
		        	</div>
		        	<div class="gallery-item mix meeting party">
		        		<div class="image-block">
			        		<div class="image">
			        			<img src="images/gallery/gallery-three.jpg" alt="gallery-image" class="img-fluid">
			        			<div class="primary-overlay">
			        				<a class="image-popup" data-effect="mfp-with-zoom" href="images/gallery/gallery-popup-three.jpg"><i class="fa fa-picture-o"></i></a>
			        			</div>
			        		</div>
		        		</div>
		        	</div>
		        	<div class="gallery-item mix meeting concert">
		        		<div class="image-block">
			        		<div class="image">
			        			<img src="images/gallery/gallery-four.jpg" alt="gallery-image" class="img-fluid">
			        			<div class="primary-overlay">
			        				<a class="image-popup" data-effect="mfp-with-zoom" href="images/gallery/gallery-popup-four.jpg"><i class="fa fa-picture-o"></i></a>
			        			</div>
			        		</div>
		        		</div>
		        	</div>
		        	<div class="gallery-item mix concert party">
		        		<div class="image-block">
			        		<div class="image">
			        			<img src="images/gallery/gallery-five.jpg" alt="gallery-image" class="img-fluid">
			        			<div class="primary-overlay">
			        				<a class="image-popup" data-effect="mfp-with-zoom" href="images/gallery/gallery-popup-five.jpg"><i class="fa fa-picture-o"></i></a>
			        			</div>
			        		</div>
		        		</div>
		        	</div>
		        	<div class="gallery-item mix events conference">
		        		<div class="image-block">
			        		<div class="image">
			        			<img src="images/gallery/gallery-six.jpg" alt="gallery-image" class="img-fluid">
			        			<div class="primary-overlay">
			        				<a class="image-popup" data-effect="mfp-with-zoom" href="images/gallery/gallery-popup-six.jpg"><i class="fa fa-picture-o"></i></a>
			        			</div>
			        		</div>
		        		</div>
		        	</div>
		        </div>
			</div>
		</div>
	</div>
</section>

<!--====  End of Gallery  ====-->

<!--==============================================
=            Call to Action Subscribe            =
===============================================-->

<section class="cta-subscribe bg-subscribe overlay-dark">
	<div class="container">
		<div class="row">
			<div class="col-md-6 mr-auto">
				<!-- Subscribe Content -->
				<div class="content">
					<h3>Subscribe to Our <span class="alternate">Newsletter</span></h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusm tempor</p>
				</div>
			</div>
			<div class="col-md-6 ml-auto align-self-center">
				<!-- Subscription form -->
				<form action="#" class="row">
					<div class="col-lg-8 col-md-12">
						<input type="email" class="form-control main white mb-lg-0" placeholder="Email">
					</div>
					<div class="col-lg-4 col-md-12">
						<div class="subscribe-button">
							<button class="btn btn-main-md">Subscribe</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<!--====  End of Call to Action Subscribe  ====-->

<!--================================
=            Google Map            =
=================================-->

<section class="map">
	<!-- Google Map -->
	<div id="map"></div>
	<div class="address-block">
		<h4>Docklands Convention</h4>
		<ul class="address-list p-0 m-0">
			<li><i class="fa fa-home"></i><span>1201 Park Street, Fifth Avenue, <br>Dhanmondy, Dhaka.</span></li>
			<li><i class="fa fa-phone"></i><span>[88] 657 524 332</span></li>
		</ul>
		<a href="#" class="btn btn-white-md">Get Direction</a>
	</div>
</section>

<!--====  End of Google Map  ====-->

<?php
include 'footer.php';
?>