<?php get_header(); ?>
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    </section>
<div class="project-page">

                        
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
                            <div class="gradient-wrapper">
                            </div>
                    <h2>
                        <a href="/nieuws/<?php echo $post->post_name; ?>">
                            <?php the_title(); ?>
                        </a>
                    </h2>
                        </div>
                        <section id="content" role="main">
                    <div class="project-content">
                        <p><?php the_content() ?>
                        </p>
                        <div class="btn-wrapper">
                        <a title="Neem contact op!" href="/contact/" class="btn contactbtn">Neem contact op of vraag offerte aan!</a>
                        </div>

                    </div>
                </div>
<?php endwhile; endif; ?>
<footer class="single">
<?php get_template_part( 'nav', 'below-single' ); ?>
</footer>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>