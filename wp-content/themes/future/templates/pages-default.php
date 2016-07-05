<?php if (have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
		<article class="post">
			<header>
				<div class="title">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<p><?php the_subtitle(); ?></p>
				</div>
				<div class="meta">
					<time class="published" datetime="2015-11-01"><?php echo get_the_date(); ?></time>
					<a href="#" class="author">
					<span class="name">
						<?php the_author_meta('display_name');?>
					</span>
					<?php echo get_avatar( get_the_author_meta( 'user_email' ), 36 ); ?>
					</a>
				</div>
			</header>

			<p>
				<?php the_content(); ?>
			</p>

		</article>
	<?php endwhile; ?>
<?php endif; ?>