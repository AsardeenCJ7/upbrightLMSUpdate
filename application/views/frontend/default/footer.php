<style>
.bg-dark {
    background-color: #181d38 !important;
}

.text-light {
    color: #F0FBFC !important;
}

.pt-5 {
    padding-top: 3rem !important;
}

.mt-5 {
    margin-top: 3rem !important;
}

.container,
.container-fluid,
.container-sm,
.container-md,
.container-xl,
.container-xxl {
    width: 100%;
    padding-right: var(--bs-gutter-x, .75rem);
    padding-left: var(--bs-gutter-x, .75rem);
    margin-right: auto;
    margin-left: auto;
}


*,
::after,
::before {
    box-sizing: border-box;
}

*,
*::before,
*::after {
    box-sizing: border-box;
}

.g-5,
.gy-5 {
    --bs-gutter-y: 3rem;
}

.g-5,
.gx-5 {
    --bs-gutter-x: 3rem;
}

.row {
    display: flex;
    flex-wrap: wrap;
    margin-top: calc(var(--bs-gutter-y) * -1);
    margin-right: calc(var(--bs-gutter-x) / -2);
    margin-left: calc(var(--bs-gutter-x) / -2);
}

@media (min-width: 992px) {
    .col-lg-3 {
        flex: 0 0 auto;
        width: 25%;
    }
}


.row>* {
    max-width: 100%;
    padding-right: calc(var(--bs-gutter-x) / 2);
    padding-left: calc(var(--bs-gutter-x) / 2);
    margin-top: var(--bs-gutter-y);
}

.mb-3 {
    margin-bottom: 1rem !important;
}

@media (min-width: 1200px) {

    h4,
    .h4 {
        font-size: 1.5rem;
    }
}


h1,
.h1,
h2,
.h2,
h3,
.h3,
h4,
.h4,
h5,
.h5,
h6,
.h6 {
    margin-top: 0;
    font-family: "Nunito", sans-serif;
    font-weight: 700;
    line-height: 1.2;
}


.footer .btn.btn-link {
    display: block;
    margin-bottom: 5px;
    padding: 0;
    text-align: left;
    color: #FFFFFF;
    font-size: 15px;
    font-weight: normal;
    text-transform: capitalize;
    transition: .3s;
}

.footer .btn.btn-link::before {
    position: relative;
    content: "\f105";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    margin-right: 10px;
}





.btn {
    font-family: 'Nunito', sans-serif;
    line-height: 1.5;
    vertical-align: middle;
    cursor: pointer;
    user-select: none;
    background-color: transparent;
    border: 1px solid transparent !important;
    border-radius: 0px;
    padding: 0.375rem 0.75rem;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;

}

.btn-social {
    border: 1px solid #FFFFFF !important;
    margin-right: 5px;
    width: 35px;
    height: 35px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--light);
    font-weight: normal;
    border: 1px solid #FFFFFF;
    border-radius: 35px;
    transition: .3s;
}


.d-flex a:hover {
    background-color: white;

}

.footer .btn.btn-social:hover {
    color: #30c465;
}

.footer .btn.btn-link::before {
    position: relative;
    content: "\f105" !important;
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    margin-right: 10px;
}


.btn.btn-primary,
.btn.btn-secondary {
    color: #FFFFFF;
}

button:not(:disabled),
[type="button"]:not(:disabled),
[type="reset"]:not(:disabled),
[type="submit"]:not(:disabled) {
    cursor: pointer;
}

.btn {
    font-family: 'Nunito', sans-serif;
    font-weight: 600;
    transition: .5s;
}

.py-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
}

.me-2 {
    margin-right: 0.5rem !important;
}

.mt-2 {
    margin-top: 0.5rem !important;
}

.end-0 {
    right: 0 !important;
}

.top-0 {
    top: 0 !important;
}

.position-absolute {
    position: absolute !important;
}

.btn-primary {
    color: #000;
    background-color: #30c465;
    border-color: #30c465;
}

/**/

.footer .btn.btn-link::before {
    position: relative;
    content: "\f105";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    margin-right: 10px;
}

.footer .copyright {
    padding: 25px 0;
    font-size: 15px;
    border-top: 1px solid rgba(256, 256, 256, .1);
}

.footer .copyright a {
    color: var(--light);
}

.border-bottom {
    border-bottom: 1px solid #dee2e6 !important;
}

a {
    text-decoration: none;
}


.row a:hover {
    background-color: transparent !;
}

