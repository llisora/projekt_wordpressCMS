<!--Sida för enstaka nyhetsinlägg eller andra inlägg-->

<?php
get_header();
?>
<div class="container">
    <div class="book-now">
        <a href="http://localhost:8888/wordpress/bokning/"> BOKA HÄR</a>
    </div>

    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();

    ?>
            <article class="single">
                <h2><?= the_title(); ?> </h2>

                <?php
                the_post_thumbnail();
                ?>

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