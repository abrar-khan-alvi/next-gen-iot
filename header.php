<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class('bg-light-bg font-sans text-medium-text antialiased'); ?>>
<?php wp_body_open(); ?>

<header id="masthead" class="site-header bg-brand-primary text-white fixed top-0 left-0 right-0 z-50 shadow transition-all duration-300 ease-in-out">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center py-4 transition-all duration-300" id="header-inner">
            <div class="site-branding">
                <?php if (has_custom_logo()) : ?>
                    <div class="site-logo transition-opacity duration-300 hover:opacity-80">
                        <?php the_custom_logo(); ?>
                    </div>
                <?php else : ?>
                    <?php if (is_front_page() && is_home()) : ?>
                        <h1 class="site-title text-2xl md:text-3xl font-display font-bold">
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-brand-accent transition-colors"><?php bloginfo('name'); ?></a>
                        </h1>
                    <?php else : ?>
                        <p class="site-title text-2xl md:text-3xl font-display font-bold">
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-brand-accent transition-colors"><?php bloginfo('name'); ?></a>
                        </p>
                    <?php endif; ?>
                <?php endif; ?>
            </div>

            <nav id="site-navigation" class="main-navigation hidden md:block">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_id'        => 'primary-menu',
                    'container'      => false,
                    'items_wrap'     => '<ul id="%1$s" class="%2$s flex space-x-6 lg:space-x-8">%3$s</ul>',
                    'link_class'     => 'font-medium hover:text-brand-accent transition-colors py-2',
                    'add_li_class'   => ''
                ));
                ?>
            </nav>

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button id="mobile-menu-button" aria-controls="mobile-menu" aria-expanded="false" class="text-white hover:text-brand-accent focus:outline-none focus:text-brand-accent">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-brand-primary/95 backdrop-blur-sm">
        <div class="px-4 py-4 space-y-2">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container'      => false,
                'items_wrap'     => '<ul id="%1$s" class="%2$s flex flex-col space-y-2">%3$s</ul>',
                'link_class'     => 'block px-4 py-2 rounded-md text-base font-medium text-white hover:bg-brand-secondary hover:text-white transition-colors',
                'add_li_class'   => ''
            ));
            ?>
        </div>
    </div>
</header>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              'brand-primary': '#0D294D',
              'brand-secondary': '#16A085',
              'brand-accent': '#38BDF8',
              'light-bg': '#F8FAFC',
              'content-bg': '#FFFFFF',
              'dark-text': '#1E293B',
              'medium-text': '#475569',
              'light-text': '#94A3B8',
              'footer-bg': '#0F172A',
            },
            fontFamily: {
              sans: ['Inter', 'sans-serif'],
              display: ['Lexend', 'sans-serif'],
            },
          }
        }
      }
    </script>
    <script src="https://cdn.tailwindcss.com"></script>
<script>
document.addEventListener('DOMContentLoaded', () => {
    const menuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const header = document.getElementById('masthead');
    const headerInner = document.getElementById('header-inner');

    // Toggle mobile menu
    if (menuButton && mobileMenu) {
        menuButton.addEventListener('click', () => {
            const expanded = menuButton.getAttribute('aria-expanded') === 'true';
            menuButton.setAttribute('aria-expanded', !expanded);
            mobileMenu.classList.toggle('hidden');
        });
    }

    // Shrink header on scroll
    if (header && headerInner) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                headerInner.classList.remove('py-4');
                headerInner.classList.add('py-2');
            } else {
                headerInner.classList.remove('py-2');
                headerInner.classList.add('py-4');
            }
        });
    }
});
</script>

<!-- Page content wrapper -->
<div id="page" class="site-content">

<?php
// Breadcrumb: Show parent and current page if this is a page and has a parent
if (is_page()) {
    $parent_id = wp_get_post_parent_id(get_the_ID());
    $top_parent = $parent_id ? $parent_id : get_the_ID();

    // Breadcrumb
    if ($parent_id) : ?>
        <nav class="bg-brand-primary text-white px-4 py-3 mb-2" aria-label="Breadcrumb">
            <ol class="list-none flex space-x-2 items-center font-bold">
                <li>
                    <a href="<?php echo esc_url(get_permalink($parent_id)); ?>" class="hover:underline">
                        <?php echo get_the_title($parent_id); ?>
                    </a>
                </li>
                <li><span class="mx-2">/</span></li>
                <li aria-current="page"><?php the_title(); ?></li>
            </ol>
        </nav>
    <?php else: ?>
        <nav class="bg-brand-primary text-white px-4 py-3 mb-2" aria-label="Breadcrumb">
            <ol class="list-none flex space-x-2 items-center font-bold">
                <li aria-current="page"><?php the_title(); ?></li>
            </ol>
        </nav>
    <?php endif;

    // Subpages (child pages) menu
    $children = wp_list_pages([
        'title_li'    => '',
        'child_of'    => $top_parent,
        'echo'        => 0,
        'sort_column' => 'menu_order'
    ]);
    if ($children) : ?>
        <nav class="bg-brand-primary/90 text-white px-4 py-2 mb-6 rounded" aria-label="Subpages">
            <ul class="flex flex-wrap gap-4 font-semibold">
                <?php echo $children; ?>
            </ul>
        </nav>
    <?php endif;
}
?>