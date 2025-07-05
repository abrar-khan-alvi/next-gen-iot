<?php
/**
 * My Tailwind Theme functions and definitions
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Enqueue scripts and styles.
 */
function my_tailwind_theme_scripts() {
    // Enqueue Google Fonts (Inter and Lexend - optional)
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Lexend:wght@400;500;600;700&display=swap', array(), null);

    // Tailwind Config via JS
    $tailwind_config_js = "
    window.tailwind = {
      theme: {
        extend: {
          colors: {
            'brand-primary': '#0D294D',     // Deep Blue
            'brand-secondary': '#16A085',   // Teal/Greenish Blue
            'brand-accent': '#38BDF8',      // Sky Blue / Bright Cyan
            'light-bg': '#F8FAFC',          // Slate-50 (very light gray)
            'content-bg': '#FFFFFF',        // White
            'dark-text': '#1E293B',         // Slate-800 (darker for headings)
            'medium-text': '#475569',       // Slate-600 (for body text)
            'light-text': '#94A3B8',        // Slate-400 (for subtle text)
            'footer-bg': '#0F172A',         // Slate-900 (very dark for footer)
          },
          fontFamily: {
            sans: ['Inter', 'sans-serif'],
            display: ['Lexend', 'sans-serif'], // For headings
          },
          animation: { // Adding some basic animations for Tailwind
            'fade-in-up': 'fadeInUp 0.6s ease-out forwards',
            'fade-in': 'fadeIn 0.5s ease-out forwards',
            'slide-in-left': 'slideInLeft 0.6s ease-out forwards',
          },
          keyframes: { // Defining the keyframes
            fadeInUp: {
              '0%': { opacity: '0', transform: 'translateY(20px)' },
              '100%': { opacity: '1', transform: 'translateY(0)' },
            },
            fadeIn: {
              '0%': { opacity: '0' },
              '100%': { opacity: '1' },
            },
            slideInLeft: {
                '0%': { opacity: '0', transform: 'translateX(-30px)' },
                '100%': { opacity: '1', transform: 'translateX(0)' },
            }
          }
        }
      }
    };
    ";

    // Enqueue Tailwind CSS from CDN
    // The inline script for config needs to be added *before* the main CDN script
    wp_enqueue_script('tailwindcss-browser', 'https://cdn.tailwindcss.com', array(), null, false);
    wp_add_inline_script('tailwindcss-browser', $tailwind_config_js, 'before');


    // Enqueue your theme's main stylesheet (style.css)
    wp_enqueue_style('my-tailwind-theme-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));

    // Enqueue a custom JS file (optional, for Intersection Observer or GSAP later)
    // wp_enqueue_script('my-theme-custom-js', get_template_directory_uri() . '/js/custom.js', array(), wp_get_theme()->get('Version'), true);
}
add_action('wp_enqueue_scripts', 'my_tailwind_theme_scripts');

/**
 * Theme setup.
 */
function my_tailwind_theme_setup() {
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support(
        'html5',
        array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script')
    );
    add_theme_support(
        'custom-background',
        array(
            'default-color' => 'F8FAFC', // Corresponds to light-bg
            'default-image' => '',
        )
    );
    add_theme_support('customize-selective-refresh-widgets');
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 100, // Adjust as needed
            'width'       => 200, // Adjust as needed
            'flex-width'  => true,
            'flex-height' => true,
        )
    );
    register_nav_menus(
        array(
            'primary' => esc_html__('Primary Menu', 'my-tailwind-theme'),
            'footer'  => esc_html__('Footer Menu', 'my-tailwind-theme'),
        )
    );
}
add_action('after_setup_theme', 'my_tailwind_theme_setup');

/**
 * Add editor styles for Gutenberg.
 */
function my_tailwind_theme_add_editor_styles() {
    add_editor_style('https://cdn.tailwindcss.com'); // So editor uses Tailwind
    // You can also add the inline script for config to the editor if needed
    // $tailwind_config_js = "..."; (same as above)
    // wp_add_inline_script('editor-style-tailwindcss-cdn', $tailwind_config_js, 'before');
    // add_editor_style( 'editor-style.css' );
}
add_action('admin_init', 'my_tailwind_theme_add_editor_styles');

// Optional: Add custom classes to menu items (li)
function add_additional_class_on_li($classes, $item, $args) {
    if (isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

// Optional: Add custom classes to menu links (a)
function add_menu_link_class( $atts, $item, $args ) {
  if (property_exists($args, 'link_class')) {
    $atts['class'] = isset($atts['class']) ? $atts['class'] . ' ' . $args->link_class : $args->link_class;
  }
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );

?>