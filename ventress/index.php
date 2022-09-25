<?php get_header() ?>
<div class="pageContainer">
	<main role="main" class="pageBody">
		<div class="pageArticles">
			<?php
				if(have_posts()){
					while(have_posts()){
						the_post();
						get_template_part('template-parts/content', 'archive');
					}	
				}
			?>
            <?php the_posts_pagination() ?>
		</div>

		<div class="pageCategories">
			<h2 class="sectionTitle">Categories</h2>
			<nav class="categoryNavigation">
				<?php 
				wp_nav_menu(
					array(
						'menu'=>'category',
						'contianer'=>'',
						'theme_location'=>'category',
						'item_wrap' => '<ul>%3$s</ul>'
					)
				);
				?>
			</nav>
		</div>
	</main>
</div>			
<?php get_footer() ?>

