<?php
/**
 * Handle Contact Form
 *
 */
function contact_form_shortcode()
{
    //wp_enqueue_script('googlerecaptcha', 'https://www.google.com/recaptcha/api.js');
    $error   = false;
    $result  = '';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // set the "required fields" to check
        $required_fields = array(
            "contactname",
            "email",
            "phone",
            "message"
        );

        // this part fetches everything that has been POSTed, sanitizes them and lets us use them as $form_data['subject']
        foreach ($_POST as $field => $value) {
            if (get_magic_quotes_gpc()) {
                $value = stripslashes($value);
            }
            $form_data[$field] = strip_tags($value);
        }
        $form_data['opt_in'] = isset($form_data['opt_in']) ? 1 : 0;

        // if the required fields are empty, switch $error to TRUE
        foreach ($required_fields as $required_field) {
            $value = trim($form_data[$required_field]);
            if (empty($value)) {
                $error = true;
                if ($required_field == 'contactname') {
                    $result .= "<li>Please fill out your name.</li>";
                    $has_error['contactname'] = true;
                } elseif ($required_field == 'email') {
                    $result .= "<li>Please fill out an email address.</li>";
                    $has_error['email'] = true;
                } elseif ($required_field == 'phone') {
                    $result .= "<li>Please fill out your phone number.</li>";
                    $has_error['phone'] = true;
                } elseif ($required_field == 'message') {
                    $result .= "<li>Please fill out a message for us.</li>";
                    $has_error['message'] = true;
                } else {
                    $result = "<li>Please fill in all the required fields.</li>";
                }
            }
        }

        // and if the e-mail is not valid, switch $error to TRUE and set the result text to the shortcode attribute named 'error_noemail'
        if (!is_email($form_data['email'])) {
            $error = true;
            $result .= "<li>Please enter a valid e-mail address.</li>";
            $has_error['email'] = true;
        }

        /* Verify Captcha */
        $response = verifyCaptcha($_POST['g-recaptcha-response']);
        if (!$response->success) {
            $error = true;
            $result .= "<li>Captcha validation has failed.</li>";
            $has_error['recaptcha'] = true;
        }

        if ($error == false) {

            // Add DB Logging Here
            echo do_shortcode("[cfdb-save-form-post]");

            /* Email Admin */

            $htmlEmail = file_get_contents(get_template_directory_uri() . '/library/html/email.html');

            /* Replace Logo */
            $logo = get_template_directory_uri().'/library/images/nuviewnutrition-logo-email.jpg';
            $htmlEmail = str_replace('../images/nuviewnutrition-logo-email.jpg', $logo, $htmlEmail);

            $formDataEmail = '<br><table style="color: #636466; font-family: \'Helvetica\' \'Arial\', sans-serif; font-weight: normal; text-align: left; line-height: 19px; font-size: 14px;">
                    <tr>
                        <td valign="top" width="180">Name: </td>
                        <td>' . $form_data['contactname'] . '</td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td>' . $form_data['email'] . '</td>
                    </tr>
                    <tr>
                        <td>Phone:</td>
                        <td>' . $form_data['phone'] . '</td>
                    </tr>
                    <tr>
                        <td colspan="2">Message:</td>
                    </tr>
                    <tr>
                        <td colspan="2">' . $form_data['message'] . '</td>
                    </tr>
                    <tr>
                        <td colspan="2">' . (($form_data['mc4wp-subscribe']) ? 'Yes, I would like to subscribe to the newsletter.' : 'No, I would not like to subscribe to the newsletter.') . '</td>
                    </tr>
                </table>';

            $htmlEmail = str_replace('!*data*!', $formDataEmail, $htmlEmail);

            $to = 'info@nuviewnutrition.com';
            $subject = 'You\'ve Been Contacted By the Nuview Nutrition Website';
            //$headers = 'From: Nuview Nutrition <info@nuviewnutrition.com>;' . PHP_EOL;
            $headers[] = 'From: Nuview Nutrition <info@nuviewnutrition.com>';
            $headers[] = 'Bcc: Matt Crandell <matt@crandelldesign.com>';
            $message = $htmlEmail;

            add_filter('wp_mail_content_type',create_function('', 'return "text/html"; '));
            if(wp_mail($to,$subject,$message, $headers)) {
                $result = "Thanks for your e-mail! We'll get back to you as soon as we can.";
                // ...and switch the $sent variable to TRUE
                $sent   = true;
                // Unset form data variable
                unset($form_data);
                unset($has_error);
                ///return true;
            } else {
                $error = true;
                //return false;
            }
        }
    }

    $info = '';

    if ($error == true) {
        $info = '<div class="alert alert-danger"><ul>' . $result . '</ul></div>';
    }
    if ($error == false && $result != '') {
        $info = '<div class="alert alert-success">' . $result . '</div>';
    }

    ob_start();
        do_action('google_invre_render_widget_action');
        $recaptcha = ob_get_contents();
    ob_end_clean();

    $admin_post_url = esc_url(admin_url("admin-post.php"));
    $email_form     = '<form class="contact-form" action="' . get_permalink() . '#contact" method="post">
        <div class="form-group' . ((isset($has_error['contactname']) && $has_error['contactname']) ? ' has-error' : '') . '">
            <label for="contactname">Full Name</label>
            <input type="text" name="contactname" id="contactname" value="' . (isset($form_data) ? $form_data['contactname'] : '') . '" class="form-control">
        </div>
        <div class="form-group' . ((isset($has_error['email']) && $has_error['email']) ? ' has-error' : '') . '">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="' . (isset($form_data) ? $form_data['email'] : '') . '" class="form-control">
        </div>
        <div class="form-group' . ((isset($has_error['phone']) && $has_error['phone']) ? ' has-error' : '') . '">
            <label for="phone">Phone</label>
            <input type="phone" name="phone" id="phone" value="' . (isset($form_data) ? $form_data['phone'] : '') . '" class="form-control">
        </div>
        <div class="form-group' . ((isset($has_error['message']) && $has_error['message']) ? ' has-error' : '') . '">
            <label for="message">Your Message</label>
            <textarea name="message" id="message" class="form-control" rows="3">' . (isset($form_data) ? $form_data['message'] : '') . '</textarea>
        </div>
        <div class="form-group">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="mc4wp-subscribe" value="1" /> Subscribe to our newsletter.
                </label>
            </div>
        </div>
        <div class="form-group">
            <div class="g-recaptcha" data-sitekey="'.getenv('RECAPTCHA_SITEKEY').'"></div>
        </div>
        <div class="form-group">
            <input type="hidden" name="form_title" value="Contact Form">
            <button type="submit" class="btn btn-crimson submit-btn">Submit</button>
        </div>
    </form>';
    return $info . $email_form;

}
add_shortcode('contact_form', 'contact_form_shortcode');
