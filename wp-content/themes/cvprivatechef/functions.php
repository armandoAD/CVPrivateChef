<?php
/**
 * CV Private Chef functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 */

/**
 * CV Private Chef only works in WordPress 4.7 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.7-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function cvprivatechef_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/cvprivatechef
	 * If you're building a theme based on CV Private Chef, use a find and replace
	 * to change 'cvprivatechef' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'cvprivatechef' );

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
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	add_image_size( 'cvprivatechef-featured-image', 2000, 1200, true );

	add_image_size( 'cvprivatechef-thumbnail-avatar', 100, 100, true );

	// Set the default content width.
	$GLOBALS['content_width'] = 525;

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'top'    => __( 'Top Menu', 'cvprivatechef' ),
		'social' => __( 'Social Links Menu', 'cvprivatechef' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, and column width.
 	 */
	add_editor_style( array( 'assets/css/editor-style.css', cvprivatechef_fonts_url() ) );

	// Define and register starter content to showcase the theme on new sites.
	$starter_content = array(
		'widgets' => array(
			// Place three core-defined widgets in the sidebar area.
			'sidebar-1' => array(
				'text_business_info',
				'search',
				'text_about',
			),

			// Add the core-defined business info widget to the footer 1 area.
			'sidebar-2' => array(
				'text_business_info',
			),

			// Put two core-defined widgets in the footer 2 area.
			'sidebar-3' => array(
				'text_about',
				'search',
			),

            // Put three core-defined widgets in the footer 3 area.
            'sidebar-4' => array(
                'text_about',
                'search',
            ),
		),

		// Specify the core-defined pages to create and add custom thumbnails to some of them.
		'posts' => array(
			'home',
			'about' => array(
				'thumbnail' => '{{image-sandwich}}',
			),
			'contact' => array(
				'thumbnail' => '{{image-espresso}}',
			),
			'blog' => array(
				'thumbnail' => '{{image-coffee}}',
			),
			'homepage-section' => array(
				'thumbnail' => '{{image-espresso}}',
			),
		),

		// Create the custom image attachments used as post thumbnails for pages.
		'attachments' => array(
			'image-espresso' => array(
				'post_title' => _x( 'Espresso', 'Theme starter content', 'cvprivatechef' ),
				'file' => 'assets/images/espresso.jpg', // URL relative to the template directory.
			),
			'image-sandwich' => array(
				'post_title' => _x( 'Sandwich', 'Theme starter content', 'cvprivatechef' ),
				'file' => 'assets/images/sandwich.jpg',
			),
			'image-coffee' => array(
				'post_title' => _x( 'Coffee', 'Theme starter content', 'cvprivatechef' ),
				'file' => 'assets/images/coffee.jpg',
			),
		),

		// Default to a static front page and assign the front and posts pages.
		'options' => array(
			'show_on_front' => 'page',
			'page_on_front' => '{{home}}',
			'page_for_posts' => '{{blog}}',
		),

		// Set the front page section theme mods to the IDs of the core-registered pages.
		'theme_mods' => array(
			'panel_1' => '{{homepage-section}}',
			'panel_2' => '{{about}}',
			'panel_3' => '{{blog}}',
			'panel_4' => '{{contact}}',
		),

		// Set up nav menus for each of the two areas registered in the theme.
		'nav_menus' => array(
			// Assign a menu to the "top" location.
			'top' => array(
				'name' => __( 'Top Menu', 'cvprivatechef' ),
				'items' => array(
					'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
					'page_about',
					'page_blog',
					'page_contact',
				),
			),

			// Assign a menu to the "social" location.
			'social' => array(
				'name' => __( 'Social Links Menu', 'cvprivatechef' ),
				'items' => array(
					'link_yelp',
					'link_facebook',
					'link_twitter',
					'link_instagram',
					'link_email',
				),
			),
		),
	);

	/**
	 * Filters CV Private Chef array of starter content.
	 *
	 * @since CV Private Chef 1.1
	 *
	 * @param array $starter_content Array of starter content.
	 */
	$starter_content = apply_filters( 'cvprivatechef_starter_content', $starter_content );

	add_theme_support( 'starter-content', $starter_content );
}
add_action( 'after_setup_theme', 'cvprivatechef_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function cvprivatechef_content_width() {

	$content_width = $GLOBALS['content_width'];

	// Get layout.
	$page_layout = get_theme_mod( 'page_layout' );

	// Check if layout is one column.
	if ( 'one-column' === $page_layout ) {
		if ( cvprivatechef_is_frontpage() ) {
			$content_width = 644;
		} elseif ( is_page() ) {
			$content_width = 740;
		}
	}

	// Check if is single post and there is no sidebar.
	if ( is_single() && ! is_active_sidebar( 'sidebar-1' ) ) {
		$content_width = 740;
	}

	/**
	 * Filter CV Private Chef content width of the theme.
	 *
	 * @since CV Private Chef 1.0
	 *
	 * @param int $content_width Content width in pixels.
	 */
	$GLOBALS['content_width'] = apply_filters( 'cvprivatechef_content_width', $content_width );
}
add_action( 'template_redirect', 'cvprivatechef_content_width', 0 );

/**
 * Register custom fonts.
 */
