<?php
/**
 * Install child theme template
 */
$theme_data = get_option( m2_theme_wizard()->settings['options']['parent_data'] );

if ( ! $theme_data ) {
	echo '<div class="theme-wizard-error">' . esc_html__( 'We can\'t find any inforamtion about installed theme. Plaese, return to previous', 'm2-theme-wizard' ) . '</div>';
	return;
}

?>
<h2><?php esc_html_e( 'Use child theme?', 'm2-theme-wizard' ); ?></h2>
<div class="desc"><?php
	printf( esc_html__( 'We recommend you to use our child themes generator to get child theme for %s', 'm2-theme-wizard' ), $theme_data['ThemeName'] );
?></div>
<div class="theme-wizard-form">
	<div class="theme-wizard-radio-wrap"><?php
		m2_theme_interface()->add_form_radio( array(
			'label'   => esc_html__( 'Continue with parent theme', 'm2-theme-wizard' ),
			'desc'    => esc_html__( 'Skip child theme installation and continute with parent theme.', 'm2-theme-wizard' ),
			'field'   => 'use_child',
			'value'   => 'skip_child',
			'checked' => true,
		) );
		m2_theme_interface()->add_form_radio( array(
			'label'   => esc_html__( 'Use child theme', 'm2-theme-wizard' ),
			'desc'    => esc_html__( 'Download and install child theme. Note: we recommend doing this, because it is the most safe way to make future modifictaions.', 'm2-theme-wizard' ),
			'field'   => 'use_child',
			'value'   => 'get_child',
		) );
	?></div>
	<?php
		m2_theme_interface()->button( array(
			'action' => 'get-child',
			'text'   => esc_html__( 'Continue', 'm2-theme-wizard' ),
		) );
	?>
</div>