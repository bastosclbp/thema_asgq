<?php
// Template Name: Posts Menu
get_header();
?>


<div class="container page-post-menu">
    <div class="grid-16">
        <div class="page-post-titulo">
            <h1><?php the_title(); ?></h1>
        </div>
        <div class="page-post-conteudo">
            <?php the_content(); ?>
        </div>
    </div>
</div>



<?php get_footer(); ?>