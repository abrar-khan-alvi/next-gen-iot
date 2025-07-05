<?php
/**
 * Template Name: Telehealth Systems Page
 *
 * This is the template for displaying the Telehealth Systems page.
 *
 * @package Next_Gen_IoT
 */

get_header();
?>

<main id="content" class="site-main">

    <!-- Hero Section -->
    <section class="hero-section relative text-white py-20 md:py-28 lg:py-32 overflow-hidden">
        <div class="absolute inset-0 z-0 opacity-10">
            <!-- Optional: subtle pattern -->
        </div>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid md:grid-cols-2 gap-8 md:gap-12 items-center">
                <div class="text-center md:text-left animate-fade-in-left" data-aos="fade-right">
                    <h1 class="font-display text-4xl sm:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                        Transform Remote Patient Care with <span class="text-brand-accent">Advanced Telehealth IoT</span>
                    </h1>
                    <p class="text-lg sm:text-xl text-black mb-10 max-w-xl">
                        Revolutionize asset tracking, workflow optimization, and patient safety with advanced RTLS and Telehealth solutions from Next Gen Health IoT.
                    </p>
                    <a href="<?php echo esc_url(home_url('/contact-us/')); ?>"
                       class="inline-block bg-brand-accent text-brand-primary font-semibold text-lg px-8 py-3 rounded-md
                              hover:bg-sky-400 hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                        Contact Us
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block ml-2 -mt-1" viewBox="0 0 20 20" fill="currentColor">
                          <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
                <div class="hidden md:flex justify-center" data-aos="fade-left" data-aos-delay="200">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/telehealth-hero.png"
                        alt="Illustrative image of smart patient care technology"
                        class="max-h-[520px] w-auto"
                        style="max-width: 520px;">
                </div>
            </div>
        </div>
    </section>

    <!-- Overview Section -->
    <section id="overview-telehealth" class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center" data-aos="fade-up">
                <h2 class="font-display text-3xl md:text-4xl font-bold text-dark-text mb-4">
                    The Future of Healthcare: Remote Monitoring & Telehealth
                </h2>
                <div class="prose prose-lg text-medium-text max-w-none mx-auto space-y-4">
                    <p>
                        IoT (Internet of Things) for Remote Monitoring and Telehealth Systems represents a transformative shift in healthcare delivery. By connecting patients, devices, and providers through intelligent digital infrastructure, healthcare organizations can access vital health data in real time—enabling better decision-making, timely interventions, and more personalized treatment plans.
                    </p>
                    <p>
                        This technology is especially valuable in today’s healthcare landscape, where the demand for remote services, chronic disease management, and aging population support continues to grow. IoT makes it possible to monitor patients wherever they are—at home, in assisted living, or in remote locations—while still maintaining high standards of care.
                    </p>
                    <p class="!mt-6 text-dark-text font-medium">
                        At Next Gen Health IoT, headquartered in San Francisco-Oakland, CA, we help healthcare organizations unlock the full potential of remote monitoring through our innovative, reliable, and scalable solutions. Our systems are built on cutting-edge research, a strict quality assurance process, and strategic partnerships with leading industry innovators such as GAO (Global Advanced Operations) Tek and GAO (Global Advanced Operations) RFID.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="integrations-ecosystem" class="py-16 md:py-24 lg:py-28 bg-light-bg">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-10 md:gap-16 lg:gap-20 items-start">
                <div data-aos="fade-right">
                    <h3 class="font-display text-2xl md:text-3xl font-bold text-brand-primary mb-4">
                        Our Advanced IoT Offerings for Remote Monitoring & Telehealth Systems
                    </h3>
                    <p class="text-medium-text leading-relaxed mb-4">
                        Alongside our own cutting-edge innovations and co-developed technologies within the Health Care sector, we proudly offer a curated selection of premium products and systems from our trusted partners—<a href="#" class="text-brand-secondary hover:text-brand-primary font-medium underline">GAO Tek Inc.</a> and <a href="#" class="text-brand-secondary hover:text-brand-primary font-medium underline">GAO RFID Inc.</a>
                    </p>
                    <ul class="text-medium-text text-left space-y-2 mb-4 list-disc list-inside">
                        <li>Seamless integration with existing healthcare infrastructure</li>
                        <li>Reliable, real-time data for actionable insights</li>
                        <li>Compliance with global healthcare standards</li>
                        <li>Direct links to <a href="#" class="text-brand-secondary hover:text-brand-primary underline">GAO Tek Inc.</a> and <a href="#" class="text-brand-secondary hover:text-brand-primary underline">GAO RFID Inc.</a> solutions</li>
                    </ul>
                    <p class="text-sm text-slate-500">
                        Discover how our ecosystem of IoT devices and platforms can help you achieve your remote monitoring and telehealth goals.
                    </p>
                </div>
                <div class="hidden md:flex justify-center" data-aos="fade-left" data-aos-delay="200">
                    <!-- Replace with your actual image or a more descriptive placeholder -->
                    <img src="<?php echo get_template_directory_uri(); ?>/images/sensors-23-08015-g001.png"
                         alt="IoT ecosystem diagram" 
                         class="rounded-lg shadow-xl max-w-lg w-full h-auto object-contain">
                </div>
            </div>
        </div>
    </section>
    <!-- Core Components of IoT-Based Remote Health Monitoring -->
    <section id="core-components-telehealth" class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 md:mb-16" data-aos="fade-up">
                <h2 class="font-display text-3xl md:text-4xl font-bold text-dark-text mb-3">
                    Core Components of IoT-Based Remote Health Monitoring
                </h2>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                $telehealth_components = [
                    ['title' => 'Smart Wearables and Sensors', 'desc' => 'Our wearable medical-grade devices continuously collect essential health metrics such as heart rate, blood pressure, body temperature, respiratory rate, blood glucose levels, and oxygen saturation. These devices are designed for comfort and accuracy, ensuring patients can wear them for long durations without discomfort, while providing real-time data.', 'delay' => '100'],
                    ['title' => 'Gateway Devices', 'desc' => 'Gateways serve as the communication bridge between wearable devices and cloud systems. They collect sensor data from nearby devices and securely transmit it over cellular or Wi-Fi networks. These devices ensure that even in environments with limited connectivity, patient data is reliably captured and uploaded for real-time access and analysis.', 'delay' => '200'],
                    ['title' => 'Secure Cloud Infrastructure', 'desc' => 'Our cloud environment is built with healthcare-grade encryption and compliance protocols such as HIPAA and GDPR. It ensures that patient data is stored securely, accessible only by authorized personnel, and backed up in real-time. The cloud infrastructure also enables data visualization, historical trend analysis, and seamless integration with existing Electronic Health Record (EHR) systems.', 'delay' => '300'],
                    ['title' => 'Patient & Provider Portals', 'desc' => 'Through user-friendly interfaces, both patients and healthcare professionals can access critical health data. Patients get actionable insights, alerts, and patient summaries, while providers can view their metrics, receive reminders, and communicate directly with their care team. These portals promote transparency, accountability, and higher engagement in care routines.', 'delay' => '100', 'col_span_lg' => 'lg:col-span-1'], // Adjusted for potential 2-column layout
                    ['title' => 'AI-Powered Analytics Engine', 'desc' => 'Our AI-driven system analyzes large volumes of health data to detect early warning signs of health deterioration or potential complications. By learning from patterns, it supports clinical decision-making by prioritizing urgent cases, recommending interventions, and providing predictive insights for preventive care.', 'delay' => '200', 'col_span_lg' => 'lg:col-span-2'], // Adjusted to span 2 cols if 5 items
                ];
                $grid_class = count($telehealth_components) % 3 === 2 ? 'lg:grid-cols-2' : 'lg:grid-cols-3'; // Adjust grid for 5 items
                if (count($telehealth_components) === 5) $grid_class = 'lg:grid-cols-5 md:grid-cols-2 child:lg:col-span-1'; // More specific for 5 items to be even

                ?>
                <?php foreach ($telehealth_components as $component) : ?>
                <div class="bg-content-bg p-6 md:p-8 rounded-xl shadow-lg hover:shadow-2xl transition-shadow duration-300 transform hover:-translate-y-1 <?php echo isset($component['col_span_lg']) && count($telehealth_components) === 5 ? $component['col_span_lg'] : ''; ?>" data-aos="fade-up" data-aos-delay="<?php echo esc_attr($component['delay']); ?>">
                    <h3 class="font-display text-xl font-semibold text-dark-text mb-3"><?php echo esc_html($component['title']); ?></h3>
                    <p class="text-medium-text text-sm leading-relaxed"><?php echo esc_html($component['desc']); ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Accordion Sections Wrapper -->
    <section class="py-16 md:py-24 bg-content-bg">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto" id="telehealth-details-accordion">
                <?php
                $accordion_sections = [
                    [
                        'id' => 'key-features',
                        'title' => 'Key Features and Functionalities',
                        'items' => [
                            'Real-Time Patient Monitoring: Healthcare professionals can view live feeds of patients’ vitals and movement through continuous monitoring. This feature is essential for managing high-risk patients, providing round-the-clock oversight without requiring them to be admitted in a clinical setting.',
                            'Teleconsultation Support: Providers can conduct virtual consultations while accessing the patient’s real-time and historical health data. This integration improves diagnostic accuracy, ensures continuity of care, and enhances the patient experience by reducing unnecessary in-person visits.',
                            'Automated Alerts & Notifications: Our platform allows custom thresholds for vital signs. When these are exceeded, automated alerts via SMS, email, or app notifications are triggered. This ensures immediate response from caregivers or healthcare teams, improving outcomes in emergency situations.',
                            'Chronic Disease Management Tools: IoT tools track long-term conditions like diabetes, heart disease, or respiratory disorders through daily monitoring and automated reporting. This data enables tailored care plans, medication adherence, and early detection of worsening conditions—helping patients live healthier, independent lives.',
                            'Compliance & Security Safeguards: Every system is designed with end-to-end encryption, secure access protocols, and audit trails to meet global healthcare compliance standards. We help organizations maintain data integrity and protect sensitive patient information from breaches.',
                            'Integration-Ready Platform: Our technology is engineered to plug seamlessly into a healthcare organization’s IT ecosystem. With API support, it can connect to EHRs, billing systems, workflow tools, and third-party health platforms—enabling a cohesive and unified healthcare experience.',
                        ]
                    ],
                    [
                        'id' => 'common-use-cases-telehealth',
                        'title' => 'Common Use Cases',
                        'items' => [ // Add actual use case content here
                            'Post-Operative Remote Monitoring: Track patient recovery at home, reducing hospital readmissions and enabling early intervention if complications arise.',
                            'Management of Chronic Conditions (e.g., Diabetes, Hypertension): Continuous data collection helps patients and doctors manage conditions proactively.',
                            'Virtual Geriatric Care: Provide ongoing support and monitoring for elderly patients, enhancing their safety and independence.',
                            'Rural & Underserved Area Healthcare Access: Extend specialist care to remote locations where in-person visits are challenging.',
                        ]
                    ],
                    [
                        'id' => 'integrations-telehealth',
                        'title' => 'Integrations and Ecosystem Compatibility',
                        'items' => [ // Add actual integration content here
                            'EHR/EMR Systems: Seamless data flow for comprehensive patient records.',
                            'Pharmacy Systems: For e-prescriptions and medication adherence tracking.',
                            'Medical Imaging (PACS/DICOM): Secure sharing of diagnostic images during teleconsultations.',
                            'Wearable Device Platforms: Compatibility with a wide range of consumer and medical-grade wearables.',
                        ]
                    ]
                ];

                foreach ($accordion_sections as $section) : ?>
                <div class="accordion-item bg-slate-50 shadow rounded-lg overflow-hidden mb-4" data-aos="fade-up">
                    <button class="accordion-header flex justify-between items-center w-full p-4 md:p-5 text-left font-medium text-dark-text hover:bg-slate-100 focus:outline-none transition-colors" aria-expanded="false" aria-controls="<?php echo esc_attr($section['id']); ?>-content">
                        <span><?php echo esc_html($section['title']); ?></span>
                        <svg class="accordion-icon h-5 w-5 transform transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div id="<?php echo esc_attr($section['id']); ?>-content" class="accordion-content hidden p-4 md:p-5 border-t border-slate-200">
                        <ul class="space-y-3 text-medium-text text-sm leading-relaxed">
                            <?php foreach ($section['items'] as $item_text) : ?>
                                <li class="flex items-start">
                                    <svg class="h-4 w-4 text-brand-secondary flex-shrink-0 mr-2.5 mt-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                    <span><?php echo esc_html($item_text); ?></span>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>


    <!-- Benefits of IoT with Next Gen Health IoT -->
    <section id="benefits-telehealth-iot" class="py-16 md:py-24 bg-light-bg">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 md:mb-16" data-aos="fade-up">
                <h2 class="font-display text-3xl md:text-4xl font-bold text-dark-text mb-3">
                    Advantages of Telehealth IoT with Next Gen Health
                </h2>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                $telehealth_benefits = [
                    ['title' => 'Continuous, High-Fidelity Monitoring', 'desc' => 'Gain uninterrupted visibility into patients’ conditions, which is especially important for fragile, elderly, or high-risk individuals who require close observation.', 'delay' => '100'],
                    ['title' => 'Proactive Care Delivery', 'desc' => 'Identify early signs of health decline through predictive alerts, allowing for faster treatment, fewer complications, and a reduction in emergency events.', 'delay' => '200'],
                    ['title' => 'Operational Efficiency', 'desc' => 'Save costs and time by reducing hospital admissions, automating monitoring tasks, and reallocating staff resources to where they are most needed.', 'delay' => '300'],
                    ['title' => 'Enhanced Patient Engagement', 'desc' => 'Patients become active participants in their health journey with access to their metrics, goal tracking, and real-time feedback—improving adherence and satisfaction.', 'delay' => '100'],
                    ['title' => 'Scalable and Customizable', 'desc' => 'Whether you’re a small clinic or a national healthcare network, our modular solutions grow with your organization, offering easy scaling and customization to fit evolving needs.', 'delay' => '200'],
                    ['title' => 'Leading the Future of Connected Care', 'desc' => 'With a proven track record of excellence and innovation, Next Gen Health IoT continues to help healthcare providers across North America transform care delivery through smart, secure, and scalable remote health technologies.', 'delay' => '300'],
                ];
                foreach ($telehealth_benefits as $benefit) : ?>
                <div class="bg-content-bg p-6 md:p-8 rounded-xl shadow-lg hover:shadow-2xl transition-shadow duration-300 transform hover:-translate-y-1" data-aos="fade-up" data-aos-delay="<?php echo esc_attr($benefit['delay']); ?>">
                    <h3 class="font-display text-xl font-semibold text-dark-text mb-3"><?php echo esc_html($benefit['title']); ?></h3>
                    <p class="text-medium-text text-sm leading-relaxed"><?php echo esc_html($benefit['desc']); ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Get In Touch Section (CTA) - Standard -->
    <section class="py-16 md:py-24 bg-brand-primary text-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="font-display text-3xl font-bold mb-6" data-aos="fade-up">
                Elevate Your Telehealth Capabilities Today
            </h2>
            <p class="text-lg text-slate-200 mb-10 max-w-xl mx-auto" data-aos="fade-up" data-aos-delay="150">
                Discover how Next Gen Health IoT can integrate advanced telehealth solutions into your practice.
            </p>
            <a href="<?php echo esc_url(home_url('/contact-us/')); ?>"
               class="inline-block bg-brand-accent text-brand-primary font-semibold text-lg px-10 py-3.5 rounded-md
                      hover:bg-sky-400 hover:shadow-xl transform hover:scale-105 transition-all duration-300"
               data-aos="fade-up" data-aos-delay="300">
                Schedule a Demo
            </a>
        </div>
    </section>

</main>
<script>
// Basic Accordion Toggle for Telehealth Details
document.addEventListener('DOMContentLoaded', () => {
    const accordionContainer = document.getElementById('telehealth-details-accordion');
    if (accordionContainer) {
        const accordionItems = accordionContainer.querySelectorAll('.accordion-item');
        accordionItems.forEach(item => {
            const header = item.querySelector('.accordion-header');
            const content = item.querySelector('.accordion-content');
            const icon = header.querySelector('.accordion-icon');

            if (header && content && icon) { // Ensure all elements exist
                header.addEventListener('click', () => {
                    const isExpanded = header.getAttribute('aria-expanded') === 'true';
                    header.setAttribute('aria-expanded', !isExpanded);
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