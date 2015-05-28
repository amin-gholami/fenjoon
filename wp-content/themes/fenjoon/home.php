<?php get_header();?>
<main>
	<div class="wrapper"><?php
	$prefix_posts = fjn_template_info();
	if ($prefix_posts->have_posts()){?>

		<section><?php
		while ($prefix_posts->have_posts()){
			$prefix_posts->the_post(); 
			if( pa_in_taxonomy( 'homeinfo_type', 'about' ) ){?>
			<article>
				<h2><?php the_title(); ?></h2>
				<p> <?php the_content(); ?></p>
			</article><?php
			}
		}?>
		</section><?php rewind_posts();?>

		<section><?php
		while ($prefix_posts->have_posts()){
			$prefix_posts->the_post(); 
			if ( pa_in_taxonomy( 'homeinfo_type', 'Our deference from the competitors' )){?>
				<article>
					<h2><?php the_title(); ?></h2>
					<p><?php the_content(); ?></p>
				</article><?php
			}
		}?>
		</section><?php rewind_posts(); ?>

		<section>
			<h3> Our works in Progress </h3>
			<section>
				<article>
					<img src="" height="100" width="100">
					<p> Content of first work </p>
				</article>
			</section>
			<section>
				<article>
					<img src="" height="100" width="100">
					<p> Content of second work </p>
				</article>			
			</section>
			<section>
				<article>
					<img src="" height="100" width="100">
					<p> Content of third work </p>
				</article>			
			</section>
		</section>
		
		<section><?php	
		while ($prefix_posts->have_posts()){
			$prefix_posts->the_post(); 
			if (pa_in_taxonomy('homeinfo_type', 'services we supply')) {?>
				<article>
					<h3><?php the_title(); ?></h3>
					<img src="service3.gif" height="150" width="150">
					<p> <?php the_content(); ?></p>
					<a href="">Link to submit new Order</a>
				</article><?php
			}
		}?>
		</section><?php rewind_posts();?>

		<section><?php	
		while ($prefix_posts->have_posts()){
			$prefix_posts->the_post(); 
			if( pa_in_taxonomy( 'homeinfo_type', 'Services we dont supply' ) ){?>
				<article>
					<h2><?php the_title(); ?></h2>
					<p> <?php the_content(); ?></p>
				</article><?php
			}
		}?>
		</section><?php rewind_posts(); ?>
		
		<h2>statistics of fenjoon group<h2>			

		<section>
		<h2>templates</h2>
			<section>
				<article>
					<img src="" height="50" width="50">
					<p>content</p>
				</article>
			</section>
			<section>
				<article>
					<img src="" height="50" width="50">
					<p> content </p>
				</article>
			</section>
			<section>
				<article>
					<img src="" height="50" width="50">
					<p> content  </p>
				</article>
			</section>
		</section>
	
		<section>			
			<h2>customers feedback<h2><?php
			while ($prefix_posts->have_posts()){
				$prefix_posts->the_post(); 
				if (pa_in_taxonomy('homeinfo_type', 'public responsible')) {?>
				<section>
					<article>
						<h2><?php the_title(); ?></h2>
						<p> <?php the_content(); ?></p>
					</article>
				</section><?php
				}
			}?>
		</section><?php
	}?>
	</div>
</main>
<?php rewind_posts();
get_footer();
?>