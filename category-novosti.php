<?php

/*
* Template Name: Галерея
*/

get_header(); ?>

<div id="wrapper">
	<section id="inner-headline">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2 class="pageTitle">Portfolio</h2>
				</div>
			</div>
		</div>
	</section>
	<section id="content">
		<div class="container content">
			<div class="row">
				<div class="col-md-12">
					<div class="about-logo">
						<h3>Our <span class="color">Gallery</span></h3>
						<p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas</p>
						<p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas</p>
					</div>
				</div>
			</div>

		</div>
	</section>
	<!-- Start Gallery 1-2 -->
	<section id="gallery-1" class="content-block section-wrapper gallery-1">
		<div class="container">

			<div class="editContent">
				<ul class="filter">
					<li class="HillSide"><a href="#" data-filter="*">All</a></li>
					<li><a class="waves-effect waves-dark" href="#" data-filter=".artwork">Artwork</a></li>
					<li><a class="waves-effect waves-dark" href="#" data-filter=".creative">Creative</a></li>
					<li><a class="waves-effect waves-dark" href="#" data-filter=".nature">Nature</a></li>
					<li><a class="waves-effect waves-dark" href="#" data-filter=".outside">Outside</a></li>
					<li><a class="waves-effect waves-dark" href="#" data-filter=".photography">Photography</a></li>
				</ul>
			</div>
			<!-- /.gallery-filter -->

			<div class="row">
				<div id="isotope-gallery-container">
					<?php
					// print_r (url_to_postid('http://localhost/lab8/wp-admin/edit.php'));
					// echo do_shortcode('[gallery ids="108,107,106,105,104,103"]');
					?>

				</div>
				<!-- /.isotope-gallery-container -->
			</div>
			<!-- /.row -->
			<!-- /.container -->
		</div>
	</section>
	<!--// End Gallery 1-2 -->
</div>

<?php get_footer(); ?>