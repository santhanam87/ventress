<!-- Individual blog post template -->

<?php get_header() ?>
<div class="pageContainer">
	<main role="main" class="pageBody">
		<div class="pageArticles">
			<?php
				if(have_posts()){
					while(have_posts()){
						the_post();
						get_template_part('template-parts/content', 'article');
					}	
				}
			?>
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
			<h2 class="sectionTitle">Search</h2>
			<div class="searchSection"><?php get_search_form(); ?></div>
		</div>
	</main>
</div>			
<?php get_footer() ?>
