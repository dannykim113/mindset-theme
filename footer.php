<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package FWD_Starter_Theme
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="footer-contact">
					<?php
                    if ( function_exists( 'get_field' ) ) {
                        if ( ! is_page('contact') ) {
                            if ( get_field('address', 17) ) {
                                echo '<div class="footer-contact-left">';
                                    get_template_part( 'images/location' );
                                    the_field('address', 17);
                                echo '</div>';
                            }
                            if ( get_field('email', 17) ) {
                                $email  = get_field( 'email', 17 );
                                $mailto = 'mailto:' . $email;
                                ?>
                                <div class="footer-contact-right">
                                    <p><a href="<?php echo esc_url( $mailto ); ?> "><?php echo esc_html( $email ); ?></a></p>
                                </div>
                                <?php
                            }
                        }
                    }
                    ?>
		</div><!-- .footer-contact -->
		<div class="footer-menus">
				<nav id="footer-navigation" class="footer-navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'footer-left' ) ); ?>
				</nav>
				<div id="social-media" class="social-media">
					<?php wp_nav_menu( array( 'theme_location' => 'footer-right' ) ); ?>
				</div>
		</div><!-- .footer-menus -->
		<div class="site-info">
			<?php the_privacy_policy_link(); ?><br>
			<?php esc_html_e( 'Created by ', 'fwd' ); ?><a href="<?php echo esc_url( __( 'https://wp.bcitwebdeveloper.ca/', 'fwd' ) ); ?>"><?php esc_html_e( 'Jonathon Leathers', 'fwd' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
