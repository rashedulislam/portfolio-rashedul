<?php
/**
 * Rashedul\'s PortFolio functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Rashedul\'s_PortFolio
 */

if ( ! defined( 'RA_S_VERSION' ) ) {
	define( 'RA_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'rashedul_islam_setup' ) ) :

	function rashedul_islam_setup() {

		load_theme_textdomain( 'rashedul_islam', get_template_directory() . '/languages' );

		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

    
    add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			)
    );
    
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 1568, 9999 );

		register_nav_menus(
			array(
				'main_menu' => esc_html__( 'Main Menu', 'rashedul_islam' ),
				'header_social' => esc_html__( 'Header Social Menu', 'rashedul_islam' ),
				'footer_social' => esc_html__( 'Footer Social Menu', 'rashedul_islam' ),
			)
		);

		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
    );
    
    $logo_width  = 300;
    $logo_height = 100;
    
    add_theme_support(
			'custom-logo',
			array(
				'height'               => $logo_height,
				'width'                => $logo_width,
				'flex-width'           => true,
				'flex-height'          => true,
				'unlink-homepage-logo' => true,
			)
    );
    
    add_theme_support( 'customize-selective-refresh-widgets' );

		add_theme_support( 'wp-block-styles' );

    add_theme_support( 'align-wide' );
    
    add_theme_support( 'editor-styles' );

    $editor_stylesheet_path = './assets/css/style-editor.css';
    add_editor_style( $editor_stylesheet_path );

    add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => esc_html__( 'Extra small', 'rashedul_islam' ),
					'shortName' => esc_html_x( 'XS', 'Font size', 'rashedul_islam' ),
					'size'      => 16,
					'slug'      => 'extra-small',
				),
				array(
					'name'      => esc_html__( 'Small', 'rashedul_islam' ),
					'shortName' => esc_html_x( 'S', 'Font size', 'rashedul_islam' ),
					'size'      => 18,
					'slug'      => 'small',
				),
				array(
					'name'      => esc_html__( 'Normal', 'rashedul_islam' ),
					'shortName' => esc_html_x( 'M', 'Font size', 'rashedul_islam' ),
					'size'      => 20,
					'slug'      => 'normal',
				),
				array(
					'name'      => esc_html__( 'Large', 'rashedul_islam' ),
					'shortName' => esc_html_x( 'L', 'Font size', 'rashedul_islam' ),
					'size'      => 24,
					'slug'      => 'large',
				),
				array(
					'name'      => esc_html__( 'Extra large', 'rashedul_islam' ),
					'shortName' => esc_html_x( 'XL', 'Font size', 'rashedul_islam' ),
					'size'      => 40,
					'slug'      => 'extra-large',
				),
				array(
					'name'      => esc_html__( 'Huge', 'rashedul_islam' ),
					'shortName' => esc_html_x( 'XXL', 'Font size', 'rashedul_islam' ),
					'size'      => 96,
					'slug'      => 'huge',
				),
				array(
					'name'      => esc_html__( 'Gigantic', 'rashedul_islam' ),
					'shortName' => esc_html_x( 'XXXL', 'Font size', 'rashedul_islam' ),
					'size'      => 144,
					'slug'      => 'gigantic',
				),
			)
    );
    
		add_theme_support(
			'custom-background',
			apply_filters(
				'rashedul_islam_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
    );
    
		// Editor color palette.
		$black     = '#000000';
		$dark_gray = '#28303D';
		$gray      = '#39414D';
		$green     = '#D1E4DD';
		$blue      = '#D1DFE4';
		$purple    = '#D1D1E4';
		$red       = '#E4D1D1';
		$orange    = '#E4DAD1';
		$yellow    = '#EEEADD';
		$white     = '#FFFFFF';

		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => esc_html__( 'Black', 'rashedul_islam' ),
					'slug'  => 'black',
					'color' => $black,
				),
				array(
					'name'  => esc_html__( 'Dark gray', 'rashedul_islam' ),
					'slug'  => 'dark-gray',
					'color' => $dark_gray,
				),
				array(
					'name'  => esc_html__( 'Gray', 'rashedul_islam' ),
					'slug'  => 'gray',
					'color' => $gray,
				),
				array(
					'name'  => esc_html__( 'Green', 'rashedul_islam' ),
					'slug'  => 'green',
					'color' => $green,
				),
				array(
					'name'  => esc_html__( 'Blue', 'rashedul_islam' ),
					'slug'  => 'blue',
					'color' => $blue,
				),
				array(
					'name'  => esc_html__( 'Purple', 'rashedul_islam' ),
					'slug'  => 'purple',
					'color' => $purple,
				),
				array(
					'name'  => esc_html__( 'Red', 'rashedul_islam' ),
					'slug'  => 'red',
					'color' => $red,
				),
				array(
					'name'  => esc_html__( 'Orange', 'rashedul_islam' ),
					'slug'  => 'orange',
					'color' => $orange,
				),
				array(
					'name'  => esc_html__( 'Yellow', 'rashedul_islam' ),
					'slug'  => 'yellow',
					'color' => $yellow,
				),
				array(
					'name'  => esc_html__( 'White', 'rashedul_islam' ),
					'slug'  => 'white',
					'color' => $white,
				),
			)
		);

		add_theme_support(
			'editor-gradient-presets',
			array(
				array(
					'name'     => esc_html__( 'Purple to yellow', 'rashedul_islam' ),
					'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $yellow . ' 100%)',
					'slug'     => 'purple-to-yellow',
				),
				array(
					'name'     => esc_html__( 'Yellow to purple', 'rashedul_islam' ),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $purple . ' 100%)',
					'slug'     => 'yellow-to-purple',
				),
				array(
					'name'     => esc_html__( 'Green to yellow', 'rashedul_islam' ),
					'gradient' => 'linear-gradient(160deg, ' . $green . ' 0%, ' . $yellow . ' 100%)',
					'slug'     => 'green-to-yellow',
				),
				array(
					'name'     => esc_html__( 'Yellow to green', 'rashedul_islam' ),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $green . ' 100%)',
					'slug'     => 'yellow-to-green',
				),
				array(
					'name'     => esc_html__( 'Red to yellow', 'rashedul_islam' ),
					'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $yellow . ' 100%)',
					'slug'     => 'red-to-yellow',
				),
				array(
					'name'     => esc_html__( 'Yellow to red', 'rashedul_islam' ),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $red . ' 100%)',
					'slug'     => 'yellow-to-red',
				),
				array(
					'name'     => esc_html__( 'Purple to red', 'rashedul_islam' ),
					'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $red . ' 100%)',
					'slug'     => 'purple-to-red',
				),
				array(
					'name'     => esc_html__( 'Red to purple', 'rashedul_islam' ),
					'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $purple . ' 100%)',
					'slug'     => 'red-to-purple',
				),
			)
		);

		add_theme_support( 'responsive-embeds' );

		add_theme_support( 'custom-line-height' );

		add_theme_support( 'experimental-link-color' );

		add_theme_support( 'custom-spacing' );

		add_theme_support( 'custom-units' );

	}
