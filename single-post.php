<?php get_header() ?>
<main class="site__main">

     <?php if (have_posts()): the_post(); ?>
     <article class="article">
     <?php the_title() ?>    
     <div class="article__contenu">
     <?php if (has_post_thumbnail()): ?> 
               <figure class="article__contenu__figure">
                    <?php the_post_thumbnail("thumbnail"); ?>
               </figure>
          <?php endif; ?>   
     <?php endif ?>
     <?php the_content() ?>
     </div> 
     </article>
          
</main>
<?php get_footer() ?>