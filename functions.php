<?php
/**
 * zealab functions and definitions
 *
 * @package zealab
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'zealab_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function zealab_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on zealab, use a find and replace
	 * to change 'zealab' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'zealab', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'zealab' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	add_theme_support( 'post-thumbnails' );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'zealab_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}

endif; // zealab_setup

add_action( 'after_setup_theme', 'zealab_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function zealab_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'zealab' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'zealab_widgets_init' );


// GET USER AVATAR BY EMAIL
// function zealab_display_gravatar() { 
// 	global $current_user;
// 	get_currentuserinfo();
// 	// Get User Email Address
// 	$getuseremail = $current_user->user_email;
// 	// Convert email into md5 hash and set image size to 128 px
// 	$usergravatar = 'http://www.gravatar.com/avatar/' . md5($getuseremail) . '?s=128';
// 	echo '<img src="' . $usergravatar . '" class="wpb_gravatar" />';
// } 


/** Required Plugins
/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.4.0
 * @author     Thomas Griffin <thomasgriffinmedia.com>
 * @author     Gary Jones <gamajo.com>
 * @copyright  Copyright (c) 2014, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
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

        // This is an example of how to include a plugin pre-packaged with a theme.
        array(
            'name'               => 'Disqus Comment System', // The plugin name.
            'slug'               => 'disqus-comment-system', // The plugin slug (typically the folder name).
            'source'             => get_stylesheet_directory() . '/lib/plugins/disqus-comment-system.zip', // The plugin source.
            'required'           => false, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher.
            'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
        ),
        array(
            'name'               => 'Clean and Simple Contact Form by Meg Nicholas', // The plugin name.
            'slug'               => 'clean-and-simple-contact-form-by-meg-nicholas', // The plugin slug (typically the folder name).
            'source'             => get_stylesheet_directory() . '/lib/plugins/clean-and-simple-contact-form-by-meg-nicholas.4.4.3.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher.
            'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
        ),
        array(
            'name'               => 'Kudos', // The plugin name.
            'slug'               => 'kudos', // The plugin slug (typically the folder name).
            'source'             => get_stylesheet_directory() . '/lib/plugins/kudos.1.1.1.zip', // The plugin source.
            'required'           => false, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher.
            'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
        ),
        array(
            'name'               => 'WPMandrill', // The plugin name.
            'slug'               => 'wpmandrill', // The plugin slug (typically the folder name).
            'source'             => get_stylesheet_directory() . '/lib/plugins/wpmandrill.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher.
            'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
        ),
    );

    /**
     * Array of configuration settings. Amend each line as needed.
     * If you want the default strings to be available under your own theme domain,
     * leave the strings uncommented.
     * Some of the strings are added into a sprintf, so see the comments at the
     * end of each line for what each argument will be.
     */
    $config = array(
        'default_path' => '',                      // Default absolute path to pre-packaged plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
        'strings'      => array(
            'page_title'                      => __( 'Install Required Plugins', 'tgmpa' ),
            'menu_title'                      => __( 'Install Plugins', 'tgmpa' ),
            'installing'                      => __( 'Installing Plugin: %s', 'tgmpa' ), // %s = plugin name.
            'oops'                            => __( 'Something went wrong with the plugin API.', 'tgmpa' ),
            'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.' ), // %1$s = plugin name(s).
            'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.' ), // %1$s = plugin name(s).
            'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.' ), // %1$s = plugin name(s).
            'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s).
            'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s).
            'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' ), // %1$s = plugin name(s).
            'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' ), // %1$s = plugin name(s).
            'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ), // %1$s = plugin name(s).
            'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins' ),
            'activate_link'                   => _n_noop( 'Begin activating plugin', 'Begin activating plugins' ),
            'return'                          => __( 'Return to Required Plugins Installer', 'tgmpa' ),
            'plugin_activated'                => __( 'Plugin activated successfully.', 'tgmpa' ),
            'complete'                        => __( 'All plugins installed and activated successfully. %s', 'tgmpa' ), // %s = dashboard link.
            'nag_type'                        => 'updated' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
        )
    );

    tgmpa( $plugins, $config );

}


// TITAN FRAMEWORK CODE
// EMBED FIRST

require_once( 'titan-framework/titan-framework-embedder.php' );

// TITAN FRAMEWORK OPTIONS

