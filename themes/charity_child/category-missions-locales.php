<?php get_header(); ?>
<section class="section_mislocales" id="section_mislocales">
    <h2 class="mislocales h2-accueil">
        missions locales
    </h2>
    <!--Lister les articles de wordpress-->
    <?php
    //le loope de wp
    if(have_posts()) :
        while (have_posts()) :

                the_post(); ?>

                        <!-- //div des évènements passés -->
                        <a href="?p=<?= get_post()->ID ?>" class="div_post">
                            <div class="col_image">
                                <?=get_the_post_thumbnail();?>
                            </div>
                            <div class="col_texte">

                                <h3 class="titre_post"><?php the_title();?></h3>
                                
                                <p class="extrait_post"><?php the_excerpt();
                                ?></p>
                            </div>
                        </a>
            <?php
        endwhile;
    endif;
    ?>
</section>

<?php get_footer(); ?> 