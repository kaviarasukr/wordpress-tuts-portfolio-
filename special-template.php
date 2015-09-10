<?php 
/*
Template Name: Special Layout
*/

get_header();

if (have_posts()) :
	while (have_posts()) : the_post(); ?>
	<article class="post page">
		<h2><?php the_title(); ?></h2>
		<!-- info-box -->
		<div class="info-box">
			<h3>Disclaimer Title</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim venia.</p>
		</div><!-- /info-box -->
		<?php the_content(); ?>
	</article>

	<?php endwhile;

	else:
		echo '<p> NO content found </p>';
	
	endif;
		# code...

get_footer();
?> 