add_action( 'tf_create_options', 'zealab_options' );
function zealab_options() {

    $titan = TitanFramework::getInstance( 'zealab-theme' );

    $panel = $titan->createAdminPanel( array(
        'name' => 'Zealab Options',
        'icon' => 'dashicons-carrot',
    ) );


    //TAB GENERAL
    $tab_general = $panel->createTab( array(
        'name' => 'GENERAL',
        'title' => 'General',
        'desc' => 'This is General section',
    ) );

    $tab_general->createOption( array(
        'name' => 'Upload Avatar',
        'id' => 'upload_avatar',
        'type' => 'upload',
        'size' => '128',
        'desc' => 'Upload your avatar here'
    ) );

    $tab_general->createOption( array(
        'name' => 'Your Name',
        'id' => 'your_name',
        'type' => 'text',
        'desc' => 'Who are you?'
    ) ); 

    $tab_general->createOption( array(
        'name' => 'Rotating Word 1',
        'id' => 'rotating_word_1',
        'type' => 'text',
        'desc' => 'Text for rotating word 1 here'
    ) ); 

    $tab_general->createOption( array(
        'name' => 'Rotating Word 2',
        'id' => 'rotating_word_2',
        'type' => 'text',
        'desc' => 'Text for rotating word 2 here'
    ) ); 

    $tab_general->createOption( array(
        'name' => 'Rotating Word 3',
        'id' => 'rotating_word_3',
        'type' => 'text',
        'desc' => 'Text for rotating word 3 here'
    ) ); 

    $tab_general->createOption( array(
        'name' => 'Rotating Word 4',
        'id' => 'rotating_word_4',
        'type' => 'text',
        'desc' => 'Text for rotating word 4 here'
    ) ); 

    $tab_general->createOption( array(
        'name' => 'Rotating Word 5',
        'id' => 'rotating_word_5',
        'type' => 'text',
        'desc' => 'Text for rotating word 5 here'
    ) ); 

    $tab_general->createOption( array(
        'name' => 'Rotating Word 6',
        'id' => 'rotating_word_6',
        'type' => 'text',
        'desc' => 'Text for rotating word 6 here'
    ) ); 

    $tab_general->createOption( array(
        'type' => 'save'
    ) );



    // TAB SERVICES GRID
    $tab_services = $panel->createTab( array(
        'name' => 'SERVICES',
        'title' => 'Services',
        'desc' => 'This is tab for "Services" Section',

    ) );

    $tab_services->createOption( array(
        'name' => 'Icon 1 Title',
        'id' => 'service_icon_1_title',
        'type' => 'text',
        'desc' => 'Title for Icon 1 here'
    ) ); 

    $tab_services->createOption( array(
        'name' => 'Icon 1 Image',
        'id' => 'service_icon_1_image',
        'type' => 'text',
        'desc' => 'Use Font Awesome class for Icon 1 here (JUST CLASS! DO NOT COPY ENTIRE "i" TAG HERE!)'
    ) ); 

    $tab_services->createOption( array(
        'name' => 'Icon 1 Desc',
        'id' => 'service_icon_1_desc',
        'type' => 'textarea',
        'desc' => 'This is text/desc for icon 1'
    ) );

    $tab_services->createOption( array(
        'name' => 'Icon 2 Title',
        'id' => 'service_icon_2_title',
        'type' => 'text',
        'desc' => 'Title for Icon 2 here'
    ) ); 

    $tab_services->createOption( array(
        'name' => 'Icon 2 Image',
        'id' => 'service_icon_2_image',
        'type' => 'text',
        'desc' => 'Use Font Awesome class for Icon 2 here (JUST CLASS! DO NOT COPY ENTIRE "i" TAG HERE!)'
    ) ); 

    $tab_services->createOption( array(
        'name' => 'Icon 2 Desc',
        'id' => 'service_icon_2_desc',
        'type' => 'textarea',
        'desc' => 'This is text/desc for icon 2'
    ) );

    $tab_services->createOption( array(
        'name' => 'Icon 3 Title',
        'id' => 'service_icon_3_title',
        'type' => 'text',
        'desc' => 'Title for Icon 3 here'
    ) ); 

    $tab_services->createOption( array(
        'name' => 'Icon 3 Image',
        'id' => 'service_icon_3_image',
        'type' => 'text',
        'desc' => 'Use Font Awesome class for Icon 3 here (JUST CLASS! DO NOT COPY ENTIRE "i" TAG HERE!)'
    ) ); 

    $tab_services->createOption( array(
        'name' => 'Icon 3 Desc',
        'id' => 'service_icon_3_desc',
        'type' => 'textarea',
        'desc' => 'This is text/desc for icon 3'
    ) );

    $tab_services->createOption( array(
        'name' => 'Icon 4 Title',
        'id' => 'service_icon_4_title',
        'type' => 'text',
        'desc' => 'Title for Icon 4 here'
    ) ); 

    $tab_services->createOption( array(
        'name' => 'Icon 4 Image',
        'id' => 'service_icon_4_image',
        'type' => 'text',
        'desc' => 'Use Font Awesome class for Icon 4 here (JUST CLASS! DO NOT COPY ENTIRE "i" TAG HERE!)'
    ) ); 

    $tab_services->createOption( array(
        'name' => 'Icon 4 Desc',
        'id' => 'service_icon_4_desc',
        'type' => 'textarea',
        'desc' => 'This is text/desc for icon 4'
    ) );

     $tab_services->createOption( array(
        'type' => 'save'
    ) );


    //TAB ABOUT ME GRID
    $tab_about = $panel->createTab( array(
        'name' => 'ABOUT',
        'title' => 'About',
        'desc' => 'This is tab for "About Me" Section',
    ) );

    $tab_about->createOption( array(
        'name' => 'Icon 1 Image',
        'id' => 'about_icon_1_image',
        'type' => 'text',
        'desc' => 'Use Font Awesome class for Icon 1 here'
    ) ); 

    $tab_about->createOption( array(
        'name' => 'Icon 1 Text',
        'id' => 'about_icon_1_text',
        'type' => 'text',
        'desc' => 'This is text/desc for icon 1'
    ) );

    $tab_about->createOption( array(
        'name' => 'Icon 2 Image',
        'id' => 'about_icon_2_image',
        'type' => 'text',
        'desc' => 'Use Font Awesome class for Icon 2 here'
    ) ); 

    $tab_about->createOption( array(
        'name' => 'Icon 2 Text',
        'id' => 'about_icon_2_text',
        'type' => 'text',
        'desc' => 'This is text/desc for icon 2'
    ) );

    $tab_about->createOption( array(
        'name' => 'Icon 3 Image',
        'id' => 'about_icon_3_image',
        'type' => 'text',
        'desc' => 'Use Font Awesome class for Icon 3 here'
    ) ); 

    $tab_about->createOption( array(
        'name' => 'Icon 3 Text',
        'id' => 'about_icon_3_text',
        'type' => 'text',
        'desc' => 'This is text/desc for icon 3'
    ) );

    $tab_about->createOption( array(
        'name' => 'Icon 4 Image',
        'id' => 'about_icon_4_image',
        'type' => 'text',
        'desc' => 'Use Font Awesome class for Icon 4 here'
    ) ); 

    $tab_about->createOption( array(
        'name' => 'Icon 4 Text',
        'id' => 'about_icon_4_text',
        'type' => 'text',
        'desc' => 'This is text/desc for icon 4'
    ) );

     $tab_about->createOption( array(
        'type' => 'save'
    ) );
}