function cvprivatechef_fonts_url() {
	$fonts_url = '';

	/*
	 * Translators: If there are characters in your language that are not
	 * supported by Libre Franklin, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$libre_franklin = _x( 'on', 'Libre Franklin font: on or off', 'cvprivatechef' );

	if ( 'off' !== $libre_franklin ) {
		$font_families = array();

		$font_families[] = 'Libre Franklin:300,300i,400,400i,600,600i,800,800i';

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return esc_url_raw( $fonts_url );
}

/**
 * Add preconnect for Google Fonts.
 *
 * @since CV Private Chef 1.0
 *
 * @param array  $urls           URLs to print for resource hints.
 * @param string $relation_type  The relation type the URLs are printed.
 * @return array $urls           URLs to print for resource hints.
 */
function cvprivatechef_resource_hints( $urls, $relation_type ) {
	if ( wp_style_is( 'cvprivatechef-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
		$urls[] = array(
			'href' => 'https://fonts.gstatic.com',
			'crossorigin',
		);
	}

	return $urls;
}
add_filter( 'wp_resource_hints', 'cvprivatechef_resource_hints', 10, 2 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cvprivatechef_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'cvprivatechef' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'cvprivatechef' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'cvprivatechef' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'cvprivatechef' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'cvprivatechef' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'cvprivatechef' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

    register_sidebar( array(
        'name'          => __( 'Footer 3', 'cvprivatechef' ),
        'id'            => 'sidebar-4',
        'description'   => __( 'Add widgets here to appear in your footer.', 'cvprivatechef' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'cvprivatechef_widgets_init' );

/**
 * Replaces "[...]" (appended to automatically generated excerpts) with ... and
 * a 'Continue reading' link.
 *
 * @since CV Private Chef 1.0
 *
 * @param string $link Link to single post/page.
 * @return string 'Continue reading' link prepended with an ellipsis.
 */
function cvprivatechef_excerpt_more( $link ) {
	if ( is_admin() ) {
		return $link;
	}

	$link = sprintf( '<p class="link-more"><a href="%1$s" class="more-link">%2$s</a></p>',
		esc_url( get_permalink( get_the_ID() ) ),
		/* translators: %s: Name of current post */
		sprintf( __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'cvprivatechef' ), get_the_title( get_the_ID() ) )
	);
	return ' &hellip; ' . $link;
}
add_filter( 'excerpt_more', 'cvprivatechef_excerpt_more' );

/**
 * Handles JavaScript detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since CV Private Chef 1.0
 */
function cvprivatechef_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'cvprivatechef_javascript_detection', 0 );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function cvprivatechef_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">' . "\n", get_bloginfo( 'pingback_url' ) );
	}
}
add_action( 'wp_head', 'cvprivatechef_pingback_header' );

/**
 * Display custom color CSS.
 */
function cvprivatechef_colors_css_wrap() {
	if ( 'custom' !== get_theme_mod( 'colorscheme' ) && ! is_customize_preview() ) {
		return;
	}

	require_once( get_parent_theme_file_path( '/inc/color-patterns.php' ) );
	$hue = absint( get_theme_mod( 'colorscheme_hue', 250 ) );
?>
	<style type="text/css" id="custom-theme-colors" <?php if ( is_customize_preview() ) { echo 'data-hue="' . $hue . '"'; } ?>>
		<?php echo cvprivatechef_custom_colors_css(); ?>
	</style>
<?php }
add_action( 'wp_head', 'cvprivatechef_colors_css_wrap' );

/**
 * Enqueue scripts and styles.
 */
function cvprivatechef_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'cvprivatechef-fonts', cvprivatechef_fonts_url(), array(), null );

	// Theme stylesheet.
	wp_enqueue_style( 'cvprivatechef-style', get_stylesheet_uri() );

	// Load the dark colorscheme.
	if ( 'dark' === get_theme_mod( 'colorscheme', 'light' ) || is_customize_preview() ) {
		wp_enqueue_style( 'cvprivatechef-colors-dark', get_theme_file_uri( '/assets/css/colors-dark.css' ), array( 'cvprivatechef-style' ), '1.0' );
	}

	// Load the Internet Explorer 9 specific stylesheet, to fix display issues in the Customizer.
	if ( is_customize_preview() ) {
		wp_enqueue_style( 'cvprivatechef-ie9', get_theme_file_uri( '/assets/css/ie9.css' ), array( 'cvprivatechef-style' ), '1.0' );
		wp_style_add_data( 'cvprivatechef-ie9', 'conditional', 'IE 9' );
	}

	// Load the Internet Explorer 8 specific stylesheet.
	wp_enqueue_style( 'cvprivatechef-ie8', get_theme_file_uri( '/assets/css/ie8.css' ), array( 'cvprivatechef-style' ), '1.0' );
	wp_style_add_data( 'cvprivatechef-ie8', 'conditional', 'lt IE 9' );

	// Load the html5 shiv.
	wp_enqueue_script( 'html5', get_theme_file_uri( '/assets/js/html5.js' ), array(), '3.7.3' );
	wp_script_add_data( 'html5', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'cvprivatechef-skip-link-focus-fix', get_theme_file_uri( '/assets/js/skip-link-focus-fix.js' ), array(), '1.0', true );

	$cvprivatechef_l10n = array(
		'quote'          => cvprivatechef_get_svg( array( 'icon' => 'quote-right' ) ),
	);

	if ( has_nav_menu( 'top' ) ) {
		wp_enqueue_script( 'cvprivatechef-navigation', get_theme_file_uri( '/assets/js/navigation.js' ), array( 'jquery' ), '1.0', true );
		$cvprivatechef_l10n['expand']         = __( 'Expand child menu', 'cvprivatechef' );
		$cvprivatechef_l10n['collapse']       = __( 'Collapse child menu', 'cvprivatechef' );
		$cvprivatechef_l10n['icon']           = cvprivatechef_get_svg( array( 'icon' => 'angle-down', 'fallback' => true ) );
	}

	wp_enqueue_script( 'cvprivatechef-global', get_theme_file_uri( '/assets/js/global.js' ), array( 'jquery' ), '1.0', true );

	wp_enqueue_script( 'jquery-scrollto', get_theme_file_uri( '/assets/js/jquery.scrollTo.js' ), array( 'jquery' ), '2.1.2', true );

	wp_localize_script( 'cvprivatechef-skip-link-focus-fix', 'cvprivatechefScreenReaderText', $cvprivatechef_l10n );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'cvprivatechef_scripts' );

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for content images.
 *
 * @since CV Private Chef 1.0
 *
 * @param string $sizes A source size value for use in a 'sizes' attribute.
 * @param array  $size  Image size. Accepts an array of width and height
 *                      values in pixels (in that order).
 * @return string A source size value for use in a content image 'sizes' attribute.
 */
function cvprivatechef_content_image_sizes_attr( $sizes, $size ) {
	$width = $size[0];

	if ( 740 <= $width ) {
		$sizes = '(max-width: 706px) 89vw, (max-width: 767px) 82vw, 740px';
	}

	if ( is_active_sidebar( 'sidebar-1' ) || is_archive() || is_search() || is_home() || is_page() ) {
		if ( ! ( is_page() && 'one-column' === get_theme_mod( 'page_options' ) ) && 767 <= $width ) {
			 $sizes = '(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px';
		}
	}

	return $sizes;
}
add_filter( 'wp_calculate_image_sizes', 'cvprivatechef_content_image_sizes_attr', 10, 2 );

/**
 * Filter the `sizes` value in the header image markup.
 *
 * @since CV Private Chef 1.0
 *
 * @param string $html   The HTML image tag markup being filtered.
 * @param object $header The custom header object returned by 'get_custom_header()'.
 * @param array  $attr   Array of the attributes for the image tag.
 * @return string The filtered header image HTML.
 */