.btn-link::after {
    background-color: #fff !important;
}

.btn:hover {
    background: transparent !important;
}


.btn-link::before {
    background-color: transparent;
}


/* This background button signup when hover mouse color will be changed */
.btn-primary:hover {
    background-color: #0dcaf0 !important;

}

/*This when hover mouse background color should be chaged white */
#d-flex a:hover {

    background-color: white !important;
}


/* Width Extend same as upbright website */
@media (min-width: 1400px) {

    .container,
    .container-sm,
    .container-md,
    .container-lg,
    .container-xl,
    .container-xxl {
        max-width: 1320px;
    }
}

/* text animation */
/* Apply the transition to specific links within col-lg-3 col-md-6 */
.col-lg-3.col-md-6:not(#d-flex) a {
    position: relative;
    transition: letter-spacing 0.3s ease;
    /* Add transition to letter-spacing */
    text-decoration: none;
    /* Remove underline from links */
}

/* Increase letter spacing on hover */
.col-lg-3.col-md-6:not(#d-flex) a:hover {
    letter-spacing: 1px;
    /* Increase letter spacing on hover */
}


/*conflict css this is changed to totally inline after*/
</style>


<!--footer mobile-->
<style>
.menus a {
    display: block;
    padding: 5pxpx 15px;
    color: hsla(0, 0%, 100%, .67)
}

.drop-downz a {
    min-width: 90px;
}

.drop-downz-menus {
    display: block;
    border-bottom: 1px solid hsla(0, 0%, 100%, .8) !important;

}

.menus-title {
    cursor: pointer;
}

.menus-title {
    display: block;
    padding: 10px 10px 10px 5px;
}

.activate {
    display: none;

    position: absolute;
    cursor: pointer;
    width: 100%;
    height: 40px;
    margin: 0 0 0 -15px;
    opacity: 0;
}

/* Skin */

.menus a,
.drop-downz-menus {
    /*background: #3d6d99;*/
    /*background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#5796d0), color-stop(100%,#3d6d99));*/
    /*background: -moz-linear-gradient(top, #5796d0 0%, #3d6d99 100%);*/
}

.menus a:hover,
.drop-downz-menus:hover {
    /*background: #5a6470;*/
    /*background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#495261), color-stop(100%,#38404b));*/
    /*background: -moz-linear-gradient(top, #495261 0%, #38404b 100%);*/
}

.drop-downz a {
    background: transparent;
}

.drop-downz a:hover {
    background: transparent;
}


.menus {
    /*background: #3d6d99;*/
    /*background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#5796d0), color-stop(100%,#3d6d99));*/
    /*background: -moz-linear-gradient(top, #5796d0 0%, #3d6d99 100%);*/
    background-color: #181d38 !important;
    color: #fff;
    padding: 25px 20px;
}

:checked~.menus-title {
    /*background: #495261;*/
    background: #182157;
}

.drop-downz {
    max-height: 0;
    overflow: hidden;
}

.drop-downz a {
    background: transparent;
    color: hsla(0, 0%, 100%, .67);
}

.activate:checked~.drop-downz {
    max-height: 500px;
}

.drop-downz,
.menus a,
.drop-downz-menus {
    -webkit-transform: translateZ(0);
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    -o-transition: all 0.3s;
    transition: all 0.3s;
    margin: 10px 0 10px;
    padding: 0px 10px;

}

.iconz {
    float: right;
    margin-top: 3px;
    transition: transform 0.3s;
}

input[type="checkbox"] {
    display: none;
}

input[type="checkbox"]+.drop-downz {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.4s ease-in-out;
}

input[type="checkbox"]:checked+.menus-title .icon {
    transform: rotate(180deg);
}

@media (min-width: 768px) {

    /* Hide elements with class 'mobile-only' on screens wider than 768px */
    .mobile-only {
        display: none;
    }
}
</style>

<!--end footer mobile-->




