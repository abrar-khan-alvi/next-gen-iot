<?php
/**
 * Template Name: Solution Sub-Page (Environmental Monitoring)
 *
 * A dedicated template for Environmental Monitoring Sensors.
 *
 * @package Next_Gen_IoT
 */

get_header();
?>

<main id="content" class="site-main overflow-x-hidden">

    <!-- Hero Section: Clean & Technical -->
    <section class="relative bg-light-bg text-dark-text pt-24 pb-12 md:pt-40 md:pb-20 lg:pt-48 lg:pb-28">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-8 items-center">
                <div class="text-center lg:text-left" data-aos="fade-right">
                    <h1 class="font-display text-4xl sm:text-5xl xl:text-6xl font-bold mb-6 leading-tight">
                        Smarter Healthcare with Environmental Monitoring Sensors
                    </h1>
                    <p class="text-lg sm:text-xl text-medium-text mb-10 max-w-xl mx-auto lg:mx-0">
                        Next Gen Health IoT empowers healthcare facilities to detect air quality, temperature, humidity, and contaminants in real-time using IoT precision.
                    </p>
                    <a href="<?php echo esc_url(home_url('/contact-us/')); ?>"
                       class="inline-flex items-center bg-brand-primary text-white font-semibold text-lg px-8 py-3 rounded-md shadow-lg
                              hover:bg-opacity-90 transform hover:scale-105 transition-all duration-300">
                        Request a Demo
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                          <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
                <div class="relative hidden lg:block" data-aos="zoom-in-left" data-aos-delay="200">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/environmental-sensor-hero.png"
                         alt="Environmental Monitoring Sensor in a clean environment"
                         class="relative w-full max-w-md mx-auto object-contain">
                    <!-- Create environmental-sensor-hero.png - a clean product shot -->
                </div>
            </div>
        </div>
    </section>

    <!-- Overview Section -->
    <section id="overview" class="py-16 md:py-24 bg-content-bg">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">
                <h2 class="font-display text-3xl md:text-4xl font-bold text-dark-text mb-6">
                    Ensuring Safety and Compliance Through <span class="text-brand-secondary">Intelligent Monitoring</span>
                </h2>
                <div class="prose prose-lg text-medium-text max-w-none mx-auto space-y-4">
                    <p>
                        We deliver advanced IoT-based Environmental Monitoring Sensors designed to enhance environmental safety, regulatory compliance, and patient well-being across healthcare facilities. These intelligent sensors monitor key environmental conditions—such as air quality, temperature, humidity, and airborne contaminants—enabling real-time detection and automated alerts.
                    </p>
                    <p>
                         With our cloud-connected platform, hospital administrators, lab managers, and facility engineers can gain complete visibility into their environments to mitigate risks before they escalate. Headquartered in Los Angeles, CA, we proudly support clients across the U.S. and Canada, delivering high-performance, scalable IoT solutions that integrate seamlessly into modern healthcare infrastructures.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Components Section - Tabbed Interface -->
    <section id="core-components-tabs" class="py-16 md:py-24 bg-light-bg">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 md:mb-16" data-aos="fade-up">
                <h2 class="font-display text-3xl md:text-4xl font-bold text-dark-text mb-3">Core Components</h2>
                <p class="text-lg text-medium-text max-w-3xl mx-auto">
                    A complete, end-to-end solution combining robust hardware with powerful software and secure cloud infrastructure.
                </p>
            </div>
            <div class="max-w-4xl mx-auto">
                <div class="mb-8 border-b border-slate-300" data-aos="fade-up" data-aos-delay="100">
                    <nav class="-mb-px flex space-x-8 justify-center" aria-label="Tabs" id="components-tabs">
                        <button class="tab-button-components whitespace-nowrap py-4 px-1 border-b-2 font-semibold text-lg border-brand-secondary text-brand-primary" aria-current="page">Hardware</button>
                        <button class="tab-button-components whitespace-nowrap py-4 px-1 border-b-2 font-semibold text-lg border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-400">Software</button>
                        <button class="tab-button-components whitespace-nowrap py-4 px-1 border-b-2 font-semibold text-lg border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-400">Cloud Services</button>
                    </nav>
                </div>
                <div data-aos="fade-up" data-aos-delay="200">
                    <!-- Hardware Panel -->
                    <div id="tab-panel-hardware" class="tab-panel-components">
                        <ul class="space-y-3 text-lg text-medium-text">
                            <li class="flex items-start"><svg class="h-6 w-6 text-brand-secondary flex-shrink-0 mr-3 mt-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg><span><b>Multi-Parameter Environmental Sensors:</b> Ideal for monitoring temperature, humidity, CO₂, VOCs, PM2.5, and pressure.</span></li>
                            <li class="flex items-start"><svg class="h-6 w-6 text-brand-secondary flex-shrink-0 mr-3 mt-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg><span><b>Wireless Gateways and Transmitters:</b> LoRaWAN gateways provide robust, long-range wireless communication.</span></li>
                            <li class="flex items-start"><svg class="h-6 w-6 text-brand-secondary flex-shrink-0 mr-3 mt-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg><span><b>Calibration-Grade Sensor Modules:</b> Optical & Imaging Sensors offer precision for medical-grade monitoring.</span></li>
                            <li class="flex items-start"><svg class="h-6 w-6 text-brand-secondary flex-shrink-0 mr-3 mt-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg><span><b>Battery or AC-Powered Options:</b> Wi-Fi HaLow End Devices support flexible power configurations.</span></li>
                        </ul>
                    </div>
                    <!-- Software Panel -->
                    <div id="tab-panel-software" class="tab-panel-components hidden">
                        <ul class="space-y-3 text-lg text-medium-text">
                            <li class="flex items-start"><svg class="h-6 w-6 text-brand-secondary flex-shrink-0 mr-3 mt-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg><span><b>Web-Based Monitoring Dashboard:</b> Centralized interface for tracking and visualizing data.</span></li>
                            <li class="flex items-start"><svg class="h-6 w-6 text-brand-secondary flex-shrink-0 mr-3 mt-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg><span><b>Custom Alert Management:</b> Define thresholds and receive SMS, email, or in-app notifications.</span></li>
                            <li class="flex items-start"><svg class="h-6 w-6 text-brand-secondary flex-shrink-0 mr-3 mt-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg><span><b>Data Trend Analysis Tools:</b> Identify long-term risks or deviations.</span></li>
                            <li class="flex items-start"><svg class="h-6 w-6 text-brand-secondary flex-shrink-0 mr-3 mt-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg><span><b>User Management and Audit Logs:</b> Track access and changes for compliance.</span></li>
                        </ul>
                    </div>
                    <!-- Cloud Services Panel -->
                    <div id="tab-panel-cloud" class="tab-panel-components hidden">
                         <ul class="space-y-3 text-lg text-medium-text">
                            <li class="flex items-start"><svg class="h-6 w-6 text-brand-secondary flex-shrink-0 mr-3 mt-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg><span><b>Real-Time Cloud Synchronization:</b> Ensure continuous data availability.</span></li>
                            <li class="flex items-start"><svg class="h-6 w-6 text-brand-secondary flex-shrink-0 mr-3 mt-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg><span><b>Secure, Encrypted Storage:</b> HIPAA-compliant and scalable infrastructure.</span></li>
                            <li class="flex items-start"><svg class="h-6 w-6 text-brand-secondary flex-shrink-0 mr-3 mt-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg><span><b>RESTful APIs:</b> For integration with hospital building automation and asset tracking systems.</span></li>
                            <li class="flex items-start"><svg class="h-6 w-6 text-brand-secondary flex-shrink-0 mr-3 mt-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg><span><b>Advanced Reporting Engine:</b> Export data for inspections, audits, and internal assessments.</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features & Applications Section -->
    <section id="features-and-apps" class="py-16 md:py-24 bg-content-bg">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-10 md:gap-16">
                <div class="p-8 bg-brand-accent/10 rounded-xl" data-aos="fade-right">
                    <h3 class="font-display text-2xl md:text-3xl font-bold text-dark-text mb-6">Key Features</h3>
                    <ul class="space-y-3">
                        <?php
                        $env_features = ['24/7 Monitoring of Environmental Conditions', 'Real-Time Alerts for Threshold Breaches', 'Mobile-Friendly Interface for On-the-Go Access', 'Data Retention and Historical Reporting for Audits', 'Room-Level or Facility-Wide Visibility', 'Heatmap Visualizations and Predictive Maintenance Insights', 'Self-Diagnostics and Calibration Alerts', 'Offline Data Buffering and Sync Recovery'];
                        foreach($env_features as $feature): ?>
                        <li class="flex items-center"><svg class="h-5 w-5 text-brand-secondary flex-shrink-0 mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path></svg><span class="text-medium-text"><?php echo esc_html($feature); ?></span></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="p-8 bg-brand-secondary/10 rounded-xl" data-aos="fade-left" data-aos-delay="200">
                    <h3 class="font-display text-2xl md:text-3xl font-bold text-dark-text mb-6">Applications</h3>
                    <ul class="space-y-3">
                         <?php
                        $env_apps = ['Operating Rooms and Intensive Care Units', 'Pharmacy Storage and Vaccine Refrigeration', 'Isolation Rooms and Negative Pressure Wards', 'Cleanrooms and Laboratory Environments', 'Medical Equipment Storage Facilities', 'Nursing Homes and Long-Term Care Centers'];
                        foreach($env_apps as $app): ?>
                        <li class="flex items-center"><svg class="h-5 w-5 text-brand-secondary flex-shrink-0 mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg><span class="text-medium-text"><?php echo esc_html($app); ?></span></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section id="benefits-environmental" class="py-16 md:py-24 bg-light-bg">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 md:mb-16" data-aos="fade-up">
                <h2 class="font-display text-3xl md:text-4xl font-bold text-dark-text">Benefits of Our Monitoring Systems</h2>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                 <?php
                $env_benefits = [
                    ['title' => 'Improve Patient Safety', 'desc' => 'Detect harmful air conditions before they affect health.'],
                    ['title' => 'Protect Sensitive Equipment', 'desc' => 'Prevent damage due to temperature or humidity deviations.'],
                    ['title' => 'Support Sustainability', 'desc' => 'Identify inefficiencies in heating, cooling, or ventilation systems.'],
                    ['title' => 'Meet Regulatory Requirements', 'desc' => 'Maintain precise environmental controls in labs and patient areas.'],
                    ['title' => 'Enhance Operational Efficiency', 'desc' => 'Reduce manual checks with automated reporting.'],
                    ['title' => 'Minimize Infection Risks', 'desc' => 'Monitor and control airborne contaminant levels.'],
                ];
                foreach ($env_benefits as $index => $benefit): ?>
                <div class="text-center p-6" data-aos="fade-up" data-aos-delay="<?php echo $index * 100; ?>">
                    <div class="inline-block p-3 border-2 border-brand-accent rounded-full mb-4">
                        <span class="font-display font-bold text-xl text-brand-primary">0<?php echo $index + 1; ?></span>
                    </div>
                    <h3 class="font-display text-xl font-semibold text-dark-text mb-2"><?php echo esc_html($benefit['title']); ?></h3>
                    <p class="text-medium-text text-sm"><?php echo esc_html($benefit['desc']); ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Case Studies (Accordion) -->
    <section id="case-studies-env" class="py-16 md:py-24 bg-content-bg border-t border-slate-100">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto" data-aos="fade-up" id="env-case-studies-accordion">
                <h2 class="font-display text-3xl md:text-4xl font-bold text-dark-text mb-8 text-center">In Action: Case Studies</h2>
                <?php
                $env_case_studies = [
                    ['title' => 'U.S. – Cleveland Clinic, OH', 'content' => 'The Cleveland Clinic deployed our environmental monitoring sensors across multiple cleanrooms and patient recovery areas. This resulted in a 50% reduction in compliance violations during state health inspections, thanks to precise monitoring and automated reporting.'],
                    ['title' => 'U.S. – Cedars-Sinai Medical Center, CA', 'content' => 'Implemented our system to monitor negative pressure isolation rooms, ensuring airborne contaminants were properly contained. This improved staff and patient safety, providing real-time alerts and auditable logs for compliance.'],
                    ['title' => 'Canada – Mount Sinai Hospital, Toronto, ON', 'content' => 'Utilized our sensors for pharmacy and vaccine refrigeration monitoring. The system prevented over $200,000 in potential losses by sending immediate alerts for temperature deviations, ensuring the integrity of critical medications.'],
                ];
                foreach ($env_case_studies as $case): ?>
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
    // Accordion Logic
    const accordionContainer = document.getElementById('env-case-studies-accordion');
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

    // Components Tabs Logic
    const componentsTabContainer = document.getElementById('components-tabs');
    if (componentsTabContainer) {
        const tabs = componentsTabContainer.querySelectorAll('.tab-button-components');
        const panels = [
            document.getElementById('tab-panel-hardware'),
            document.getElementById('tab-panel-software'),
            document.getElementById('tab-panel-cloud')
        ];

        tabs.forEach((tab, index) => {
            tab.addEventListener('click', () => {
                tabs.forEach(t => {
                    t.setAttribute('aria-current', 'false');
                    t.classList.remove('border-brand-secondary', 'text-brand-primary');
                    t.classList.add('border-transparent', 'text-slate-500', 'hover:text-slate-700', 'hover:border-slate-400');
                });
                panels.forEach(p => { if (p) p.classList.add('hidden'); });

                tab.setAttribute('aria-current', 'true');
                tab.classList.add('border-brand-secondary', 'text-brand-primary');
                tab.classList.remove('border-transparent', 'text-slate-500', 'hover:text-slate-700', 'hover:border-slate-400');
                if (panels[index]) {
                    panels[index].classList.remove('hidden');
                }
            });
        });
    }
});
</script>
<?php
get_footer();
?>