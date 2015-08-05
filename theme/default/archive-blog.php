<?php get_header(); ?>
<section id="content" role="main">
<header class="header">
<h1 class="entry-title"></h1>
</header>
            <div class="home-projects">
            <h1>Blog</h1>
                <?php
                    $args = array( 'post_type' => 'blog', 'posts_per_page' => -1 );
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
<?php get_template_part( 'nav', 'below' ); ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>