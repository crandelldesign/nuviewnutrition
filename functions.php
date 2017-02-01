<?php
/*
Author: Eddie Machado
URL: http://themble.com/bones/

This is where you can drop your custom functions or
just edit things like thumbnail sizes, header images,
sidebars, comments, etc.
*/

// LOAD BONES CORE (if you remove this, the theme will break)
require_once('library/bones.php');

// CUSTOMIZE THE WORDPRESS ADMIN (off by default)
// require_once( 'library/admin.php' );

/*********************
LAUNCH BONES
Let's get everything up and running.
*********************/

function bones_ahoy()
{

    //Allow editor style.
    add_editor_style(get_stylesheet_directory_uri() . '/library/css/editor-style.css');

    // let's get language support going, if you need it
    load_theme_textdomain('bonestheme', get_template_directory() . '/library/translation');

    // USE THIS TEMPLATE TO CREATE CUSTOM POST TYPES EASILY
    require_once('library/custom-post-type.php');

    // launching operation cleanup
    add_action('init', 'bones_head_cleanup');
    // A better title
    add_filter('wp_title', 'rw_title', 10, 3);
    // remove WP version from RSS
    add_filter('the_generator', 'bones_rss_version');
    // remove pesky injected css for recent comments widget
    add_filter('wp_head', 'bones_remove_wp_widget_recent_comments_style', 1);
    // clean up comment styles in the head
    add_action('wp_head', 'bones_remove_recent_comments_style', 1);
    // clean up gallery output in wp
    add_filter('gallery_style', 'bones_gallery_style');

    // enqueue base scripts and styles
    add_action('wp_enqueue_scripts', 'bones_scripts_and_styles', 999);
    // ie conditional wrapper

    // launching this stuff after theme setup
    bones_theme_support();

    // adding sidebars to Wordpress (these are created in functions.php)
    add_action('widgets_init', 'bones_register_sidebars');

    // cleaning up random code around images
    add_filter('the_content', 'bones_filter_ptags_on_images');
    // cleaning up excerpt
    add_filter('excerpt_more', 'bones_excerpt_more');

}
/* end bones ahoy */

// let's get this party started
add_action('after_setup_theme', 'bones_ahoy');


/************* OEMBED SIZE OPTIONS *************/

if (!isset($content_width)) {
    $content_width = 680;
}

/************* THUMBNAIL SIZE OPTIONS *************/

// Thumbnail sizes
add_image_size('bones-thumb-600', 600, 150, true);
add_image_size('bones-thumb-300', 300, 100, true);

/*
to add more sizes, simply copy a line from above
and change the dimensions & name. As long as you
upload a "featured image" as large as the biggest
set width or height, all the other sizes will be
auto-cropped.

To call a different size, simply change the text
inside the thumbnail function.

For example, to call the 300 x 100 sized image,
we would use the function:
<?php the_post_thumbnail( 'bones-thumb-300' ); ?>
for the 600 x 150 image:
<?php the_post_thumbnail( 'bones-thumb-600' ); ?>

You can change the names and dimensions to whatever
you like. Enjoy!
*/

add_filter('image_size_names_choose', 'bones_custom_image_sizes');

function bones_custom_image_sizes($sizes)
{
    return array_merge($sizes, array(
        'bones-thumb-600' => __('600px by 150px'),
        'bones-thumb-300' => __('300px by 100px')
    ));
}

/*
The function above adds the ability to use the dropdown menu to select
the new images sizes you have just created from within the media manager
when you add media to your content blocks. If you add more image sizes,
duplicate one of the lines in the array and name it according to your
new image size.
*/

/************* THEME CUSTOMIZE *********************/

/*
A good tutorial for creating your own Sections, Controls and Settings:
http://code.tutsplus.com/series/a-guide-to-the-wordpress-theme-customizer--wp-33722

Good articles on modifying the default options:
http://natko.com/changing-default-wordpress-theme-customization-api-sections/
http://code.tutsplus.com/tutorials/digging-into-the-theme-customizer-components--wp-27162

To do:
- Create a js for the postmessage transport method
- Create some sanitize functions to sanitize inputs
- Create some boilerplate Sections, Controls and Settings
*/

