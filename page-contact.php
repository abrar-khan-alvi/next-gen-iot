<?php
/**
 * Template Name: Contact Us Page (HTML Form)
 *
 * This is the template for displaying the Contact Us page with a basic HTML form.
 * NOTE: This form WILL NOT send emails without additional PHP processing.
 *
 * @package Next_Gen_IoT
 */

get_header();

// Basic form processing placeholder (you would expand this significantly)
$form_message = '';
$form_success = false;

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['contact_submit'])) {
    // Sanitize and validate input (very basic example)
    $name = sanitize_text_field($_POST['your_name']);
    $company = sanitize_text_field($_POST['company_name']);
    $email = sanitize_email($_POST['email_id']);
    $phone = sanitize_text_field($_POST['phone_number']);
    $question = sanitize_textarea_field($_POST['your_question']);
    $antispam = sanitize_text_field($_POST['anti_spam']);

    // Simple validation (expand this)
    if (empty($name) || !is_email($email) || empty($question) || trim($antispam) !== '12') {
        $form_message = 'Please fill in all required fields correctly. (Anti-spam answer is 12)';
        $form_success = false;
    } else {
        // --- THIS IS WHERE YOU WOULD ADD wp_mail() or other email sending logic ---
        // For demonstration, we'll just set a success message.
        // In a real scenario, you'd try to send the email and check if wp_mail() succeeded.

        // Example wp_mail() structure (NEEDS PROPER CONFIGURATION TO WORK):
        /*
        $to = get_option('admin_email'); // Send to admin email
        $subject = 'New Contact Form Submission from ' . $name;
        $body = "Name: $name\n";
        $body .= "Company: $company\n";
        $body .= "Email: $email\n";
        $body .= "Phone: $phone\n\n";
        $body .= "Question:\n$question\n";
        $headers = array('Content-Type: text/plain; charset=UTF-8', 'From: ' . $name . ' <' . $email . '>');

        if (wp_mail($to, $subject, $body, $headers)) {
            $form_message = 'Thank you for your message! We will get back to you shortly.';
            $form_success = true;
            // Optionally, redirect or clear form fields here
        } else {
            $form_message = 'Sorry, there was an error sending your message. Please try again later.';
            $form_success = false;
        }
        */

        // Placeholder success for this example:
        $form_message = 'Thank you for your submission (this is a demo, no email was sent).';
        $form_success = true;
    }
}
?>

<main id="content" class="site-main">

    <!-- Page Header/Banner Section -->
<section class="page-banner bg-brand-primary text-white py-24 md:py-[10rem]">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center animate-fade-in" data-aos="fade-in">
        <h1 class="font-display text-4xl sm:text-5xl font-bold !text-white">
            <?php the_title(); ?>
        </h1>
        <p class="text-lg md:text-xl !text-slate-200 mt-4 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
            We're here to help and answer any question you might have. We look forward to hearing from you!
        </p>
    </div>
