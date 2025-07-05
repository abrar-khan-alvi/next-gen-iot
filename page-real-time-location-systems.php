<?php

/**
 * Template Name: Solution Sub-Page (RTLS - V2 Innovative Redesign)
 *
 * A complete redesign focusing on a dynamic, storytelling approach for RTLS.
 *
 * @package Next_Gen_IoT
 */

get_header();
?>

<main id="content" class="site-main overflow-x-hidden">

    <!-- Hero Section: Modern, Engaging, with Subtitle and CTA -->
    <section class="relative min-h-[70vh] flex items-center justify-center bg-brand-primary text-white overflow-hidden">
        <div class="absolute inset-0 z-0 opacity-20">
            <img src="<?php echo get_template_directory_uri(); ?>/images/rtls-bg-abstract.jpg" alt="Abstract network lines" class="w-full h-full object-cover object-center animate-pulse-slow">
        </div>
        <div class="absolute inset-0 bg-gradient-to-br from-brand-primary/90 via-brand-primary/80 to-brand-accent/40"></div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-3xl mx-auto text-center space-y-6" data-aos="fade-up">
                <h1 class="font-display text-4xl sm:text-5xl xl:text-6xl font-bold leading-tight drop-shadow-lg text-white">
                    See Everything. <span class="text-brand-accent">Act Instantly.</span>
                </h1>
                <p class="text-lg sm:text-xl font-medium mb-6 text-white">
                    Unlock real-time visibility for assets, staff, and patients—empowering your facility with actionable intelligence and safer, smarter workflows.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#the-challenge"
                        class="inline-block bg-brand-accent text-brand-primary font-bold text-lg px-8 py-3 rounded-full shadow-lg
                          hover:bg-sky-300 hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                        How RTLS Works
                    </a>
                    <a href="<?php echo esc_url(home_url('/contact-us/')); ?>"
                        class="inline-block border border-brand-accent text-brand-accent font-bold text-lg px-8 py-3 rounded-full shadow
                          hover:bg-brand-accent hover:text-brand-primary transition-all duration-300">
                        Talk to an Expert
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- The Challenge & The Solution Section -->
    <section id="the-challenge" class="py-16 md:py-24 bg-light-bg">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 md:gap-20 items-center">
                <div data-aos="fade-right">
                    <span class="font-semibold text-brand-secondary">The Challenge</span>
                    <h2 class="font-display text-3xl md:text-4xl font-bold text-dark-text mt-2 mb-6">
                        Operational Blind Spots
                    </h2>
                    <div class="space-y-4 text-lg text-medium-text leading-relaxed">
                        <p>Lost equipment, inefficient workflows, and compromised patient safety are common challenges in complex facilities. These issues stem from a single problem: a lack of real-time visibility into the location and status of critical assets and people.</p>
                    </div>
                </div>
                <div data-aos="fade-left" data-aos-delay="150">
                    <span class="font-semibold text-brand-secondary">The Solution</span>
                    <h2 class="font-display text-3xl md:text-4xl font-bold text-dark-text mt-2 mb-6">
                        Pervasive, Actionable Awareness
                    </h2>
                    <div class="space-y-4 text-lg text-medium-text leading-relaxed">
                        <p>Our IoT-based RTLS eliminates these blind spots. By providing precise, real-time location data, we empower your team to optimize asset utilization, streamline staff workflows, and create a safer, more efficient environment for everyone.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section: Visual Journey -->
    <section id="how-it-works" class="py-16 md:py-24 bg-content-bg">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 md:mb-20" data-aos="fade-up">
                <h2 class="font-display text-3xl md:text-4xl font-bold text-dark-text mb-3">
                    The RTLS Technology Journey
                </h2>
                <p class="text-lg text-medium-text max-w-3xl mx-auto">
                    From tiny tags to powerful analytics, see how our components work together to create a seamless location-aware ecosystem.
                </p>
            </div>
            <!-- Step 1 -->
            <div class="flex flex-col md:flex-row items-center gap-8 md:gap-16" data-aos="fade-up">
                <div class="md:w-1/2 relative text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/rtls-tags-and-badges.png" alt="A collection of RTLS tags and staff badges" class="w-full max-w-md mx-auto drop-shadow-xl">
                </div>
                <div class="md:w-1/2">
                    <span class="inline-block font-bold text-5xl md:text-6xl text-brand-accent/20 mb-2">01</span>
                    <h3 class="font-display text-2xl md:text-3xl font-bold text-dark-text mb-4">Tags & Anchors: The Foundation</h3>
                    <p class="text-lg text-medium-text leading-relaxed">Compact, low-power tags are attached to assets and worn by people. Strategically placed anchors and beacons throughout your facility receive their signals, creating a foundation for precise location tracking using technologies like BLE, UWB, and RFID.</p>
                </div>
            </div>
            <!-- Connecting Dots -->
            <div class="h-24 md:h-32 w-px bg-slate-200 mx-auto my-8 md:my-12 border-l-2 border-dashed border-slate-300" data-aos="fade-up"></div>
            <!-- Step 2 -->
            <div class="flex flex-col md:flex-row-reverse items-center gap-8 md:gap-16" data-aos="fade-up">
                <div class="md:w-1/2 relative text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/rtls-platform-dashboard.png" alt="Dashboard showing a map with tracked assets" class="w-full max-w-md mx-auto drop-shadow-xl">
                    
                </div>
                <div class="md:w-1/2">
                    <span class="inline-block font-bold text-5xl md:text-6xl text-brand-accent/20 mb-2">02</span>
                    <h3 class="font-display text-2xl md:text-3xl font-bold text-dark-text mb-4">Platform & Software: The Brains</h3>
                    <p class="text-lg text-medium-text leading-relaxed">Our central software platform receives location data from the anchors. It processes this information in real-time, displaying it on an intuitive dashboard map. The platform manages geofencing, triggers alerts, and provides a powerful workflow engine.</p>
                </div>
            </div>
            <!-- Connecting Dots -->
            <div class="h-24 md:h-32 w-px bg-slate-200 mx-auto my-8 md:my-12 border-l-2 border-dashed border-slate-300" data-aos="fade-up"></div>
            <!-- Step 3 -->
            <div class="flex flex-col md:flex-row items-center gap-8 md:gap-16" data-aos="fade-up">
                <div class="md:w-1/2 relative text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/rtls-analytics-and-reports.png" alt="Graphs and charts showing asset utilization analytics" class="w-full max-w-md mx-auto drop-shadow-xl">
                </div>
                <div class="md:w-1/2">
                    <span class="inline-block font-bold text-5xl md:text-6xl text-brand-accent/20 mb-2">03</span>
                    <h3 class="font-display text-2xl md:text-3xl font-bold text-dark-text mb-4">Analytics & Integration: The Value</h3>
                    <p class="text-lg text-medium-text leading-relaxed">Go beyond just "where." Our analytics engine reveals patterns in asset utilization, staff movement, and patient flow. With seamless API integration into your EHR, BMS, and other systems, this location data becomes a powerful tool for operational intelligence.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section id="benefits" class="py-16 md:py-24 bg-light-bg">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 md:mb-16" data-aos="fade-up">
                <h2 class="font-display text-3xl md:text-4xl font-bold text-dark-text mb-3">
                    Unlock Measurable Value for Your Facility
                </h2>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                $rtls_benefits = [
                    ['title' => 'Improved Patient Safety', 'desc' => 'Instantly locate patients in distress and ensure rapid response times.', 'icon' => '<svg class="h-8 w-8 text-brand-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>'],
                    ['title' => 'Enhanced Asset Utilization', 'desc' => 'Reduce equipment loss, automate inventory, and minimize time spent searching for assets.', 'icon' => '<svg class="h-8 w-8 text-brand-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>'],
                    ['title' => 'Streamlined Staff Workflows', 'desc' => 'Optimize staff allocation, automate task assignments, and improve overall productivity.', 'icon' => '<svg class="h-8 w-8 text-brand-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>'],
                    ['title' => 'Better Regulatory Compliance', 'desc' => 'Automate documentation and generate reports for audits and compliance with ease.', 'icon' => '<svg class="h-8 w-8 text-brand-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>'],
                    ['title' => 'Actionable Data Insights', 'desc' => 'Gain a deep understanding of how your facility operates to make smarter resource allocation decisions.', 'icon' => '<svg class="h-8 w-8 text-brand-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" /></svg>'],
                    ['title' => 'Future-Ready Infrastructure', 'desc' => 'A scalable architecture that grows with your needs and integrates with future technologies.', 'icon' => '<svg class="h-8 w-8 text-brand-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" /></svg>'],
                ];
                foreach ($rtls_benefits as $index => $benefit) : ?>
                    <div class="bg-content-bg p-6 rounded-xl border border-slate-200" data-aos="fade-up" data-aos-delay="<?php echo $index * 100; ?>">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <?php echo $benefit['icon']; ?>
                            </div>
                            <div>
                                <h3 class="font-semibold text-dark-text text-lg mb-1"><?php echo esc_html($benefit['title']); ?></h3>
                                <p class="text-medium-text text-sm"><?php echo esc_html($benefit['desc']); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Case Studies Section (Simplified & Impactful) -->
    <section id="case-studies" class="py-16 md:py-24 bg-content-bg">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center mb-12 md:mb-16" data-aos="fade-up">
                <h2 class="font-display text-3xl md:text-4xl font-bold text-dark-text">Real-World Success Stories</h2>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                $rtls_case_studies = [
                    ['client' => 'Mercy Health, Ohio', 'result' => '40%', 'desc' => 'Reduction in lost equipment incidents by optimizing surgical instrument tracking and patient flow.'],
                    ['client' => 'Advent Health, Florida', 'result' => '100%', 'desc' => 'Prevention of potential patient elopement events in its first year, enhancing patient safety in memory care.'],
                    ['client' => 'Sunnybrook Health Sciences, Toronto', 'result' => '90%', 'desc' => 'Reduction in time staff spent searching for mobile medical devices, dramatically improving uptime.'],
                ];
                foreach ($rtls_case_studies as $index => $case) : ?>
                    <div class="p-8 bg-light-bg rounded-xl shadow-lg border border-slate-200 text-center" data-aos="zoom-in" data-aos-delay="<?php echo $index * 100; ?>">
                        <span class="font-display font-bold text-5xl md:text-6xl text-brand-secondary"><?php echo esc_html($case['result']); ?></span>
                        <h4 class="font-semibold text-dark-text mt-2"><?php echo esc_html($case['client']); ?></h4>
                        <p class="text-medium-text mt-3 text-sm"><?php echo esc_html($case['desc']); ?></p>
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