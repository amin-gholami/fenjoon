<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="author" content="fenjoon.net">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	<meta name="format-detection" content="telephone=no">
	<title><?php bloginfo('name'); ?></title>
	<link rel="shortcut icon" href="<?php echo THEME_URI; ?>/favicon.ico" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<?php wp_head(); ?>
</head>
<body>
<header>
	<div class="wrapper">
		<?php 
		$workforce_values = fjn_editors_by_free_time( );
	//	var_dump($workforce_values);
		?>
		
		<section>
			<img src="" height="100" width="100">
			<p> logo </p>
		</section>

		<section>
			<form action="action_page.php">
				Search:
				<input type="search" name="search">
				<input type="submit">
			</form>
		</section>
		
		<h1> Title Of the Site </h1>
	
		<nav>
			<a href="/m1/">M1</a> |
			<a href="/m2/">M2</a> |
			<a href="/m3/">M3</a> |
			<a href="/m4/">M4</a>
		</nav>
	</div>
</header>