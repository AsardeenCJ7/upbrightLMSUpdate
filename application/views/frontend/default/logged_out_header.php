<style>
body {
    margin: 0;
}

.menu-area {
    position: sticky;
    top: 0;
    background: #fff !important;
    box-shadow: none !important;
}

.sign-in-box .btn {
    /* font-family: 'Poppins', sans-serif !important; */

    font-family: "Heebo", sans-serif;
    font-size: 14px !important;
    text-transform: uppercase;
    color: #686f7a !important;
    /*font-weight: 500 !important;*/
    letter-spacing: 1px !important;
}

.sign-in-box .btn-sign-up {
    color: white !important;
    background-color: #0abf53;
}

.sign-in-box .btn-sign-up:hover {
    color: white !important;
    background-color: green !important;
}

.search-box button {
    border: 1px solid #f2f3f5;
    border-radius: 0 2px 2px 0;
    font-size: 15px;
    padding: 10px 15px;
    background: #f2f3f5;
    color: #0abf53;
}

.search-box button:hover {
    background: #0abf53 !important;
    color: white !important;
}


/* threr button */
.tab-nav {
    border-radius: 0;
    left: 50%;
    position: fixed;
    top: 42px;
    transform: translate(-50%);
    width: 100%;
    z-index: 3;
    background: #fff;
    font-size: 15px;
    font-weight: 800;
    font-family: "Heebo", sans-serif;
}

.tab-nav ul {
    background: #fff;
    border-radius: 0 0 25px 25px;
    display: flex;
    justify-content: space-between;
    margin: 24px auto;
    padding: 10px;
    width: 706px;
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15)
}

/*.nav-link:hover, .nav-link:focus {*/
/*    background: #30c456 !important;*/
/*    color: #fff !important;*/
/*}*/
ul {
    list-style: none;
}

.tab-nav li {
    padding-right: 10px;
    border-radius: 100px
}

.tab-nav .tab-nav__cta--active a {
    background: #009b5d;
    color: #fff !important;
    font-weight: 500;
    padding: 0;
}

.tab-nav li a {
    align-items: center;
    border-radius: 25px;
    color: #000;
    display: flex;
    font-size: 14px;
    font-weight: 700;
    height: 42px;
    justify-content: center;
    /* padding: 0 28px; */
    transition: all .3s ease-in-out;
}

.instructor-box {
    font-weight: 600 !important;
    font-family: "Heebo", sans-serif !important;
}

.tab-nav li a:hover {
    color: #fff;
    background: #30c465;
}

.hide-on-web {
    display: none;
}

@media screen and (max-width: 768px) {
    .tab-nav ul {
        margin: 10px auto 8px;
        width: 326px;
    }

    .tab-nav li a {
        padding: 0 20px
    }
}

@media screen and (max-width: 398px) {
    .tab-nav li a {
        padding: 0 12px
    }
}

.imgStyleIcon {
    height: 20px;
    width: 20px;
}

@media screen and (max-width: 767px) {
    .tab-nav {
        margin-top: 55px;
        display: block;
        background: #fff;
    }

    .hide-on-mobile {
        display: none;
    }

    .hide-on-web {
        display: block !important;
    }

    .tab-nav ul {
        width: 100%;
    }

    .imgStyleIcon {
        height: 20px;
        width: 20px;
    }
}

.iconStyle {
    display: inline-block;
    cursor: pointer;
}

@media screen and (max-width: 767px) {
    .iconStyle {
        height: 20px;
        width: 20px;
    }
}

@media screen and (min-width: 768px) {
    .iconStyle {
        height: 30px;
        width: 30px;
    }
}


/* fiverr nav */
.category-section {
    border-top: solid rgba(0, 0, 0, 0.2) 1px;
    /* border-bottom: solid rgba(0, 0, 0, 0.2) 1px; */
    background-color: #fff;
    height: 40px;
    width: 100%;
    transition: 2s;
    position: fixed;
    z-index: 5;
    top: -40px;
    opacity: 0;
}

.fix-width .ul3 {
    display: flex !important;
    justify-content: space-between;

}

.visible {
    top: 65px;
    opacity: 1;
}

.subcategories {
    display: none;
}

