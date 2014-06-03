<?php
/**
 * Roots includes
 */
require_once locate_template('/lib/utils.php');           // Utility functions
require_once locate_template('/lib/init.php');            // Initial theme setup and constants
require_once locate_template('/lib/wrapper.php');         // Theme wrapper class
require_once locate_template('/lib/sidebar.php');         // Sidebar class
require_once locate_template('/lib/config.php');          // Configuration
require_once locate_template('/lib/activation.php');      // Theme activation
require_once locate_template('/lib/titles.php');          // Page titles
require_once locate_template('/lib/cleanup.php');         // Cleanup
require_once locate_template('/lib/nav.php');             // Custom nav modifications
require_once locate_template('/lib/gallery.php');         // Custom [gallery] modifications
require_once locate_template('/lib/comments.php');        // Custom comments modifications
require_once locate_template('/lib/relative-urls.php');   // Root relative URLs
require_once locate_template('/lib/widgets.php');         // Sidebars and widgets
require_once locate_template('/lib/scripts.php');         // Scripts and stylesheets
require_once locate_template('/lib/custom.php');          // Custom functions

/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @package	   TGM-Plugin-Activation
 * @subpackage Example
 * @version	   2.3.6
 * @author	   Thomas Griffin <thomas@thomasgriffinmedia.com>
 * @author	   Gary Jones <gamajo@gamajo.com>
 * @copyright  Copyright (c) 2012, Thomas Griffin
 * @license	   http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/thomasgriffin/TGM-Plugin-Activation
 */

/**
 * Include the TGM_Plugin_Activation class.
 */
require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'my_theme_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register two plugins - one included with the TGMPA library
 * and one from the .org repo.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
function my_theme_register_required_plugins() {

	/**
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

		// This is an example of how to include a plugin pre-packaged with a theme
		/*
		array(
			'name'     				=> 'Wordpress Creation Kit PRO', // The plugin name
			'slug'     				=> 'wordpress-creation-kit-pro', // The plugin slug (typically the folder name)
			'source'   				=> get_stylesheet_directory() . '/plugins/wordpress-creation-kit-pro_2.0.6.zip', // The plugin source
			'required' 				=> false, // If false, the plugin is only 'recommended' instead of required
			'version' 				=> '2.0.6', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
			'force_activation' 		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
			'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
			'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
		),
               */
		// This is an example of how to include a plugin from the WordPress Plugin Repository
		array(
			'name' 		=> 'PHP Code Widget',
			'slug' 		=> 'php-code-widget',
			'required' 	=> false,
		),
		array(
			'name' 		=> 'Limit Login Attempts',
			'slug' 		=> 'limit-login-attempts',
			'required' 	=> false,
		),
		array(
			'name' 		=> 'Google XML Sitemaps',
			'slug' 		=> 'google-sitemap-generator',
			'required' 	=> false,
		),
		array(
			'name' 		=> 'InfiniteWP Client',
			'slug' 		=> 'iwp-client',
			'required' 	=> false,
		),
		array(
			'name' 		=> 'Black Studio TinyMCE Widget',
			'slug' 		=> 'black-studio-tinymce-widget',
			'required' 	=> false,
		),
		array(
			'name' 		=> 'ACF',
			'slug' 		=> 'advanced-custom-fields',
			'required' 	=> false,
		),
		array(
			'name' 		=> 'WCK Custom Post Types',
			'slug' 		=> 'wck-custom-fields-and-custom-post-types-creator',
			'required' 	=> false,
		),		
		

	);

	// Change this to your theme text domain, used for internationalising strings
	$theme_text_domain = 'tgmpa';

	/**
	 * Array of configuration settings. Amend each line as needed.
	 * If you want the default strings to be available under your own theme domain,
	 * leave the strings uncommented.
	 * Some of the strings are added into a sprintf, so see the comments at the
	 * end of each line for what each argument will be.
	 */
	$config = array(
		'domain'       		=> $theme_text_domain,         	// Text domain - likely want to be the same as your theme.
		'default_path' 		=> '',                         	// Default absolute path to pre-packaged plugins
		'parent_menu_slug' 	=> 'themes.php', 				// Default parent menu slug
		'parent_url_slug' 	=> 'themes.php', 				// Default parent URL slug
		'menu'         		=> 'install-required-plugins', 	// Menu slug
		'has_notices'      	=> true,                       	// Show admin notices or not
		'is_automatic'    	=> false,					   	// Automatically activate plugins after installation or not
		'message' 			=> '',							// Message to output right before the plugins table
		'strings'      		=> array(
			'page_title'                       			=> __( 'Install Required Plugins', $theme_text_domain ),
			'menu_title'                       			=> __( 'Install Plugins', $theme_text_domain ),
			'installing'                       			=> __( 'Installing Plugin: %s', $theme_text_domain ), // %1$s = plugin name
			'oops'                             			=> __( 'Something went wrong with the plugin API.', $theme_text_domain ),
			'notice_can_install_required'     			=> _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.' ), // %1$s = plugin name(s)
			'notice_can_install_recommended'			=> _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.' ), // %1$s = plugin name(s)
			'notice_cannot_install'  					=> _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.' ), // %1$s = plugin name(s)
			'notice_can_activate_required'    			=> _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
			'notice_can_activate_recommended'			=> _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
			'notice_cannot_activate' 					=> _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' ), // %1$s = plugin name(s)
			'notice_ask_to_update' 						=> _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' ), // %1$s = plugin name(s)
			'notice_cannot_update' 						=> _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ), // %1$s = plugin name(s)
			'install_link' 					  			=> _n_noop( 'Begin installing plugin', 'Begin installing plugins' ),
			'activate_link' 				  			=> _n_noop( 'Activate installed plugin', 'Activate installed plugins' ),
			'return'                           			=> __( 'Return to Required Plugins Installer', $theme_text_domain ),
			'plugin_activated'                 			=> __( 'Plugin activated successfully.', $theme_text_domain ),
			'complete' 									=> __( 'All plugins installed and activated successfully. %s', $theme_text_domain ), // %1$s = dashboard link
			'nag_type'									=> 'updated' // Determines admin notice type - can only be 'updated' or 'error'
		)
	);

	tgmpa( $plugins, $config );

}



