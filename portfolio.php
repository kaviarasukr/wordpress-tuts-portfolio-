<?php 

get_header();

if (have_posts()) :
	while (have_posts()) : the_post(); ?>
	<article class="post page">
		<h2><?php the_title(); ?></h2>
		<h5><?php bloginfo('description'); ?><?php if (is_page('portfolio')) { ?>
				- Thanks for viewing our work
			<?php }?></h5></h5>
		<?php the_content(); ?>
	</article>

	<?php endwhile;

	else:
		echo '<p> NO content found </p>';
	
	endif;
		# code...

get_footer();
?> 