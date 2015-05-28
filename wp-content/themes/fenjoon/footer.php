	<footer>
		<div class="wrapper">

			<style>
			#footer{
			background-color: green;
			}
			</style>

			<?php $prefix_posts = new WP_Query(
				array(
					'post_type' => 'homeinfo',
					'tax_query' => array(
					'relation' => 'AND',
					array(
						'homeinfo_type' => 'contact',
					),
					array(
						'homeinfo_type' => 'our services',
					),
					),
				)
			);?>

			<section>
				<h1>fenjoon</h1>
					<a href=""><h3> fenjoon </h3></a>
					<a href=""><h3>Our Competitors</h3></a>
					<a href=""><h3>Work samples</h3></a>
					<a href=""><h3>members</h3></a>
					<h2>Slogan</h2>
					<h3>Follow us on social Networks</h3>
					<a href="facebook.com/fenjoongp"><h4>Facebook</h4></a>
					<a href="instagram.com/fenjoongp"><h4>Instagram</h4></a>
			</section>

			<?php if ($prefix_posts->have_posts()){	
			while ($prefix_posts->have_posts()){
			$prefix_posts->the_post(); 
			if (pa_in_taxonomy('homeinfo_type', 'contact')) {;
			?>

			<section>
				<article>
					<h2><?php the_title(); ?></h2>
					<p> <?php the_content(); ?></p>
					<?php }
					}}?>
				</article>
			</section>
		
			<?php rewind_posts(); 
				if ($prefix_posts->have_posts()){	
				while ($prefix_posts->have_posts()){
				$prefix_posts->the_post(); 
				if (pa_in_taxonomy('homeinfo_type', 'our services')) {;
				?>

			<section>
				<article>
					<h2><?php the_title(); ?></h2>
					<p> <?php the_content(); ?></p>
					<?php }
					}}?>
				</article>
			</section>
			
		</div>
	</footer>
</body>
</html>
