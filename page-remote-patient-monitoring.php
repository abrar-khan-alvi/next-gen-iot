<?php
/**
 * Template Name: Solution Sub-Page (RPM)
 *
 * A dedicated, innovative template for Remote Patient Monitoring solutions.
 *
 * @package Next_Gen_IoT
 */

get_header();
?>

<main id="content" class="site-main overflow-x-hidden">

    <!-- Hero Section: Split screen with strong visual -->
    <section class="relative min-h-[70vh] flex items-center justify-center bg-brand-primary overflow-hidden">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="text-center lg:text-left py-12" data-aos="fade-right">
                    <span class="inline-block text-brand-secondary font-semibold tracking-wider uppercase text-sm mb-3">
                        Telehealth Systems
                    </span>
                    <h1 class="font-display text-4xl sm:text-5xl xl:text-6xl text-white font-bold mb-6 leading-tight">
                        Revolutionize Care with AI-Powered RPM Solutions
                    </h1>
                    <p class="text-lg sm:text-xl text-white text-medium-text mb-10 max-w-xl mx-auto lg:mx-0">
                        Next Gen Health IoT delivers innovative RPM solutions that enhance patient care through real-time data, smart sensors, and cloud analytics.
                    </p>
                    <a href="<?php echo esc_url(home_url('/contact-us/')); ?>"
                       class="inline-flex items-center bg-brand-secondary text-white font-semibold text-lg px-8 py-3 rounded-md shadow-lg
                              hover:bg-opacity-90 transform hover:scale-105 transition-all duration-300">
                        Contact Us
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                          <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
                <div class="hidden lg:block" data-aos="fade-left" data-aos-delay="200">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/rpm-hero-visual.png"
                         alt="Clinician reviewing RPM data on multiple devices"
                         class="w-full h-auto object-contain">
                    <!-- Action: Create rpm-hero-visual.png, a dynamic image showing a dashboard, phone, and watch -->
                </div>
            </div>
        </div>
    </section>

    <!-- Overview Section -->
    <section id="overview" class="py-16 md:py-24 bg-content-bg">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">
                <h2 class="font-display text-3xl md:text-4xl font-bold text-dark-text mb-6">
                    Extending Care Beyond the Clinic
                </h2>
                <div class="prose prose-xl text-medium-text max-w-none mx-auto space-y-4">
                    <p>
                        Remote Patient Monitoring (RPM) transforms traditional healthcare by enabling clinicians to track patients’ vital signs and health conditions in real-time, outside of conventional clinical settings. By leveraging IoT-based RPM devices, providers can remotely monitor metrics such as heart rate, blood pressure, glucose levels, and oxygen saturation, ensuring timely interventions and personalized care. These systems not only empower patients with chronic illnesses to manage their conditions more effectively but also support proactive decision-making among healthcare teams.
                    </p>
                     <p>
                        Our RPM solutions, supported by rigorous quality assurance and expert consulting, enable healthcare organizations to streamline care delivery and unlock the full potential of connected health ecosystems.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- The RPM Journey (Replaces Core Components) -->
    <section id="rpm-journey" class="py-16 md:py-24 bg-light-bg">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 md:mb-20" data-aos="fade-up">
                <h2 class="font-display text-3xl md:text-4xl font-bold text-dark-text mb-3">
                    The Data Journey: From Patient to Provider
                </h2>
                <p class="text-lg text-medium-text max-w-3xl mx-auto">
                    Our ecosystem ensures a secure and seamless flow of information, turning raw data into life-saving insights.
                </p>
            </div>

            <div class="relative grid md:grid-cols-3 gap-8 items-start">
                <!-- Decorative Connecting Line -->
                <div class="hidden md:block absolute top-12 left-0 w-full h-1 bg-brand-accent/30 -z-10"></div>
                <?php
                $journey_steps = [
                    ['title' => 'Hardware: At Home with the Patient', 'desc' => 'FDA-compliant biosensors, wearables, and gateway hubs collect vital data comfortably and reliably from the patient\'s home.', 'icon' => '<svg class="h-10 w-10 text-brand-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2l-7 7-7-7" /></svg>'],
                    ['title' => 'Cloud Services: Secure & Scalable', 'desc' => 'Data is encrypted and transmitted to our secure, HIPAA-compliant cloud for real-time processing, storage, and synchronization.', 'icon' => '<svg class="h-10 w-10 text-brand-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" /></svg>'],
                    ['title' => 'Software: Actionable Insights for Clinicians', 'desc' => 'User-friendly mobile apps and clinical dashboards visualize trends, trigger alerts, and integrate with EHR systems for informed decision-making.', 'icon' => '<svg class="h-10 w-10 text-brand-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>']
                ];
                foreach ($journey_steps as $index => $step) : ?>
                <div class="relative p-6 text-center" data-aos="fade-up" data-aos-delay="<?php echo ($index + 1) * 150; ?>">
                    <div class="flex justify-center items-center h-24 w-24 mx-auto mb-5 bg-content-bg rounded-full border-4 border-light-bg shadow-lg">
                        <?php echo $step['icon']; ?>
                    </div>
                    <h3 class="font-display text-xl font-semibold text-dark-text"><?php echo esc_html($step['title']); ?></h3>
                    <p class="text-medium-text mt-2 text-sm"><?php echo esc_html($step['desc']); ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Dual Benefits Section -->
    <section id="benefits" class="py-16 md:py-24 bg-brand-primary text-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 md:mb-16" data-aos="fade-up">
                <h2 class="font-display text-3xl md:text-4xl font-bold">A Win-Win for Patients & Providers</h2>
                <p class="text-xl text-slate-300 max-w-3xl mx-auto mt-4">Our RPM solutions create value across the entire care spectrum.</p>
            </div>
            <div class="grid md:grid-cols-2 gap-10 md:gap-16 items-start">
                <div data-aos="fade-right">
                    <h3 class="font-display text-2xl font-bold text-brand-accent mb-6 flex items-center"><svg class="h-8 w-8 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg> For Patients</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start"><div class="p-1 bg-brand-secondary rounded-full mt-1.5 mr-3 flex-shrink-0"></div><span>Enhanced engagement and empowerment through real-time feedback.</span></li>
                        <li class="flex items-start"><div class="p-1 bg-brand-secondary rounded-full mt-1.5 mr-3 flex-shrink-0"></div><span>Reduced hospital admissions and emergency visits through proactive care.</span></li>
                        <li class="flex items-start"><div class="p-1 bg-brand-secondary rounded-full mt-1.5 mr-3 flex-shrink-0"></div><span>Greater convenience and comfort of monitoring from home.</span></li>
                    </ul>
                </div>
                <div data-aos="fade-left" data-aos-delay="200">
                     <h3 class="font-display text-2xl font-bold text-brand-accent mb-6 flex items-center"><svg class="h-8 w-8 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z" /></svg> For Providers</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start"><div class="p-1 bg-brand-secondary rounded-full mt-1.5 mr-3 flex-shrink-0"></div><span>Lower operational and care delivery costs.</span></li>
                        <li class="flex items-start"><div class="p-1 bg-brand-secondary rounded-full mt-1.5 mr-3 flex-shrink-0"></div><span>Improved care coordination and clinical outcomes.</span></li>
                        <li class="flex items-start"><div class="p-1 bg-brand-secondary rounded-full mt-1.5 mr-3 flex-shrink-0"></div><span>Scalable solutions for clinics, hospitals, or national systems.</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Case Studies Section -->
    <section id="case-studies" class="py-16 md:py-24 bg-light-bg">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto" data-aos="fade-up" id="rpm-case-studies-accordion">
                <h2 class="font-display text-3xl md:text-4xl font-bold text-dark-text mb-8 text-center">In Action: Proven Success with RPM</h2>
                <?php
                $rpm_case_studies = [
                    ['title' => 'Case Study 1 - United States (New York)', 'content' => 'A hospital system in New York used Next Gen Health IoT RPM tools to monitor cardiac patients after discharge. The program resulted in a 28% reduction in readmission rates and improved medication adherence by 33%.'],
                    ['title' => 'Case Study 2 - United States (Texas)', 'content' => 'In Texas, a large endocrinology practice deployed our smart glucometers for continuous diabetes management, leading to better patient glycemic control and a 15% reduction in emergency visits related to hyperglycemia.'],
                    ['title' => 'Case Study 3 - Canada (Ontario)', 'content' => 'An Ontario-based long-term care provider utilized our RPM platform for senior residents, improving proactive care coordination and reducing unnecessary hospital transfers by 22%.'],
                ];
                foreach ($rpm_case_studies as $case) : ?>
                    <div class="accordion-item bg-content-bg shadow-md rounded-lg overflow-hidden mb-3">
                        <button class="accordion-header flex justify-between items-center w-full p-4 md:p-5 text-left font-medium text-dark-text hover:bg-slate-50 focus:outline-none transition-colors" aria-expanded="false">
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
<script>
// Accordion Toggle for RPM Case Studies
document.addEventListener('DOMContentLoaded', () => {
    const accordionContainer = document.getElementById('rpm-case-studies-accordion');
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