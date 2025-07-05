<?php get_header(); ?>

<main id="content" class="container mx-auto py-8 px-4">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('mb-12 p-6 bg-white shadow-lg rounded-lg'); ?>>
                <header class="entry-header mb-4">
                    <?php if (is_singular()) : ?>
                        <h1 class="entry-title text-3xl font-bold text-gray-800"><?php the_title(); ?></h1>
                    <?php else : ?>
                        <h2 class="entry-title text-2xl font-bold text-gray-800">
                            <a href="<?php the_permalink(); ?>" rel="bookmark" class="hover:text-blue-600 transition-colors duration-200"><?php the_title(); ?></a>
                        </h2>
                    <?php endif; ?>
                </header>

                <?php if (has_post_thumbnail()) : ?>
                    <div class="post-thumbnail mb-4">
                        <?php the_post_thumbnail('large', ['class' => 'rounded-md w-full h-auto']); // 'large' or 'medium', 'thumbnail' ?>
                    </div>
                <?php endif; ?>

                <div class="entry-content text-gray-700 leading-relaxed">
                    <?php
                    if (is_singular() || is_home() || is_archive()) {
                        the_content(sprintf(
                            wp_kses(
                                /* translators: %s: Name of current post. Only visible to screen readers */
                                __('Continue reading<span class="sr-only"> "%s"</span>', 'my-tailwind-theme'),
                                array(
                                    'span' => array(
                                        'class' => array(),
                                    ),
                                )
                            ),
                            get_the_title()
                        ));
                    } else {
                        the_excerpt(); // Use excerpt for other views
                    }

                    wp_link_pages(array(
                        'before' => '<div class="page-links text-center">' . esc_html__('Pages:', 'my-tailwind-theme'),
                        'after'  => '</div>',
                        'pagelink' => '<span class="inline-block bg-gray-200 hover:bg-gray-300 text-gray-700 font-semibold py-2 px-4 rounded mx-1">%</span>',
                    ));
                    ?>
                </div>
            </article>
        <?php endwhile; ?>

        <?php
            // Previous/next page navigation.
            the_posts_pagination(array(
                'prev_text'          => __('« Previous', 'my-tailwind-theme'),
                'next_text'          => __('Next »', 'my-tailwind-theme'),
                'screen_reader_text' => __('Posts navigation', 'my-tailwind-theme'),
                'before_page_number' => '<span class="inline-block border border-gray-300 px-3 py-1 mr-1">',
                'after_page_number'  => '</span>',
            ));
        ?>

    <?php else : ?>
        <p class="text-center text-xl text-gray-600"><?php esc_html_e('Sorry, no posts matched your criteria.', 'my-tailwind-theme'); ?></p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>