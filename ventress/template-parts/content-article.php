<article class="articleContainer">
    <div class="articleMetaInfo">
        <div class="authorInfo">
            <h1 class="authorName">
            <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" title="<?php echo esc_attr( get_the_author() ); ?>"><?php the_author(); ?></a>
            </h1>
            <time datetime="2018-07-07"><?php the_date(); ?></time>
        </div>
        <nav class="tagList">
            <ul>
                <?php the_tags('<li>', '</li><li>', '</li>'); ?>
            </ul>
        </nav>
    </div>
    <h3 class="articleHeader">
        <?php the_title(); ?>
    </h3>
    <div class="articleContent">
        <?php the_content(); ?>
    </div>
</article>
