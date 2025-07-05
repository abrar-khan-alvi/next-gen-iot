<?php
/**
 * The template for displaying the homepage.
 *
 * @package My_Tailwind_Theme
 */

get_header();
?>
<main id="content" class="site-main">

    <!-- Hero Section -->
   <section class="hero-section min-h-screen flex items-center justify-center bg-gradient-to-br from-brand-primary via-blue-700 to-brand-secondary text-white relative overflow-hidden pt-20">
        <img src="<?php echo get_template_directory_uri(); ?>/images/hero-bg.gif"
         alt=""
         class="absolute inset-0 w-full h-full object-cover opacity-40 pointer-events-none z-0"
         style="object-fit: cover;">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-24 md:py-32 lg:py-40 text-center relative z-10">
            <h1 class="font-display text-4xl sm:text-5xl lg:text-7xl font-bold mb-6 animate-fade-in-up text-white" style="animation-delay: 0.2s;">
                Next Gen Health <span class="text-brand-accent">IoT</span> Solutions
            </h1>
            <p class="text-lg sm:text-xl lg:text-2xl text-slate-200 mb-10 max-w-3xl mx-auto animate-fade-in-up" style="animation-delay: 0.4s;">
                Enhancing hospitals and medical centers with smart IoT systems that drive operational efficiency, safety, and environmental sustainability.
            </p>
            <a href="#contact" class="inline-block bg-brand-accent text-brand-primary font-semibold text-lg px-8 py-3 rounded-md
                                   hover:bg-sky-400 hover:shadow-xl transform hover:scale-105 transition-all duration-300
                                   animate-fade-in-up" style="animation-delay: 0.6s;">
                Contact Us
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block ml-2 -mt-1" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </a>
        </div>
        <!-- Optional: scroll down indicator -->
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 z-10 animate-bounce hidden md:block">
            <a href="#overview" aria-label="Scroll to next section">
                <svg class="w-8 h-8 text-slate-300 hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </a>
        </div>
    </section>

    <!-- Overview Section Title -->
<section id="overview" class="py-16 md:py-24 bg-light-bg">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="font-display text-3xl md:text-4xl font-bold text-dark-text mb-3 animate-fade-in-up">
                Innovative IoT for Modern Healthcare
            </h2>
            <p class="text-lg text-medium-text max-w-2xl mx-auto animate-fade-in-up" style="animation-delay: 0.2s;">
                Healthcare environments demand more than just functionality—they require intelligence, automation, and responsiveness.
            </p>
        </div>
    </div>
</section>

<!-- Our Mission Section -->
<section id="our-mission" class="pb-12 md:pb-20 bg-light-bg">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-8 lg:gap-12 items-start">
            <div class="flex items-center h-full animate-slide-in-left">
                <img 
                    src="<?php echo get_template_directory_uri(); ?>/images/overview-placeholder.png" 
                    alt="Healthcare professionals using IoT devices" 
                    class="rounded-lg shadow-xl w-full h-auto aspect-video object-cover min-h-[320px] md:min-h-[400px] lg:min-h-[480px]"
                >
                <!-- Replace with an actual image. Create an 'images' folder in your theme -->
            </div>
            <div class="space-y-6 animate-fade-in-up" style="animation-delay: 0.3s;">
                <h3 class="font-display text-3xl font-semibold text-dark-text">Our Mission</h3>
                <p class="leading-relaxed">
                    At Next Gen Health IoT, we bring these qualities to life through innovative IoT technologies designed specifically for modern medical infrastructure. From advanced asset tracking to predictive facility management, our integrated solutions help healthcare organizations operate with precision and care.
                </p>
                <p class="leading-relaxed">
                    Headquartered in San Francisco-Oakland, CA, Next Gen Health IoT has rapidly emerged as a trusted leader in delivering secure, reliable, and customer-centered IoT products for the healthcare sector. Our B2B presence spans across North America, backed by continual innovation, rigorous quality standards, and strategic partnerships.
                </p>
                <a href="#" class="inline-block text-brand-secondary font-semibold hover:text-brand-primary transition-colors">
                    Learn More About Us
                    <span aria-hidden="true">→</span>
                </a>
            </div>
        </div>
    </div>
</section>

    <!-- Core IoT Systems Section -->
    <section id="core-systems" class="py-16 md:py-24 bg-content-bg">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 md:mb-16">
                <h2 class="font-display text-3xl md:text-4xl font-bold text-dark-text mb-3 animate-fade-in-up">Our Core IoT Systems</h2>
                <p class="text-lg text-medium-text max-w-2xl mx-auto animate-fade-in-up" style="animation-delay: 0.2s;">
                    Tailored solutions to meet the diverse needs of modern healthcare facilities.
                </p>
            </div>

            <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                $core_systems = [
                    [
                        'title' => 'Patient-Centric Systems',
                        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-brand-secondary mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>', // Placeholder icon
                        'description' => 'Empowering care teams with real-time insights and proactive decision-making. Wearable biosensors, smart beds, and automated medication dispensers.',
                        'delay' => '0.1s'
                    ],
                    [
                        'title' => 'Clinical/Facility IoT',
                        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-brand-secondary mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" /></svg>',
                        'description' => 'Streamlining workflows with intelligent lighting, HVAC, asset tracking, and predictive maintenance for medical equipment.',
                        'delay' => '0.3s'
                    ],
                    [
                        'title' => 'Remote Monitoring & Telehealth',
                        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-brand-secondary mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5.636 18.364a9 9 0 010-12.728m12.728 0a9 9 0 010 12.728m-9.9-2.829a5 5 0 010-7.07m7.07 0a5 5 0 010 7.07M15 12a3 3 0 11-6 0 3 3 0 016 0z" /></svg>',
                        'description' => 'Bluetooth-enabled medical devices, virtual visits, and data integration for continuous care beyond traditional settings.',
                        'delay' => '0.5s'
                    ]
                ];

                foreach ($core_systems as $system) : ?>
                    <div class="bg-white p-6 md:p-8 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 animate-fade-in-up" style="animation-delay: <?php echo esc_attr($system['delay']); ?>;">
                        <?php echo $system['icon']; // Make sure to use safe SVGs or escape properly if dynamic ?>
                        <h3 class="font-display text-xl font-semibold text-dark-text mb-3"><?php echo esc_html($system['title']); ?></h3>
                        <p class="text-medium-text text-sm leading-relaxed"><?php echo esc_html($system['description']); ?></p>
                        <a href="#" class="inline-block text-brand-secondary font-medium mt-4 text-sm hover:text-brand-primary transition-colors">
                            Learn More <span aria-hidden="true">→</span>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Get In Touch Section (CTA) -->
    <section id="contact" class="py-16 md:py-24 bg-brand-primary text-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="font-display text-3xl md:text-4xl font-bold mb-6 animate-fade-in-up">
                Ready to Modernize Your Healthcare Environment?
            </h2>
            <p class="text-lg text-slate-200 mb-10 max-w-xl mx-auto animate-fade-in-up" style="animation-delay: 0.2s;">
                Connect with us today. Whether you're a hospital administrator, clinic owner, or digital health innovator, Next Gen Health IoT is here to help.
            </p>
            <a href="/contact-us/" class="inline-block bg-brand-accent text-brand-primary font-semibold text-lg px-10 py-4 rounded-md
                                   hover:bg-sky-400 hover:shadow-xl transform hover:scale-105 transition-all duration-300
                                   animate-fade-in-up" style="animation-delay: 0.4s;">
                Request a Demo
            </a>
        </div>
    </section>

</main>

<?php
get_footer();
?>