<!--Standardmallen för "page"-->

<?php
get_header();
?>
<div class="container">
    <div class="book-now">
    <a href="<?php echo get_page_link(27) ?>"> BOKA HÄR</a>
    </div>
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