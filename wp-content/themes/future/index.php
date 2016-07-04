<!-- header -->
<?php get_header(); ?>
<!-- // end header -->

	<!-- Main -->
		<div id="main">

			<!-- Post -->
			<!-- wordpress loop here -->
				<?php get_template_part('templates/posts', 'default') ?>
			<!-- end wordpress loop -->

			<!-- Pagination -->
				<ul class="actions pagination">
					<li>
						<?php next_posts_link( 'Previous Page' ); ?>
					</li>
					<li>
						<?php previous_posts_link( 'Next Page' ); ?>
					</li>
				</ul>
		</div> <!-- end main -->

	<!-- Sidebar -->
	<?php get_sidebar(); ?>
	<!-- // Sidebar -->	

<!-- footer code -->
<?php get_footer(); ?>
<!-- footer code -->