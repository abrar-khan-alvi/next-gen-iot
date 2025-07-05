</div><!-- #page -->

<footer id="colophon" class="site-footer bg-footer-bg text-light-text pt-16 pb-8 m-0">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
            <!-- Column 1: About -->
            <div>
                <?php if (has_custom_logo()) : ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="block mb-4 w-32 md:w-40 opacity-80 hover:opacity-100 transition-opacity">
                        <?php
                        // A bit hacky way to ensure logo is white if original is dark for dark bg
                        // Better to upload a logo version suitable for dark backgrounds
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                        if (has_custom_logo()) {
                            echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '" class="filter invert brightness-0 saturate-100">';
                        }
                        ?>
                    </a>
                <?php else: ?>
                    <h3 class="font-display text-xl text-white font-semibold mb-3">
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-brand-accent transition-colors"><?php bloginfo('name'); ?></a>
                    </h3>
                <?php endif; ?>
                <p class="text-sm leading-relaxed"><?php bloginfo('description'); ?></p>
                <!-- Add social icons here if desired -->
            </div>

            <!-- Column 2: Quick Links -->
            <div>
                <h4 class="font-display text-lg text-white font-semibold mb-4">Quick Links</h4>
                <?php
                if (has_nav_menu('footer')) :
                    wp_nav_menu(array(
                        'theme_location' => 'footer',
                        'container'      => false,
                        'items_wrap'     => '<ul id="%1$s" class="%2$s space-y-2">%3$s</ul>',
                        'link_class'     => 'hover:text-brand-accent transition-colors duration-200 text-sm',
                    ));
                else :
                    // Fallback links if 'footer' menu isn't set
                ?>
                    <ul class="space-y-2">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-brand-accent transition-colors duration-200 text-sm">Home</a></li>
                        <li><a href="#" class="hover:text-brand-accent transition-colors duration-200 text-sm">About Us</a></li>
                        <li><a href="#" class="hover:text-brand-accent transition-colors duration-200 text-sm">Services</a></li>
                        <li><a href="#" class="hover:text-brand-accent transition-colors duration-200 text-sm">Contact</a></li>
                    </ul>
                <?php endif; ?>
            </div>

            <!-- Column 3: Services (Example) -->
            <div>
                <h4 class="font-display text-lg text-white font-semibold mb-4">Our Services</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-brand-accent transition-colors duration-200 text-sm">Patient-Centric Systems</a></li>
                    <li><a href="#" class="hover:text-brand-accent transition-colors duration-200 text-sm">Facility IoT</a></li>
                    <li><a href="#" class="hover:text-brand-accent transition-colors duration-200 text-sm">Remote Monitoring</a></li>
                    <li><a href="#" class="hover:text-brand-accent transition-colors duration-200 text-sm">Telehealth Solutions</a></li>
                </ul>
            </div>

            <!-- Column 4: Contact Info / Map -->
            <div>
                <h4 class="font-display text-lg text-white font-semibold mb-4">Get In Touch</h4>
                <address class="not-italic text-sm space-y-2">
                    <p>1901 Harrison Street, Oakland, CA, 94612, USA</p>
                    <p><a href="mailto:info@example.com" class="hover:text-brand-accent transition-colors">info@nextgenhealth.iot</a></p>
                    <p><a href="tel:+1234567890" class="hover:text-brand-accent transition-colors">(123) 456-7890</a></p>
                </address>
                <!-- Placeholder for a small map or a link to map -->
                <div class="mt-4 h-32 bg-slate-700 rounded flex items-center justify-center text-slate-500 text-xs">
                    <iframe
                        src="https://www.google.com/maps?q=1901+Harrison+Street,+Oakland,+CA,+94612,+USA&output=embed"
                        width="100%" height="130" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

        <div class="border-t border-slate-700 pt-8 text-center">
            <p class="text-sm">© <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. <?php esc_html_e('All rights reserved.', 'my-tailwind-theme'); ?></p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>