<?php

/**
 * Template Name: About Us Page
 *
 * @package Next_Gen_IoT
 */

get_header();
?>

<main id="content" class="site-main">

    <!-- Page Header/Banner Section with Image -->
    <section class="page-banner relative bg-brand-primary py-24 md:py-32 lg:py-40 text-white overflow-hidden">
        <!-- Background Image & Overlay -->
        <div class="absolute inset-0 z-0">
            <!-- Image: Made more visible by removing its own opacity property, relying on the overlay for tinting -->
            <img src="<?php echo get_template_directory_uri(); ?>/images/about-bg.jpg"
                alt="Abstract background representing innovation and technology"
                class="w-full h-full object-cover object-center"> <!-- DESIGN FIX: Removed opacity-30 for better image visibility -->
            <!-- Overlay: Increased opacity for better text contrast and stronger brand color -->
            <div class="absolute inset-0 bg-brand-primary opacity-80"></div> <!-- DESIGN FIX: Changed opacity from 60 to 80 -->
        </div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <h1 class="font-display text-4xl sm:text-5xl lg:text-6xl font-bold !text-white animate-fade-in-up" data-aos="fade-up" data-aos-delay="100">
                <?php the_title(); ?>
            </h1>
            <?php
            // For flexibility, this subtitle could be fetched from a custom field or theme option.
            // Example: $subtitle = get_post_meta(get_the_ID(), 'page_subtitle', true);
            $subtitle = "Pioneering the Future of Connected Healthcare Solutions"; // Example static subtitle
            if ($subtitle) :
                echo '<p class="text-lg md:text-xl !text-slate-200 mt-4 max-w-2xl mx-auto animate-fade-in-up" data-aos="fade-up" data-aos-delay="300">' . esc_html($subtitle) . '</p>';
            endif;
            ?>
            <div class="mt-10 animate-fade-in-up" data-aos="fade-up" data-aos-delay="500">
                <a href="#about-us-content"
                    class="inline-block bg-brand-accent text-brand-primary font-semibold px-8 py-3 rounded-md
                          hover:bg-sky-400 hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                    Discover Our Story
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block ml-2 -mt-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- About Us Content Section -->
    <section id="about-us-content" class="py-16 md:py-24 bg-light-bg">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto">
                <div data-aos="fade-up">
                    <h2 class="font-display text-3xl md:text-4xl font-bold text-dark-text mb-6 text-center md:text-left">
                        Innovating Health Care Through Smart Connectivity
                    </h2>
                    <div class="prose prose-lg text-medium-text max-w-none space-y-6">
                        <p>
                            At Next Gen Health IoT, we believe technology should empower better outcomes in every aspect of healthcare. Headquartered in San Francisco-Oakland, CA, we are committed to transforming how care is delivered, managed, and experienced. Through cutting-edge IoT innovations, we help healthcare providers improve operational efficiency, enhance patient safety, and embrace a future of proactive, personalized care.
                        </p>
                        <p>
                            With a fast-growing B2B presence across North America, our name has become synonymous with product reliability, scalable systems, and customer-first support. Our team blends deep industry experience with agile innovation, delivering reliable technologies that streamline operations and adapt to your unique needs. We invest in ongoing research, maintain a rigorous quality assurance process, and work closely with our partners to turn challenges into scalable, future-ready solutions.
                        </p>
                    </div>
                </div>

                <!-- Image with Text Section: "Our Dedicated Team" -->
                <div class="mt-12 md:mt-20 grid md:grid-cols-2 gap-8 md:gap-12 items-center"> 
                    <div data-aos="fade-right" data-aos-delay="100">
                        
                        <img src="<?php echo get_template_directory_uri(); ?>/images/aboutjpg.gif" alt="Our team collaborating" class="rounded-lg shadow-xl aspect-video object-cover w-full">
                    </div>
                    <div data-aos="fade-left" data-aos-delay="200"> 
                        <h3 class="font-display text-2xl font-semibold text-dark-text mb-4">Our Dedicated Team</h3> 
                        <p class="text-medium-text leading-relaxed mb-6"> 
                            Our strength lies in our diverse team of engineers, healthcare experts, and innovators passionate about making a difference. We foster a culture of collaboration and continuous learning.
                        </p>
                        <a href="#" class="inline-flex items-center text-brand-secondary font-semibold hover:text-brand-primary transition-colors group">
                            Meet the Leadership
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 group-hover:translate-x-1 transition-transform duration-200 ease-in-out" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trusted Partner Section -->
    <section id="trusted-partner" class="py-16 md:py-24 bg-content-bg border-t border-slate-200"> 
            <div class="max-w-3xl mx-auto" data-aos="fade-up">
                <h2 class="font-display text-3xl md:text-4xl font-bold text-dark-text mb-8 text-center md:text-left"> 
                    Trusted IoT Partner with Global Recognition
                </h2>
                <div class="prose prose-lg text-medium-text max-w-none space-y-6">
                    <p>
                        Next Gen Health IoT is proud to be recognized as an "IoT Expert" and a "Premier Partner" by <a href="#" class="text-brand-secondary hover:text-brand-primary font-medium underline hover:no-underline transition-colors">GAO Tek Inc.</a>, a top 10 global B2B technology supplier, and <a href="#" class="text-brand-secondary hover:text-brand-primary font-medium underline hover:no-underline transition-colors">GAO RFID Inc.</a>, a leader in BLE and RFID technologies.
                    </p>
                    <p>
                        We're also an official sponsor of <a href="#" class="text-brand-secondary hover:text-brand-primary font-medium underline hover:no-underline transition-colors">TekSummit</a>, hosted by our global technology partners—further demonstrating our leadership and commitment to advancing smart healthcare technologies. 
                    </p>
                </div>
            </div>
        </div>
    </section>


    <!-- Call to Action Section -->
    <section class="py-16 md:py-24 bg-slate-50 text-dark-text">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="font-display text-3xl md:text-4xl font-bold mb-6 text-brand-primary" data-aos="fade-up"> 
                Learn How We Can Transform Your Healthcare Operations
            </h2>
            <p class="text-lg md:text-xl text-medium-text mb-10 max-w-xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                Reach out to our experts for a personalized consultation or demo.
            </p>
            <a href="<?php echo esc_url(home_url('/contact-us/')); ?>"
                class="inline-block bg-brand-accent text-white font-semibold text-lg px-10 py-4 rounded-md <!-- DESIGN FIX: Increased padding (px-8 py-3 to px-10 py-4) for more prominence -->
                  hover:bg-brand-primary hover:text-brand-accent hover:shadow-xl transform hover:scale-105 transition-all duration-300"
                data-aos="fade-up" data-aos-delay="400">
                Get In Touch
            </a>
        </div>
    </section>

</main>

<?php
get_footer();
?>