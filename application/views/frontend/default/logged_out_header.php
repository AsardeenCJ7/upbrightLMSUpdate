<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

body {
    margin: 0;
}
.menu-area {
    position: sticky;
    top: 0;
    background: #f8f9fa !important;
}
.sign-in-box .btn {
    font-family: 'Poppins', sans-serif !important;
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
.gen{
    margin: 10px 10px;
}
</style>
<section class="menu-area">
    <div class="container-xl">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">

                    <ul class="mobile-header-buttons">
                        <li><a class="mobile-nav-trigger" href="#mobile-primary-nav">Menu<span></span></a></li>
                        <li><a class="mobile-search-trigger" href="#mobile-search">Search<span></span></a></li>
                    </ul>

                    <a href="<?php echo site_url(''); ?>" class="navbar-brand" href="#"><img
                            src="<?php echo base_url('uploads/system/'.get_frontend_settings('dark_logo')); ?>" alt=""
                            height="40"></a>

                    <?php include 'menu.php';?>

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

                    <?php if ($this->session->userdata('admin_login')): ?>
                    <div class="instructor-box menu-icon-box">
                        <div class="icon">
                            <a href="<?php echo site_url('admin'); ?>"
                                style="border: 1px solid transparent; margin: 10px 10px; font-size: 14px; width: 100%; border-radius: 0;"><?php echo site_phrase('administrator'); ?></a>
                        </div>
                    </div>
                    <?php endif; ?>

                    <div class="cart-box menu-icon-box" id="cart_items">
                        <?php include 'cart_items.php'; ?>
                    </div>

                    <span class="signin-box-move-desktop-helper"></span>
                    <div class="sign-in-box btn-group">
                        <!--Here gen class to use css purpose-->
                        <a href="https://upbright.lk/about" class="btn btn-sign-in gen"
                            style="background:transparent;"><?php echo site_phrase('About'); ?></a>
                        <a href="https://shop.upbright.lk/blog" class="btn btn-sign-in gen"
                            style="background:transparent;"><?php echo site_phrase('Blog'); ?></a>
                        <a href="https://upbright.lk/contact" class="btn btn-sign-in gen"
                            style="background:transparent;"><?php echo site_phrase('Contact'); ?></a>
                        <a href="<?php echo site_url('home/login'); ?>" class="btn btn-sign-in gen"
                            style="background:transparent;"><?php echo site_phrase('log_in'); ?></a>
                        <a href="<?php echo site_url('home/sign_up'); ?>"
                            class="btn btn-sign-up gen"><?php echo site_phrase('sign_up'); ?></a>

                    </div> <!--  sign-in-box end -->
                </nav>
            </div>
        </div>
    </div>
</section>