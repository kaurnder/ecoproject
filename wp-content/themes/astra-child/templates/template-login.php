<?php
/* Template Name: Login */
// if( is_user_logged_in()) {
//     wp_redirect( home_url('/' ) ); // send to homepage
// }
get_header();
?>

<?php if (have_posts()) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <div class="container  mt-4 w-25 shadow p-3 mb-5 bg-body-tertiary rounded ">
    <div class="">	
		<h4><?php _e( 'Login', 'teamed' ); ?></h4>
		<?php wp_login_form();?>
	</div>

    <div class="login-page-col text-center">
					<div class="login-page-forgot">
						<p><?php _e( 'Forgot Password?', 'teamed' ); ?></p>
						<a href="/reset-password/" class="text-success"><?php _e( 'Recover My Password', 'teamed' ); ?></a>

						<?php// if( false ): ?>
						<p><?php _e( "Don't have an account yet?", 'teamed' ); ?></p>
						<a href="<?php echo home_url( '/create-an-account/' ) ; ?>" class="text-success"><?php _e( 'Create an Account', 'teamed' ); ?></a><br><br>
					</div>
				</div>
    </div>

<?php endwhile; ?>
<?php endif; ?>

<?php
get_footer();
?>