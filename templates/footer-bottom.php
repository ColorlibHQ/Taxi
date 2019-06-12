<?php 

	//Footer Bottom Pattern Image
	$footerBottomPattern       = taxi_opt( 'taxi_footer_bottom_pattern' );
	$footerBottomPatternImg = json_decode( $footerBottomPattern );
	

	// Copy right text
	$url = 'https://colorlib.com/';
	$copyText = sprintf( __( 'Theme by %s colorlib %s Copyright &copy; %s  |  All rights reserved.', 'taxi' ), '<a target="_blank" href="' . esc_url( $url ) . '">', '</a>', date( 'Y' ) );

	?>
	<p class="mt-60 mx-auto footer-text col-lg-12"><?php echo wp_kses_post( taxi_opt( 'taxi-copyright-text-settings', $copyText ) ); ?></p>

<?php 
    if( ! empty( $footerBottomPatternImg->url ) ) {
		echo '<img class="footer-bottom" src=" '.esc_url( $footerBottomPatternImg->url ). ' " alt="'.esc_html__('Fotter Patren', 'taxi').'">';
	}
?>

