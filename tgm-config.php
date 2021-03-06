<?php
function wcd_register_generatepress_required_plugins() {

	$plugins = array(

		array(
			'name'      => 'Kirki',
			'slug'      => 'kirki',
			'required'  => true,
            'force_activation'   => true, 
		),

	);
	$config = array(
		'id'           => 'generatepress',
		'default_path' => '',
		'menu'         => 'tgmpa-install-plugins',
		'parent_slug'  => 'plugins.php',
		'capability'   => 'manage_options', 
		'has_notices'  => true,
		'dismissable'  => true,
		'dismiss_msg'  => '',
		'is_automatic' => false,
		'message'      => '',

		
		'strings'      => array(
			'page_title'                      => __( 'Install Required Plugins', 'generatepress' ),
			'menu_title'                      => __( 'Install Plugins', 'generatepress' ),
			'installing'                      => __( 'Installing Plugin: %s', 'generatepress' ),
			'updating'                        => __( 'Updating Plugin: %s', 'generatepress' ),
			'oops'                            => __( 'Something went wrong with the plugin API.', 'generatepress' ),
			'notice_can_install_required'     => _n_noop(
				'This plugin requires the following plugin: %1$s.',
				'This plugin requires the following plugins: %1$s.',
				'generatepress'
			),
			'notice_can_install_recommended'  => _n_noop(

				'This theme recommends the following plugin: %1$s.',
				'This theme recommends the following plugins: %1$s.',
				'generatepress'
			),
			'notice_ask_to_update'            => _n_noop(

				'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',
				'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
				'generatepress'
			),
			'notice_ask_to_update_maybe'      => _n_noop(

				'There is an update available for: %1$s.',
				'There are updates available for the following plugins: %1$s.',
				'generatepress'
			),
			'notice_can_activate_required'    => _n_noop(

				'The following required plugin is currently inactive: %1$s.',
				'The following required plugins are currently inactive: %1$s.',
				'generatepress'
			),
			'notice_can_activate_recommended' => _n_noop(

				'The following recommended plugin is currently inactive: %1$s.',
				'The following recommended plugins are currently inactive: %1$s.',
				'generatepress'
			),
			'install_link'                    => _n_noop(
				'Begin installing plugin',
				'Begin installing plugins',
				'generatepress'
			),
			'update_link' 					  => _n_noop(
				'Begin updating plugin',
				'Begin updating plugins',
				'generatepress'
			),
			'activate_link'                   => _n_noop(
				'Begin activating plugin',
				'Begin activating plugins',
				'generatepress'
			),
			'return'                          => __( 'Return to Required Plugins Installer', 'generatepress' ),
			'plugin_activated'                => __( 'Plugin activated successfully.', 'generatepress' ),
			'activated_successfully'          => __( 'The following plugin was activated successfully:', 'generatepress' ),

			'plugin_already_active'           => __( 'No action taken. Plugin %1$s was already active.', 'generatepress' ),

			'plugin_needs_higher_version'     => __( 'Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'generatepress' ),

			'complete'                        => __( 'All plugins installed and activated successfully. %1$s', 'generatepress' ),
			'dismiss'                         => __( 'Dismiss this notice', 'generatepress' ),
			'notice_cannot_install_activate'  => __( 'There are one or more required or recommended plugins to install, update or activate.', 'generatepress' ),
			'contact_admin'                   => __( 'Please contact the administrator of this site for help.', 'generatepress' ),

			'nag_type'                        => '',
		),
	);

	tgmpa( $plugins, $config );
}

add_action( 'tgmpa_register', 'wcd_register_generatepress_required_plugins' );