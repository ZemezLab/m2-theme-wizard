<?php
/**
 * Verification Step template
 */
?>
<h2><?php esc_html_e( 'Install Theme', 'm2-theme-wizard' ); ?></h2>
<div class="desc"><?php
	esc_html_e( 'Please, enter your order ID to start installation:', 'm2-theme-wizard' );
?></div>
<div class="theme-wizard-form">
	<?php
		m2_theme_interface()->add_form_row( array(
			'label'       => esc_html__( 'Order ID:', 'm2-theme-wizard' ),
			'field'       => 'license_key',
			'placeholder' => esc_html__( 'Enter your order ID here...', 'm2-theme-wizard' ),
		) );
		m2_theme_interface()->button( array(
			'action' => 'start-install',
			'text'   => esc_html__( 'Start Install', 'm2-theme-wizard' ),
		) );
	?>
</div>