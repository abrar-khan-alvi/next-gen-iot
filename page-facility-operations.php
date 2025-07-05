<?php
get_header();
?>

<main id="content" class="site-main">

    <!-- Hero Section -->
    <section class="hero-section relative text-white py-20 md:py-28 lg:py-32 overflow-hidden">
    <div class="absolute inset-0 z-0 opacity-10">
        <!-- Optional: subtle pattern or SVG background element here -->
    </div>
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid md:grid-cols-2 gap-8 md:gap-12 items-center">
            <div class="text-center md:text-left animate-fade-in-left" data-aos="fade-right">
                <h1 class="font-display text-4xl sm:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                    Smarter <span class="text-brand-accent">Patient Care</span> Through IoT
                </h1>
                <p class="text-lg sm:text-xl text-black mb-10 max-w-xl">
                    Advancing patient care, facility safety, and operational control with Next Gen Health IoT's smart healthcare technologies.
                </p>
                <a href="#overview-patient-centric"
                    class="inline-block bg-brand-accent text-brand-primary font-semibold text-lg px-8 py-3 rounded-md
                      hover:bg-sky-400 hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                    Explore Systems
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block ml-2 -mt-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
            <div class="hidden md:flex justify-center" data-aos="fade-left" data-aos-delay="200">
                <img src="<?php echo get_template_directory_uri(); ?>/images/patient-care-hero.png"
                    alt="Illustrative image of smart patient care technology"
                    class="max-h-[520px] w-auto"
                    style="max-width: 520px;">
            </div>
        </div>
    </div>