.subcategories {
    display: none;
    position: absolute;
    top: 38px;
    /* Position it below the parent category */
    /* left: 0;  */
    /* right: ; */
    background-color: #fff;
    /* Add your desired background color */
    /* border: 1px solid #ccc; / */
    padding: 10px 0;
    /* Adjust padding as needed */
    z-index: 1;
    /* Adjust z-index as necessary to make it appear above other content */
    text-align: center;
    box-shadow: rgba(33, 35, 38, 0.1) 0px 10px 10px -10px;
    width: 30%;
}

.subcategories li {
    display: block;
    margin: 0 auto;
    padding: 10px 20px 5px;
    list-style: disc;
    text-align: left;
    /* Use point form */
    /* text-align: left; Align list items to the left */
}

.subcategories li:hover {
    color: #fff !important;
    background-color: #30c465;

}


.subcategories li:hover a {
    color: #fff;
}



.category-item:hover .subcategories {
    display: block;


}

.subcategories:hover {
    display: block;
}


@media screen and (max-width: 768px; ) {
    .visible {
        top: 109px;
        opacity: 1;
    }
}


.sign-in-box>.btn {
    padding: 6px 10px !important;
}

/* Change link underlines to green on hover */
ul.ul3 li.category-item a:hover {
    //text-decoration: underline #32cf6b; /* You can use any green color you prefer */
    border-bottom: 3px solid #32cf6b !important;
    padding-bottom: 2px;
}

