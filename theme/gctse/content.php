<!-- Content of a post -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header>
        <h2><?php the_title(); ?></h2>
    </header>

    <div>
        <?php the_content(); ?>
    </div>
</article>