<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn d-none d-md-block" data-wow-delay="0.1s">

    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Courses</h4>
                <a class="btn btn-link" href="">Fiverr</a>
                <a class="btn btn-link" href="">eBay</a>
                <h4 class="text-white mb-3">Softwares</h4>
                <a class="btn btn-link" href="">Plagiarism Checker</a>
                <a class="btn btn-link" href="">Video Editing</a>
                <a class="btn btn-link" href="">Graphic Design</a>
                <a class="btn btn-link" href="">Operating System</a>
                <a class="btn btn-link" href="">MS Office</a>
                <a class="btn btn-link" href="">Photoshop</a>
                <a class="btn btn-link" href="">AI Tools</a>
            </div>

            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">UB services</h4>
                <a class="btn btn-link" href="">eBay tracking tool</a>
                <a class="btn btn-link" href="">eBay shipping tracking</a>
                <a class="btn btn-link" href="">eBay SwiftShip / eBay Express</a>
                <a class="btn btn-link" href="">Fiverr test helper</a>
                <a class="btn btn-link" href="">Fiverr online keeper</a>
                <h4 class="text-white mb-3">Become A Partner </h4>
                <a class="btn btn-link" href="">Apply for job </a>
                <a class="btn btn-link" href="">UB franchises</a>
                <a class="btn btn-link" href="">UB Corporates PARTNER</a>
                <a class="btn btn-link" href="">UB digital PARTNER</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Company</h4>
                <a class="btn btn-link" href="">Privacy Policy</a>
                <a class="btn btn-link" href="">Terms & Condition</a>
                <a class="btn btn-link" href="">Class Terms & Condition</a>
                <a class="btn btn-link" href="">Refund & Cancellation Policy</a>
                <a class="btn btn-link" href="">Contact Us</a>
                <h4 class="text-white mb-3">Resource</h4>
                <a class="btn btn-link" href="">Free EBay's Tools</a>
                <a class="btn btn-link" href="https://shop.upbright.lk/blog">UB Blog</a>
                <a class="btn btn-link" href="Free Quizzes</a>
                    <a class=" btn btn-link" href="#">UB Services</a>
                <a class="btn btn-link" href="">UB Foundation</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Live Support</h4>
                <a class="btn btn-link" href="https://t.me/upbright_customer_service">Customer Support</a>
                <a class="btn btn-link" href="https://t.me/upbright_intro">Earning Live Updates</a>
                <h4 class="text-white mb-3">Contact</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3" style="margin-right: 15px;"></i>136 Main Cross
                    Road, 30400, Valaichenai, SriLanaka</p>
                <div class="d-flex" id="d-flex" style="padding-bottom: 10px;">
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-whatsapp"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/upbright.lk/"><i
                            class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/upbright.lk"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://www.youtube.com/c/upbright"><i
                            class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                    <button type="button"
                        class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                </div>
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <button type="button" class="btn btn-primary position-absolute top-0"
                        style="width: 100%;margin-top: 10px;">Apply Frachsies</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-left text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">Upbright</a>, All Right Reserved.
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->



<!-- PAYMENT MODAL -->
<!-- Modal -->
<?php
$paypal_info = json_decode(get_settings('paypal'), true);
$stripe_info = json_decode(get_settings('stripe_keys'), true);
if ($paypal_info[0]['active'] == 0) {
  $paypal_status = 'disabled';
}else {
  $paypal_status = '';
}
if ($stripe_info[0]['active'] == 0) {
  $stripe_status = 'disabled';
}else {
  $stripe_status = '';
}
?>