</section>

    <!-- Contact Details & Form Section -->
    <section id="contact-details-form" class="py-16 md:py-24 bg-light-bg">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-12 gap-8 md:gap-12 items-start">

                <!-- Column 1: Contact Information & Map -->
                <div class="md:col-span-5 space-y-10" data-aos="fade-right">
                    <div>
                        <h2 class="font-display text-2xl md:text-3xl font-semibold text-dark-text mb-4">
                            Get In Touch Directly
                        </h2>
                        <div class="space-y-3 text-medium-text">
                            <p class="flex items-start">
                                <svg class="h-5 w-5 text-brand-secondary flex-shrink-0 mr-3 mt-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                  <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                </svg>
                                <span>1901 Harrison Street, Oakland, CA, 94612, USA</span>
                            </p>
                            <p class="flex items-center">
                                <svg class="h-5 w-5 text-brand-secondary flex-shrink-0 mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                  <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                </svg>
                                <a href="tel:+1234567890" class="hover:text-brand-secondary transition-colors">(123) 456-7890</a>
                            </p>
                            <p class="flex items-center">
                                <svg class="h-5 w-5 text-brand-secondary flex-shrink-0 mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                  <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                  <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                </svg>
                                <a href="mailto:info@nextgenhealth.iot" class="hover:text-brand-secondary transition-colors">info@nextgenhealth.iot</a>
                            </p>
                        </div>
                    </div>

                    <div>
                        <h3 class="font-display text-xl font-semibold text-dark-text mb-4">
                            Our Location
                        </h3>
                        <div class="aspect-video rounded-lg overflow-hidden shadow-lg">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.308903517604!2d-122.27090808468205!3d37.80199467975416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808f80c9b7407a19%3A0x8999f57f8d6f5198!2s1901%20Harrison%20St%2C%20Oakland%2C%20CA%2094612%2C%20USA!5e0!3m2!1sen!2sbd!4v1678888888888!5m2!1sen!2sbd" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>

                <!-- Column 2: HTML Contact Form -->
                <div class="md:col-span-7 bg-content-bg p-6 md:p-8 rounded-xl shadow-xl" data-aos="fade-left" data-aos-delay="100">
                    <h2 class="font-display text-2xl md:text-3xl font-semibold text-dark-text mb-6">
                        Feel Free to Contact us
                    </h2>

                    <?php if (!empty($form_message)) : ?>
                        <div class="mb-6 p-4 rounded-md <?php echo $form_success ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700'; ?>">
                            <?php echo esc_html($form_message); ?>
                        </div>
                    <?php endif; ?>

                    <?php // Do not show form again if successfully "sent" (for this demo)
                    if (!$form_success) : ?>
                    <form action="<?php echo esc_url(get_permalink()); ?>#contact-details-form" method="post" class="space-y-6">
                        <div>
                            <label for="your-name" class="block text-sm font-medium text-medium-text mb-1">Your Name *</label>
                            <input type="text" name="your_name" id="your-name" required
                                   class="w-full px-4 py-2.5 border border-slate-300 rounded-md shadow-sm focus:ring-brand-secondary focus:border-brand-secondary transition-colors"
                                   value="<?php echo isset($_POST['your_name']) ? esc_attr($_POST['your_name']) : ''; ?>">
                        </div>
                        <div>
                            <label for="company-name" class="block text-sm font-medium text-medium-text mb-1">Company Name</label>
                            <input type="text" name="company_name" id="company-name"
                                   class="w-full px-4 py-2.5 border border-slate-300 rounded-md shadow-sm focus:ring-brand-secondary focus:border-brand-secondary transition-colors"
                                   value="<?php echo isset($_POST['company_name']) ? esc_attr($_POST['company_name']) : ''; ?>">
                        </div>
                        <div>
                            <label for="email-id" class="block text-sm font-medium text-medium-text mb-1">Email ID *</label>
                            <input type="email" name="email_id" id="email-id" required
                                   class="w-full px-4 py-2.5 border border-slate-300 rounded-md shadow-sm focus:ring-brand-secondary focus:border-brand-secondary transition-colors"
                                   value="<?php echo isset($_POST['email_id']) ? esc_attr($_POST['email_id']) : ''; ?>">
                        </div>
                        <div>
                            <label for="phone-number" class="block text-sm font-medium text-medium-text mb-1">Phone Number</label>
                            <input type="tel" name="phone_number" id="phone-number"
                                   class="w-full px-4 py-2.5 border border-slate-300 rounded-md shadow-sm focus:ring-brand-secondary focus:border-brand-secondary transition-colors"
                                   value="<?php echo isset($_POST['phone_number']) ? esc_attr($_POST['phone_number']) : ''; ?>">
                        </div>
                        <div>
                            <label for="your-question" class="block text-sm font-medium text-medium-text mb-1">Your Question *</label>
                            <textarea name="your_question" id="your-question" rows="5" required
                                      class="w-full px-4 py-2.5 border border-slate-300 rounded-md shadow-sm focus:ring-brand-secondary focus:border-brand-secondary transition-colors"><?php echo isset($_POST['your_question']) ? esc_textarea($_POST['your_question']) : ''; ?></textarea>
                        </div>
                        <div>
                            <label for="anti-spam" class="block text-sm font-medium text-medium-text mb-1">Security: Which is bigger, 6 or 12? *</label>
                            <input type="text" name="anti_spam" id="anti-spam" required
                                   class="w-full px-4 py-2.5 border border-slate-300 rounded-md shadow-sm focus:ring-brand-secondary focus:border-brand-secondary transition-colors" placeholder="Enter the number">
                        </div>

                        <?php wp_nonce_field('next_gen_iot_contact_form', 'contact_form_nonce'); ?>
                        <input type="hidden" name="contact_submit" value="1">

                        <div>
                            <button type="submit"
                                    class="w-full bg-brand-primary text-white font-semibold px-6 py-3 rounded-md
                                           hover:bg-opacity-90 transition-colors duration-200
                                           focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-secondary">
                                Submit
                            </button>
                        </div>
                    </form>
                    <?php endif; // End if !$form_success ?>
                </div>

            </div>
        </div>
    </section>

</main>

<?php
get_footer();
?>