
    
    <?php get_header(); ?>

<h1 class="title-custom"><?php bloginfo( 'name' ); ?></h1><!--titre du site -->
<h2><?php bloginfo( 'description' ); ?></h2><!--Le slogan-->
<img src="erreur_404.jpg" alt="image 404">
<?php if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); ?>
        <h3><?php the_title(); ?></h3>
        <?php the_content(); ?>
        <?php wp_link_pages(); ?>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>