<footer class="pageFooter">
				<p class="powerdByText">This site is powered by Wordpress.</p>
				<h2 class="footerAuthorName">Santhanam Elumalai</h2>
				<p class="footerAuthorDescription">
					Software Engineer, Active learner and tech blogger.
				</p>
				<nav class="footerNavigation">
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
				</nav>
			</footer>
		</div>
	</body>
</html>
