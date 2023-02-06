<?php
/*Template Name: Template utan den röda "boka här"-rutan
*/
?>
<?php
get_header();
?>
<div class="container">
    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();

    ?>
            <article class="single">
                <?php
                the_post_thumbnail();
                ?>

                <h2><?= the_title(); ?> </h2>

                <?php
                the_content();
                ?>
            </article>


    <?php
        endwhile;
    endif;
    ?>
</div>

<?php
get_footer();
?>