// Custom Theme Options :)

function my_theme_admin_init() {
     register_setting('my_options', 'my_theme_options');
}

function setup_theme_admin_menus() {
    add_menu_page('Theme settings', '724 Options', 'manage_options', 
        '724_theme_settings', 'theme_front_page_settings');
         
    add_submenu_page('724_theme_settings', 
        'Front Page Elements', 'Front Page', 'manage_options', 
        '724_theme_settings', 'theme_front_page_settings'); 
}

function theme_front_page_settings() {
?>
<div class="wrap">
        <?php screen_icon('themes'); ?> 
        <h2>Theme Options</h2>
<form method="post" action="options.php">
    <?php 
    // Load the options from the WP db
    $options = get_option('my_theme_options');
    // WP built-in function to display the appropriate fields for saving options
    settings_fields("my_options"); ?>

    <h3>Top Logo Options</h3>
    <h4>Leave Fields Blank if you don't want to use them.</h4>
    <table class="form-table">
        <tr>
            <th scope="row">Paste in the URL of the new logo:</th>
            <td>
                <input type="text" name="my_theme_options[new_logo]" size="40" value="<?php echo stripslashes($options["new_logo"]); ?>" />
            </td>
        </tr>
        <tr>
            <th scope="row">How many pixels top?</th>
            <td>
                <input type="text" name="my_theme_options[c_top]" size="40" value="<?php echo stripslashes($options["c_top"]); ?>" />
            </td>
        </tr>
        <tr>
            <th scope="row">How many pixels left?</th>
            <td>
                <input type="text" name="my_theme_options[c_left]" size="40" value="<?php echo stripslashes($options["c_left"]); ?>" />
            </td>
        </tr>
         
    </table>
    <p class="submit">
        <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
    </p>
    
    <!--h3>Social Icons</h3>
    <h4>Leave Fields Blank if you don't want to use them.</h4>
    <table class="form-table">
        <tr>
            <th scope="row">Paste in the URL of your Facebook PAGE:</th>
            <td>
                <input type="text" name="my_theme_options[facebook_url]" size="40" value="<?php echo stripslashes($options["facebook_url"]); ?>" />
            </td>
        </tr>
        <tr>
            <th scope="row">URL of your Facebook LOGO (upload in Media section first):</th>
            <td>
                <input type="text" name="my_theme_options[facebook_logo_url]" size="40" value="<?php echo stripslashes($options["facebook_logo_url"]); ?>" />
            </td>
        </tr>
       <tr>
            <th scope="row">Paste in the URL of your Twitter PAGE:</th>
            <td>
                <input type="text" name="my_theme_options[Twitter_url]" size="40" value="<?php echo stripslashes($options["Twitter_url"]); ?>" />
            </td>
        </tr>
        <tr>
            <th scope="row">URL of your Twitter LOGO (upload in Media section first):</th>
            <td>
                <input type="text" name="my_theme_options[Twitter_logo_url]" size="40" value="<?php echo stripslashes($options["Twitter_logo_url"]); ?>" />
            </td>
        </tr>
       <tr>
            <th scope="row">Paste in the URL of your LinkedIN PAGE:</th>
            <td>
                <input type="text" name="my_theme_options[linkedin_url]" size="40" value="<?php echo stripslashes($options["linkedin_url"]); ?>" />
            </td>
        </tr>
        <tr>
            <th scope="row">URL of your LinkedIN LOGO (upload in Media section first):</th>
            <td>
                <input type="text" name="my_theme_options[linkedin_logo_url]" size="40" value="<?php echo stripslashes($options["linkedin_logo_url"]); ?>" />
            </td>
        </tr>        
    </table>
    <p class="submit">
        <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
    </p-->    

    <h3>Other Settings</h3>
    
    <table class="form-table">
        <tr>
            <th scope="row">Paste in the URL of your FAVICON:</th>
            <td>
                <input type="text" name="my_theme_options[favicon_url]" size="40" value="<?php echo stripslashes($options["favicon_url"]); ?>" />
            </td>
        </tr>
        <!--tr>
            <th scope="row">URL of your Facebook LOGO (upload in Media section first):</th>
            <td>
                <input type="text" name="my_theme_options[facebook_logo_url]" size="40" value="<?php echo stripslashes($options["facebook_logo_url"]); ?>" />
            </td>
        </tr>
       <tr>
            <th scope="row">Paste in the URL of your Twitter PAGE:</th>
            <td>
                <input type="text" name="my_theme_options[Twitter_url]" size="40" value="<?php echo stripslashes($options["Twitter_url"]); ?>" />
            </td>
        </tr>
        <tr>
            <th scope="row">URL of your Twitter LOGO (upload in Media section first):</th>
            <td>
                <input type="text" name="my_theme_options[Twitter_logo_url]" size="40" value="<?php echo stripslashes($options["Twitter_logo_url"]); ?>" />
            </td>
        </tr>
       <tr>
            <th scope="row">Paste in the URL of your LinkedIN PAGE:</th>
            <td>
                <input type="text" name="my_theme_options[linkedin_url]" size="40" value="<?php echo stripslashes($options["linkedin_url"]); ?>" />
            </td>
        </tr>
        <tr>
            <th scope="row">URL of your LinkedIN LOGO (upload in Media section first):</th>
            <td>
                <input type="text" name="my_theme_options[linkedin_logo_url]" size="40" value="<?php echo stripslashes($options["linkedin_logo_url"]); ?>" />
            </td>
        </tr-->        
    </table>
    <p class="submit">
        <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
    </p>  

</form>
</div>
<?php
}


add_action("admin_init", "my_theme_admin_init");
add_action("admin_menu", "setup_theme_admin_menus");



