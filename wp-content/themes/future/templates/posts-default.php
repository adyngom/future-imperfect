<?php if (have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
		<article class="post">
			<header>
				<div class="title">
					<h2><a href="#"><?php the_title(); ?></a></h2>
					<p><?php the_subtitle(); ?></p>
				</div>
				<div class="meta">
					<time class="published" datetime="2015-11-01"><?php the_date(); ?></time>
					<a href="#" class="author">
					<span class="name">
						<?php the_author_meta('display_name');?>
					</span>
					<?php echo get_avatar( get_the_author_meta( 'user_email' ), 36 ); ?>
					</a>
				</div>
			</header>
			<?php if( has_post_thumbnail()) : ?>
			<a href="<?php the_permalink(); ?>" class="image featured">
				<?php the_post_thumbnail(); ?>
			</a>
		<?php endif; ?>
			<p>
				<?php the_excerpt(); ?>
			</p>
			<footer>
				<ul class="actions">
					<li><a href="<?php the_permalink(); ?>" class="button big">Continue Reading</a></li>
				</ul>
				<ul class="stats">
					<?php $categories = get_the_category();?>
					<li><a href="<?php echo get_category_link($categories[0]->term_id); ?>"><?php echo $categories[0]->name; ?></a></li>
					<li><a href="#" class="icon fa-heart">28</a></li>
					<li><a href="#" class="icon fa-comment">128</a></li>
				</ul>
			</footer>
		</article>
	<?php endwhile; ?>
<?php endif; ?>