function bones_theme_customizer($wp_customize)
{
    // $wp_customize calls go here.
    //
    // Uncomment the below lines to remove the default customize sections

    // $wp_customize->remove_section('title_tagline');
    // $wp_customize->remove_section('colors');
    // $wp_customize->remove_section('background_image');
    // $wp_customize->remove_section('static_front_page');
    // $wp_customize->remove_section('nav');

    // Uncomment the below lines to remove the default controls
    // $wp_customize->remove_control('blogdescription');

    // Uncomment the following to change the default section titles
    // $wp_customize->get_section('colors')->title = __( 'Theme Colors' );
    // $wp_customize->get_section('background_image')->title = __( 'Images' );
}

add_action('customize_register', 'bones_theme_customizer');

/************* ACTIVE SIDEBARS ********************/

// Sidebars & Widgetizes Areas
function bones_register_sidebars()
{
    register_sidebar(array(
        'id' => 'sidebar1',
        'name' => __('Sidebar 1', 'bonestheme'),
        'description' => __('The first (primary) sidebar.', 'bonestheme'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widgettitle">',
        'after_title' => '</h4>'
    ));

    register_sidebar(array(
        'id' => 'social_media',
        'name' => __('Social Media', 'bonestheme'),
        'description' => __('The social media widget area.', 'bonestheme'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widgettitle">',
        'after_title' => '</h4>'
    ));

    /*
    to add more sidebars or widgetized areas, just copy
    and edit the above sidebar code. In order to call
    your new sidebar just use the following code:

    Just change the name to whatever your new
    sidebar's id is, for example:

    register_sidebar(array(
    'id' => 'sidebar2',
    'name' => __( 'Sidebar 2', 'bonestheme' ),
    'description' => __( 'The second (secondary) sidebar.', 'bonestheme' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widgettitle">',
    'after_title' => '</h4>',
    ));

    To call the sidebar in your template, you can just copy
    the sidebar.php file and rename it to your sidebar's name.
    So using the above example, it would be:
    sidebar-sidebar2.php

    */
} // don't remove this bracket!


/************* COMMENT LAYOUT *********************/

// Comment Layout
function bones_comments($comment, $args, $depth)
{
    $GLOBALS['comment'] = $comment;
?>
  <div id="comment-<?php
    comment_ID();
?>" <?php
    comment_class('cf');
?>>
    <article  class="cf">
      <header class="comment-author vcard">
        <?php
    /*
    this is the new responsive optimized comment image. It used the new HTML5 data-attribute to display comment gravatars on larger screens only. What this means is that on larger posts, mobile sites don't have a ton of requests for comment images. This makes load time incredibly fast! If you'd like to change it back, just replace it with the regular wordpress gravatar call:
    echo get_avatar($comment,$size='32',$default='<path_to_url>' );
    */
?>
        <?php // custom gravatar call
?>
        <?php
    // create variable
    $bgauthemail = get_comment_author_email();
?>
        <img data-gravatar="http://www.gravatar.com/avatar/<?php
    echo md5($bgauthemail);
?>?s=40" class="load-gravatar avatar avatar-48 photo" height="40" width="40" src="<?php
    echo get_template_directory_uri();
?>/library/images/nothing.gif" />
        <?php // end custom gravatar call
?>
        <?php
    printf(__('<cite class="fn">%1$s</cite> %2$s', 'bonestheme'), get_comment_author_link(), edit_comment_link(__('(Edit)', 'bonestheme'), '  ', ''));
?>
        <time datetime="<?php
    echo comment_time('Y-m-j');
?>"><a href="<?php
    echo htmlspecialchars(get_comment_link($comment->comment_ID));
?>"><?php
    comment_time(__('F jS, Y', 'bonestheme'));
?> </a></time>

      </header>
      <?php
    if ($comment->comment_approved == '0'):
?>
        <div class="alert alert-info">
          <p><?php
        _e('Your comment is awaiting moderation.', 'bonestheme');
?></p>
        </div>
      <?php
    endif;
?>
      <section class="comment_content cf">
        <?php
    comment_text();
?>
      </section>
      <?php
    comment_reply_link(array_merge($args, array(
        'depth' => $depth,
        'max_depth' => $args['max_depth']
    )));
?>
    </article>
  <?php // </li> is added by WordPress automatically
?>
<?php
} // don't remove this bracket!


/*
This is a modification of a function found in the
twentythirteen theme where we can declare some
external fonts. If you're using Google Fonts, you
can replace these fonts, change it in your scss files
and be up and running in seconds.
*/
function bones_fonts()
{
    wp_enqueue_style('googleFonts', '//fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic');
}

add_action('wp_enqueue_scripts', 'bones_fonts');

// Custom Excerpt
function my_excerpt($excerpt_length = 55, $id = false, $echo = true)
{

    $text = '';

    if ($id) {
        $the_post =& get_post($my_id = $id);
        $text = ($the_post->post_excerpt) ? $the_post->post_excerpt : $the_post->post_content;
    } else {
        global $post;
        $text = ($post->post_excerpt) ? $post->post_excerpt : get_the_content('');
    }

    $text = strip_shortcodes($text);
    $text = apply_filters('the_content', $text);
    $text = str_replace(']]>', ']]&gt;', $text);
    $text = strip_tags($text);

    $excerpt_more = ' ' . '...';
    $words        = preg_split("/[\n\r\t ]+/", $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY);
    if (count($words) > $excerpt_length) {
        array_pop($words);
        $text = implode(' ', $words);
        $text = $text . $excerpt_more;
    } else {
        $text = implode(' ', $words);
    }
    if ($echo)
        echo apply_filters('the_content', $text);
    else
        return $text;
}

function get_my_excerpt($excerpt_length = 55, $id = false, $echo = false)
{
    return my_excerpt($excerpt_length, $id, $echo);
}

// Register custom navigation walker
require_once('wp_bootstrap_navwalker.php');

register_nav_menus(array(
    'primary' => __('Primary Menu', 'bones')
));

//Page Slug Body Class
function add_slug_body_class($classes)
{
    global $post;
    if (isset($post)) {
        $classes[] = $post->post_type . '-' . $post->post_name;
    }
    return $classes;
}

// Testimonial Filter
add_filter('template_include', 'testimonial_page_template', 99 );
function testimonial_page_template( $template ) {
    $uri = $_SERVER["REQUEST_URI"];
    $uri_array = explode('/',$uri);
    if ($uri_array[1] == 'testimonial') {
        $new_template = locate_template( array( 'page-full-width.php' ) );
        if ( '' != $new_template ) {
            return $new_template ;
        }
    }
    return $template;
}

/**
 * Handle Contact Form
 *
 */
function contact_form_shortcode()
{
    $error   = false;
    $result  = '';
    $testing = 1;
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

        /*$response = verifyCaptcha($_POST['g-recaptcha-response']);

        if ($response->success) {

        } else {
            $error = true;
            $result .= "<li>Captcha validation has failed.</li>";
            $has_error['recaptcha'] = true;
        }*/

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

            $to = 'matt@crandelldesign.com';
            $subject = 'You\'ve Been Contacted By the Nuview Nutrition Website';
            //$headers = 'From: Nuview Nutrition <info@nuviewnutrition.com>;' . PHP_EOL;
            $headers[] = 'From: Nuview Nutrition <info@nuviewnutrition.com>';
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

            //Setup the client as SES
            /*$client = SesClient::factory(array(
                'region' => 'us-east-1',
                'credentials' => $credentials
            ));*/



            //header('Location: '.$_SERVER['HTTP_REFERER'].'?success=Message+Sent+Successfully');
        }
    }

    $info = '';

    if ($error == true) {
        $info = '<div class="alert alert-danger"><ul>' . $result . '</ul></div>';
    }
    if ($error == false && $result != '') {
        $info = '<div class="alert alert-success">' . $result . '</div>';
    }

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
            <textarea name="message" id="message" class="form-control">' . (isset($form_data) ? $form_data['message'] : '') . '</textarea>
        </div>
        <div class="form-group">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="mc4wp-subscribe" value="1" /> Subscribe to our newsletter.
                </label>
            </div>
        </div>
        <div class="form-group">
            <input type="hidden" name="form_title" value="Contact Form">
            <button type="submit" class="btn btn-crimson submit-btn">Submit</button>
        </div>
    </form>';
    return $info . $email_form;

}
add_shortcode('contact_form', 'contact_form_shortcode');

/* Explore More Shortcode */
add_shortcode('explore_more', 'explore_more_shortcode');
function explore_more_shortcode()
{
    return '<ul>
            <li><a href="'. get_site_url(null,'/news-events/blog') .'">Blog</a></li>
            <li><a href="'. get_site_url(null,'/news-events/classes') .'">Classes</a></li>
            <li><a href="'. get_site_url(null,'/news-events/events') .'">Events</a></li>
        </ul>';
}

/* Remove Social Media Plugin Imports */
add_action('wp_enqueue_scripts', 'nuview_deregister_styles', PHP_INT_MAX);
function nuview_deregister_styles()  {
    wp_dequeue_style('css_for_fa_icon');
    wp_deregister_style('css_for_fa_icon');
}

/* DON'T DELETE THIS CLOSING TAG */
?>
