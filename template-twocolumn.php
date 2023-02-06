<?php
/*Template Name: Två kolumner
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

            <div class="column">
                <h2><?= the_title(); ?> </h2>

                <?php
                the_post_thumbnail();
                ?>
            </div>
            <article class="column">


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