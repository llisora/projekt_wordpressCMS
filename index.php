<!--Startsida där jag skriver ut senaste två nyheterna.-->

<?php
get_header();
?>
<div class="container">
   <div class="book-now">
      <a href="<?php echo get_page_link(27) ?>"> BOKA HÄR</a>
   </div>
   
   <?php
   if (is_active_sidebar('widget_ett')) :
   ?>
      <div id="widget_ett">
         <?php dynamic_sidebar('widget_ett'); ?>
      </div>
   <?php endif; ?>

   <h1>Nyheter</h1>
   <div class="newslink">
      <a href="<?php echo get_category_link(5) ?>">Klicka här för fler nyheter</a>
   </div>

   <div class="row">
      <?php
      query_posts('posts_per_page=2');
      if (have_posts()) :
         while (have_posts()) :
            the_post();
      ?>
            <div class="column">
               <!--Klass för att ha responsiv thumbnail - fungerade inte annars.-->
               <div class="thumbnail">
                  <?php
                  the_post_thumbnail();
                  ?>
               </div>
               <article>
                  <h2><?= the_title(); ?> </h2>
                  <i><?= the_time('Y/m/d \k\l H:i'); ?></i>

                  <?php
                  the_excerpt();
                  ?>

                  <button onclick="window.location.href='<?php the_permalink(); ?>'" class="button">Läs mer »</button>
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