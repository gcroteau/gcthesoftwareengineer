<?php
/* Main Template File*/
    get_header();
?>

<div class="main-content-width-wrapper">
        <div class="index-entry">
            <main class="main-content">
                <?php
                    // Start the loop
                    if (have_posts()) :
                        while (have_posts()) : the_post();
                            get_template_part('content', get_post_format());
                       endwhile;
                   endif;
               ?> 
        </main>
    </div>
</div>
    
<?php 
    get_sidebar();
    get_footer();
?>