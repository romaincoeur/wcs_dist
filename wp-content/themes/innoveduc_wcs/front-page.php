<?php get_header(); ?>

    <div class="container-fluid">
        <div class="row">
            <div class="image-header">
                <img class="image-responsive" src="/wp-content/themes/innoveduc_wcs/images/photo_fond9.jpg">
                <div class="titre_h1 hidden-xs">
                    <h1 class="h1-image-header">Le numérique au <span class="vert">vert</span></h1>
                    <p class="slogan">Fabrique de codeurs</p>
                </div>

                <div class="titre_h1_xs visible-xs-* hidden-sm hidden-md hidden-lg ">
                    <h1 class="h1-image-header-xs">Le numérique au <span class="vert">vert</span></h1>
                    <p class="slogan-xs">Fabrique de codeurs</p>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row chiffres-cles">
            <h3>Chiffres clés</h3>
            <div class="col-xs-18 col-md-4 col-lg-2 col-lg-offset-3">
                <span class="chiffre">30</span> </br>étudiants
            </div>
            <div class="col-xs-18 col-md-4 col-lg-2">
                <span class="chiffre">6</span>
                </br>mois
            </div>
            <div class="col-xs-18 col-md-4 col-lg-2">

                <span class="chiffre">1h30</span>
                </br>de Paris
            </div>
        </div>
    </div>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <div class="container-fluid">
        <div class="row presentation">
            <h3>Concept</h3>
            <div class="col-xs-18 col-md-6 col-lg-4 col-lg-offset-2 presentation_video">

                <img src="/wp-content/themes/innoveduc_wcs/images/wei6.jpg" width="300px" height="169px">
                <!--<iframe src="http://www.youtube.com/embed/NcCo3bIUmkU" frameborder="0" allowfullscreen></iframe> -->
            </div>

            <div class="col-md-5 col-lg-3">

                <article class="presentation_texte">
                    <p>Installée au cœur du Parc naturel régional du Perche, l’école numérique Simplon Village propose une formation gratuite et intensive de 6 mois au développement des applications web et mobile avec un accompagnement vers l’entrepreneuriat numérique, dans un cadre naturel propice à la créativité et à l’innovation... <a href="/concept.html">Lire la suite</a></p>
                </article>

            </div>
        </div>
    </div>


    <div class="container-fluid derniers-articles">
        <div class="row">
            <center>
                <h3>Derniers articles</h3>
            </center>
            <div class="vignettes blog_article">
                <?php
                $recentPosts = new WP_Query();
                $recentPosts->query('showposts=4');
                ?>
                <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
                    <div class="col-sm-6 col-md-4 col-lg-3 bloc_article_pp">
                        <?php if ( has_post_thumbnail() ) { ?>
                            <a href="<?php the_permalink() ?>">
                                <?php
                                $full_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
                                echo '<img src="' . $full_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" />';
                                ?>
                            </a>
                        <?php } ?>
                        <div class="description_vignettes2">
                            <a href="<?php the_permalink() ?>" class="titre_vignettes">
                                <?php the_title(); ?>
                            </a>
                            </br>
                            <time><?php the_date(); ?></time>
                            <a href="<?php the_permalink() ?>" >
                                <p>
                                    <?php the_excerpt(); ?>
                                </p>
                            </a>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="presse_bloc_entier">
                <h3 class="presse">Ils parlent de nous</h3>
                <div class="categories_presse">
                    <div class="col-md-8 col-md-offset-2">
                        <img class="logo_presse" src="/wp-content/themes/innoveduc_wcs/images/logo/presse/1.png">
                        <img class="logo_presse" src="/wp-content/themes/innoveduc_wcs/images/logo/presse/2.png">
                        <img class="logo_presse" src="/wp-content/themes/innoveduc_wcs/images/logo/presse/3.png">
                        <img class="logo_presse" src="/wp-content/themes/innoveduc_wcs/images/logo/presse/4.png">
                        <img class="logo_presse" src="/wp-content/themes/innoveduc_wcs/images/logo/presse/5.png">
                        <img class="logo_presse" src="/wp-content/themes/innoveduc_wcs/images/logo/presse/6.png">
                        <img class="logo_presse" src="/wp-content/themes/innoveduc_wcs/images/logo/presse/7.jpg">
                        <img class="logo_presse" src="/wp-content/themes/innoveduc_wcs/images/logo/presse/8.jpg">
                        <img class="logo_presse" src="/wp-content/themes/innoveduc_wcs/images/logo/presse/9.png">
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>