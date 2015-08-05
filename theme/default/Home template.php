<?php /* Template Name: Home template */ ?>
<?php get_header(); ?>
<section id="content" role="main">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <!--<header class="header">
<h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
</header>-->
        <div id="slider" style="background:url(<?php if (has_post_thumbnail()){
                                    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
                                    echo $url = $thumb['0'];
                                }?>); background-size: cover;background-position:center center;"><?php putRevSlider("Home") ?>
            <!--<img src="http://lintybouw.odinovereem.dev.i-aspect.com/wp-content/uploads/2015/05/935D24BC53.jpg" />-->
        </div>
        <section class="entry-content">
            <div class="services">
                <div class="service"><span class="icon icon-leaf"></span>
                    <h2>Milieubewust</h2>
                    <p>Wij werken altijd milieubewust. De te gebruiken materialen moeten zoveel mogelijk duurzaam zijn geproduceerd, maar wel aan de hoogste kwaliteit voldoen. </p>
                </div><div class="service"><span class="icon icon-calendar-empty"></span>
                    <h2>Planning en Controle</h2>
                    <p>De planning van de werkzaamheden vindt op een realistische wijze en in overleg met de klant plaats.Dagelijks wordt gecontroleerd of de werkzaamheden nog op schema liggen.</p>
                </div><div class="service"><span class="icon icon-ok"></span>
                    <h2>Onze visie</h2>
                    <p>Onze visie is,dat wij altijd werk afleveren van kwalitatief hoogstaand niveau tegen scherpe,concurrerende prijzen. Het resultaat van het werk moet op de meeste duurzame wijze tot stand komen.</p>
                </div><div class="service"><span class="icon icon-wrench"></span>
                    <h2>Als het goed moet</h2>
                    <p>Het is het resultaat dat telt. Wij zijn pas met het resultaat tevreden als de klant dat ook is. Vanzelfsprekend werken wij uitsluitend met eerste klas materialen en gereedschappen.</p>
                </div><div class="contactbtnwrap">
                    <a href="<?php echo site_url(); ?>/contact" class="contactbtn btn">Meer weten? Neem direct contact op!</a>
                </div>
            </div>
            <div class="user-content">
                <?php echo the_content() ?>
            </div>
        </section>
            <?php
                $query = new WP_Query(array(
                'post_type' => 'projecten'
                ));
                if( $query->have_posts() ){ echo '
            <div class="home-projects-wrapper">
            <div class="home-projects">
            <h1>Projecten</h1>
                ';
                    $args = array( 'post_type' => 'projecten', 'posts_per_page' => 4 );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();?><div class="project">
                    <a href="<?php echo site_url(); ?>/projecten/<?php echo $post->post_name; ?>">
                        <div class="thumb-wrapper" style="background:url(
                            <?php 
                                if (has_post_thumbnail()){
                                    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
                                    echo $url = $thumb['0'];
                                } else {
                                    echo ('/wp-content/uploads/2015/05/6B70C91911.jpg');
                                }
                            ?>
                        ); background-size: cover; background-position: center center;">

                        <div class="thumb-overlay"></div>
                        </div>
                    </a>
                    <div class="project-meta-info">
                        <h2>
                            <a href="<?php echo site_url(); ?>/projecten/<?php echo $post->post_name; ?>">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                        <div class="project-content-exc">
                            <p><?php $excerpt = get_the_excerpt( $deprecated ) ?> 
                            <?php echo $excerpt ?><a class="read-more" href="<?php echo site_url(); ?>/projecten/<?php echo $post->post_name; ?>">Lees meer</a>
                            </p>
                        </div>
                    </div>
                </div><?php
                    endwhile;
                ?>
            </div>
            </div>
            <?php
            }?><!-- Check if post type has posts-->
            
            <?php
                $query = new WP_Query(array(
                'post_type' => 'blog'
                ));
                if( $query->have_posts() ){ echo '
            <div class="home-projects-wrapper blog-wrapper">
            <div class="home-projects">
            <h1>Blog</h1>
                ';
                    $args = array( 'post_type' => 'blog', 'posts_per_page' => 4 );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();?><div class="project">
                    <a href="<?php echo site_url(); ?>/blog/<?php echo $post->post_name; ?>">
                        <div class="thumb-wrapper" style="background:url(
                            <?php 
                                if (has_post_thumbnail()){
                                    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
                                    echo $url = $thumb['0'];
                                } else {
                                    echo ('/wp-content/uploads/2015/05/6B70C91911.jpg');
                                }
                            ?>
                        ); background-size: cover; background-position: center center;">
                            <div class="thumb-overlay"></div>
                        </div>
                    </a>
                    <div class="project-meta-info">
                        <h2>
                            <a href="<?php echo site_url(); ?>/blog/<?php echo $post->post_name; ?>">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                        <div class="project-content-exc">
                            <p><?php $excerpt = get_the_excerpt( $deprecated ) ?> 
                            <?php echo $excerpt ?><a class="read-more" href="<?php echo site_url(); ?>/blog/<?php echo $post->post_name; ?>">Lees meer</a>
                            </p>
                        </div>
                    </div>
                </div><?php
                    endwhile;
                ?>
            </div>
            </div>
            <?php
            }?><!-- Check if post type has posts-->
            
            <?php
                $query = new WP_Query(array(
                'post_type' => 'nieuws'
                ));
                if( $query->have_posts() ){ echo '
            <div class="home-projects-wrapper">
            <div class="home-projects">
            <h1>Nieuws</h1>
                ';
                    $args = array( 'post_type' => 'nieuws', 'posts_per_page' => 4 );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();?><div class="project">
                    <a href="<?php echo site_url(); ?>/nieuws/<?php echo $post->post_name; ?>">
                        <div class="thumb-wrapper" style="background:url(
                            <?php 
                                if (has_post_thumbnail()){
                                    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
                                    echo $url = $thumb['0'];
                                } else {
                                    echo ('/wp-content/uploads/2015/05/6B70C91911.jpg');
                                }
                            ?>
                        ); background-size: cover; background-position: center center;">
                            <div class="thumb-overlay"></div>
                        </div>
                    </a>
                    <div class="project-meta-info">
                        <h2>
                            <a href="<?php echo site_url(); ?>/nieuws/<?php echo $post->post_name; ?>">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                        <div class="project-content-exc">
                            <p><?php $excerpt = get_the_excerpt( $deprecated ) ?> 
                            <?php echo $excerpt ?><a class="read-more" href="<?php echo site_url(); ?>/nieuws/<?php echo $post->post_name; ?>">Lees meer</a>
                            </p>
                        </div>
                    </div>
                </div><?php
                    endwhile;
                ?>
            </div>
            </div>
            <?php
            }?><!-- Check if post type has posts-->
            
    </article>
    <?php if ( ! post_password_required() ) comments_template( '', true ); ?>
    <?php endwhile; endif; ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>