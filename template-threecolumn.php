<?php
/*Template Name: Tre kolumner
*/
?>
<?php
get_header();
?>
<div class="book-now">
<a href="<?php echo get_page_link(27) ?>"> BOKA HÄR</a>
</div>
<div class="row">
    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();
    ?>
            <div class="column3">
                <?php
                the_post_thumbnail();
                ?>
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
<?php
get_footer();
?>