<?php get_header(); ?>
    <div class="voitures">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article class="voiture">
                    <?php the_post_thumbnail( 'large' ); ?>
                    <h1 class="title">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h1>
                    <div class="content">
                        <?php the_content(); ?>
                        <?php $post ='';
                        the_terms( $post->ID, 'marque', 'Marque : ' ); ?><br>
                        <?php the_field('dimension'); ?>
                        <?php the_field('couleur'); ?>
                        <?php the_field('cylindre'); ?>
                        <?php the_field('annee_model'); ?>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
<?php get_footer(); ?>

