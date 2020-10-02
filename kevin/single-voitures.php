<?php get_header(); ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <article class="voiture">
            <?php the_post_thumbnail( 'large' ); ?>
            <h1 class="title">
                <?php the_title(); ?>
            </h1>
            <div class="content">
                <?php the_content(); ?>
            </div>
            <?php the_terms( $post->ID, 'marque', 'Marque : ' ); ?><br>
            <?php the_field('dimension'); ?>
            <?php the_field('couleur'); ?>
            <?php the_field('cylindre'); ?>
            <?php the_field('annee_model'); ?>
        </article>
    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>