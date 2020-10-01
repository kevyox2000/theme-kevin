<?php get_header(); ?>
    <div class="voiture">
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
                        <?php get_field('dimension'); ?>
                        <?php get_field('couleur'); ?>
                        <?php get_field('cylindre'); ?>
                        <?php get_field('annee_model'); ?>
                        <?php get_field('marque'); ?>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
<?php get_footer(); ?>