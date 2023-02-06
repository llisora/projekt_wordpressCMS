<!--Sida för kategorin "nyheter"-->

<?php
get_header();
?>
<div class="container">
    <div class="book-now">
    <a href="<?php echo get_page_link(27) ?>"> BOKA HÄR</a>
    </div>
    <h1><?php wp_title(''); ?></h1>
    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();
    ?>
    <!--Läser in alla nyheter och skriver ut med "läs mer"-knapp-->
            <article class="single">
                <h2><?= the_title(); ?> </h2>

                <div class="thumbnail">
                    <?php
                    the_post_thumbnail();
                    ?>
                </div>


                <?php
                the_excerpt();
                ?>
                <button onclick="window.location.href='<?php the_permalink(); ?>'" class="button">Läs mer »</button>


            </article>

    <?php
        endwhile;
    endif;
    ?>
</div>
<?php
get_footer();
?>