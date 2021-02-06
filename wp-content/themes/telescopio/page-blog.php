<?php get_header(); ?>   

<!-- <img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt=""/> -->

    
            <section class="blog">
                <div class="container">
                    <div class="row">
                        <div class="news">
                            <?php 
                            // Se houver algum post
                                if( have_posts() ):
                                    // Enquanto houver posts, mostre-os pra gente
                                    while( have_posts() ): the_post();
                            ?>

                            <article>
                                <h2><?php the_title(); ?></h2>
                                <?php the_post_thumbnail( 'thumbnail'); ?>
                                <?php the_content(); ?>
                            </article>

                            <?php 
                                endwhile;
                            else:
                            ?>
                            <p>There's nothing yet to be displayed...</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
            <section class="social-media">
                <div class="container">
                    <div class="row">Siga-nos no Instagram - @mixgigante</div>
                </div>
            </section>
        </main>        
    </div>
<?php get_footer(); ?>     
