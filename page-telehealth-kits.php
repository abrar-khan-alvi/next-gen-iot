<?php
/**
 * Template Name: Solution Sub-Page (Smart Telehealth Kits) - Interactive Redesign
 *
 * A dedicated template for Smart Telehealth Kits with a focus on icons and interaction.
 *
 * @package Next_Gen_IoT
 */

get_header();
?>

<main id="content" class="site-main overflow-x-hidden">

    <!-- Hero Section: Focused on the Solution (KEEPING THIS AS IS) -->
    <section class="relative bg-light-bg text-dark-text pt-24 pb-12 md:pt-40 md:pb-20 lg:pt-48 lg:pb-28">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-8 items-center">
                <div class="text-center lg:text-left" data-aos="fade-right">
                    <h1 class="font-display text-4xl sm:text-5xl xl:text-6xl font-bold mb-6 leading-tight">
                        Smart Telehealth Kits for <span class="text-brand-primary">Connected Care, Anywhere.</span>
                    </h1>
                    <p class="text-lg sm:text-xl text-medium-text mb-10 max-w-xl mx-auto lg:mx-0">
                        Portable, AI-enabled telehealth kits designed to deliver secure, connected, and data-driven patient care from anywhere.
                    </p>
                    <a href="<?php echo esc_url(home_url('/contact-us/')); ?>"
                       class="inline-flex items-center bg-brand-primary text-white font-semibold text-lg px-8 py-3 rounded-md shadow-lg
                              hover:bg-opacity-90 transform hover:scale-105 transition-all duration-300">
                        Contact Us
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                          <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
                <div class="relative hidden lg:block" data-aos="zoom-in-left" data-aos-delay="200">
                    <div class="absolute inset-0 bg-brand-accent/10 rounded-full blur-3xl"></div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/telehealth-kit-hero.png"
                         alt="A Smart Telehealth Kit with various medical peripherals"
                         class="relative w-full max-w-lg mx-auto object-contain">
                </div>
            </div>
        </div>
    </section>

    <!-- NEW DESIGN STARTS HERE -->

    <!-- Overview & Stats Section -->
    <section id="overview" class="py-16 md:py-24 bg-content-bg">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center" data-aos="fade-up">
                <h2 class="font-display text-3xl md:text-4xl font-bold text-dark-text mb-6">
                    Delivering Hospital-Grade Care to the Home
                </h2>
                <p class="prose prose-xl text-medium-text max-w-none mx-auto">
                    Our Smart Telemedicine Kits bridge the distance between patient and provider, combining IoT-enabled medical devices with real-time data sharing, secure video conferencing, and AI-powered insights to deliver unparalleled remote care.
                </p>
            </div>
            <div class="mt-12 md:mt-16 grid sm:grid-cols-2 lg:grid-cols-3 gap-8 text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="bg-light-bg p-6 rounded-xl shadow-sm">
                    <span class="font-display text-4xl font-bold text-brand-secondary">95%</span>
                    <p class="mt-1 text-medium-text font-medium">Patient Satisfaction</p>
                </div>
                <div class="bg-light-bg p-6 rounded-xl shadow-sm">
                    <span class="font-display text-4xl font-bold text-brand-secondary">40%</span>
                    <p class="mt-1 text-medium-text font-medium">Reduction in Readmissions</p>
                </div>
                <div class="bg-light-bg p-6 rounded-xl shadow-sm sm:col-span-2 lg:col-span-1">
                    <span class="font-display text-4xl font-bold text-brand-secondary">70%</span>
                    <p class="mt-1 text-medium-text font-medium">Decrease in Patient Travel Burden</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Core Components Section: The Interactive Ecosystem -->
    <section id="core-components" class="py-16 md:py-24 bg-brand-primary text-white relative overflow-hidden">
        <div class="absolute inset-0 z-0 opacity-10">
            <img src="<?php echo get_template_directory_uri(); ?>/images/abstract-network-bg.jpg" alt="Abstract network background" class="w-full h-full object-cover">
        </div>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-12 md:mb-16" data-aos="fade-up">
                <h2 class="font-display text-3xl md:text-4xl font-bold mb-3">
                    An All-in-One <span class="text-brand-accent">Telehealth Platform</span>
                </h2>
                <p class="text-lg text-slate-300">
                    Our kit is a synergistic ecosystem where every component is designed to work together seamlessly.
                </p>
            </div>

            <div class="grid lg:grid-cols-12 gap-8 items-center">
                <!-- Central Image -->
                <div class="lg:col-span-4 flex justify-center" data-aos="zoom-in">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/telehealth-kit-center.png" alt="Telehealth Kit" class="max-w-xs w-full">
                    {/* Create telehealth-kit-center.png - a central image of the open kit */}
                </div>

                <!-- Components surrounding the image -->
                <div class="lg:col-span-8 grid grid-cols-1 sm:grid-cols-2 gap-8">
                    <?php
                    $components = [
                        ['title' => 'Medical-Grade Peripherals', 'desc' => 'Integrated stethoscope, ECG, thermometer, and pulse oximeter for comprehensive diagnostics.', 'icon' => 'M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M12 6V3m0 18v-3'],
                        ['title' => 'HD Video & Audio System', 'desc' => 'Crystal-clear communication for effective virtual consultations.', 'icon' => 'M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z'],
                        ['title' => 'Encrypted Cloud Platform', 'desc' => 'HIPAA-compliant storage and real-time data synchronization for secure access anywhere.', 'icon' => 'M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z'],
                        ['title' => 'AI-Powered Decision Support', 'desc' => 'AI algorithms analyze symptoms and vitals to provide triage recommendations and diagnostic insights.', 'icon' => 'M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z'],
                    ];
                    foreach ($components as $index => $component) : ?>
                    <div class="flex items-start space-x-4" data-aos="fade-up" data-aos-delay="<?php echo ($index * 100) + 200; ?>">
                        <div class="flex-shrink-0 p-3 bg-brand-accent/20 text-brand-accent rounded-full">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="<?php echo $component['icon']; ?>" /></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-lg"><?php echo esc_html($component['title']); ?></h4>
                            <p class="text-slate-300 text-sm leading-relaxed"><?php echo esc_html($component['desc']); ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Key Features Section - Icon-driven grid -->
    <section id="key-features" class="py-16 md:py-24 bg-content-bg">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
             <div class="text-center mb-12 md:mb-16" data-aos="fade-up">
                <h2 class="font-display text-3xl md:text-4xl font-bold text-dark-text mb-3">
                    A Platform Built for Performance & Usability
                </h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <?php
                $features = [
                    ['title' => 'Plug-and-Play', 'desc' => 'Peripherals connect automatically for rapid, hassle-free deployment.', 'icon' => '<svg class="h-10 w-10 text-brand-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>'],
                    ['title' => 'HD Video', 'desc' => 'Secure, high-definition video consultations for clear diagnoses.', 'icon' => '<svg class="h-10 w-10 text-brand-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" /></svg>'],
                    ['title' => 'AI Symptom Analysis', 'desc' => 'Intelligent algorithms provide recommendations based on patient-reported symptoms.', 'icon' => '<svg class="h-10 w-10 text-brand-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>'],
                    ['title' => 'EHR Integration', 'desc' => 'Works seamlessly with Epic, Cerner, and other major EHR platforms.', 'icon' => '<svg class="h-10 w-10 text-brand-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h7" /></svg>'],
                ];
                foreach ($features as $index => $feature): ?>
                <div class="bg-light-bg p-6 rounded-xl text-center hover:bg-white hover:shadow-2xl hover:-translate-y-2 transition-all duration-300" data-aos="fade-up" data-aos-delay="<?php echo $index * 100; ?>">
                    <div class="inline-block p-4 bg-brand-secondary/10 rounded-full mb-4">
                        <?php echo $feature['icon']; ?>
                    </div>
                    <h3 class="font-display text-xl font-semibold text-dark-text mb-2"><?php echo esc_html($feature['title']); ?></h3>
                    <p class="text-medium-text text-sm leading-relaxed"><?php echo esc_html($feature['desc']); ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Benefits Section - Asymmetrical Grid -->
    <section id="benefits-kits" class="py-16 md:py-24 bg-light-bg">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-12 gap-10 lg:gap-16 items-center">
                <div class="lg:col-span-5" data-aos="fade-right">
                    <h2 class="font-display text-3xl md:text-4xl font-bold text-dark-text mb-6">
                        Transforming Care Delivery, <span class="text-brand-secondary">Together.</span>
                    </h2>
                    <p class="text-lg text-medium-text leading-relaxed">
                        Our Smart Telehealth Kits are more than a product; they are a catalyst for change, enabling benefits for patients, providers, and healthcare systems alike.
                    </p>
                </div>
                <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-2 gap-6">
                     <?php
                    $kit_benefits = [
                        'Increases healthcare access',
                        'Reduces hospital readmissions',
                        'Enables proactive chronic disease management',
                        'Boosts patient satisfaction',
                        'Decreases care delivery costs',
                        'Improves clinical accuracy',
                    ];
                     foreach ($kit_benefits as $index => $benefit) : ?>
                    <div class="bg-content-bg p-4 rounded-lg shadow-md flex items-center space-x-3" data-aos="fade-up" data-aos-delay="<?php echo $index * 100; ?>">
                        <svg class="h-6 w-6 text-brand-secondary flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                        <span class="font-medium text-dark-text"><?php echo esc_html($benefit); ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Case Studies Section (Accordion) - Kept for clarity -->
    <section id="case-studies-kits" class="py-16 md:py-24 bg-content-bg">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto" data-aos="fade-up" id="kits-case-studies-accordion-v2">
                <h2 class="font-display text-3xl md:text-4xl font-bold text-dark-text mb-8 text-center">Proven in the Field: Case Studies</h2>
                <?php
                $case_studies = [
                    ['title' => 'Case Study 1 – United States (Arizona)', 'content' => 'A mobile health unit in rural Arizona implemented Smart Telemedicine Kits to deliver care to Native American communities. The program reduced travel burden by 70% and increased diagnosis speed by 40%.'],
                    ['title' => 'Case Study 2 – United States (Illinois)', 'content' => 'In a post-discharge monitoring program for cardiac patients, our telehealth kits enabled daily check-ins and vital sign monitoring, leading to a significant reduction in 30-day hospital readmissions.'],
                    ['title' => 'Case Study 3 – Canada (British Columbia)', 'content' => 'Partnering with a provincial health authority, telehealth kits were deployed for chronic disease management in remote communities, improving patient adherence to care plans and reducing the need for costly emergency transport.'],
                ];
                foreach ($case_studies as $case): ?>
                    <div class="accordion-item bg-light-bg border border-slate-200 rounded-lg overflow-hidden mb-3">
                        <button class="accordion-header flex justify-between items-center w-full p-4 md:p-5 text-left font-medium text-dark-text hover:bg-slate-200 focus:outline-none transition-colors" aria-expanded="false">
                            <span><?php echo esc_html($case['title']); ?></span>
                            <svg class="accordion-icon h-5 w-5 transform transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
                        </button>
                        <div class="accordion-content hidden p-4 md:p-5 border-t border-slate-200">
                            <p class="text-medium-text text-sm leading-relaxed"><?php echo esc_html($case['content']); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>


    <!-- Final CTA Section -->
    <section class="py-20 md:py-32 bg-brand-primary text-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div data-aos="zoom-in">
                <h2 class="font-display text-3xl sm:text-4xl font-bold mb-6">
                    Ensure a Safer, More Compliant Facility
                </h2>
                <p class="text-lg text-slate-200 mb-10 max-w-2xl mx-auto">
                    Contact our specialists to learn how our Environmental Monitoring Systems can protect your patients, staff, and sensitive assets.
                </p>
                <a href="<?php echo esc_url(home_url('/contact-us/')); ?>"
                   class="inline-block bg-brand-accent text-brand-primary font-bold text-lg px-12 py-4 rounded-md shadow-lg
                          hover:bg-sky-300 hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                    Get Started Today
                </a>
            </div>
        </div>
    </section>

</main>
<script>
// JS for interactive elements on this page
document.addEventListener('DOMContentLoaded', () => {
    // Accordion Logic for Case Studies
    const accordionContainer = document.getElementById('kits-case-studies-accordion-v2');
    if (accordionContainer) {
        const items = accordionContainer.querySelectorAll('.accordion-item');
        items.forEach(item => {
            const header = item.querySelector('.accordion-header');
            const content = item.querySelector('.accordion-content');
            const icon = item.querySelector('.accordion-icon');

            header.addEventListener('click', () => {
                const isOpen = header.getAttribute('aria-expanded') === 'true';

                // Close all accordions
                items.forEach(i => {
                    i.querySelector('.accordion-header').setAttribute('aria-expanded', 'false');
                    i.querySelector('.accordion-content').classList.add('hidden');
                    i.querySelector('.accordion-icon').classList.remove('rotate-180');
                });

                // Open the clicked one if it was closed
                if (!isOpen) {
                    header.setAttribute('aria-expanded', 'true');
                    content.classList.remove('hidden');
                    icon.classList.add('rotate-180');
                }
            });
        });
    }
});
</script>
<?php
get_footer();
?>