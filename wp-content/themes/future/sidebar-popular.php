<?php 
	$args = array(
		'tag' => 'popular',
		'posts_per_page' => 4
	);

	$popQuery = new WP_Query($args);
?>
<?php if ( $popQuery->have_posts()) : ?>
		<section>
			<div class="mini-posts">
					<?php while ( $popQuery->have_posts() ) : $popQuery->the_post(); ?>
				<!-- Mini Post -->
					<article class="mini-post">
						<header>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<time class="published" datetime="2015-10-20"><?php echo get_the_date(); ?></time>
							<a href="#" class="author"><?php echo get_avatar( get_the_author_meta( 'user_email' ), 36 ); ?></a>
						</header>
						<a href="#" class="image"><?php the_post_thumbnail(array('350', '175')); ?></a>
					</article>	
					<?php endwhile; ?>		
			</div>
		</section>
<?php 
	endif;
	wp_reset_postdata();
?>