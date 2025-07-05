<?php
/**
 * Template Name: Patient-Centric Systems Page (V3 - New Design)
 *
 * A different design approach for Patient-Centric Systems.
 *
 * @package Next_Gen_IoT
 */

get_header();
?>

<main id="content" class="site-main">

    <!-- Hero Section -->
    <section class="hero-section relative bg-brand-primary text-white py-20 md:py-28 lg:py-32 overflow-hidden">
        <!-- Optional: Subtle background pattern or texture can go here -->
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid md:grid-cols-2 gap-8 md:gap-12 items-center">
                <div class="text-center md:text-left" data-aos="fade-right">
                    <h1 class="font-display text-white text-4xl sm:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                        Revolutionizing Healthcare with <span class="text-brand-accent">IoT</span>
                    </h1>
                    <p class="text-lg sm:text-xl text-slate-200 mb-10 max-w-lg">
                        Explore how IoT-based systems are revolutionizing healthcare by optimizing efficiency, reducing costs, and enhancing patient experiences.
                    </p>
                    <a href="<?php echo esc_url(home_url('/contact-us/')); ?>"
                       class="inline-flex items-center bg-brand-accent text-brand-primary font-semibold text-lg px-8 py-3 rounded-md
                              hover:bg-sky-400 hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                        Contact Us
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                          <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
                <div class="hidden md:block" data-aos="fade-left" data-aos-delay="200">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/patient-centric-hero-v2.png" alt="Diagram illustrating IoT for Patient-Centric Systems" class="rounded-lg max-h-[450px] w-auto mx-auto object-contain">
                    <!-- Create and add patient-centric-hero-v2.png to your theme/images/ folder (reflecting the new hero image) -->
                </div>
            </div>
        </div>
    </section>

    <!-- Introduction / "What is Patient-Centric IoT?" Section -->
    <section id="introduction" class="py-16 md:py-24 bg-light-bg">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-12 gap-8 md:gap-16 items-center">
                <div class="md:col-span-5" data-aos="fade-right">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/iot-concept-illustration.png"
                         alt="Illustration of interconnected IoT devices in healthcare"
                         class="rounded-xl shadow-2xl w-full">
                         <!-- Create iot-concept-illustration.png -->
                </div>
                <div class="md:col-span-7" data-aos="fade-left" data-aos-delay="150">
                    <h2 class="font-display text-3xl md:text-4xl font-bold text-dark-text mb-6">
                        What is Patient-Centric <span class="text-brand-secondary">IoT in Healthcare</span>?
                    </h2>
                    <div class="prose prose-lg text-medium-text max-w-none space-y-5">
                        <p>
                            Patient-centric IoT redefines healthcare by placing the individual at the heart of a connected ecosystem. It involves the use of smart medical devices, wearable sensors, and intelligent digital systems that continuously collect, transmit, and analyze vital health data directly from and for the patient.
                        </p>
                        <p>
                            This dynamic flow of information empowers healthcare providers with profound, real-time insights into a patient's condition. It enables enhanced diagnostic accuracy, personalized treatment strategies, and continuous health monitoring that extends beyond the traditional confines of clinical settings, fostering a more engaged, informed, and proactive approach to wellness.
                        </p>
                         <p class="!mt-6 font-semibold text-dark-text">
                            At Next Gen Health IoT, we architect these customized solutions, seamlessly integrating them with your existing infrastructure to deliver secure, intelligent, and responsive healthcare.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Technologies Section - Alternating Feature Blocks -->
    <section id="core-technologies-patient-v3" class="py-16 md:py-24 bg-content-bg">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 md:mb-20" data-aos="fade-up">
                <h2 class="font-display text-3xl md:text-4xl font-bold text-dark-text mb-3">
                    Core Technologies Powering Our Systems
                </h2>
                <p class="text-lg text-medium-text max-w-2xl mx-auto">
                    Leveraging cutting-edge components to build robust and reliable patient-centric solutions.
                </p>
            </div>

            <?php
            $core_technologies_v3 = [
                [
                    'title' => 'Wearable Health Monitors & Biosensors',
                    'desc' => 'Continuous, non-invasive tracking of vital signs like heart rate, SpO2, temperature, and activity levels. Our advanced sensors provide real-time data for proactive health management and early detection of anomalies, ideal for chronic care and remote monitoring.',
                    'img' => 'wearable-tech-illustration.png', // You'll need to create these images
                    'img_alt' => 'Illustration of wearable health technology',
                    'aos_img' => 'fade-right',
                    'aos_text' => 'fade-left',
                ],
                [
                    'title' => 'Smart Medication Adherence Tools',
                    'desc' => 'Intelligent pill dispensers, smart inhalers, and connected patches that ensure patients adhere to their prescribed medication schedules. These tools reduce errors, improve treatment efficacy, and provide valuable data to clinicians.',
                    'img' => 'smart-medication-illustration.png',
                    'img_alt' => 'Illustration of smart medication adherence tools',
                    'aos_img' => 'fade-left',
                    'aos_text' => 'fade-right',
                    'bg_color' => 'bg-light-bg', // Alternating background
                ],
                [
                    'title' => 'Remote Patient Monitoring (RPM) Platforms',
                    'desc' => 'Secure, cloud-based dashboards that connect patients with their care providers. RPM platforms allow clinicians to track health trends, receive alerts for critical changes, and intervene promptly, significantly improving outcomes for patients with chronic conditions or those in post-operative care.',
                    'img' => 'rpm-platform-illustration.png',
                    'img_alt' => 'Illustration of a remote patient monitoring platform dashboard',
                    'aos_img' => 'fade-right',
                    'aos_text' => 'fade-left',
                ],
                 [
                    'title' => 'AI-Driven Predictive Analytics',
                    'desc' => 'Our sophisticated AI algorithms analyze vast streams of patient data to identify patterns, predict potential health risks, and provide actionable insights. This enables preventative care strategies, early diagnosis, and highly personalized treatment plans.',
                    'img' => 'ai-analytics-illustration.png',
                    'img_alt' => 'Abstract illustration of AI and data analytics in healthcare',
                    'aos_img' => 'fade-left',
                    'aos_text' => 'fade-right',
                    'bg_color' => 'bg-light-bg',
                ],
                [
                    'title' => 'Voice-Enabled & Virtual Health Assistants',
                    'desc' => 'IoT-integrated virtual assistants and chatbots that guide patients through care routines, offer appointment reminders, answer common health queries, and facilitate medication scheduling using intuitive voice commands, enhancing patient engagement and accessibility.',
                    'img' => 'voice-assistant-illustration.png',
                    'img_alt' => 'Illustration of a voice-enabled health assistant interface',
                    'aos_img' => 'fade-right',
                    'aos_text' => 'fade-left',
                ],
            ];

            foreach ($core_technologies_v3 as $index => $tech) : ?>
                <div class="py-10 md:py-16 <?php echo isset($tech['bg_color']) ? $tech['bg_color'] : ''; ?>">
                    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="grid md:grid-cols-2 gap-10 md:gap-16 items-center <?php echo ($index % 2 != 0) ? 'md:flex-row-reverse' : ''; ?>">
                            <div class="relative <?php echo ($index % 2 != 0) ? 'md:order-last' : ''; ?>" data-aos="<?php echo esc_attr($tech['aos_img']); ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/9398445_34719.jpg"
                                     alt="<?php echo esc_attr($tech['img_alt']); ?>"
                                     class="rounded-xl shadow-xl w-full max-w-lg mx-auto object-contain aspect-[4/3]">
                            </div>
                            <div class="<?php echo ($index % 2 != 0) ? 'md:order-first' : ''; ?>" data-aos="<?php echo esc_attr($tech['aos_text']); ?>" data-aos-delay="150">
                                <h3 class="font-display text-2xl lg:text-3xl font-bold text-dark-text mb-4"><?php echo esc_html($tech['title']); ?></h3>
                                <p class="text-medium-text lg:text-lg leading-relaxed mb-6"><?php echo esc_html($tech['desc']); ?></p>
                                <a href="#" class="inline-flex items-center text-brand-secondary font-semibold hover:text-brand-primary group transition-colors duration-200">
                                    Discover This Technology
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1.5 transform group-hover:translate-x-1 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>


    <!-- Key Features Section - Icon Grid -->
    <section id="key-features-patient-v3" class="py-16 md:py-24 bg-light-bg">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 md:mb-16" data-aos="fade-up">
                <h2 class="font-display text-3xl md:text-4xl font-bold text-dark-text mb-3">Empowering Features for Modern Healthcare</h2>
                <p class="text-lg text-medium-text max-w-2xl mx-auto">Our systems are packed with functionalities designed for efficiency, security, and superior patient outcomes.</p>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-12">
                <?php
                $features_v3 = [
                    ['icon' => '<svg class="h-10 w-10 text-brand-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>', 'title' => 'Real-Time Vitals & Alerts', 'desc' => 'Continuous monitoring with instant notifications for critical changes, enabling rapid response.'],
                    ['icon' => '<svg class="h-10 w-10 text-brand-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>', 'title' => 'Secure Two-Way Communication', 'desc' => 'HIPAA-compliant channels for seamless interaction between patients, families, and care providers.'],
                    ['icon' => '<svg class="h-10 w-10 text-brand-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>', 'title' => 'Personalized Health Analytics', 'desc' => 'Customizable dashboards and AI-driven insights tailored to individual patient needs and historical data.'],
                    ['icon' => '<svg class="h-10 w-10 text-brand-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>', 'title' => 'Compliance & Data Security', 'desc' => 'End-to-end encryption and robust audit trails ensuring adherence to HIPAA, GDPR, and other regulations.'],
                    ['icon' => '<svg class="h-10 w-10 text-brand-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>', 'title' => 'Seamless EHR/EMR Integration', 'desc' => 'Effortless data synchronization with existing electronic health records for comprehensive patient views.'],
                    ['icon' => '<svg class="h-10 w-10 text-brand-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>', 'title' => 'Scalable & Interoperable Platform', 'desc' => 'Flexible architecture designed to grow with your needs and integrate with diverse third-party systems.'],
                ];
                foreach ($features_v3 as $index => $feature) : ?>
                <div class="flex flex-col items-center text-center p-6 bg-content-bg rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="<?php echo $index * 50; ?>">
                    <div class="mb-4 p-3 bg-brand-accent/10 rounded-full">
                        <?php echo $feature['icon']; ?>
                    </div>
                    <h3 class="font-display text-xl font-semibold text-dark-text mb-2"><?php echo esc_html($feature['title']); ?></h3>
                    <p class="text-medium-text text-sm leading-relaxed"><?php echo esc_html($feature['desc']); ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- "We've Built Our Reputation On" Section -->
    <section id="reputation-patient" class="py-16 md:py-24 bg-brand-primary text-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-12 gap-8 md:gap-16 items-center">
                <div class="md:col-span-5 order-last md:order-first" data-aos="fade-right">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/trust-innovation-graphic.png"
                         alt="Graphic representing trust and innovation"
                         class="rounded-lg shadow-xl w-full">
                         <!-- Create trust-innovation-graphic.png -->
                </div>
                <div class="md:col-span-7" data-aos="fade-left" data-aos-delay="150">
                    <h2 class="font-display text-3xl md:text-4xl font-bold mb-6">
                        Our Foundation: <span class="text-brand-accent">Trust & Innovation</span>
                    </h2>
                    <p class="text-lg text-slate-200 mb-6">
                        Through our continuous product development and commitment to healthcare innovation, we help organizations reimagine care delivery—making it more personalized, proactive, and patient-driven.
                    </p>
                    <ul class="space-y-3 mb-6">
                        <?php
                        $reputation_points = [
                            'Cutting-edge R&D Investment',
                            'Stringent Quality Assurance Protocols',
                            'Remote and Onsite Expert Support',
                            'Customer-First Approach & Long-Term Partnerships',
                        ];
                        foreach($reputation_points as $point): ?>
                        <li class="flex items-center">
                            <svg class="h-5 w-5 text-brand-accent flex-shrink-0 mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            <span class="text-slate-100"><?php echo esc_html($point); ?></span>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    <p class="text-slate-300 text-sm">
                        We proudly collaborate with industry leaders such as <a href="#" class="font-semibold text-brand-accent hover:underline">GAO (Global Advanced Operations) Tek</a> and <a href="#" class="font-semibold text-brand-accent hover:underline">GAO (Global Advanced Operations) RFID</a> to enhance the reach and performance of our healthcare solutions.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Get In Touch Section (CTA) - Standard -->
    <section class="py-16 md:py-24 bg-light-bg">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="font-display text-3xl md:text-4xl font-bold text-dark-text mb-4" data-aos="fade-up">
                Partner with Us for Patient-Centric Excellence
            </h2>
            <p class="text-lg text-medium-text mb-10 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="150">
                Ready to discover how Next Gen Health IoT can help you put patients first with intelligent IoT technology? Whether you're exploring options, need a tailored solution, or want a live demonstration, we're here to help.
            </p>
            <a href="<?php echo esc_url(home_url('/contact-us/')); ?>"
               class="inline-block bg-brand-secondary text-white font-semibold text-lg px-10 py-3.5 rounded-md shadow-md
                      hover:bg-opacity-80 hover:shadow-lg transform hover:scale-105 transition-all duration-300"
               data-aos="fade-up" data-aos-delay="300">
                Schedule Your Consultation
            </a>
        </div>
    </section>

</main>
<?php
// Note: Accordion JS from previous templates can be moved to a global custom.js file
// and enqueued in functions.php if used on multiple pages.
// For simplicity, if only "Common Use Cases" needs an accordion on this page,
// you can include its specific JS here or in footer.php (conditionally).
// If you have a global custom.js with AOS init, you can add accordion logic there too.
?>
<?php
get_footer();
?>