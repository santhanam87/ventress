<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
	</head>
	<body>
		<div id="root">
			<div class="topBand"></div>
			<header class="pageHeader">
				<h1 class="siteTitle"><a href="<?php echo get_home_url();?>"><?php echo get_bloginfo('name'); ?></a></h1>
				<div class="searchSection"><?php get_search_form(); ?></div>
				<nav class="primaryNavigation">
                    <?php
                        wp_nav_menu(
                            array(
                                'menu'=>'primary',
                                'contianer'=>'',
                                'theme_location'=>'primary',
                                'item_wrap' => '<ul>%3$s</ul>'
                            )
                            );
                    ?>
					<!-- <ul>
						<li><a href="#">About Me</a></li>
						<li><a href="#">Codepen</a></li>
						<li><a href="#">Github</a></li>
					</ul> -->
				</nav>
			</header>