</section>

    <!-- Overview Section -->
    <section id="overview-patient-centric" class="py-16 md:py-24 lg:py-28 bg-light-bg">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center" data-aos="fade-up">
                <h2 class="font-display text-3xl md:text-4xl font-bold text-dark-text mb-6">
                    Transforming Healthcare with Patient-Focused IoT
                </h2>
                <div class="prose prose-lg text-medium-text max-w-none mx-auto space-y-6">
                    <p>
                        IoT (Internet of Things) for clinical and facility-centric healthcare is transforming operational and patient environments across hospitals, clinics, diagnostic labs, and long-term care centers. By interconnecting smart devices, sensors, and control systems, healthcare organizations can monitor assets, manage building functions, and capture real-time patient and environmental data automatically and efficiently.
                    </p>
                    <p>
                        This digital transformation allows healthcare providers to proactively address maintenance issues, streamline workflows, and maintain environments that support better health outcomes and operational safety. Leveraging the latest innovations in connectivity and AI-powered analytics, IoT ensures smarter decision-making with continuous insights and automated responses.
                    </p>
                    <p class="!mt-8 text-dark-text font-medium">
                        Next Gen Health IoT, headquartered in San Francisco-Oakland, CA, leads this innovation with a growing B2B presence throughout the U.S. and Canada. Backed by strong partnerships with GAO Tek and GAO RFID, our solutions are known for reliability, customization, and expert support across healthcare environments.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Components Section -->
    <section id="core-components-patient" class="py-16 md:py-24 lg:py-28 bg-content-bg">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 md:mb-16 lg:mb-20" data-aos="fade-up">
                <h2 class="font-display text-3xl md:text-4xl font-bold text-dark-text mb-4">
                    Core Components of Patient-Centric IoT
                </h2>
                <p class="text-lg text-medium-text max-w-2xl mx-auto">
                    Key technologies that form the backbone of our advanced patient care solutions.
                </p>
            </div>

            <div class="divide-y divide-slate-200 dark:divide-slate-700">
                <?php
                $patient_components = [
                    [
                        'title' => 'Environmental Sensors',
                        'description' => 'These compact, connected sensors monitor key environmental parameters like room temperature, relative humidity, air pressure, carbon dioxide (CO₂), levels, and airborne contaminants. Essential in critical care areas like ICUs and operating rooms, they ensure sterile conditions are maintained and alert staff to any deviation from safety thresholds. Integration with building systems allows automatic adjustments in real time to improve patient safety and regulatory compliance.',
                        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-brand-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7.014A8.003 8.003 0 0117.657 18.657z" /><path stroke-linecap="round" stroke-linejoin="round" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" /></svg>',
                    ],
                    [
                        'title' => 'Asset Tracking Tags (BLE/Wi-Fi)',
                        'description' => 'Utilizing RFID, Bluetooth Low Energy (BLE), or Wi-Fi, asset tracking tags are affixed to portable medical equipment such as infusion pumps, defibrillators, wheelchairs, or mobile diagnostic tools. These tags help staff instantly locate needed equipment, reduce asset loss, and ensure proper maintenance schedules. In fast-paced environments, this visibility translates into faster care delivery and improved equipment utilization.',
                        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-brand-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14" /></svg>',
                    ],
                    [
                        'title' => 'Smart Monitoring Devices (Wearables & Room Sensors)',
                        'description' => 'Smart monitoring solutions include patient wearables, smart beds, and room occupancy detectors that collect data on movement, vital signs, and room conditions. These devices enable real-time alerts for events like patient falls, unauthorized exits, or abnormal vitals. Nurses and physicians are alerted instantly, improving response times and patient care outcomes while reducing reliance on manual monitoring.',
                        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-brand-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" /></svg>',
                    ],
                    [
                        'title' => 'IoT Gateway & Secure Connectivity',
                        'description' => 'IoT gateways act as communication hubs between edge devices and the cloud. They manage secure data transmission using Wi-Fi, LTE, or wired Ethernet, ensuring uninterrupted connectivity. In healthcare environments, these gateways are hardened for HIPAA compliance and can support edge processing for low-latency applications like emergency alerting or ventilator performance monitoring.',
                        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-brand-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20.757l.07-.056a2.25 2.25 0 013.364 0l.075.056a2.25 2.25 0 003.364 0l.075-.056a2.25 2.25 0 013.364 0l.074.056a2.25 2.25 0 003.364 0M3.75 12a.75.75 0 01.75-.75h15a.75.75 0 010 1.5h-15a.75.75 0 01-.75-.75z" /></svg>',
                    ],
                    [
                        'title' => 'Facility & Patient Management Platform',
                        'description' => 'A centralized software platform provides real-time dashboards for facility managers, clinical staff, and IT teams to view, control, and analyze all IoT-enabled devices. From visualizing floor-by-floor sensor readings to setting maintenance schedules and automating room adjustments, this platform becomes the nerve center for facility intelligence and decision-making for patient well-being.',
                        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-brand-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25A2.25 2.25 0 015.25 3h4.5M15 3h4.5a2.25 2.25 0 012.25 2.25" /></svg>',
                    ],
                ];

                foreach ($patient_components as $index => $component) : ?>
                    <article class="group py-8 md:py-10 lg:py-12" data-aos="fade-up" data-aos-delay="<?php echo $index * 100; ?>">
                        <div class="flex flex-col md:flex-row md:items-start md:space-x-8 lg:space-x-10">
                            <div class="flex-shrink-0 mb-6 md:mb-0 p-4 bg-brand-accent/10 dark:bg-brand-accent/20 rounded-full self-start md:self-center">
                                <?php echo $component['icon']; ?>
                            </div>
                            <div class="flex-grow">
                                <h3 class="font-display text-xl lg:text-2xl font-semibold text-dark-text mb-3 group-hover:text-brand-secondary transition-colors duration-300">
                                    <?php echo esc_html($component['title']); ?>
                                </h3>
                                <p class="text-medium-text text-base leading-relaxed">
                                    <?php echo esc_html($component['description']); ?>
                                </p>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Integrations & Ecosystem Section -->
    <section id="integrations-ecosystem" class="py-16 md:py-24 lg:py-28 bg-light-bg">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-10 md:gap-16 lg:gap-20 items-center">
                <div data-aos="fade-right">
                    <h2 class="font-display text-3xl md:text-4xl font-bold text-dark-text mb-6">
                        Seamless Integrations & Ecosystem Compatibility
                    </h2>
                    <p class="text-lg text-medium-text mb-8">
                        Next Gen Health IoT systems are engineered to work seamlessly with a wide range of platforms and devices, ensuring flexibility and scalability for your existing and future infrastructure.
                    </p>
                    <ul class="space-y-4 text-medium-text">
                        <?php
                        $integrations = [
                            'Hybrid Technology Environments: RFID, BLE, UWB, and Wi-Fi support for complete location coverage.',
                            'EHR & EMR Systems: Automatic syncing of patient vital data and location into health records.',
                            'Building Automation Systems (BAS): Integration with HVAC, lighting, elevators, and access systems.',
                            'Compliance & Safety Suites: Connect with reporting tools and safety management platforms for streamlined documentation.',
                            'APIs & Custom Workflows: Custom integrations with third-party dashboards and cloud services for specific enterprise needs.',
                        ];
                        foreach ($integrations as $item) : ?>
                            <li class="flex items-start">
                                <svg class="h-6 w-6 text-brand-secondary flex-shrink-0 mr-3 mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <span><?php echo esc_html($item); ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <p class="mt-8 text-sm text-slate-500 dark:text-slate-400">
                        This open architecture allows for full-scale, tailored IoT deployments across diverse healthcare settings.
                    </p>
                </div>
                <div class="hidden md:flex justify-center" data-aos="fade-left" data-aos-delay="200">
                    <!-- Replace with your actual image or a more descriptive placeholder -->
                    <img src="<?php echo get_template_directory_uri(); ?>/images/iot-ecosystem.png"
                         alt="Diagram of IoT ecosystem integrations for Next Gen Health IoT"
                         class="rounded-lg shadow-xl max-w-lg w-full h-auto object-contain">
                    <!-- If image not ready:
                    <div class="bg-slate-200 dark:bg-slate-700 w-full h-80 rounded-lg flex items-center justify-center text-slate-500">
                        Image: IoT Ecosystem (approx 500x400)
                    </div>
                     -->
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section id="benefits-patient-iot" class="py-16 md:py-24 lg:py-28 bg-content-bg">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 md:mb-16 lg:mb-20" data-aos="fade-up">
                <h2 class="font-display text-3xl md:text-4xl font-bold text-dark-text mb-4">
                    Benefits of Patient-Centric IoT with Next Gen Health
                </h2>
                <p class="text-lg text-medium-text max-w-2xl mx-auto">
                    Unlock significant improvements in patient outcomes, operational efficiency, and overall facility management.
                </p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                $benefits = [
                    ['title' => 'Real-Time Operational Intelligence', 'desc' => 'Make informed decisions faster with always-on data visibility across every corner of your facility.', 'delay' => '0'], // Start delays from 0 for the first item in a new row/group
                    ['title' => 'Enhanced Patient Safety', 'desc' => 'Reduce risks through early warning alerts, fall detection, and environmental monitoring designed for sensitive patient areas.', 'delay' => '100'],
                    ['title' => 'Energy & Cost Efficiency', 'desc' => 'Slash energy costs by automating lighting, climate, and maintenance—without compromising comfort or care.', 'delay' => '200'],
                    ['title' => 'Compliance & Quality Assurance', 'desc' => 'Automatically generate audit logs and environmental reports to meet JCAHO, CDC, and CMS standards.', 'delay' => '0'],
                    ['title' => 'Scalable & Customizable Solutions', 'desc' => 'Our systems are built to scale with your organization, whether you manage a single clinic or a network of hospitals across multiple regions.', 'delay' => '100'],
                    ['title' => 'Improved Staff Workflow', 'desc' => 'Automate routine tasks, reduce manual data entry, and empower staff with tools that let them focus on direct patient care.', 'delay' => '200'],
                ];
                foreach ($benefits as $index => $benefit) : ?>
                    <div class="bg-light-bg dark:bg-slate-800 p-6 md:p-8 rounded-xl shadow-lg hover:shadow-2xl dark:hover:shadow-brand-accent/20 transition-all duration-300 transform hover:-translate-y-1"
                         data-aos="fade-up" data-aos-delay="<?php echo esc_attr($benefit['delay']); ?>">
                        <h3 class="font-display text-xl font-semibold text-dark-text dark:text-white mb-3"><?php echo esc_html($benefit['title']); ?></h3>
                        <p class="text-medium-text dark:text-slate-300 text-sm leading-relaxed"><?php echo esc_html($benefit['desc']); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
            <p class="text-center mt-12 md:mt-16 text-medium-text max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="300">
                As a leader in smart healthcare infrastructure, Next Gen Health IoT supports providers across the U.S. and Canada with dependable, forward-thinking solutions. Our expert team ensures each deployment meets your exact operational and clinical needs—with support backed by trusted technology partners GAO Tek and GAO RFID.
            </p>
        </div>
    </section>

    <!-- Key Features Section (Accordion Style) -->
    <section id="key-features-functionalities" class="py-16 md:py-24 lg:py-28 bg-light-bg">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto" data-aos="fade-up">
                <h2 class="font-display text-3xl md:text-4xl font-bold text-dark-text mb-10 md:mb-12 text-center">Key Features & Functionalities</h2>
                <div class="space-y-4" id="features-accordion">
                    <?php
                    $features = [
                        [
                            'title' => 'Real-Time Asset Visibility',
                            'content' => 'Track the location, usage, and condition of mobile medical devices 24/7. Alerts notify staff if equipment leaves a designated area, requires maintenance, or is inactive for too long. This visibility eliminates time wasted searching for equipment and improves inventory management.',
                        ],
                        [
                            'title' => 'Environmental Monitoring & Alerts',
                            'content' => 'Detect and respond instantly to changes in ambient temperature, humidity, or air quality. For example, a cold storage unit housing vaccines can automatically trigger an alert if temperatures rise beyond safe thresholds, preventing costly spoilage and ensuring compliance with CDC storage standards.',
                        ],
                        [
                            'title' => 'Predictive Maintenance',
                            'content' => 'Monitor the health of building systems—like HVAC, lighting, or elevators—by analyzing equipment vibration, energy use, and operation patterns. AI-powered algorithms forecast potential failures before they occur, reducing downtime and avoiding costly emergency repairs.',
                        ],
                        [
                            'title' => 'Automated Lighting & HVAC Controls',
                            'content' => 'Lighting and HVAC systems respond to occupancy data and environmental inputs, optimizing comfort and reducing energy waste. Lights turn off in unoccupied rooms, and HVAC systems adjust airflow based on CO₂ levels or temperature changes, contributing to a more sustainable and cost-effective operation.',
                        ],
                        [
                            'title' => 'Smart Access & Security Systems',
                            'content' => 'Deploy RFID badges or biometric scanners to control who enters sensitive areas like surgical suites, medication rooms, or IT server closets. Monitor foot traffic patterns and set up alerts for unauthorized access attempts. These systems reinforce physical security and improve accountability.',
                        ],
                        [
                            'title' => 'Centralized Facility Dashboard',
                            'content' => 'This web-based command center gives authorized users real-time control and visibility into all IoT operations. Staff can view environmental trends, track equipment usage, manage access rights, receive alerts, and generate compliance reports—all from a single interface accessible on desktop or mobile devices.',
                        ],
                    ];
                    foreach ($features as $index => $feature) : ?>
                        <div class="accordion-item bg-content-bg dark:bg-slate-800 shadow-md rounded-lg overflow-hidden" data-aos="fade-up" data-aos-delay="<?php echo $index * 50; ?>">
                            <button class="accordion-header flex justify-between items-center w-full p-5 md:p-6 text-left font-medium text-dark-text dark:text-white hover:bg-slate-50 dark:hover:bg-slate-700 focus:outline-none transition-colors duration-200 cursor-pointer" aria-expanded="false">
                                <span class="text-lg"><?php echo esc_html($feature['title']); ?></span>
                                <svg class="accordion-icon h-6 w-6 transform transition-transform duration-300 text-brand-accent" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <div class="accordion-content hidden p-5 md:p-6 border-t border-slate-200 dark:border-slate-700">
                                <p class="text-medium-text dark:text-slate-300 text-base leading-relaxed"><?php echo esc_html($feature['content']); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Common Use Cases Section -->
    <section id="common-use-cases" class="py-16 md:py-24 lg:py-28 bg-content-bg">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center" data-aos="fade-up">
            <h2 class="font-display text-3xl md:text-4xl font-bold text-dark-text mb-6">
                Common Use Cases
            </h2>
            <p class="text-lg text-medium-text mb-10 md:mb-12 max-w-xl mx-auto">
                Explore real-world applications of our patient-centric IoT solutions across various healthcare settings.
            </p>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                $use_cases = [
                    ['title' => 'Smart Hospitals', 'desc' => 'Automated environmental controls, real-time patient monitoring, efficient asset management.', 'delay' => '0'],
                    ['title' => 'Remote Patient Monitoring', 'desc' => 'Continuous care for chronic conditions, post-discharge follow-up, telehealth integration.', 'delay' => '100'],
                    ['title' => 'Assisted Living Facilities', 'desc' => 'Fall detection, wander management, enhanced resident safety and comfort.', 'delay' => '200'],
                ];
                foreach ($use_cases as $uc_idx => $use_case) : ?>
                <div class="bg-light-bg dark:bg-slate-800 p-6 md:p-8 rounded-xl shadow-lg hover:shadow-xl dark:hover:shadow-brand-accent/20 transition-shadow duration-300" data-aos="fade-up" data-aos-delay="<?php echo esc_attr($use_case['delay']); ?>">
                    <h3 class="font-display text-xl font-semibold text-dark-text dark:text-white mb-3"><?php echo esc_html($use_case['title']); ?></h3>
                    <p class="text-medium-text dark:text-slate-300 text-sm leading-relaxed"><?php echo esc_html($use_case['desc']); ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>


    <!-- Get In Touch Section (CTA) -->
    <section class="py-16 md:py-24 lg:py-28 bg-brand-primary text-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="font-display text-3xl md:text-4xl font-bold mb-6" data-aos="fade-up">
                Ready to Implement Smarter Patient Care?
            </h2>
            <p class="text-lg text-slate-200 mb-10 max-w-xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                Let's discuss how Next Gen Health IoT can elevate your facility's standards.
            </p>
            <a href="<?php echo esc_url(home_url('/contact-us/')); ?>"
                class="inline-block bg-brand-accent text-brand-primary font-semibold text-lg px-10 py-3.5 rounded-md
                      hover:bg-sky-400 hover:text-white hover:shadow-xl transform hover:scale-105 transition-all duration-300"
                data-aos="fade-up" data-aos-delay="200">
                Contact Our Experts
            </a>
        </div>
    </section>

</main>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const accordionContainer = document.getElementById('features-accordion');
        if (accordionContainer) {
            const accordionItems = Array.from(accordionContainer.querySelectorAll('.accordion-item'));

            accordionItems.forEach(item => {
                const header = item.querySelector('.accordion-header');
                const content = item.querySelector('.accordion-content');
                const icon = header.querySelector('.accordion-icon');

                header.addEventListener('click', () => {
                    const isExpanded = header.getAttribute('aria-expanded') === 'true';

                    // Close all other items
                    accordionItems.forEach(otherItem => {
                        if (otherItem !== item) {
                            const otherHeader = otherItem.querySelector('.accordion-header');
                            const otherContent = otherItem.querySelector('.accordion-content');
                            const otherIcon = otherHeader.querySelector('.accordion-icon');

                            otherHeader.setAttribute('aria-expanded', 'false');
                            otherContent.classList.add('hidden');
                            otherIcon.classList.remove('rotate-180');
                        }
                    });

                    // Toggle current item
                    header.setAttribute('aria-expanded', String(!isExpanded));
                    content.classList.toggle('hidden');
                    icon.classList.toggle('rotate-180');
                });
            });
        }
    });
</script>
<?php
get_footer();
?>