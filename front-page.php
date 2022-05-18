<?php get_header() ?>
<main class="site__main">

<section class="animation">
    <ul class="animation__lots">
        <li class="animation__checks">
            <input type="checkbox" class="animation__inputs"/>
            <div class="animation__letters">S</div>
        </li>
        <li class="animation__checks">
            <input type="checkbox" class="animation__inputs"/>
            <div class="animation__letters">U</div>
        </li>
        <li class="animation__checks">
            <input type="checkbox" class="animation__inputs"/>
            <div class="animation__letters">K</div>
        </li>
        <li class="animation__checks">
            <input type="checkbox" class="animation__inputs"/>
            <div class="animation__letters">U</div>
        </li>
        <li class="animation__checks">
            <input type="checkbox" class="animation__inputs"/>
            <div class="animation__letters">N</div>
        </li>
        <li class="animation__checks">
            <input type="checkbox" class="animation__inputs"/>
            <div class="animation__letters">A</div>
        </li>
    </ul>
</section>

    <section class="site__main__firstPost">
    <h1>---- Front-page.php ------</h1>
   <?php if (have_posts()): the_post(); ?>
        <h2><?php the_title() ?></h2>
        <p><?php the_content() ?></p>   
  
   <?php endif ?>
   </section>

</main>
<?php get_footer() ?>