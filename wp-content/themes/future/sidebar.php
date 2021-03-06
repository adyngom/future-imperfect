<section id="sidebar">

	<!-- Intro -->
		<section id="intro">
			<a href="/" class="logo"><img src="<?php future_custom_logo(true); ?>" alt="<?php echo bloginfo('name') . ' | ' . bloginfo('description'); ?>" itemprop="logo" /></a>
			<header>
				<h2><?php bloginfo('name'); ?></h2>
				<p><?php bloginfo('description'); ?></p>
			</header>
		</section>

	<!-- Mini Posts -->
		<?php get_sidebar('popular'); ?>
	<!--  End Mini Posts -->
	<!-- Posts List -->
		<section>
			<ul class="posts">
				<li>
					<article>
						<header>
							<h3><a href="#">Lorem ipsum fermentum ut nisl vitae</a></h3>
							<time class="published" datetime="2015-10-20">October 20, 2015</time>
						</header>
						<a href="#" class="image"><img src="<?php echo get_template_directory_uri();?>/images/pic08.jpg" alt="" /></a>
					</article>
				</li>
				<li>
					<article>
						<header>
							<h3><a href="#">Convallis maximus nisl mattis nunc id lorem</a></h3>
							<time class="published" datetime="2015-10-15">October 15, 2015</time>
						</header>
						<a href="#" class="image"><img src="<?php echo get_template_directory_uri();?>/images/pic09.jpg" alt="" /></a>
					</article>
				</li>
				<li>
					<article>
						<header>
							<h3><a href="#">Euismod amet placerat vivamus porttitor</a></h3>
							<time class="published" datetime="2015-10-10">October 10, 2015</time>
						</header>
						<a href="#" class="image"><img src="<?php echo get_template_directory_uri();?>/images/pic10.jpg" alt="" /></a>
					</article>
				</li>
				<li>
					<article>
						<header>
							<h3><a href="#">Magna enim accumsan tortor cursus ultricies</a></h3>
							<time class="published" datetime="2015-10-08">October 8, 2015</time>
						</header>
						<a href="#" class="image"><img src="<?php echo get_template_directory_uri();?>/images/pic11.jpg" alt="" /></a>
					</article>
				</li>
				<li>
					<article>
						<header>
							<h3><a href="#">Congue ullam corper lorem ipsum dolor</a></h3>
							<time class="published" datetime="2015-10-06">October 7, 2015</time>
						</header>
						<a href="#" class="image"><img src="<?php echo get_template_directory_uri();?>/images/pic12.jpg" alt="" /></a>
					</article>
				</li>
			</ul>
		</section>

	<!-- About -->
		<section class="blurb">
			<h2>About</h2>
			<p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod amet placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at phasellus sed ultricies.</p>
			<ul class="actions">
				<li><a href="#" class="button">Learn More</a></li>
			</ul>
		</section>

	<!-- Footer -->
		<section id="footer">
			<ul class="icons">
				<li><a href="#" class="fa-twitter"><span class="label">Twitter</span></a></li>
				<li><a href="#" class="fa-facebook"><span class="label">Facebook</span></a></li>
				<li><a href="#" class="fa-instagram"><span class="label">Instagram</span></a></li>
				<li><a href="#" class="fa-rss"><span class="label">RSS</span></a></li>
				<li><a href="#" class="fa-envelope"><span class="label">Email</span></a></li>
			</ul>
			<p class="copyright">&copy; Untitled. Design: <a href="http://html5up.net">HTML5 UP</a>. Images: <a href="http://unsplash.com">Unsplash</a>.</p>
		</section>

</section>