/**
 * Enqueue scripts and styles.
 */
function zealab_scripts() {
	wp_enqueue_style( 'zealab-style', get_stylesheet_uri() );


	// ================ // CSS // ================ //

	// SKELETON
	wp_register_style('skeleton', get_template_directory_uri() . '/assets/css/skeleton.css');    
    wp_enqueue_style('skeleton');
    
    // NORMALIZE
	wp_register_style('normalize', get_template_directory_uri() . '/assets/css/normalize.css');    
    wp_enqueue_style('normalize');

    // CUSTOM
	wp_register_style('custom-style', get_template_directory_uri() . '/assets/css/custom.css');    
    wp_enqueue_style('custom-style');

    // FONT AWESOME
    wp_register_style('fontAwesome', get_template_directory_uri() .'/assets/css/font-awesome.min.css');
    wp_enqueue_style( 'fontAwesome');

    // FONT MFIZZ
    wp_register_style('fontMfizz', get_template_directory_uri() .'/assets/css/font-mfizz.css');
    wp_enqueue_style( 'fontMfizz');


    // GOOGLE FONT
    wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Montserrat');
    wp_enqueue_style( 'googleFonts');



	// ================ // JAVASCRIPT // ================ //

    // JQUERY
    wp_enqueue_script("jquery");

    // _S NAVIGATION JS
	wp_enqueue_script( 'zealab-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	// _S ???
	wp_enqueue_script( 'zealab-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'zealab_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';