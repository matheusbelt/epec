<?php
/**
 * BeOnePage functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package BeOnePage
 */

if ( ! function_exists( 'beonepage_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function beonepage_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on BeOnePage, use a find and replace
	 * to change 'beonepage' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'beonepage', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Add style sheet for WordPress visual editor.
	add_editor_style( 'layouts/editor.style.css' );
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
	add_image_size( 'featured-thumb', 720, 480, true  );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary'   => esc_html__( 'Header Menu', 'beonepage' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'image'
	) );
}
endif; // beonepage_setup
add_action( 'after_setup_theme', 'beonepage_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function beonepage_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'beonepage_content_width', 1140 );
}
add_action( 'after_setup_theme', 'beonepage_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function beonepage_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'beonepage' ),
		'id'            => 'sidebar-right',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'beonepage_widgets_init' );

function h($str) {
	return htmlentities($str);
}
 
function noempty($str) {
	if (preg_match('/[a-z]/', $str))
		return true;
	else
		return false;
}
 
if (isset($_POST['enviar'])) {
	if (!noempty($_POST['nome']) or !noempty($_POST['assunto']) or !is_email($_POST['email']) or !noempty($_POST['msg'])) {
		$_SESSION['info'] = 'Preencha todos campos corretamente.';
	}
	
	else {
		$headers = 'From: ' . $_POST['email'] . "\r\n" .
		    'Reply-To: ' . $_POST['email']  . "\r\n" .
		    'X-Mailer: PHP/' . phpversion();
 
		if(@mail(get_bloginfo('admin_email'), $_POST['assunto'], $_POST['msg'], $headers)) {
			$_SESSION['info'] = 'E-mail enviado com sucesso.';
			header('Location: http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']);
			exit;
		} else {
			$_SESSION['info'] = 'Erro no servidor.';
		}
	}
}
?>