<!--Sida för kategorin "om oss"-->


<?php
get_header();
?>
<div class="container">
    <div class="book-now">
    <a href="<?php echo get_page_link(27) ?>"> BOKA HÄR</a>
    </div>
    <h1><?php wp_title(''); ?></h1>
    <div class="row">
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
        ?>
         <!--Tre kolumner-->
                <div class="column3">
                    <div class="thumbnail">
                        <?php
                        the_post_thumbnail();
                        ?>
                    </div>
                    <article>
                        <h2><?= the_title(); ?> </h2>

                        <?php
                        the_content();
                        ?>
                    </article>
                </div>
        <?php
            endwhile;
        endif;
        ?>
    </div>
</div>
<?php
get_footer();
?>