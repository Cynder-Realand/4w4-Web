<?php get_header(); ?>
    <main class="site__main">
        <h1>---------------search.php---------------</h1>
        <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post(); ?>
                <h3>
                    <?php echo get_permalink() ?>
                    <?php the_title(); ?>
                </h3>
                <p><?php echo wp_trim_words( get_the_content(), 20, "...>" ); ?></p>
            <?php endwhile; ?>
            <?php else : ?>
                <p>Aucun Résultat</p>
        <?php endif; ?>
    </main>

<?php get_footer(); ?>