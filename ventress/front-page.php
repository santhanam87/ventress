
<?php get_header() ?>
<div class="pageContainer">
	<blockquote class="quotedText">
		<p>
			TODO: Need to add some valuable information for the control-group.
		</p>
	</blockquote>
	<main role="main" class="pageBody">
		<div class="pageArticles">
			<h2 class="sectionTitle">Recent Articles</h2>
			<!-- <article class="articleContainer">
				<div class="articleMetaInfo">
					<div class="authorInfo">
						<h1 class="authorName"><a href="#">Santhanam Elumalai</a></h1>
						<time datetime="2018-07-07">July 7th 2018</time>
					</div>
					<nav class="tagList">
						<ul>
							<li><a href="#">UX</a></li>
							<li><a href="#">Design</a></li>
							<li><a href="#">Guides</a></li>
						</ul>
					</nav>
				</div>
				<h3 class="articleHeader">
					<a href="#"
						>Lorem Ipsum has been the industry&#x27;s standard.</a
					>
				</h3>
				<div class="articleContent">
					<p>
						Lorem Ipsum has been the industry&#x27;s standard dummy text
						ever since the 1500s, when an unknown printer took a galley of
						type and scrambled it to make a type specimen book. It has
						survived not only five centuries,
					</p>
					<h3>Lorem Ipsum</h3>
					<p>
						Lorem Ipsum has been the industry&#x27;s standard dummy text
						ever since the 1500s, when an unknown printer took a galley of
						type and scrambled it to make a type specimen book. It has
						survived not only five centuries,
					</p>
				</div>
			</article> -->
			<?php
				if(have_posts()){
					while(have_posts()){
						the_post();
						the_content();
					}	
				}
			?>
			<!-- <article class="articleContainer">
				<h3 class="articleHeader">
					<a href="#"
						>Lorem Ipsum has been the industry&#x27;s standard.</a
					>
				</h3>
				<div class="articleContent">
					<p>
						Lorem Ipsum has been the industry&#x27;s standard dummy text
						ever since the 1500s, when an unknown printer took a galley of
						type and scrambled it to make a type specimen book. It has
						survived not only five centuries,
					</p>
				</div>
				<div class="articleFooter">
					<time datetime="2018-07-07">July 7th 2018</time>
					<nav class="tagNavigation">
						<ul>
							<li><a href="#">UX</a></li>
							<li><a href="#">Design</a></li>
							<li><a href="#">Guides</a></li>
						</ul>
					</nav>
				</div>
			</article>
			<article class="articleContainer">
				<h3 class="articleHeader">
					<a href="#"
						>Lorem Ipsum has been the industry&#x27;s standard.</a
					>
				</h3>
				<div class="articleContent">
					<p>
						Lorem Ipsum has been the industry&#x27;s standard dummy text
						ever since the 1500s, when an unknown printer took a galley of
						type and scrambled it to make a type specimen book. It has
						survived not only five centuries,
					</p>
				</div>
				<div class="articleFooter">
					<time datetime="2018-07-07">July 7th 2018</time>
					<nav class="tagNavigation">
						<ul>
							<li><a href="#">UX</a></li>
							<li><a href="#">Design</a></li>
							<li><a href="#">Guides</a></li>
						</ul>
					</nav>
				</div>
			</article> -->
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
