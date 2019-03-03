<?php get_header(); ?>

<div class="w-95">
    <button id="bouton_passes" class="buttons">évènements passés</button>
    <button id="bouton_futurs" class="buttons">évènements à venir</button>
</div>

<section class="section_futurs" id="section_futurs">
    <h2 class="ev_futurs h2-accueil">
        évènements à venir
    </h2>
    <!--Lister les articles de wordpress-->
    <?php
    //le loope de wp
    if(have_posts()) :
        while (have_posts()) :

                the_post();

                    $date_noformat = get_post_meta(get_post()->ID)["_wporg_meta_key"][0];
                    $date_format = strtotime($date_noformat);
                    $auj = strtotime(date("m.d.Y"));

                    if($auj < $date_format) : ?>
                        <!-- //div des évènements passés -->
                        <a href="?p=<?= get_post()->ID ?>" class="div_post">
                            <div class="col_image">
                                <?=get_the_post_thumbnail();?>
                            </div>
                            <div class="col_texte">

                                <h3 class="titre_post"><?php the_title();?></h3>
                                
                                <h5 class="date_post">Date de l'évènement : <?= date("d/m/Y", $date_format); ?></h5>
                                <p class="extrait_post"><?php the_excerpt();
                                ?></p>
                            </div>
                        </a>
                    <?php
                    endif;
                    ?>
            <?php
        endwhile;
    endif;
    ?>
</section>

<section class="section_passes" id="section_passes">
    <h2 class="ev_passes h2-accueil">
        évènements passés
    </h2>
    <!--Lister les articles de wordpress-->
    <?php
    //le loope de wp
    if(have_posts()) :
        while (have_posts()) :

                the_post();

                    $date_noformat = get_post_meta(get_post()->ID)["_wporg_meta_key"][0];
                    $date_format = strtotime($date_noformat);
                    $auj = strtotime(date("m.d.Y"));

                    if($auj > $date_format) : ?>
                        <!-- //div des évènements passés -->
                        <a href="?p=<?= get_post()->ID ?>" class="div_post">
                            <div class="col_image">
                                <img src="image.png" alt="image">
                            </div>
                            <div class="col_texte">

                                <h3 class="titre_post"><?php the_title();?></h3>
                                
                                <h5 class="date_post">Date de l'évènement : <?= date("d/m/Y", $date_format); ?></h5>
                                <p class="extrait_post"><?php the_excerpt(); ?></p>
                            </div>
                        </a>
                    <?php
                    endif;
                    ?>
            <?php
        endwhile;
    endif;
    ?>
</section>

<?php get_footer(); ?>