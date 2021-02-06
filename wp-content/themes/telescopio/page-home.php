<?php get_header(); ?>   
    <div class="content-area">
        <main>
            <section class="intro">
                <div class="container">
                    <div class="row">Saiba Mais</div>
                </div>
            </section>
            <section class="slide">
                <div class="container">
                    <div class="row">Slide</div>
                </div>
            </section>
            <section class="aboutUs">
                <div class="container">
                    <div class="row">
                        <aside class="sidebar col-md-3">Image</aside>
                        <div class="about col-md-6">Quem Somos</div>
                        <aside class="sidebar col-md-3">Image</aside>
                    </div>
                    
                </div>
            </section>
            <section class="galeria">
                <div class="container">
                    <div class="row">Últimos Projetos

                    </div>
                </div>
            </section>
            <section class="depositions">
                <div class="container">
                    <div class="row">Depoimentos</div>
                </div>
            </section>
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