function cvprivatechef_header_image_tag( $html, $header, $attr ) {
	if ( isset( $attr['sizes'] ) ) {
		$html = str_replace( $attr['sizes'], '100vw', $html );
	}
	return $html;
}
add_filter( 'get_header_image_tag', 'cvprivatechef_header_image_tag', 10, 3 );

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for post thumbnails.
 *
 * @since CV Private Chef 1.0
 *
 * @param array $attr       Attributes for the image markup.
 * @param int   $attachment Image attachment ID.
 * @param array $size       Registered image size or flat array of height and width dimensions.
 * @return string A source size value for use in a post thumbnail 'sizes' attribute.
 */
function cvprivatechef_post_thumbnail_sizes_attr( $attr, $attachment, $size ) {
	if ( is_archive() || is_search() || is_home() ) {
		$attr['sizes'] = '(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px';
	} else {
		$attr['sizes'] = '100vw';
	}

	return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'cvprivatechef_post_thumbnail_sizes_attr', 10, 3 );

/**
 * Use front-page.php when Front page displays is set to a static page.
 *
 * @since CV Private Chef 1.0
 *
 * @param string $template front-page.php.
 *
 * @return string The template to be used: blank if is_home() is true (defaults to index.php), else $template.
 */
function cvprivatechef_front_page_template( $template ) {
	return is_home() ? '' : $template;
}
add_filter( 'frontpage_template',  'cvprivatechef_front_page_template' );

/**
 * Implement the Custom Header feature.
 */
require get_parent_theme_file_path( '/inc/custom-header.php' );

/**
 * Custom template tags for this theme.
 */
require get_parent_theme_file_path( '/inc/template-tags.php' );

/**
 * Additional features to allow styling of the templates.
 */
require get_parent_theme_file_path( '/inc/template-functions.php' );

/**
 * Customizer additions.
 */
require get_parent_theme_file_path( '/inc/customizer.php' );

/**
 * SVG icons functions and filters.
 */
require get_parent_theme_file_path( '/inc/icon-functions.php' );


function theme_add_bootstrap() {
	wp_enqueue_style( 'bootstrap-css', '/wp-content/themes/cvprivatechef/assets/css/bootstrap.min.css' );
	wp_enqueue_script( 'bootstrap-js','/wp-content/themes/cvprivatechef/wizard/js/bootstrap.min.js', array(), '3.0.0', true );
    wp_enqueue_script( 'moment-js','/wp-content/themes/cvprivatechef/wizard/datepicker/moment/min/moment.min.js', array(), '3.0.0', true );
    wp_enqueue_script( 'datetimepicker-js','/wp-content/themes/cvprivatechef/wizard/datepicker/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js', array(), '3.0.0', true );
    wp_enqueue_style( 'datetimepicker-css', '/wp-content/themes/cvprivatechef/wizard/datepicker/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css' );

}

add_action( 'wp_enqueue_scripts', 'theme_add_bootstrap' );





function theme_add_font_awesome() {
    wp_enqueue_style( 'font-awesome-css', '/wp-content/themes/cvprivatechef/assets/font-awesome-4.7.0/css/font-awesome.min.css' );
}

add_action( 'wp_enqueue_scripts', 'theme_add_font_awesome' );


add_filter( 'body_class', 'my_neat_body_class');
function my_neat_body_class( $classes ) {
    if ( is_page(25) )
        $classes[] = 'tac-wizard-light-theme';
    return $classes;
}




add_filter( ‘wp_mail_content_type’, ‘set_html_content_type’ );
function set_html_content_type() {
    return ‘text/html’;
}

