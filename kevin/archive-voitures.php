<?php get_header(); ?>
    <div class="voitures">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article class="voiture">
                    <?php the_post_thumbnail( 'thumbnail' ); ?>
                    <h1 class="title">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h1>
                    <div class="content">
                        <?php the_content(); ?>
                        <?php the_terms( $post->ID, 'marque', 'Marque : ' ); ?><br>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
<?php get_footer(); ?>

