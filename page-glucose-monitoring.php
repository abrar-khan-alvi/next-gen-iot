<?php
/**
 * Template Name: Solution Sub-Page (IoT Glucose Monitoring)
 *
 * A dedicated template for IoT Glucose Monitoring solutions.
 *
 * @package Next_Gen_IoT
 */

get_header();
?>

<main id="content" class="site-main overflow-x-hidden">

    <!-- Hero Section: Focused on the Benefit -->
    <section class="relative min-h-[90vh] flex items-center justify-start text-white overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0">
            <img src="<?php echo get_template_directory_uri(); ?>/images/glucose-monitoring-hero.jpg" alt="Close up of a smart glucose monitoring device in use" class="w-full h-full object-cover">
            
            <!-- Overlay for text readability -->
            <div class="absolute inset-0 bg-gradient-to-r from-brand-primary/80 via-brand-primary/60 to-transparent"></div>
        </div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-2xl text-left" data-aos="fade-right">
                <h1 class="font-display text-brand-accent text-5xl sm:text-6xl xl:text-7xl font-bold mb-6 leading-tight">
                    IoT Glucose Monitoring
                </h1>
                <p class="text-xl sm:text-2xl text-slate-200 mb-10">
                    Next Gen Health IoT offers cutting-edge, reliable, and scalable smart glucometer solutions for healthcare providers and patients across North America.
                </p>
                <a href="<?php echo esc_url(home_url('/contact-us/')); ?>"
                   class="inline-block bg-brand-accent text-brand-primary font-bold text-lg px-10 py-4 rounded-full shadow-lg
                          hover:bg-sky-300 hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                    Contact Us →
                </a>
            </div>
        </div>
    </section>

    <!-- Overview Section -->
    <section id="overview" class="py-16 md:py-24 bg-light-bg">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">
                <h2 class="font-display text-3xl md:text-4xl font-bold text-dark-text mb-6">
                    Redefining Diabetes Management with <span class="text-brand-secondary">Real-Time Data</span>
                </h2>
                <div class="prose prose-xl text-medium-text max-w-none mx-auto">
                    <p>
                        Smart glucometers are redefining diabetes management by offering real-time blood glucose tracking, seamless data sharing, and advanced analytics. These intelligent devices empower patients and healthcare providers to make timely and informed decisions, enhancing treatment outcomes and quality of life.
                    </p>
                    <p>
                        At Next Gen Health IoT, we deliver smart glucometer solutions that meet the evolving needs of healthcare organizations across the U.S. and Canada. Our customer-first approach ensures that each solution delivers real-world value and operational efficiency.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Components Section -->
    <section id="core-components" class="py-16 md:py-24 bg-content-bg">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 md:mb-16" data-aos="fade-up">
                <h2 class="font-display text-3xl md:text-4xl font-bold text-dark-text mb-3">Core Components</h2>
                 <p class="text-lg text-medium-text max-w-3xl mx-auto">
                    Our solution integrates state-of-the-art hardware, intuitive software, and secure cloud services.
                </p>
            </div>
            <div class="grid lg:grid-cols-2 gap-8 items-stretch">
                <!-- Hardware Card -->
                <div class="bg-light-bg rounded-xl shadow-lg p-8" data-aos="fade-right" data-aos-delay="100">
                    <h3 class="font-display text-2xl font-semibold text-dark-text mb-4">Hardware</h3>
                    <ul class="space-y-3 text-medium-text list-disc pl-5">
                        <li><b>Compact, lightweight glucometers</b> with high-precision sensors</li>
                        <li><b>Touchscreen displays</b> and intuitive user interfaces</li>
                        <li><b>Bluetooth and Wi-Fi connectivity</b> for real-time data transmission</li>
                        <li><b>BLE Gateways & Beacons</b> for seamless wireless data transmission</li>
                        <li><b>Long-lasting, rechargeable batteries</b> for extended life</li>
                    </ul>
                </div>
                <!-- Software & Cloud Card -->
                <div class="grid grid-rows-2 gap-8">
                    <div class="bg-light-bg rounded-xl shadow-lg p-8" data-aos="fade-left" data-aos-delay="200">
                        <h3 class="font-display text-2xl font-semibold text-dark-text mb-4">Software</h3>
                        <ul class="space-y-3 text-medium-text list-disc pl-5">
                            <li>Mobile applications for real-time tracking and trend analysis</li>
                            <li>AI-powered insights and predictive alerts</li>
                            <li>Patient portals and clinician dashboards</li>
                        </ul>
                    </div>
                     <div class="bg-light-bg rounded-xl shadow-lg p-8" data-aos="fade-left" data-aos-delay="300">
                        <h3 class="font-display text-2xl font-semibold text-dark-text mb-4">Cloud Services</h3>
                        <ul class="space-y-3 text-medium-text list-disc pl-5">
                            <li>HIPAA-compliant cloud storage</li>
                            <li>Real-time data syncing across devices</li>
                            <li>API's for seamless integration into EHR/EMR systems</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features and Integrations Section -->
    <section class="py-16 md:py-24 bg-light-bg">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-x-12 gap-y-16">
                <!-- Key Features -->
                <div data-aos="fade-up">
                    <h3 class="font-display text-2xl md:text-3xl font-bold text-dark-text mb-6">Key Features & Functionalities</h3>
                    <ul class="space-y-4">
                        <?php
                        $glucose_features = [
                            'Instant glucose level readings with minimal sample size',
                            'Automatic data logging and real-time monitoring',
                            'Remote sharing of glucose data with healthcare providers',
                            'Trend analysis and predictive alerts for hypo- and hyperglycemia',
                            'Personalized goal setting and progress tracking',
                            'Multi-user support for family or clinical use',
                            'Secure data access through mobile and web applications',
                        ];
                        foreach ($glucose_features as $feature): ?>
                        <li class="flex items-center"><svg class="h-6 w-6 text-brand-secondary flex-shrink-0 mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg><span class="text-medium-text"><?php echo esc_html($feature); ?></span></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <!-- Integrations -->
                <div data-aos="fade-up" data-aos-delay="100">
                    <h3 class="font-display text-2xl md:text-3xl font-bold text-dark-text mb-6">Integrations & Compatibility</h3>
                    <ul class="space-y-4">
                        <?php
                        $glucose_integrations = [
                            'Full integration with major Electronic Health Record (EHR) systems',
                            'Compatible with iOS, Android, and web platforms',
                            'Interoperability with wellness apps like Apple Health and Google Fit',
                            'Easy integration into telehealth and remote patient monitoring programs',
                        ];
                        foreach ($glucose_integrations as $integration): ?>
                        <li class="flex items-center"><svg class="h-6 w-6 text-brand-secondary flex-shrink-0 mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg><span class="text-medium-text"><?php echo esc_html($integration); ?></span></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                 <!-- Industries Served -->
                <div data-aos="fade-up">
                    <h3 class="font-display text-2xl md:text-3xl font-bold text-dark-text mb-6">Industries Served</h3>
                    <ul class="space-y-4">
                        <?php
                        $glucose_industries = ['Hospitals and Specialty Clinics', 'Endocrinology Centers', 'Telehealth Providers', 'Health Insurance Companies', 'Pharmaceutical Research', 'Wellness and Preventative Care Programs'];
                        foreach ($glucose_industries as $industry): ?>
                        <li class="flex items-center"><svg class="h-6 w-6 text-brand-secondary flex-shrink-0 mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg><span class="text-medium-text"><?php echo esc_html($industry); ?></span></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                 <!-- Applications -->
                <div data-aos="fade-up" data-aos-delay="100">
                    <h3 class="font-display text-2xl md:text-3xl font-bold text-dark-text mb-6">Applications</h3>
                     <ul class="space-y-4">
                        <?php
                        $glucose_apps = ['Diabetes management for individuals and healthcare organizations', 'Remote monitoring for chronic disease management programs', 'Clinical research studies focusing on diabetes and metabolic disorders', 'School-based diabetes care programs', 'Corporate wellness initiatives'];
                        foreach ($glucose_apps as $app): ?>
                        <li class="flex items-center"><svg class="h-6 w-6 text-brand-secondary flex-shrink-0 mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg><span class="text-medium-text"><?php echo esc_html($app); ?></span></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section id="benefits-glucose" class="py-16 md:py-24 bg-brand-primary text-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 md:mb-16" data-aos="fade-up">
                <h2 class="font-display text-3xl md:text-4xl font-bold">Key Benefits</h2>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                $glucose_benefits = [
                    ['title' => 'Better Patient Outcomes', 'desc' => 'Enables proactive management of blood sugar levels.'],
                    ['title' => 'Enhanced Care Coordination', 'desc' => 'Facilitates continuous communication between patients and providers.'],
                    ['title' => 'Scalability', 'desc' => 'Supports deployments from single clinics to large health networks.'],
                    ['title' => 'Reduced Healthcare Costs', 'desc' => 'Decreases hospital admissions and emergency visits.'],
                    ['title' => 'Data-Driven Decisions', 'desc' => 'Empowers healthcare teams with actionable insights.'],
                    ['title' => 'Improved Clinical Accuracy', 'desc' => 'Enhances treatment with real-time data insights.'],
                ];
                foreach ($glucose_benefits as $index => $benefit) : ?>
                <div class="bg-white/10 backdrop-blur-sm p-6 rounded-xl text-center" data-aos="fade-up" data-aos-delay="<?php echo $index * 100; ?>">
                    <h3 class="font-display text-xl font-semibold text-brand-accent mb-2"><?php echo esc_html($benefit['title']); ?></h3>
                    <p class="text-slate-200"><?php echo esc_html($benefit['desc']); ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Case Studies (Accordion) -->
    <section id="case-studies-glucose" class="py-16 md:py-24 bg-content-bg">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto" data-aos="fade-up" id="glucose-case-studies-accordion">
                <h2 class="font-display text-3xl md:text-4xl font-bold text-dark-text mb-8 text-center">In Action: Case Studies</h2>
                <?php
                $glucose_case_studies = [
                    ['title' => 'United States – Diabetes Management in California Clinics', 'content' => 'A network of primary care clinics across Southern California adopted Next Gen Health IoT’s smart glucometers to remotely monitor diabetic patients. Within eight months, clinics reported a 20% improvement in HbA1c control rates and a noticeable decrease in diabetes-related hospitalizations.'],
                    ['title' => 'United States – Remote Patient Care for a New York Health System', 'content' => 'A major New York-based health system implemented our RPM solution for high-risk diabetic patients, resulting in a 35% decrease in emergency room visits for hypo/hyperglycemic events.'],
                    ['title' => 'Canada – Public Health Initiative in British Columbia', 'content' => 'In collaboration with a public health agency, our glucometers were distributed to underserved populations. The program successfully reduced the incidence of diabetes complications by 28% over a 12-month period.'],
                ];
                foreach ($glucose_case_studies as $case): ?>
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

    <!-- Final CTA is optional -->

</main>
<script>
// Accordion Toggle for Case Studies
document.addEventListener('DOMContentLoaded', () => {
    const accordionContainer = document.getElementById('glucose-case-studies-accordion');
    if (accordionContainer) {
        const accordionItems = accordionContainer.querySelectorAll('.accordion-item');
        accordionItems.forEach(item => {
            const header = item.querySelector('.accordion-header');
            const content = item.querySelector('.accordion-content');
            const icon = header.querySelector('.accordion-icon');
            if (header && content && icon) {
                header.addEventListener('click', () => {
                    header.setAttribute('aria-expanded', !(header.getAttribute('aria-expanded') === 'true'));
                    content.classList.toggle('hidden');
                    icon.classList.toggle('rotate-180');
                });
            }
        });
    }
});
</script>
<?php
get_footer();
?>