<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<!--<meta name="description" content="Mew&amp;I">
<meta name="author" content="Mew&amp;I">
<meta name="format-detection" content="email=no,telephone=no,address=no">-->
<title><?php if( !is_home() ){ wp_title(' - ', true, 'right'); }bloginfo('name'); ?></title>
<link href="<?php echo get_template_directory_uri(); ?>/css/normalize.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/style2.css" rel="stylesheet">
<!--<link rel="icon" href="images/icon.png" sizes="16x16" type="image/png">-->
<!--<link rel="apple-touch-icon" sizes="180x180" href="images/icon180x180.png">-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<?php
	wp_enqueue_script('jquery');
	wp_enqueue_script('script', get_template_directory_uri(). '/js/script.js');
	wp_head();
?>
</head>
	
<body id="top" <?php body_class(); ?>>
<div id="wrap">
<header>
	
	<?php if (is_home()){?>
	<div class="homeH">
	<?php }else{?>
	<div class="fixedH">
	<?php }
	?>
		<input id="drawer-checkbox" type="checkbox">
		<label id="drawer-icon" for="drawer-checkbox"><span></span></label>
		<label id="drawer-close" for="drawer-checkbox"></label>
		<div id="drawer-content"></div>
		<div class="logo">
			<a href="<?php echo home_url(); ?>">
				<h1>
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Mew and I">
				</h1>
			</a>
		</div>
		<nav id="gNavi">
			<div class="drawerlogo">
			<a href="<?php echo home_url(); ?>">
				<p>
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Mew and I">
				</p>
			</a>
			</div>
			<?php
			$args = array(
				'menu' => 'global-navigation',
				'container' => false,
				);
			wp_nav_menu($args);
			?>
		</nav>
		<h2>
			<span class="living">猫と暮らす</span>
			<span class="adoption">の里親になる</span>
		</h2>
	</div>
</header>
<main>