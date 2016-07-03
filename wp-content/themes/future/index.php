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
					<li><a href="" class="disabled button big previous">Previous Page</a></li>
					<li><a href="#" class="button big next">Next Page</a></li>
				</ul>

		</div> <!-- end main -->

	<!-- Sidebar -->
	<?php get_template_part('sidebar'); ?>
	<!-- // Sidebar -->	

<!-- footer code -->
<?php get_footer(); ?>
<!-- footer code -->