<!-- Modal -->
<div class="modal fade multi-step" id="EditRatingModal" tabindex="-1" role="dialog" aria-hidden="true"
    reset-on-close="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content edit-rating-modal">
            <div class="modal-header">
                <h5 class="modal-title step-1" data-step="1"><?php echo site_phrase('step').' 1'; ?></h5>
                <h5 class="modal-title step-2" data-step="2"><?php echo site_phrase('step').' 2'; ?></h5>
                <h5 class="m-progress-stats modal-title">
                    &nbsp;of&nbsp;<span class="m-progress-total"></span>
                </h5>

                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="m-progress-bar-wrapper">
                <div class="m-progress-bar">
                </div>
            </div>
            <div class="modal-body step step-1">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="modal-rating-box">
                                <h4 class="rating-title">
                                    <?php echo site_phrase('how_would_you_rate_this_course_overall'); ?>?</h4>
                                <fieldset class="your-rating">

                                    <input type="radio" id="star5" name="rating" value="5" />
                                    <label class="full" for="star5"></label>

                                    <!-- <input type="radio" id="star4half" name="rating" value="4 and a half" />
                  <label class="half" for="star4half"></label> -->

                                    <input type="radio" id="star4" name="rating" value="4" />
                                    <label class="full" for="star4"></label>

                                    <!-- <input type="radio" id="star3half" name="rating" value="3 and a half" />
                  <label class="half" for="star3half"></label> -->

                                    <input type="radio" id="star3" name="rating" value="3" />
                                    <label class="full" for="star3"></label>

                                    <!-- <input type="radio" id="star2half" name="rating" value="2 and a half" />
                  <label class="half" for="star2half"></label> -->

                                    <input type="radio" id="star2" name="rating" value="2" />
                                    <label class="full" for="star2"></label>

                                    <!-- <input type="radio" id="star1half" name="rating" value="1 and a half" />
                  <label class="half" for="star1half"></label> -->

                                    <input type="radio" id="star1" name="rating" value="1" />
                                    <label class="full" for="star1"></label>

                                    <!-- <input type="radio" id="starhalf" name="rating" value="half" />
                  <label class="half" for="starhalf"></label> -->

                                </fieldset>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="modal-course-preview-box">
                                <div class="card">
                                    <img class="card-img-top img-fluid" id="course_thumbnail_1" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title" class="course_title_for_rating" id="course_title_1"></h5>
                                        <p class="card-text" id="instructor_details">

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-body step step-2">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="modal-rating-comment-box">
                                <h4 class="rating-title"><?php echo site_phrase('write_a_public_review'); ?></h4>
                                <textarea id="review_of_a_course" name="review_of_a_course"
                                    placeholder="<?php echo site_phrase('describe_your_experience_what_you_got_out_of_the_course_and_other_helpful_highlights').'. '.site_phrase('what_did_the_instructor_do_well_and_what_could_use_some_improvement') ?>?"
                                    maxlength="65000" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="modal-course-preview-box">
                                <div class="card">
                                    <img class="card-img-top img-fluid" id="course_thumbnail_2" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title" class="course_title_for_rating" id="course_title_2"></h5>
                                        <p class="card-text">
                                            -
                                            <?php
                      $admin_details = $this->user_model->get_admin_details()->row_array();
                      echo $admin_details['first_name'].' '.$admin_details['last_name'];
                      ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <input type="hidden" name="course_id" id="course_id_for_rating" value="">
            <div class="modal-footer">
                <button type="button" class="btn btn-primary next step step-1" data-step="1"
                    onclick="sendEvent(2)"><?php echo site_phrase('next'); ?></button>
                <button type="button" class="btn btn-primary previous step step-2 mr-auto" data-step="2"
                    onclick="sendEvent(1)"><?php echo site_phrase('previous'); ?></button>
                <button type="button" class="btn btn-primary publish step step-2"
                    onclick="publishRating($('#course_id_for_rating').val())"
                    id=""><?php echo site_phrase('publish'); ?></button>
            </div>
        </div>
    </div>
</div><!-- Modal -->






<!--new footer mobile view-->

