<!-- header -->
<?php get_header(); ?>
<!-- // end header -->

	<!-- Main -->
		<div id="main">
			<!-- Post -->
			<!-- wordpress loop here -->
				<?php get_template_part('templates/pages', 'default') ?>
			<!-- end wordpress loop -->
		</div> <!-- end main -->

	<!-- Sidebar -->
	<?php get_sidebar(); ?>
	<!-- // Sidebar -->	

<!-- footer code -->
<?php get_footer(); ?>
<!-- footer code -->