/* 
/* Media query for mobile view (e.g., screens with a max-width of 768px) */
@media (max-width: 768px) {
    .category-section {
        display: none !important;
        /* Hide the .category-section on mobile */
    }

    .tab-nav {
        display: none !important;
        /* Hide the .tab-nav on mobile */
    }


    .dropdown-menu.show {
        width: 100%;
        text-align: left;
    }
</style>
<section class="menu-area">
    <div class="container-xl">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-light">

                    <ul class="mobile-header-buttons">
                        <li><a class="mobile-nav-trigger" href="#mobile-primary-nav">Menu<span></span></a></li>

                    </ul> 

                    <ul class="mobile-header-buttons">
                        <li><a class="mobile-search-trigger" href="#mobile-search">Search<span></span></a></li>
                    </ul>


                    <a href="<?php echo site_url('home'); ?>" class="navbar-brand" href="#"><img src="<?php echo base_url('uploads/system/' . get_frontend_settings('dark_logo')); ?>" alt="" height="40"></a>

                    <?php include 'menu.php'; ?>

                    <form class="inline-form" action="<?php echo site_url('home/search'); ?>" method="get"
                        style="width: 100%;">
                        <div class="input-group search-box mobile-search" style="margin-bottom:0px;">
                            <input type="text" name='query' class="form-control"
                                placeholder="<?php echo site_phrase('search_for_courses'); ?>">
                            <div class="input-group-append">
                                <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                    <div style="width: 100%"></div>

                    <?php if ($this->session->userdata('admin_login')) : ?>
                    <div class="instructor-box menu-icon-box">
                        <div class="icon">
                            <a href="<?php echo site_url('admin'); ?>"
                                style="border: 1px solid transparent; margin: 10px 10px; font-size: 14px; width: 100%; border-radius: 0;"><?php echo site_phrase('administrator'); ?></a>
                        </div>
                    </div>
                    <?php endif; ?>

                    <span class="signin-box-move-desktop-helper"></span>

<div class="sign-in-box btn-group">
    <div class="btn-group">
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="https://upbright.lk/about">About</a></li>
            <li><a class="dropdown-item" href="https://shop.upbright.lk/blog">Blog</a></li>
            <li><a class="dropdown-item" href="https://upbright.lk/contact">Contact</a></li>
        </ul>
    </div>
    <div class="btn-group" style="border:none;">
        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background: none;">
        RESOURCE
        </button>
  <div class="dropdown-menu" style="margin-top:11px;">
    <a class="dropdown-item" href="#">Free EBay's Tools</a>
    <a class="dropdown-item" href="#">UB Blog</a>
    <a class="dropdown-item" href="#">FreeQuizzes</a>
    <a class="dropdown-item" href="#">UB Services</a>
    <a class="dropdown-item" href="#">UB Foundation</a>
  </div>
</div>


<div class="btn-group" style="border:none;">
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background: none;">
    PARTNER UP
  </button>
  <div class="dropdown-menu" style="margin-top:11px;">
    <a class="dropdown-item" href="#">Apply For Job</a>
    <a class="dropdown-item" href="#">UB Franchises</a>
    <a class="dropdown-item" href="#">UB Corporates PARTNER</a>
    <a class="dropdown-item" href="#">UB Digital PARTNER</a>
  </div>
</div>


<!--    <div class="cart-box menu-icon-box" id = "cart_items">-->
<!--        --><?php //include 'cart_items.php'; ?>
<!--    </div>-->

<a href="<?php echo site_url('home/sign_up'); ?>" class="btn btn-sign-up gen" style="border-radius:15px !important;    padding: 3px 10px;"><?php echo site_phrase('Register'); ?></a>
<a href="<?php echo site_url('home/login'); ?>" class="btn btn-sign-in gen" style="background:transparent; border:2px solid #30c465 !important; border-radius:15px !important"><?php echo site_phrase('login'); ?></a>
<!--  sign-in-box end -->

</nav>
        </div>
    </div>
    </div>

<!-- This is for create for fiver navbar like category display and 3 buttons are when scroll down the cursor_below the buttons -->
<div class="category-section">
    <div class="fix-width container-xl">
        <ul class="ul3 ml-0" style="display: flex !important;justify-content: center;padding: 10px 0;align-items: center;gap: 50px;">
            <?php
            $categories = $this->crud_model->get_categories()->result_array();
            foreach ($categories as $key => $category) : ?>
                <li class="category-item"><a href="#" id=""><?php echo $category['name']; ?></a>
                <!-- This is for subcategory -->
            <ul class="subcategories">
                        <?php
                        $sub_categories = $this->crud_model->get_sub_categories($category['id']);
                        foreach ($sub_categories as $sub_category) : ?>
                            <li><a href="<?php echo site_url('home/courses?category=' . $sub_category['slug']); ?>"><?php echo $sub_category['name']; ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul> 
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
<div class="tab-nav bg-transparent" style="background:#fff;">
        <ul>
            <li class="tab-nav__cta cta">
                <a href="https://lms.upbright.lk/" title="Live online courses" class="nav-item nav-link"
                    style="border: 1px solid #30C46A;">
                    <img src="https://www.upbright.lk/images/icon/book.svg" class="imgStyleIcon">
                    <span class="hide-on-mobile" style="padding-left:5px;">Online &amp; Earning Courses</span><span
                        class="hide-on-web">Courses</span>
                </a>
            </li>
            <li class="tab-nav__cta cta">
                <a title="Softwares" href="https://www.upbright.lk/softwares" class="nav-item nav-link"
                    style="border: 1px solid #30C46A;">
                    <img src="https://www.upbright.lk/images/icon/software.svg" class="imgStyleIcon">
                    <span class="hide-on-mobile" style="padding-left:5px;">Premium Softwares</span> <span
                        class="hide-on-web">Softwares</span>
                </a>
            </li>
            <li class="tab-nav__cta cta">
                <a title="Doller Exchange" href="https://www.upbright.lk/exchange" class="nav-item nav-link"
                    style="border: 1px solid #30C46A;">
                    <img src="https://www.upbright.lk/images/icon/money.svg" class="imgStyleIcon">
                    <span class="hide-on-mobile" style="padding-left:5px;">Dollar Exchange</span> <span
                        class="hide-on-web">Exchange</span>
                </a>
            </li>
        </ul>
    </div>
</section>

<script>
// Function to handle scrolling
function handleScroll() {
    const categorySection = document.querySelector('.category-section');
    const tabNav = document.querySelector('.tab-nav');
    // Check if the user has scrolled down at least 100 pixels to make the category section visible
    if (window.scrollY >= 100) {
        categorySection.classList.add('visible');
        // Hide the tab-nav element
        tabNav.style.display = 'none';
    } else {
        categorySection.classList.remove('visible');
        // Show the tab-nav element
        tabNav.style.display = 'block';
    }
}
// Add an event listener for scrolling
window.addEventListener('scroll', handleScroll);
</script>

<script>
//   // Function to handle scrolling
//     function handleScroll() {
//     const categorySection = document.querySelector('.category-section');

//     // Check if the user has scrolled down at least 100 pixels to make it visible
//     if (window.scrollY >= 100) {
//       categorySection.classList.add('visible');
//     } else {
//       categorySection.classList.remove('visible');
//     }
//   }

//   // Add an event listener for scrolling
//   window.addEventListener('scroll', handleScroll);
</script>


<script>
< script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" >
</script>
</script>