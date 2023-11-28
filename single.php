
    <?php get_header(); ?>

<h1 class="title-custom"><?php bloginfo( 'name' ); ?></h1><!--titre du site -->
<h2>Ceci est un article </h2><!--Le slogan-->

<?php if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); ?>
        <h3><?php the_title(); ?></h3>
        <?php the_content(); ?>
        <?php wp_link_pages(); ?>
    <?php endwhile; ?>
<?php endif; ?>

    <?php get_footer(); ?>