endif;
add_action( 'after_setup_theme', 'rashedul_islam_setup' );

function rashedul_islam_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'rashedul_islam_content_width', 640 );
}
add_action( 'after_setup_theme', 'rashedul_islam_content_width', 0 );


function rashedul_islam_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'rashedul_islam' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'rashedul_islam' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'rashedul_islam_widgets_init' );


/**
 * Enqueue scripts and styles.
 */
function rashedul_islam_scripts() {

  wp_enqueue_style( 'rashedul_islam-custom-style', get_template_directory_uri() . 'assets/css/ra-custom-style.css', array(), wp_get_theme()->get( 'Version' ) );
  wp_enqueue_style( 'rashedul_islam-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );


  wp_enqueue_script( 'rashedul_islam-custom-js', get_template_directory_uri() . 'assets/js/ra-custom-js.js', array(), wp_get_theme()->get( 'Version' ), true );
	wp_enqueue_script( 'rashedul_islam-navigation', get_template_directory_uri() . 'assets/js/navigation.js', array(), wp_get_theme()->get( 'Version' ), true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'rashedul_islam_scripts' );


require get_template_directory() . '/inc/custom-header.php';

require get_template_directory() . '/inc/template-tags.php';

require get_template_directory() . '/inc/template-functions.php';

require get_template_directory() . '/inc/customizer.php';

