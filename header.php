<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

	<title><?php bloginfo('name'); ?></title>
	
</head>

<body>

	<div id="container">

		<div id="header">
			<div id="logo">
				<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
				<h2><?php bloginfo('description'); ?></h2>
			</div>
			
			<?php wp_nav_menu( array( 'menu_id' => 'bottomnav', 'theme_location' => 'primary-menu' )); ?>
			
		</div> <!-- End of Header -->


