<div class="clear"></div>
</div>
<footer id="footer" role="contentinfo">
    <?php $social_options = get_option ( 'iasd_theme_social_options');?>
    <div class="footerwrapper">
        <div class="aboutus">
            <h1>Over Ons</h1>
            <p>Connect030 is een businessclub voor MKB Ondernemers uit de regio Utrecht. Je kunt er alleen lid van worden als je geïntroduceerd wordt door een bestaand lid. </p>
        </div>
        <div class="social">
            <h1>Volg <?php echo $social_options['bedrijfsnaam'];?></h1>
            <ul>
                <?php if( $social_options['facebook']){?>
                    <a href="<?php echo $social_options['facebook'];?>" target="_blank">
                        <li class="icon-facebook">Facebook</li>
                    </a>
                <?php }; ?>
                <?php if( $social_options['twitter']){?>
                    <a href="<?php echo $social_options['twitter']; ?>" target="_blank">
                        <li class="icon-twitter">Twitter</li>
                    </a>
                <?php }; ?>
                <?php if( $social_options['instagram']){?>
                    <a href="<?php echo $social_options['instagram']; ?>" target="_blank">
                        <li class="icon-instagram">Instagram</li>
                    </a>
                <?php }; ?>
                <?php if( $social_options['googleplus']){?>
                    <a href="<?php echo $social_options['googleplus']; ?>" target="_blank">
                        <li class="icon-gplus">Google+</li>
                    </a>
                <?php }; ?>
                <?php if( $social_options['pinterest']){?>
                    <a href="<?php echo $social_options['pinterest']; ?>" target="_blank">
                        <li class="icon-pinterest">Pinterest</li>
                    </a>
                <?php }; ?>
                <?php if( $social_options['linkedin']){?>
                    <a href="<?php echo $social_options['linkedin']; ?>" target="_blank">
                        <li class="icon-linkedin">LinkedIn</li>
                    </a>
                <?php }; ?>
            </ul>
        </div>
        <div class="contact">
            <h1>Contact</h1>
            <p><?php echo $social_options['bedrijfsnaam']; ?>
                <br> <?php echo $social_options['straat']; ?>
                <br> <?php echo $social_options['postcode']; ?>
                <br>Telefoon: <?php echo $social_options['telefoon']; ?>
                <br> E-mail: <a href="mailto:<?php echo $social_options['email']; ?>"><?php echo $social_options['email']; ?></a>
            </p>
        </div>
        <div id="copyright">
            <?php echo sprintf( __( '%1$s %2$s %3$s. ', 'blankslate' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); echo sprintf( __( 'Realisatie door internetbureau %1$s.', 'blankslate' ), '<a href="http://i-aspect.com/">i-Aspect</a>' ); ?>
        </div>

    </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>