function wizard_action() {


    $to = get_option('admin_email');
    $subject = 'Nueva solicitud de CV Private Chef !';


    switch ($_POST['service']){
        case 'Servicio Unico':
            $customerName = $_POST["way1"]["name"];
            $customerEmail = $_POST["way1"]["email"];
            if($_POST['way1']['restrictions_answ'] == 'Si'){
               foreach ($_POST['way1']['restrictions'] as $rest){
                   $restrictions .= $rest . ', ';
               }
                $restrictions .= $_POST['way1']['restrictions_especificaciones'];
            }else{
                echo $restrictions = 'Ninguna';
            }
            switch($_POST['way1']['price']){

                case 'Básico': $priceperperson = $_POST['way1']['price1']; break;
                case 'Gourmet': $priceperperson = $_POST['way1']['price2']; break;
                case 'Premium': $priceperperson = $_POST['way1']['price3']; break;


            }

            $message = '
                            <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:754.5pt;background:#f7f7f7;border-collapse:collapse;font-variant-caps:normal;border-spacing:0px;background-position:initial initial;background-repeat:initial initial;word-spacing:0px">
                           <tbody>
                              <tr>
                                 <td valign="top" style="padding:0in 0in 0in 0in;word-wrap:break-word">
                                    <p class="MsoNormal" align="center" style="text-align:center;line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u>&nbsp;<u></u></span></p>
                                    <div align="center">
                                       <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:435.0pt;background:none;border-collapse:collapse;border-spacing:0px;background-position:initial initial;background-repeat:initial initial;float:none">
                                          <tbody>
                                             <tr>
                                                <td valign="top" style="padding:0in 0in 0in 0in;word-wrap:break-word">
                                                   <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:435.0pt;border-collapse:collapse;word-wrap:break-word">
                                                      <tbody>
                                                         <tr>
                                                            <td width="580" valign="top" style="width:423.0pt;padding:0in 0in 0in 0in;background-size:cover;border-spacing:0px;display:table">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:435.0pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" align="center" style="text-align:center;line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><img border="0" id="m_3638959059656975032_x0000_i1025" src="http://cvprivatechef.com/wp-content/themes/cvprivatechef/images/logo.png" alt="Take a Chef Logo" class="CToWUd"><u></u><u></u></span></p>
                                                                        </td>
                                                                        <td width="0" valign="top" style="width:.3pt;padding:0in 0in 0in 0in"></td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                </td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                    <p class="MsoNormal" align="center" style="text-align:center;line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u>&nbsp;<u></u></span></p>
                                    <div align="center">
                                       <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:435.0pt;border-collapse:collapse;border:rgba(0,0,0,0.0980392);border-spacing:0px;background-position:initial initial;background-repeat:initial initial;float:none">
                                          <tbody>
                                             <tr>
                                                <td valign="top" style="padding:0in 0in 0in 0in;word-wrap:break-word">
                                                   <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;border-collapse:collapse;word-wrap:break-word">
                                                      <tbody>
                                                         <tr>
                                                            <td width="578" valign="top" style="width:423.0pt;padding:0in 0in 0in 0in;border-spacing:0px;display:table">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:409.5pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <h2 align="center" style="margin-right:0in;margin-bottom:11.25pt;margin-left:0in;text-align:center;word-wrap:normal"><span style="font-size:19.0pt;font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">¡Nueva solicitud de servicio!<u></u><u></u></span></h2>
                                                                           <p class="MsoNormal" style="margin-bottom:7.5pt;line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">Has recibido una nueva solicitud del cliente<span class="m_3638959059656975032apple-converted-space">&nbsp;</span><b>'. $customerName .'</b>. A continuación puedes ver los detalles:<u></u><u></u></span></p>
                                                                        </td>
                                                                        <td width="0" valign="top" style="width:.3pt;padding:0in 0in 0in 0in"></td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                   <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u>&nbsp;<u></u></span></p>
                                                   <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;background:#333333;border-collapse:collapse;border-spacing:0px;display:table">
                                                      <tbody>
                                                         <tr>
                                                            <td width="578" valign="top" style="width:423.0pt;padding:0in 0in 0in 0in">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:white">Servicio, dónde y cuándo<u></u><u></u></span></p>
                                                                        </td>
                                                                        <td width="0" valign="top" style="width:.3pt;padding:0in 0in 0in 0in"></td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                   <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u>&nbsp;<u></u></span></p>
                                                   <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;border-collapse:collapse;border-spacing:0px;display:table">
                                                      <tbody>
                                                         <tr>
                                                            <td width="289" valign="top" style="width:205.5pt;padding:0in 6.0pt 0in 12.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:198.55pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">Servicio</span></b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                            <td width="289" style="width:205.5pt;padding:0in 12.0pt 0in 6.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:198.95pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">'. $_POST['service'] .'<u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                   <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u>&nbsp;<u></u></span></p>
                                                   <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;border-collapse:collapse;border-spacing:0px;display:table">
                                                      <tbody>
                                                         <tr>
                                                            <td width="289" valign="top" style="width:205.5pt;padding:0in 6.0pt 0in 12.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:198.55pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">Lugar</span></b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                            <td width="289" style="width:205.5pt;padding:0in 12.0pt 0in 6.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:198.95pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">'. $_POST['address'] .'<u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                   <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u>&nbsp;<u></u></span></p>
                                                   <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;border-collapse:collapse;border-spacing:0px;display:table">
                                                      <tbody>
                                                         <tr>
                                                            <td width="289" valign="top" style="width:205.5pt;padding:0in 6.0pt 0in 12.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:198.75pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">Hora</span></b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                            <td width="289" style="width:205.5pt;padding:0in 12.0pt 0in 6.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:198.8pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">'. $_POST['way1']['setrata'] .'<u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                   <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u>&nbsp;<u></u></span></p>
                                                   <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;border-collapse:collapse;border-spacing:0px;display:table">
                                                      <tbody>
                                                         <tr>
                                                            <td width="289" valign="top" style="width:205.5pt;padding:0in 6.0pt 0in 12.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:198.75pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">Fecha</span></b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                            <td width="289" style="width:205.5pt;padding:0in 12.0pt 0in 6.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:198.8pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">'. $_POST['frontend_userrequests_type']['usereqDateFrom'] .'<u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                   <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u>&nbsp;<u></u></span></p>
                                                   <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;background:#333333;border-collapse:collapse;border-spacing:0px;display:table">
                                                      <tbody>
                                                         <tr>
                                                            <td width="578" valign="top" style="width:423.0pt;padding:0in 0in 0in 0in">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:white">Presupuesto<u></u><u></u></span></p>
                                                                        </td>
                                                                        <td width="0" valign="top" style="width:.3pt;padding:0in 0in 0in 0in"></td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                   <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u>&nbsp;<u></u></span></p>
                                                   <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;border-collapse:collapse;border-spacing:0px;display:table">
                                                      <tbody>
                                                         <tr>
                                                            <td width="289" valign="top" style="width:205.5pt;padding:0in 6.0pt 0in 12.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:198.75pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">Nº de personas</span></b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                            <td width="289" style="width:205.5pt;padding:0in 12.0pt 0in 6.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:198.8pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">'. $_POST['way1']['peopleno'] .'<u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                   <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u>&nbsp;<u></u></span></p>
                                                   <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;border-collapse:collapse;border-spacing:0px;display:table">
                                                      <tbody>
                                                         <tr>
                                                            <td width="289" valign="top" style="width:205.5pt;padding:0in 6.0pt 0in 12.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:198.55pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">Precio/Persona</span></b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                            <td width="289" style="width:205.5pt;padding:0in 12.0pt 0in 6.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:198.95pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">'.$priceperperson.'<u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                   <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u>&nbsp;<u></u></span></p>
                                                   <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;background:#333333;border-collapse:collapse;border-spacing:0px;display:table">
                                                      <tbody>
                                                         <tr>
                                                            <td width="578" valign="top" style="width:423.0pt;padding:0in 0in 0in 0in">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:white">Evento<u></u><u></u></span></p>
                                                                        </td>
                                                                        <td width="0" valign="top" style="width:.3pt;padding:0in 0in 0in 0in"></td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                   <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u>&nbsp;<u></u></span></p>
                                                   <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;border-collapse:collapse;border-spacing:0px;display:table">
                                                      <tbody>
                                                         <tr>
                                                            <td width="290" valign="top" style="width:205.5pt;padding:0in 6.0pt 0in 12.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:199.15pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">Tipo de comida</span></b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                            <td width="289" style="width:205.5pt;padding:0in 12.0pt 0in 6.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:198.4pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">'. $_POST['way1']['foodtypes'] .'<u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                   <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u>&nbsp;<u></u></span></p>
                                                   <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;border-collapse:collapse;border-spacing:0px;display:table">
                                                      <tbody>
                                                         <tr>
                                                            <td width="289" valign="top" style="width:205.5pt;padding:0in 6.0pt 0in 12.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:198.75pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">Restricciones alimentarias</span></b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                            <td width="289" style="width:205.5pt;padding:0in 12.0pt 0in 6.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:198.75pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">'.$restrictions.'<u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                   <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u>&nbsp;<u></u></span></p>
                                                   <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;background:#333333;border-collapse:collapse;border-spacing:0px;display:table">
                                                      <tbody>
                                                         <tr>
                                                            <td width="578" valign="top" style="width:423.0pt;padding:0in 0in 0in 0in">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:white">Cocina<u></u><u></u></span></p>
                                                                        </td>
                                                                        <td width="0" valign="top" style="width:.3pt;padding:0in 0in 0in 0in"></td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                   <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u>&nbsp;<u></u></span></p>
                                                   <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;border-collapse:collapse;border-spacing:0px;display:table">
                                                      <tbody>
                                                         <tr>
                                                            <td width="289" valign="top" style="width:205.5pt;padding:0in 6.0pt 0in 12.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:199.05pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">Nº de fuegos</span></b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                            <td width="289" style="width:205.5pt;padding:0in 12.0pt 0in 6.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:198.5pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">'. $_POST['way1']['stovetype'] .'<u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                   <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u>&nbsp;<u></u></span></p>
                                                   <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;border-collapse:collapse;border-spacing:0px;display:table">
                                                      <tbody>
                                                         <tr>
                                                            <td width="289" valign="top" style="width:205.5pt;padding:0in 6.0pt 0in 12.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:198.55pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">Tipo de cocina</span></b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                            <td width="289" style="width:205.5pt;padding:0in 12.0pt 0in 6.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:198.95pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">'. $_POST['way1']['fire'] .'<u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                   <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u>&nbsp;<u></u></span></p>
                                                   <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;border-collapse:collapse;border-spacing:0px;display:table">
                                                      <tbody>
                                                         <tr>
                                                            <td width="290" valign="top" style="width:205.5pt;padding:0in 6.0pt 0in 12.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:199.2pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">Horno</span></b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                            <td width="288" style="width:205.5pt;padding:0in 12.0pt 0in 6.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:198.3pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">'. $_POST['way1']['oven_answ'] .'<u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                   <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u>&nbsp;<u></u></span></p>
                                                   <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;background:#333333;border-collapse:collapse;border-spacing:0px;display:table">
                                                      <tbody>
                                                         <tr>
                                                            <td width="578" valign="top" style="width:423.0pt;padding:0in 0in 0in 0in">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:white">Datos extras<u></u><u></u></span></p>
                                                                        </td>
                                                                        <td width="0" valign="top" style="width:.3pt;padding:0in 0in 0in 0in"></td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                   <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u>&nbsp;<u></u></span></p>
                                                   <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;border-collapse:collapse;border-spacing:0px;display:table">
                                                      <tbody>
                                                         <tr>
                                                            <td width="290" valign="top" style="width:205.5pt;padding:0in 6.0pt 0in 12.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:199.2pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">Nuestro chef debe saber que:</span></b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                            <td width="288" style="width:205.5pt;padding:0in 12.0pt 0in 6.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:198.3pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">'. $_POST['way1']['card_notes'] .'<u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                   <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u>&nbsp;<u></u></span></p>
                                                   <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;background:#333333;border-collapse:collapse;border-spacing:0px;display:table">
                                                      <tbody>
                                                         <tr>
                                                            <td width="578" valign="top" style="width:423.0pt;padding:0in 0in 0in 0in">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:white">Información de contácto<u></u><u></u></span></p>
                                                                        </td>
                                                                        <td width="0" valign="top" style="width:.3pt;padding:0in 0in 0in 0in"></td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                   <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u>&nbsp;<u></u></span></p>
                                                   <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;border-collapse:collapse;border-spacing:0px;display:table">
                                                      <tbody>
                                                         <tr>
                                                            <td width="290" valign="top" style="width:205.5pt;padding:0in 6.0pt 0in 12.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:199.2pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">Nombre del cliente:</span></b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                            <td width="288" style="width:205.5pt;padding:0in 12.0pt 0in 6.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:198.3pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">'. $_POST['way1']['name'] .'<u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                   <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u>&nbsp;<u></u></span></p>
                                                   <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;border-collapse:collapse;border-spacing:0px;display:table">
                                                      <tbody>
                                                         <tr>
                                                            <td width="290" valign="top" style="width:205.5pt;padding:0in 6.0pt 0in 12.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:199.2pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">Correo electrónico:</span></b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                            <td width="288" style="width:205.5pt;padding:0in 12.0pt 0in 6.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:198.3pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">'. $_POST['way1']['email'] .'<u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                   <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u>&nbsp;<u></u></span></p>
                                                   <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;border-collapse:collapse;border-spacing:0px;display:table">
                                                      <tbody>
                                                         <tr>
                                                            <td width="290" valign="top" style="width:205.5pt;padding:0in 6.0pt 0in 12.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:199.2pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">Teléfono:</span></b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                            <td width="288" style="width:205.5pt;padding:0in 12.0pt 0in 6.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:198.3pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">'. $_POST['way1']['phone'] .'<u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                </td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                   
                                 </td>
                              </tr>
                           </tbody>
                        </table>';


            break;

        case 'Clases Privadas':
            $customerName = $_POST["way2"]["name"];
            $customerEmail = $_POST["way2"]["email"];

            switch($_POST['way2']['price_way2']){

                case 'Básico': $priceperperson = $_POST['way2']['price1']; break;
                case 'Gourmet': $priceperperson = $_POST['way2']['price2']; break;
                case 'Premium': $priceperperson = $_POST['way2']['price3']; break;


            }

            $message = '
                            <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:754.5pt;background:#f7f7f7;border-collapse:collapse;font-variant-caps:normal;border-spacing:0px;background-position:initial initial;background-repeat:initial initial;word-spacing:0px">
                           <tbody>
                              <tr>
                                 <td valign="top" style="padding:0in 0in 0in 0in;word-wrap:break-word">
                                    <p class="MsoNormal" align="center" style="text-align:center;line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u>&nbsp;<u></u></span></p>
                                    <div align="center">
                                       <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:435.0pt;background:none;border-collapse:collapse;border-spacing:0px;background-position:initial initial;background-repeat:initial initial;float:none">
                                          <tbody>
                                             <tr>
                                                <td valign="top" style="padding:0in 0in 0in 0in;word-wrap:break-word">
                                                   <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:435.0pt;border-collapse:collapse;word-wrap:break-word">
                                                      <tbody>
                                                         <tr>
                                                            <td width="580" valign="top" style="width:423.0pt;padding:0in 0in 0in 0in;background-size:cover;border-spacing:0px;display:table">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:435.0pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" align="center" style="text-align:center;line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><img border="0" id="m_3638959059656975032_x0000_i1025" src="http://cvprivatechef.com/wp-content/themes/cvprivatechef/images/logo.png" alt="Take a Chef Logo" class="CToWUd"><u></u><u></u></span></p>
                                                                        </td>
                                                                        <td width="0" valign="top" style="width:.3pt;padding:0in 0in 0in 0in"></td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                </td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                    <p class="MsoNormal" align="center" style="text-align:center;line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u>&nbsp;<u></u></span></p>
                                    <div align="center">
                                       <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:435.0pt;border-collapse:collapse;border:rgba(0,0,0,0.0980392);border-spacing:0px;background-position:initial initial;background-repeat:initial initial;float:none">
                                          <tbody>
                                             <tr>
                                                <td valign="top" style="padding:0in 0in 0in 0in;word-wrap:break-word">
                                                   <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;border-collapse:collapse;word-wrap:break-word">
                                                      <tbody>
                                                         <tr>
                                                            <td width="578" valign="top" style="width:423.0pt;padding:0in 0in 0in 0in;border-spacing:0px;display:table">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:409.5pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <h2 align="center" style="margin-right:0in;margin-bottom:11.25pt;margin-left:0in;text-align:center;word-wrap:normal"><span style="font-size:19.0pt;font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">¡Nueva solicitud de servicio!<u></u><u></u></span></h2>
                                                                           <p class="MsoNormal" style="margin-bottom:7.5pt;line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">Has recibido una nueva solicitud del cliente<span class="m_3638959059656975032apple-converted-space">&nbsp;</span><b>'. $customerName .'</b>. A continuación puedes ver los detalles:<u></u><u></u></span></p>
                                                                        </td>
                                                                        <td width="0" valign="top" style="width:.3pt;padding:0in 0in 0in 0in"></td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                   <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u>&nbsp;<u></u></span></p>
                                                   <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;background:#333333;border-collapse:collapse;border-spacing:0px;display:table">
                                                      <tbody>
                                                         <tr>
                                                            <td width="578" valign="top" style="width:423.0pt;padding:0in 0in 0in 0in">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:white">Servicio, dónde y cuándo<u></u><u></u></span></p>
                                                                        </td>
                                                                        <td width="0" valign="top" style="width:.3pt;padding:0in 0in 0in 0in"></td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                   <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u>&nbsp;<u></u></span></p>
                                                   <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;border-collapse:collapse;border-spacing:0px;display:table">
                                                      <tbody>
                                                         <tr>
                                                            <td width="289" valign="top" style="width:205.5pt;padding:0in 6.0pt 0in 12.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:198.55pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">Servicio</span></b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                            <td width="289" style="width:205.5pt;padding:0in 12.0pt 0in 6.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:198.95pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">'. $_POST['service'] .'<u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                   <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u>&nbsp;<u></u></span></p>
                                                   <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;border-collapse:collapse;border-spacing:0px;display:table">
                                                      <tbody>
                                                         <tr>
                                                            <td width="289" valign="top" style="width:205.5pt;padding:0in 6.0pt 0in 12.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:198.55pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">Lugar</span></b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                            <td width="289" style="width:205.5pt;padding:0in 12.0pt 0in 6.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:198.95pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">'. $_POST['address'] .'<u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                   <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u>&nbsp;<u></u></span></p>
                                                   <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;border-collapse:collapse;border-spacing:0px;display:table">
                                                      <tbody>
                                                         <tr>
                                                            <td width="289" valign="top" style="width:205.5pt;padding:0in 6.0pt 0in 12.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:198.75pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">Fecha(as)</span></b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                            
                                                            <td width="289" style="width:205.5pt;padding:0in 12.0pt 0in 6.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:198.8pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>';



                                                                           
                                                                   foreach($_POST['way2']['date'] as $date){


                                                                        $message .= '
                                                                        
                                                                            <tr>
                                                                                <td valign="top" style="padding:0in 0in 0in 0in">
                                                                                   <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">'. $date . '<u></u><u></u></span></p>
                                                                                </td>
                                                                            </tr>
                                                                        
                                                                        ';
                                                                   }
       $message .= '
                                                                  </tbody>
                                                               </table>
                                                            </td>                                             
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                   <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u>&nbsp;<u></u></span></p>
                                                   <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;background:#333333;border-collapse:collapse;border-spacing:0px;display:table">
                                                      <tbody>
                                                         <tr>
                                                            <td width="578" valign="top" style="width:423.0pt;padding:0in 0in 0in 0in">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:white">Presupuesto<u></u><u></u></span></p>
                                                                        </td>
                                                                        <td width="0" valign="top" style="width:.3pt;padding:0in 0in 0in 0in"></td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                   <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u>&nbsp;<u></u></span></p>
                                                   <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;border-collapse:collapse;border-spacing:0px;display:table">
                                                      <tbody>
                                                         <tr>
                                                            <td width="289" valign="top" style="width:205.5pt;padding:0in 6.0pt 0in 12.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:198.75pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">Nº de personas</span></b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                            <td width="289" style="width:205.5pt;padding:0in 12.0pt 0in 6.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:198.8pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">'. $_POST['way2']['peopleno_way2'] .'<u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                   <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u>&nbsp;<u></u></span></p>
                                                   <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;border-collapse:collapse;border-spacing:0px;display:table">
                                                      <tbody>
                                                         <tr>
                                                            <td width="289" valign="top" style="width:205.5pt;padding:0in 6.0pt 0in 12.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:198.55pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">Precio/Persona</span></b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                            <td width="289" style="width:205.5pt;padding:0in 12.0pt 0in 6.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:198.95pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">'.$priceperperson.'<u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                   <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u>&nbsp;<u></u></span></p>
                                                   <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;border-collapse:collapse;border-spacing:0px;display:table">
                                                      <tbody>
                                                         <tr>
                                                            <td width="290" valign="top" style="width:205.5pt;padding:0in 6.0pt 0in 12.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:199.15pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">Tipo de comida</span></b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                            <td width="289" style="width:205.5pt;padding:0in 12.0pt 0in 6.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:198.4pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">'. $_POST['way2']['foodtypes_way2'] .'<u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                   <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u>&nbsp;<u></u></span></p>
                                                   <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;background:#333333;border-collapse:collapse;border-spacing:0px;display:table">
                                                      <tbody>
                                                         <tr>
                                                            <td width="578" valign="top" style="width:423.0pt;padding:0in 0in 0in 0in">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:white">Información de contácto<u></u><u></u></span></p>
                                                                        </td>
                                                                        <td width="0" valign="top" style="width:.3pt;padding:0in 0in 0in 0in"></td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                   <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u>&nbsp;<u></u></span></p>
                                                   <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;border-collapse:collapse;border-spacing:0px;display:table">
                                                      <tbody>
                                                         <tr>
                                                            <td width="290" valign="top" style="width:205.5pt;padding:0in 6.0pt 0in 12.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:199.2pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">Nombre del cliente:</span></b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                            <td width="288" style="width:205.5pt;padding:0in 12.0pt 0in 6.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:198.3pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">'. $_POST['way2']['name_way2'] .'<u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                   <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u>&nbsp;<u></u></span></p>
                                                   <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;border-collapse:collapse;border-spacing:0px;display:table">
                                                      <tbody>
                                                         <tr>
                                                            <td width="290" valign="top" style="width:205.5pt;padding:0in 6.0pt 0in 12.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:199.2pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">Correo electrónico:</span></b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                            <td width="288" style="width:205.5pt;padding:0in 12.0pt 0in 6.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:198.3pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">'. $_POST['way2']['email_way2'] .'<u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                   <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u>&nbsp;<u></u></span></p>
                                                   <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;border-collapse:collapse;border-spacing:0px;display:table">
                                                      <tbody>
                                                         <tr>
                                                            <td width="290" valign="top" style="width:205.5pt;padding:0in 6.0pt 0in 12.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:199.2pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">Teléfono:</span></b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                            <td width="288" style="width:205.5pt;padding:0in 12.0pt 0in 6.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:198.3pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">'. $_POST['way2']['phone_way2'] .'<u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                </td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                   
                                 </td>
                              </tr>
                           </tbody>
                        </table>';


            break;



        case 'Dietas':
            $customerName = $_POST["way3"]["name_way3"];
            $customerEmail = $_POST["way3"]["email_way3"];
            if($_POST['way3']['restrictions_answ_way3'] == 'Si'){
                foreach ($_POST['way3']['restrictions_way3'] as $rest){
                    $restrictions .= $rest . ', ';
                }
                $restrictions .= $_POST['way3']['restrictions_especificaciones_way3'];
            }else{
                echo $restrictions = 'Ninguna';
            }
            switch($_POST['way3']['price_way3']){

                case 'Básico': $priceperperson = $_POST['way3']['price1']; break;
                case 'Gourmet': $priceperperson = $_POST['way3']['price2']; break;
                case 'Premium': $priceperperson = $_POST['way3']['price3']; break;


            }

            $message = '
                            <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:754.5pt;background:#f7f7f7;border-collapse:collapse;font-variant-caps:normal;border-spacing:0px;background-position:initial initial;background-repeat:initial initial;word-spacing:0px">
                           <tbody>
                              <tr>
                                 <td valign="top" style="padding:0in 0in 0in 0in;word-wrap:break-word">
                                    <p class="MsoNormal" align="center" style="text-align:center;line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u>&nbsp;<u></u></span></p>
                                    <div align="center">
                                       <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:435.0pt;background:none;border-collapse:collapse;border-spacing:0px;background-position:initial initial;background-repeat:initial initial;float:none">
                                          <tbody>
                                             <tr>
                                                <td valign="top" style="padding:0in 0in 0in 0in;word-wrap:break-word">
                                                   <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:435.0pt;border-collapse:collapse;word-wrap:break-word">
                                                      <tbody>
                                                         <tr>
                                                            <td width="580" valign="top" style="width:423.0pt;padding:0in 0in 0in 0in;background-size:cover;border-spacing:0px;display:table">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:435.0pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" align="center" style="text-align:center;line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><img border="0" id="m_3638959059656975032_x0000_i1025" src="http://cvprivatechef.com/wp-content/themes/cvprivatechef/images/logo.png" alt="Take a Chef Logo" class="CToWUd"><u></u><u></u></span></p>
                                                                        </td>
                                                                        <td width="0" valign="top" style="width:.3pt;padding:0in 0in 0in 0in"></td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                </td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                    <p class="MsoNormal" align="center" style="text-align:center;line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u>&nbsp;<u></u></span></p>
                                    <div align="center">
                                       <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:435.0pt;border-collapse:collapse;border:rgba(0,0,0,0.0980392);border-spacing:0px;background-position:initial initial;background-repeat:initial initial;float:none">
                                          <tbody>
                                             <tr>
                                                <td valign="top" style="padding:0in 0in 0in 0in;word-wrap:break-word">
                                                   <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;border-collapse:collapse;word-wrap:break-word">
                                                      <tbody>
                                                         <tr>
                                                            <td width="578" valign="top" style="width:423.0pt;padding:0in 0in 0in 0in;border-spacing:0px;display:table">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:409.5pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <h2 align="center" style="margin-right:0in;margin-bottom:11.25pt;margin-left:0in;text-align:center;word-wrap:normal"><span style="font-size:19.0pt;font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">¡Nueva solicitud de servicio!<u></u><u></u></span></h2>
                                                                           <p class="MsoNormal" style="margin-bottom:7.5pt;line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">Has recibido una nueva solicitud del cliente<span class="m_3638959059656975032apple-converted-space">&nbsp;</span><b>'. $customerName .'</b>. A continuación puedes ver los detalles:<u></u><u></u></span></p>
                                                                        </td>
                                                                        <td width="0" valign="top" style="width:.3pt;padding:0in 0in 0in 0in"></td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                   <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u>&nbsp;<u></u></span></p>
                                                   <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;background:#333333;border-collapse:collapse;border-spacing:0px;display:table">
                                                      <tbody>
                                                         <tr>
                                                            <td width="578" valign="top" style="width:423.0pt;padding:0in 0in 0in 0in">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:white">Servicio, dónde y cuándo<u></u><u></u></span></p>
                                                                        </td>
                                                                        <td width="0" valign="top" style="width:.3pt;padding:0in 0in 0in 0in"></td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                   <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u>&nbsp;<u></u></span></p>
                                                   <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;border-collapse:collapse;border-spacing:0px;display:table">
                                                      <tbody>
                                                         <tr>
                                                            <td width="289" valign="top" style="width:205.5pt;padding:0in 6.0pt 0in 12.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:198.55pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">Servicio</span></b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                            <td width="289" style="width:205.5pt;padding:0in 12.0pt 0in 6.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:198.95pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">'. $_POST['service'] .'<u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                   <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u>&nbsp;<u></u></span></p>
                                                   <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;border-collapse:collapse;border-spacing:0px;display:table">
                                                      <tbody>
                                                         <tr>
                                                            <td width="289" valign="top" style="width:205.5pt;padding:0in 6.0pt 0in 12.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:198.55pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">Lugar</span></b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                            <td width="289" style="width:205.5pt;padding:0in 12.0pt 0in 6.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:198.95pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">'. $_POST['address'] .'<u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                  
                                                   <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u>&nbsp;<u></u></span></p>
                                                   <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;border-collapse:collapse;border-spacing:0px;display:table">
                                                      <tbody>
                                                         <tr>
                                                            <td width="289" valign="top" style="width:205.5pt;padding:0in 6.0pt 0in 12.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:198.75pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">Fecha</span></b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                            <td width="289" style="width:205.5pt;padding:0in 12.0pt 0in 6.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:198.8pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">'. $_POST['frontend_userrequests_type']['usereqDateFrom'] .'<u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                   <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u>&nbsp;<u></u></span></p>
                                                   <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;background:#333333;border-collapse:collapse;border-spacing:0px;display:table">
                                                      <tbody>
                                                         <tr>
                                                            <td width="578" valign="top" style="width:423.0pt;padding:0in 0in 0in 0in">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:white">Presupuesto<u></u><u></u></span></p>
                                                                        </td>
                                                                        <td width="0" valign="top" style="width:.3pt;padding:0in 0in 0in 0in"></td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                   <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u>&nbsp;<u></u></span></p>
                                                   <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;border-collapse:collapse;border-spacing:0px;display:table">
                                                      <tbody>
                                                         <tr>
                                                            <td width="289" valign="top" style="width:205.5pt;padding:0in 6.0pt 0in 12.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:198.75pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">Nº de personas</span></b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                            <td width="289" style="width:205.5pt;padding:0in 12.0pt 0in 6.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:198.8pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">'. $_POST['way3']['peopleno_way3'] .'<u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                  
                                                 
                                              
                                                   <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u>&nbsp;<u></u></span></p>
                                                   <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;background:#333333;border-collapse:collapse;border-spacing:0px;display:table">
                                                      <tbody>
                                                         <tr>
                                                            <td width="578" valign="top" style="width:423.0pt;padding:0in 0in 0in 0in">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:white">Datos extras<u></u><u></u></span></p>
                                                                        </td>
                                                                        <td width="0" valign="top" style="width:.3pt;padding:0in 0in 0in 0in"></td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>

                                                   <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u>&nbsp;<u></u></span></p>
                                                   <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;border-collapse:collapse;border-spacing:0px;display:table">
                                                      <tbody>
                                                         <tr>
                                                            <td width="289" valign="top" style="width:205.5pt;padding:0in 6.0pt 0in 12.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:198.75pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">Restricciones alimentarias</span></b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                            <td width="289" style="width:205.5pt;padding:0in 12.0pt 0in 6.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:198.75pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">'.$restrictions.'<u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                   <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u>&nbsp;<u></u></span></p>
                                                   <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;border-collapse:collapse;border-spacing:0px;display:table">
                                                      <tbody>
                                                         <tr>
                                                            <td width="290" valign="top" style="width:205.5pt;padding:0in 6.0pt 0in 12.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:199.2pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">Nuestro chef debe saber que:</span></b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                            <td width="288" style="width:205.5pt;padding:0in 12.0pt 0in 6.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:198.3pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">'. $_POST['way3']['card_notes'] .'<u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                   <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u>&nbsp;<u></u></span></p>
                                                   <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;background:#333333;border-collapse:collapse;border-spacing:0px;display:table">
                                                      <tbody>
                                                         <tr>
                                                            <td width="578" valign="top" style="width:423.0pt;padding:0in 0in 0in 0in">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:white">Información de contácto<u></u><u></u></span></p>
                                                                        </td>
                                                                        <td width="0" valign="top" style="width:.3pt;padding:0in 0in 0in 0in"></td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                   <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u>&nbsp;<u></u></span></p>
                                                   <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;border-collapse:collapse;border-spacing:0px;display:table">
                                                      <tbody>
                                                         <tr>
                                                            <td width="290" valign="top" style="width:205.5pt;padding:0in 6.0pt 0in 12.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:199.2pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">Nombre del cliente:</span></b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                            <td width="288" style="width:205.5pt;padding:0in 12.0pt 0in 6.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:198.3pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">'. $_POST['way3']['name_way3'] .'<u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                   <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u>&nbsp;<u></u></span></p>
                                                   <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;border-collapse:collapse;border-spacing:0px;display:table">
                                                      <tbody>
                                                         <tr>
                                                            <td width="290" valign="top" style="width:205.5pt;padding:0in 6.0pt 0in 12.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:199.2pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">Correo electrónico:</span></b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                            <td width="288" style="width:205.5pt;padding:0in 12.0pt 0in 6.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:198.3pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">'. $_POST['way3']['email_way3'] .'<u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                   <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u>&nbsp;<u></u></span></p>
                                                   <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:433.5pt;border-collapse:collapse;border-spacing:0px;display:table">
                                                      <tbody>
                                                         <tr>
                                                            <td width="290" valign="top" style="width:205.5pt;padding:0in 6.0pt 0in 12.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:199.2pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">Teléfono:</span></b><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333"><u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                            <td width="288" style="width:205.5pt;padding:0in 12.0pt 0in 6.0pt">
                                                               <table class="m_3638959059656975032MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:198.3pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td valign="top" style="padding:0in 0in 0in 0in">
                                                                           <p class="MsoNormal" style="line-height:14.25pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#333333">'. $_POST['way3']['phone_way3'] .'<u></u><u></u></span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                </td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                   
                                 </td>
                              </tr>
                           </tbody>
                        </table>';


            break;


    }



    $headers = array('Content-Type: text/html; charset=UTF-8','De: ' . $customerName . '<' . $customerEmail . '>');
    wp_mail ( $to, $subject, $message, $headers);
    echo '<script>window.location.href="/gracias-por-tu-solicitud/#gracias"</script>';






}

add_action( 'admin_post_nopriv_wizard_action', 'wizard_action' );
add_action( 'admin_post_wizard_action', 'wizard_action');

function calculate_distance() {

    $lat1 = $_POST['lat1'];
    $lon1 = $_POST['lon2'];
    $lat2 = $_POST['lat2'];
    $lon2 = $_POST['lon2'];
    $unit = $_POST['unit'];

    $theta = $lon1 - $lon2;
    $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
    $dist = acos($dist);
    $dist = rad2deg($dist);
    $miles = $dist * 60 * 1.1515;
    $unit = strtoupper($unit);

    if ($unit == "K") {
        echo 'K';
        echo ($miles * 1.609344);
    } else if ($unit == "N") {
        echo ($miles * 0.8684);
    } else {
        echo $miles;
    }


}

add_action( 'wp_ajax_nopriv_calculate_distance', 'calculate_distance' );
add_action( 'wp_ajax_calculate_distance', 'calculate_distance' );