<div class="menus mobile-only">

    <div class="drop-downz-menus mobile-only">
        <input type="checkbox" class="activate" id="accordion-1" name="accordion">
        <label for="accordion-1" class="menus-title">Course<span class="iconz">&#9660;</span></label>
        <div class="drop-downz">
            <a href="">Fiverr</a>
            <a class="last" href="">Ebay</a>
        </div>
    </div>

    <div class="drop-downz-menus mobile-only">
        <input type="checkbox" class="activate" id="accordion-2" name="accordion">
        <label for="accordion-2" class="menus-title">Softwares<span class="iconz">&#9660;</span></label>
        <div class="drop-downz">
            <a href="">Plagiarism Checker</a>
            <a href="">Video Editing</a>
            <a href="">Graphic Design</a>
            <a href="">Operating System</a>
            <a href="">MS Office</a>
            <a href="">Photoshop</a>
            <a class="last" href="">AI Tools</a>
        </div>
    </div>

    <div class="drop-downz-menus mobile-only">
        <input type="checkbox" class="activate" id="accordion-3" name="accordion">
        <label for="accordion-3" class="menus-title">UB Services<span class="iconz">&#9660;</span></label>
        <div class="drop-downz">
            <a href="">eBay tracking tool</a>
            <a href="">eBay shipping tracking</a>
            <a href="">eBay SwiftShip / eBay Express</a>
            <a href="">Fiverr test helper</a>
            <a href="">Normal</a>
            <a class="last" href="">Fiverr online keeper</a>
        </div>
    </div>




    <div class="drop-downz-menus mobile-only">
        <input type="checkbox" class="activate" id="accordion-4" name="accordion">
        <label for="accordion-4" class="menus-title">Become a partner<span class="iconz">&#9660;</span></label>
        <div class="drop-downz">
            <a href="">UB franchises</a>
            <a href="">UB Corporates PARTNER</a>
            <a href="">UB digital PARTNER</a>
            <a class="" href="#">Apply for job</a>
        </div>
    </div>



    <div class="drop-downz-menus mobile-only">
        <input type="checkbox" class="activate" id="accordion-5" name="accordion">
        <label for="accordion-5" class="menus-title">Company<span class="iconz">&#9660;</span></label>
        <div class="drop-downz">
            <a href="">Privacy Policy</a>
            <a href="">Terms & Condition</a>
            <a href="">Class Terms & Condition</a>
            <a href="">Refund & Cancellation Policy</a>
            <a href="">Contact Us</a>
            <a class="last" href="">About Us</a>
        </div>
    </div>

    <div class="drop-downz-menus mobile-only">
        <input type="checkbox" class="activate" id="accordion-6" name="accordion">
        <label for="accordion-6" class="menus-title">Resourcer<span class="iconz">&#9660;</span></label>
        <div class="drop-downz">
            <a href="">Free EBay's Tools</a>
            <a href="">UB Blog</a>
            <a href="">Free Quizzes</a>
            <a href="https://shop.upbright.lk/services">UB Services</a>
            <a class="last" href="">UB Foundation</a>
        </div>
    </div>



    <div class="drop-downz-menus mobile-only">
        <input type="checkbox" class="activate" id="accordion-7" name="accordion">
        <label for="accordion-7" class="menus-title">Live Support<span class="iconz">&#9660;</span></label>
        <div class="drop-downz">
            <a href="https://t.me/upbright_customer_service">Customer Support</a>
            <a class="last" href="https://t.me/upbright_intro">Earning Live Updates</a>
        </div>
    </div>


    <div class="drop-downz-menus mobile-only" style="border-bottom: none !important;">
        <label for="accordion-7" class="menus-title">Contact</label>
        <div class="col-lg-3 col-md-6">
            <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>136 Main Cross Road, 30400, Valaichenai, SriLanaka
            </p>
            <div class="d-flex" style="padding-bottom: 10px; gap: 10px;">
                <a class="btn btn-outline-light btn-social"
                    style="padding-top: 5px; padding-bottom: 5px; border-radius: 10px;"
                    href="https://wa.me/94742427711"><i class="fab fa-whatsapp"></i></a>
                <a class="btn btn-outline-light btn-social"
                    style="padding-top: 5px; padding-bottom: 5px; border-radius: 10px;"
                    href="https://www.instagram.com/upbright.lk/"><i class="fab fa-instagram"></i></a>
                <a class="btn btn-outline-light btn-social"
                    style="padding-top: 5px; padding-bottom: 5px; border-radius: 10px;"
                    href="https://www.facebook.com/upbright.lk"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-light btn-social"
                    style="padding-top: 5px; padding-bottom: 5px; border-radius: 10px;"
                    href="https://www.youtube.com/@UPBRIGHTT"><i class="fab fa-youtube"></i></a>
                <a class="btn btn-outline-light btn-social"
                    style="padding-top: 5px; padding-bottom: 5px; border-radius: 10px;"
                    href="https://www.linkedin.com/company/upbright-pvt-ltd/?originalSubdomain=lk"><i
                        class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="position-relative mx-auto" style="max-width: 400px;">
                <form action="" method="POST">

                    <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" name="email"
                        placeholder="Your email">
                    <button type="submit"
                        class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Subscribe</button>
                </form>
            </div>
            <div class="position-relative mx-auto" style="max-width: 400px;">
                <button type="button" class="btn btn-primary position-absolute top-0"
                    style="width: 100%;margin-top: 10px;"><a href="{{URL::route('franch')}}" style="color: #fff">Apply
                        Frachsies</a></button>
            </div>
        </div>
    </div>

    <div class="drop-downz-menus mobile-only" style="margin-top: 102px; border-bottom: none !important;">
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; Upbright, All Right Reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end new footer mobile-->
<!-- End Footer-->


<!--mobile footer-->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const checkboxes = document.querySelectorAll('.activate');
    checkboxes.forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            checkboxes.forEach(function(otherCheckbox) {
                if (otherCheckbox !== checkbox) {
                    otherCheckbox.checked = false;
                }
            });
        });
    });
});
</script>
<!--end mobile footer-->



<script type="text/javascript">
function switch_language(language) {
    $.ajax({
        url: '<?php echo site_url('home/site_language'); ?>',
        type: 'post',
        data: {
            language: language
        },
        success: function(response) {
            setTimeout(function() {
                location.reload();
            }, 500);
        }
    });
}
</script>