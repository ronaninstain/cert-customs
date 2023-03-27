<?php /* Template Name: Cert Template 2023 */ ?>

<?php get_header(vibe_get_header()); ?>

<!-- multistep form -->

<section class="the-whole-cert-page-2023">
    <!-- progressbar -->
    <ul id="progressbar">
        <li class="active">Certification <img src="#" alt="img"></li>
        <li>Shipping <img src="#" alt="img"></li>
        <li>Payment</li>
    </ul>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="wholeSecContainingForm">
                    <form id="msform">
                        <!-- fieldsets -->
                        <fieldset>
                            <h3 class="fs-subtitle">This is the name that will appear on your certificate</h3>

                            <?php
                            if (!is_user_logged_in()) {
                            ?>
                                <label for="name" class="newCert1stName">First Name</label>
                                <input type="text" name="first-name" id="ebCertFirstName" />

                                <label for="name" class="newCert2stName">Last Name</label>
                                <input type="text" name="last-name" id="newCert2stName" />

                                <label for="email" class="ebCertEmail">Email</label>
                                <input type="text" name="email" id="ebCertEmail" />
                            <?php
                            } else {
                                $current_user = wp_get_current_user();
                                $user_first_name = $current_user->user_firstname;
                                $user_last_name =  $current_user->user_lastname;
                                $user_email =  $current_user->user_email;;
                            ?>
                                <label for="name" class="newCert1stName">First Name</label>
                                <input type="text" name="first-name" id="ebCertFirstName" value="<?php echo $user_first_name; ?>" readonly />

                                <label for="name" class="newCert2stName">Last Name</label>
                                <input type="text" name="last-name" id="newCert2stName" value="<?php echo $user_last_name; ?>" readonly />

                                <label for="email" class="ebCertEmail">Email</label>
                                <input type="text" name="email" id="ebCertEmail" value="<?php echo $user_email; ?>" readonly />
                            <?php

                            }
                            ?>

                            <?php if (!is_user_logged_in()) : ?>
                                <a href="#login" rel="nofollow" class="vbplogin the-are-you-a-std">Already have an account? <span><?php _e('Log In', 'vibe'); ?></span></a>
                                <?php
                                $style = vibe_get_login_style();
                                if (empty($style)) {
                                    $style = 'default_login';
                                }
                                ?>
                                <div id="vibe_bp_login" class="<?php echo vibe_sanitizer($style, 'text'); ?>">
                                    <?php
                                    vibe_include_template("login/$style.php");
                                    ?>
                                </div>
                            <?php endif; ?>

                            <div class="the-cert-with-trans">

                                <h3>Choose the type of Certificate you want</h3>
                                <label class="for-blocking">
                                    <input type="radio" name="certificate_type" value="digital_cert" id="ebCertType">
                                    <div class="the-inside-radio" id="ebCertDigitalCertificate">
                                        Digital Certificate
                                        <span>£9.00</span>
                                    </div>
                                </label>

                                <label class="for-blocking">
                                    <input type="radio" name="certificate_type" value="printed_cert">
                                    <div class="the-inside-radio" id="ebCertprintedCertificate">
                                        Printed Certificate
                                        <span>£15.00</span>
                                    </div>
                                </label>

                                <label class="for-blocking">
                                    <input type="radio" name="certificate_type" value="framed_cert">
                                    <div class="the-inside-radio" id="ebCertFramedCertificate">
                                        Framed Certificate
                                        <span>£30.00</span>
                                    </div>
                                </label>
                            </div>


                            <div class="the-cert-with-trans">

                                <h3>Options</h3>
                                <label class="for-blocking">
                                    <input type="radio" name="transcript_type" value="digital_trans" id="ebTranscriptType">
                                    <div class="the-inside-radio" id="ebCertDigitalTranscript">
                                        With Digital Transcript
                                        <span>£9.00</span>
                                    </div>
                                </label>

                                <label class="for-blocking">
                                    <input type="radio" name="transcript_type" value="printed_trans">
                                    <div class="the-inside-radio" id="ebCertPrintedTranscript">
                                        With Printed Transcript
                                        <span>£11.00</span>
                                    </div>
                                </label>

                                <label class="for-blocking">
                                    <input type="radio" name="transcript_type" value="with_out_trans">
                                    <div class="the-inside-radio" id="ebCertNoneTranscript">
                                        Without Transcript
                                    </div>
                                </label>
                            </div>
                            <input type="button" name="next" class="next action-button" value="Next" />
                        </fieldset>
                        <fieldset>
                            <h3 class="fs-subtitle">Shipping details</h3>

                            <div class="for-the-long-country-select">
                                <label for="name" class="newCertCountry">Country</label>

                                <select name="countries" id="countries">
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Unite States Of America">Unite States Of America</option>
                                    <option value="Canada">Canada</option>
                                </select>
                            </div>

                            <label for="city-name" class="newCertCity">City</label>
                            <input type="text" name="city" id="ebCertCity" />

                            <label for="street-name" class="newCertStreetAddress">Street Address</label>
                            <input type="text" name="Street-Address" id="ebCertStreetAddress" />

                            <label for="zip-code" class="newCertStreetAddress">ZIP / Postal Code/ PO Box</label>
                            <input type="text" name="zip-code" id="ebCertZiptcode" />

                            <label for="phone" class="phone">Phone</label>
                            <input type="tel" id="ebCertPhone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">

                            <input type="button" name="previous" class="previous action-button" value="Cancel order" />

                            <input type="button" name="next" class="next action-button" value="Proceed to Payment" />
                        </fieldset>
                        <fieldset>
                            <h3 class="fs-subtitle-ex">Payment Details</h3>

                            <div class="the-payments-conrol">
                                <div class="div-or-ufre-div">
                                    <h5>Payment Options</h5>
                                </div>
                                <div class="for-flex-ex">
                                    <label class="for-payment">
                                        Debit or Credit Card
                                        <input type="radio" name="debit-credit-paypal" value="" id="ebCertDebit" />
                                    </label>

                                    <label class="for-payment">
                                        Paypal
                                        <input type="radio" name="debit-credit-paypal" value="" id="ebCertPaypal" />
                                    </label>
                                </div>
                            </div>

                            <label for="card-name" class="card-Name">Name on card</label>
                            <input type="text" name="card-name" id="ebCertCardName" />

                            <label for="card-number" class="card-Number">Card number</label>
                            <input type="text" name="card-number" id="ebCardNumber" />

                            <label for="card-expiration">Expiration</label>
                            <input type="date" id="expiration" name="expiration" id="ebCertExpireDate">

                            <input type="button" name="previous" class="previous action-button" value="Cancel order" />

                            <a href="" class="submit action-button" target="_top" id="ebsubmitedForm">Place Order</a>
                        </fieldset>
                    </form>
                </div>
            </div>
            <div class="right-width-control-cg">
                <div class="col-md-4">
                    <div class="the-what-user-has-and-to-pay">
                        <div class="the-what-user-has">
                            <?php
                            if (!is_user_logged_in()) {
                                $args = array(
                                    'post_type' => 'course',
                                    'meta_query' => array(
                                        array(
                                            'key' => 'vibe_students',
                                        ),
                                        array(
                                            'key' => 'vibe_product',
                                            'value'   => array(''),
                                            'compare' => 'NOT IN'
                                        )
                                    ),
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'popularity',
                                            'field' => 'slug',
                                            'terms' => 'top-2023-courses'
                                        )
                                    ),
                                    'orderby' => 'meta_value_num',
                                    'meta_key' => 'vibe_students',
                                    'order' => 'DESC',
                                    'posts_per_page' => 50,
                                );

                                $the_queries = new WP_Query($args);
                            ?>
                                <label for="courses">Course Name</label>
                                <select name="course" id="courses">
                                    <?php foreach ($the_queries->posts as $query) { ?>
                                        <option value="<?php echo $query->ID; ?>" id="courseSelect"><?php echo get_the_title($query); ?></option>
                                    <?php } ?>
                                </select>
                                <?php
                            } else {
                                $current_user = wp_get_current_user();
                                $user_id = $current_user->ID;
                                $course_ids = bp_course_get_user_courses($user_id);
                                if (!empty($course_ids)) {
                                ?>
                                    <label for="courses">Course Name</label>
                                    <select name="course" id="courses">
                                        <?php foreach ($course_ids as $course_id) { ?>
                                            <option value="<?php echo $course_id; ?>" id="courseSelect"><?php echo get_the_title($course_id); ?></option>
                                        <?php } ?>
                                    </select>
                            <?php
                                } else {
                                    echo 'Your not enrolled in any courses.';
                                }
                            }
                            ?>
                        </div>
                        <div class="the-cert-sample">
                            <a href="#" id="cert-link"><img src="#" alt="pre_cert"></a>
                        </div>

                        <!-- The modal -->
                        <div id="cert-modal" class="modal">
                            <span class="close">&times;</span>
                            <img src="#" alt="pre_cert" id="cert-image">
                        </div>
                        <div class="the-what-user-pay">
                            <?php echo do_shortcode('[gravityform id="64"]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    //jQuery time
    var current_fs, next_fs, previous_fs; //fieldsets
    var left, opacity, scale; //fieldset properties which we will animate
    var animating; //flag to prevent quick multi-click glitches

    $(".next").click(function() {
        if (animating) return false;
        animating = true;

        current_fs = $(this).parent();
        next_fs = $(this).parent().next();

        //activate next step on progressbar using the index of next_fs
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate({
            opacity: 0
        }, {
            step: function(now, mx) {
                //as the opacity of current_fs reduces to 0 - stored in "now"
                //1. scale current_fs down to 80%
                scale = 1 - (1 - now) * 0.2;
                //2. bring next_fs from the right(50%)
                left = (now * 50) + "%";
                //3. increase opacity of next_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({
                    'transform': 'scale(' + scale + ')'
                    // 'position': 'absolute'
                });
                next_fs.css({
                    'left': left,
                    'opacity': opacity
                });
            },
            duration: 800,
            complete: function() {
                current_fs.hide();
                animating = false;
            },
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        });
    });

    $(".previous").click(function() {
        if (animating) return false;
        animating = true;

        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();

        //de-activate current step on progressbar
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

        //show the previous fieldset
        previous_fs.show();
        //hide the current fieldset with style
        current_fs.animate({
            opacity: 0
        }, {
            step: function(now, mx) {
                //as the opacity of current_fs reduces to 0 - stored in "now"
                //1. scale previous_fs from 80% to 100%
                scale = 0.8 + (1 - now) * 0.2;
                //2. take current_fs to the right(50%) - from 0%
                left = ((1 - now) * 50) + "%";
                //3. increase opacity of previous_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({
                    'left': left
                });
                previous_fs.css({
                    'transform': 'scale(' + scale + ')',
                    'opacity': opacity
                });
            },
            duration: 800,
            complete: function() {
                current_fs.hide();
                animating = false;
            },
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        });
    });

    $(document).ready(function() {
        const certLink = $('#cert-link');
        const certModal = $('#cert-modal');
        const certImage = $('#cert-image');

        // Open the modal when the link is clicked
        certLink.click(function(event) {
            event.preventDefault();
            certModal.show();
        });

        // Close the modal when the user clicks anywhere outside of it
        $(window).click(function(event) {
            if (event.target == certModal[0]) {
                certModal.hide();
            }
        });

        // Update the modal image when the link is clicked
        certLink.click(function() {
            certImage.attr('src', '#');
        });
    });
</script>

<?php the_content(); ?>
<?php get_footer(); ?>