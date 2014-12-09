<?php get_header(); ?>

    <div class="col-xs-12 col-md-12 bloc_titre">
        <h3>BLOG</h3>
    </div>

    <div class="row all_miniatures blog_index">
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

<?php get_footer(); ?>