<style>
.home-fact-area {
    background: linear-gradient(-45deg, #049738, #30c465);
}
/* .input-group {
    width: 100%;
} */

.home-banner-wrap .btn,
    {}

.home-banner-wrap .btn:hover {
    background: #18ab4c !important;
    color: #fff !important;
}

/* catagory section start */
.content-wrapper {
    margin: 0 auto;
    max-width: 1200px;
    display: flex;
    flex-flow: row wrap;
    justify-content: center;
    padding: 0.5rem;
  }
  
  .news-card {
    border: 0px solid aqua;
    margin: 0.5rem;
    position: relative;
    height: 12rem;
    overflow: hidden;
    border-radius: 0.5rem;
    flex: 1;
    min-width: 290px;
    /* box-shadow: 0 0 1rem rgba(0, 0, 0, 0.5); */
    box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -webkit-transform: translate3d(0, 0, 0);
    -moz-transform: translate3d(0, 0, 0);
  }
  
  @media (min-width: 900px) {
  
  .news-card {
      height: 20rem
  }
    }
  
  .news-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        /* background: rgba(0, 0, 0, 0) linear-gradient(to bottom, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.7) 80%);; */
        z-index: 0;
      }
  
  .news-card__card-link {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 1;
  /*     background: rgba(255,0,0,.5); */
    }
  
  .news-card__image {
      width: 100%;
      height: 100%;
      display: block;
      object-fit: cover;
      transition: transform 1s ease;
      -webkit-backface-visibility: hidden;
      backface-visibility: hidden;
      position: relative;
      z-index: -1;
    }
  
  .news-card__text-wrapper {
      position: absolute;
      bottom: 0rem;
      padding: 1rem;
      color: white;
    }
  
  .news-card__title {
    color: #000;
        font-size: 15px;
      transition: color 1s ease;
      margin-bottom: -5px;
    }
  
  
  @media (min-width: 900px) {
      .news-card:hover .news-card__details-wrapper {
        max-height: 20rem;
        opacity: 1;
      }
      .news-card:hover .news-card__title {
        /* color: yellow; */
      }
      .news-card:hover .news-card__image {
        transform: scale(1.2);
        z-index: -1;
      }
    }
  
  .news-card__excerpt {
      font-weight: 300;
    }
  
  .news-card__read-more {
      /* background: black; */
      color: #bbb;
      display: block;
      padding: 0.4rem 0.6rem;
      border-radius: 0.3rem;
      margin-top: 1rem;
      border: 1px solid #444;
      font-size: 0.8rem;
      -webkit-backface-visibility: hidden;
      backface-visibility: hidden;
      text-decoration: none;
      width: 7rem;
      margin-left: auto;
      position: relative;
      z-index: 5;
    }
  
  .news-card__read-more i {
        position: relative;
        left: 0.2rem;
        color: #888;
        transition: left 0.5s ease, color 0.6s ease;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
      }
  
  .news-card__read-more:hover i {
        left: 0.5rem;
        /* color: yellow; */
      }

      @media screen and (max-width: 768px) {
      .ub-section {
        padding: 0 !important;
        padding-top: 25px !important;
      }
      }
    
/* category end */
</style>
<section class="home-banner-area" style="background-image: url('<?= base_url("uploads/system/" . get_frontend_settings('banner_image')); ?>');
        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
        padding: 170px 0 130px;
        color: #fff;">
    <div class="container-lg">
        <div class="row">
            <div class="col">
                <div class="home-banner-wrap">
                    <h2><?php echo get_frontend_settings('banner_title'); ?></h2>
                    <p><?php echo get_frontend_settings('banner_sub_title'); ?></p>
                    <form class="" action="<?php echo site_url('home/search'); ?>" method="get">
                        <div class="input-group">
                            <input type="text" class="form-control" name="query"
                                placeholder="<?php echo site_phrase('what_do_you_want_to_learn'); ?>?">
                            <div class="input-group-append">
                                <button class="btn" type="submit"><i class="fas fa-search" id="search-icon"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="home-fact-area">
    <div class="container-lg">
        <div class="row">
            <?php $courses = $this->crud_model->get_courses(); ?>
            <div class="col-md-4 d-flex">
                <div class="home-fact-box mr-md-auto mr-auto">
                    <i class="fas fa-bullseye float-left"></i>
                    <div class="text-box">
                        <h4><?php
                            $status_wise_courses = $this->crud_model->get_status_wise_courses();
                            $number_of_courses = $status_wise_courses['active']->num_rows();
                            echo $number_of_courses . ' ' . site_phrase('online_courses'); ?></h4>
                        <p><?php echo site_phrase('explore_a_variety_of_fresh_topics'); ?></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 d-flex">
                <div class="home-fact-box mr-md-auto mr-auto">
                    <i class="fa fa-check float-left"></i>
                    <div class="text-box">
                        <h4><?php echo site_phrase('expert_instruction'); ?></h4>
                        <p><?php echo site_phrase('find_the_right_course_for_you'); ?></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 d-flex">
                <div class="home-fact-box mr-md-auto mr-auto">
                    <i class="fa fa-clock float-left"></i>
                    <div class="text-box">
                        <h4><?php echo site_phrase('lifetime_access'); ?></h4>
                        <p><?php echo site_phrase('learn_on_your_schedule'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="course-carousel-area">
    <div class="container-lg">
        <div class="row">
            <div class="col">
                <h2 class="course-carousel-title"><?php echo site_phrase('top_courses'); ?></h2>

                <!-- Animated page loader -->
                <?php include "animated-page-loader.php"; ?>

                <div class="course-carousel shown-after-loading" style="display: none;">
                    <?php $top_courses = $this->crud_model->get_top_courses()->result_array();
                    $cart_items = $this->session->userdata('cart_items');
                    foreach ($top_courses as $top_course) : ?>
                    <?php if ($top_course['course_status'] == "active") : ?>
                    <div class="course-box-wrap">
                        <a href="<?php echo site_url('home/course/' . rawurlencode(slugify($top_course['title'])) . '/' . $top_course['id']); ?>"
                            class="has-popover">
                            <div class="course-box">
                                <div class="course-image">
                                    <img src="<?php echo $this->crud_model->get_course_thumbnail_url($top_course['id']); ?>"
                                        alt="" class="img-fluid">
                                </div>
                                <div class="course-details">
                                    <h5 class="title"><?php echo $top_course['title']; ?></h5>
                                    <p class="instructors"><?php echo $top_course['short_description']; ?></p>
                                    <div class="rating">
                                        <?php
                                            $total_rating =  $this->crud_model->get_ratings('course', $top_course['id'], true)->row()->rating;
                                            $number_of_ratings = $this->crud_model->get_ratings('course', $top_course['id'])->num_rows();
                                            if ($number_of_ratings > 0) {
                                                $average_ceil_rating = ceil($total_rating / $number_of_ratings);
                                            } else {
                                                $average_ceil_rating = 0;
                                            }

                                            for ($i = 1; $i < 6; $i++) : ?>
                                        <?php if ($i <= $average_ceil_rating) : ?>
                                        <i class="fas fa-star filled"></i>
                                        <?php else : ?>
                                        <i class="fas fa-star"></i>
                                        <?php endif; ?>
                                        <?php endfor; ?>
                                        <span
                                            class="d-inline-block average-rating"><?php echo $average_ceil_rating; ?></span>
                                    </div>
                                    <div class="d-block">
                                        <p class="text-left text-secondary d-inline-block course-compare"
                                            style="font-size: 13px; cursor : pointer; font-weight : 500; color : #4d98ad !important;"
                                            redirect_to="<?php echo site_url('home/compare?course-1=' . rawurlencode(slugify($top_course['title'])) . '&&course-id-1=' . $top_course['id']); ?>">
                                            <i class="fas fa-balance-scale"></i> <?php echo site_phrase('compare'); ?>
                                        </p>
                                        <?php if ($top_course['is_free_course'] == 1) : ?>
                                        <p class="price text-right d-inline-block float-right">
                                            <?php echo site_phrase('free'); ?></p>
                                        <?php else : ?>
                                        <?php if ($top_course['discount_flag'] == 1) : ?>
                                        <p class="price text-right d-inline-block float-right">
                                            <small><?php echo currency($top_course['price']); ?></small><?php echo currency($top_course['discounted_price']); ?>
                                        </p>
                                        <?php else : ?>
                                        <p class="price text-right d-inline-block float-right">
                                            <?php echo currency($top_course['price']); ?></p>
                                        <?php endif; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <div class="webui-popover-content">
                            <div class="course-popover-content">
                                <?php if ($top_course['last_modified'] == "") : ?>
                                <div class="last-updated">
                                    <?php echo site_phrase('last_updated') . ' ' . date('D, d-M-Y', $top_course['date_added']); ?>
                                </div>
                                <?php else : ?>
                                <div class="last-updated">
                                    <?php echo site_phrase('last_updated') . ' ' . date('D, d-M-Y', $top_course['last_modified']); ?>
                                </div>
                                <?php endif; ?>

                                <div class="course-title">
                                    <a
                                        href="<?php echo site_url('home/course/' . rawurlencode(slugify($top_course['title'])) . '/' . $top_course['id']); ?>"><?php echo $top_course['title']; ?></a>
                                </div>
                                <div class="course-meta">
                                    <?php if ($top_course['course_type'] == 'general') : ?>
                                    <span class=""><i class="fas fa-play-circle"></i>
                                        <?php echo $this->crud_model->get_lessons('course', $top_course['id'])->num_rows() . ' ' . site_phrase('lessons'); ?>
                                    </span>
                                    <span class=""><i class="far fa-clock"></i>
                                        <?php
                                                $total_duration = 0;
                                                $lessons = $this->crud_model->get_lessons('course', $top_course['id'])->result_array();
                                                foreach ($lessons as $lesson) {
                                                    if ($lesson['lesson_type'] != "other") {
                                                        $time_array = explode(':', $lesson['duration']);
                                                        $hour_to_seconds = $time_array[0] * 60 * 60;
                                                        $minute_to_seconds = $time_array[1] * 60;
                                                        $seconds = $time_array[2];
                                                        $total_duration += $hour_to_seconds + $minute_to_seconds + $seconds;
                                                    }
                                                }
                                                echo gmdate("H:i:s", $total_duration) . ' ' . site_phrase('hours');
                                                ?>
                                    </span>
                                    <?php elseif ($top_course['course_type'] == 'scorm') : ?>
                                    <span class="badge badge-light"><?= site_phrase('scorm_course'); ?></span>
                                    <?php endif; ?>
                                    <span class=""><i
                                            class="fas fa-closed-captioning"></i><?php echo ucfirst($top_course['language']); ?></span>
                                </div>
                                <div class="course-subtitle"><?php echo $top_course['short_description']; ?></div>
                                <div class="what-will-learn">
                                    <ul>
                                        <?php
                                            $outcomes = json_decode($top_course['outcomes']);
                                            foreach ($outcomes as $outcome) : ?>
                                        <li><?php echo $outcome; ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                <div class="popover-btns">
                                    <?php if (is_purchased($top_course['id'])) : ?>
                                    <div class="purchased">
                                        <a
                                            href="<?php echo site_url('home/my_courses'); ?>"><?php echo site_phrase('already_purchased'); ?></a>
                                    </div>
                                    <?php else : ?>
                                    <?php if ($top_course['is_free_course'] == 1) :
                                                if ($this->session->userdata('user_login') != 1) {
                                                    $url = "#";
                                                } else {
                                                    $url = site_url('home/get_enrolled_to_free_course/' . $top_course['id']);
                                                } ?>
                                    <a href="<?php echo $url; ?>" class="btn add-to-cart-btn big-cart-button"
                                        onclick="handleEnrolledButton()"><?php echo site_phrase('get_enrolled'); ?></a>
                                    <?php else : ?>
                                    <button type="button"
                                        class="btn add-to-cart-btn <?php if (in_array($top_course['id'], $cart_items)) echo 'addedToCart'; ?> big-cart-button-<?php echo $top_course['id']; ?>"
                                        id="<?php echo $top_course['id']; ?>" onclick="handleCartItems(this)">
                                        <?php
                                                    if (in_array($top_course['id'], $cart_items))
                                                        echo site_phrase('added_to_cart');
                                                    else
                                                        echo site_phrase('add_to_cart');
                                                    ?>
                                    </button>
                                    <?php endif; ?>
                                    <button type="button"
                                        class="wishlist-btn <?php if ($this->crud_model->is_added_to_wishlist($top_course['id'])) echo 'active'; ?>"
                                        title="Add to wishlist" onclick="handleWishList(this)"
                                        id="<?php echo $top_course['id']; ?>"><i class="fas fa-heart"></i></button>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php else : ?>
                        <div class="course-box-wrap">
                        <a href="<?php echo site_url('home/construct'); ?>"
                            class="has-popover">
                            <div class="course-box">
                                <div class="course-image">
                                    <img src="<?php echo $this->crud_model->get_course_thumbnail_url($top_course['id']); ?>"
                                        alt="" class="img-fluid">
                                </div>
                                <div class="course-details">
                                    <h5 class="title"><?php echo $top_course['title']; ?> <p class="instructors" style="color: #2dc262;">comming zoon</p></h5>
                                    <p class="instructors"><?php echo $top_course['short_description']; ?></p>
                                    <div class="rating">
                                        <?php
                                            $total_rating =  $this->crud_model->get_ratings('course', $top_course['id'], true)->row()->rating;
                                            $number_of_ratings = $this->crud_model->get_ratings('course', $top_course['id'])->num_rows();
                                            if ($number_of_ratings > 0) {
                                                $average_ceil_rating = ceil($total_rating / $number_of_ratings);
                                            } else {
                                                $average_ceil_rating = 0;
                                            }

                                            for ($i = 1; $i < 6; $i++) : ?>
                                        <?php if ($i <= $average_ceil_rating) : ?>
                                        <i class="fas fa-star filled"></i>
                                        <?php else : ?>
                                        <i class="fas fa-star"></i>
                                        <?php endif; ?>
                                        <?php endfor; ?>
                                        <span
                                            class="d-inline-block average-rating"><?php echo $average_ceil_rating; ?></span>
                                    </div>
                                    <div class="d-block">
                                        <p class="text-left text-secondary d-inline-block course-compare"
                                            style="font-size: 13px; cursor : pointer; font-weight : 500; color : #4d98ad !important;"
                                            redirect_to="<?php echo site_url('home/compare?course-1=' . rawurlencode(slugify($top_course['title'])) . '&&course-id-1=' . $top_course['id']); ?>">
                                            <i class="fas fa-balance-scale"></i> <?php echo site_phrase('compare'); ?>
                                        </p>
                                        <?php if ($top_course['is_free_course'] == 1) : ?>
                                        <p class="price text-right d-inline-block float-right">
                                            <?php echo site_phrase('free'); ?></p>
                                        <?php else : ?>
                                        <?php if ($top_course['discount_flag'] == 1) : ?>
                                        <p class="price text-right d-inline-block float-right">
                                            <small><?php echo currency($top_course['price']); ?></small><?php echo currency($top_course['discounted_price']); ?>
                                        </p>
                                        <?php else : ?>
                                        <p class="price text-right d-inline-block float-right">
                                            <?php echo currency($top_course['price']); ?></p>
                                        <?php endif; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="webui-popover-content">
                            <div class="course-popover-content">
                                <?php if ($top_course['last_modified'] == "") : ?>
                                <div class="last-updated">
                                    <?php echo site_phrase('last_updated') . ' ' . date('D, d-M-Y', $top_course['date_added']); ?>
                                </div>
                                <?php else : ?>
                                <div class="last-updated">
                                    <?php echo site_phrase('last_updated') . ' ' . date('D, d-M-Y', $top_course['last_modified']); ?>
                                </div>
                                <?php endif; ?>

                                <div class="course-title">
                                    <a
                                        href="<?php echo site_url('home/course/' . rawurlencode(slugify($top_course['title'])) . '/' . $top_course['id']); ?>"><?php echo $top_course['title']; ?></a>
                                </div>
                                <div class="course-meta">
                                    <?php if ($top_course['course_type'] == 'general') : ?>
                                    <span class=""><i class="fas fa-play-circle"></i>
                                        <?php echo $this->crud_model->get_lessons('course', $top_course['id'])->num_rows() . ' ' . site_phrase('lessons'); ?>
                                    </span>
                                    <span class=""><i class="far fa-clock"></i>
                                        <?php
                                                $total_duration = 0;
                                                $lessons = $this->crud_model->get_lessons('course', $top_course['id'])->result_array();
                                                foreach ($lessons as $lesson) {
                                                    if ($lesson['lesson_type'] != "other") {
                                                        $time_array = explode(':', $lesson['duration']);
                                                        $hour_to_seconds = $time_array[0] * 60 * 60;
                                                        $minute_to_seconds = $time_array[1] * 60;
                                                        $seconds = $time_array[2];
                                                        $total_duration += $hour_to_seconds + $minute_to_seconds + $seconds;
                                                    }
                                                }
                                                echo gmdate("H:i:s", $total_duration) . ' ' . site_phrase('hours');
                                                ?>
                                    </span>
                                    <?php elseif ($top_course['course_type'] == 'scorm') : ?>
                                    <span class="badge badge-light"><?= site_phrase('scorm_course'); ?></span>
                                    <?php endif; ?>
                                    <span class=""><i
                                            class="fas fa-closed-captioning"></i><?php echo ucfirst($top_course['language']); ?></span>
                                </div>
                                <div class="course-subtitle"><?php echo $top_course['short_description']; ?></div>
                                <div class="what-will-learn">
                                    <ul>
                                        <?php
                                            $outcomes = json_decode($top_course['outcomes']);
                                            foreach ($outcomes as $outcome) : ?>
                                        <li><?php echo $outcome; ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                <div class="popover-btns">
                                    <?php if (is_purchased($top_course['id'])) : ?>
                                    <div class="purchased">
                                        <a
                                            href="<?php echo site_url('home/my_courses'); ?>"><?php echo site_phrase('already_purchased'); ?></a>
                                    </div>
                                    <?php else : ?>
                                    <?php if ($top_course['is_free_course'] == 1) :
                                                if ($this->session->userdata('user_login') != 1) {
                                                    $url = "#";
                                                } else {
                                                    $url = site_url('home/get_enrolled_to_free_course/' . $top_course['id']);
                                                } ?>
                                    <a href="<?php echo $url; ?>" class="btn add-to-cart-btn big-cart-button"
                                        onclick="handleEnrolledButton()"><?php echo site_phrase('get_enrolled'); ?></a>
                                    <?php else : ?>
                                    <button type="button"
                                        class="btn add-to-cart-btn <?php if (in_array($top_course['id'], $cart_items)) echo 'addedToCart'; ?> big-cart-button-<?php echo $top_course['id']; ?>"
                                        id="<?php echo $top_course['id']; ?>" onclick="handleCartItems(this)">
                                        <?php
                                                    if (in_array($top_course['id'], $cart_items))
                                                        echo site_phrase('added_to_cart');
                                                    else
                                                        echo site_phrase('add_to_cart');
                                                    ?>
                                    </button>
                                    <?php endif; ?>
                                    <button type="button"
                                        class="wishlist-btn <?php if ($this->crud_model->is_added_to_wishlist($top_course['id'])) echo 'active'; ?>"
                                        title="Add to wishlist" onclick="handleWishList(this)"
                                        id="<?php echo $top_course['id']; ?>"><i class="fas fa-heart"></i></button>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="course-carousel-area">
    <div class="container-lg">
        <div class="row">
            <div class="col">
                <h2 class="course-carousel-title">
                    <?php echo site_phrase('top') . ' 10 ' . site_phrase('latest_courses'); ?></h2>

                <!-- Animated page loader -->
                <?php include "animated-page-loader.php"; ?>

                <div class="course-carousel shown-after-loading" style="display: none;">
                    <?php
                    $latest_courses = $this->crud_model->get_latest_10_course();
                    foreach ($latest_courses as $latest_course) : ?>
                    <div class="course-box-wrap">
                        <a href="<?php echo site_url('home/course/' . rawurlencode(slugify($latest_course['title'])) . '/' . $latest_course['id']); ?>"
                            class="has-popover">
                            <div class="course-box">
                                <div class="course-image">
                                    <img src="<?php echo $this->crud_model->get_course_thumbnail_url($latest_course['id']); ?>"
                                        alt="" class="img-fluid">
                                </div>
                                <div class="course-details">
                                    <h5 class="title"><?php echo $latest_course['title']; ?></h5>
                                    <p class="instructors">
                                        <?php
                                            if ($latest_course['multi_instructor']) {
                                                $instructor_details = $this->user_model->get_multi_instructor_details_with_csv($latest_course['user_id']);
                                                foreach ($instructor_details as $key => $instructor_detail) {
                                                    echo $instructor_detail['first_name'] . ' ' . $instructor_detail['last_name'];
                                                    echo $key + 1 == count($instructor_details) ? '' : ', ';
                                                }
                                            } else {
                                                $instructor_details = $this->user_model->get_all_user($latest_course['user_id'])->row_array();
                                                echo $instructor_details['first_name'] . ' ' . $instructor_details['last_name'];
                                            }
                                            ?>
                                    </p>
                                    <div class="rating">
                                        <?php
                                            $total_rating =  $this->crud_model->get_ratings('course', $latest_course['id'], true)->row()->rating;
                                            $number_of_ratings = $this->crud_model->get_ratings('course', $latest_course['id'])->num_rows();
                                            if ($number_of_ratings > 0) {
                                                $average_ceil_rating = ceil($total_rating / $number_of_ratings);
                                            } else {
                                                $average_ceil_rating = 0;
                                            }

                                            for ($i = 1; $i < 6; $i++) : ?>
                                        <?php if ($i <= $average_ceil_rating) : ?>
                                        <i class="fas fa-star filled"></i>
                                        <?php else : ?>
                                        <i class="fas fa-star"></i>
                                        <?php endif; ?>
                                        <?php endfor; ?>
                                        <span
                                            class="d-inline-block average-rating"><?php echo $average_ceil_rating; ?></span>
                                    </div>

                                    <div class="d-block">
                                        <p class="text-left text-secondary d-inline-block course-compare"
                                            style="font-size: 13px; cursor : pointer; font-weight : 500; color : #4d98ad !important;"
                                            redirect_to="<?php echo site_url('home/compare?course-1=' . rawurlencode(slugify($latest_course['title'])) . '&&course-id-1=' . $latest_course['id']); ?>">
                                            <i class="fas fa-balance-scale"></i> <?php echo site_phrase('compare'); ?>
                                        </p>
                                        <?php if ($latest_course['is_free_course'] == 1) : ?>
                                        <p class="price text-right d-inline-block float-right">
                                            <?php echo site_phrase('free'); ?></p>
                                        <?php else : ?>
                                        <?php if ($latest_course['discount_flag'] == 1) : ?>
                                        <p class="price text-right d-inline-block float-right">
                                            <small><?php echo currency($latest_course['price']); ?></small><?php echo currency($latest_course['discounted_price']); ?>
                                        </p>
                                        <?php else : ?>
                                        <p class="price text-right d-inline-block float-right">
                                            <?php echo currency($latest_course['price']); ?></p>
                                        <?php endif; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <div class="webui-popover-content">
                            <div class="course-popover-content">
                                <?php if ($latest_course['last_modified'] == "") : ?>
                                <div class="last-updated">
                                    <?php echo site_phrase('last_updated') . ' ' . date('D, d-M-Y', $latest_course['date_added']); ?>
                                </div>
                                <?php else : ?>
                                <div class="last-updated">
                                    <?php echo site_phrase('last_updated') . ' ' . date('D, d-M-Y', $latest_course['last_modified']); ?>
                                </div>
                                <?php endif; ?>

                                <div class="course-title">
                                    <a
                                        href="<?php echo site_url('home/course/' . rawurlencode(slugify($latest_course['title'])) . '/' . $latest_course['id']); ?>"><?php echo $latest_course['title']; ?></a>
                                </div>
                                <div class="course-meta">
                                    <?php if ($latest_course['course_type'] == 'general') : ?>
                                    <span class=""><i class="fas fa-play-circle"></i>
                                        <?php echo $this->crud_model->get_lessons('course', $latest_course['id'])->num_rows() . ' ' . site_phrase('lessons'); ?>
                                    </span>
                                    <span class=""><i class="far fa-clock"></i>
                                        <?php
                                                $total_duration = 0;
                                                $lessons = $this->crud_model->get_lessons('course', $latest_course['id'])->result_array();
                                                foreach ($lessons as $lesson) {
                                                    if ($lesson['lesson_type'] != "other") {
                                                        $time_array = explode(':', $lesson['duration']);
                                                        $hour_to_seconds = $time_array[0] * 60 * 60;
                                                        $minute_to_seconds = $time_array[1] * 60;
                                                        $seconds = $time_array[2];
                                                        $total_duration += $hour_to_seconds + $minute_to_seconds + $seconds;
                                                    }
                                                }
                                                echo gmdate("H:i:s", $total_duration) . ' ' . site_phrase('hours');
                                                ?>
                                    </span>
                                    <?php elseif ($latest_course['course_type'] == 'scorm') : ?>
                                    <span class="badge badge-light"><?= site_phrase('scorm_course'); ?></span>
                                    <?php endif; ?>
                                    <span class=""><i
                                            class="fas fa-closed-captioning"></i><?php echo ucfirst($latest_course['language']); ?></span>
                                </div>
                                <div class="course-subtitle"><?php echo $latest_course['short_description']; ?></div>
                                <div class="what-will-learn">
                                    <ul>
                                        <?php
                                            $outcomes = json_decode($latest_course['outcomes']);
                                            foreach ($outcomes as $outcome) : ?>
                                        <li><?php echo $outcome; ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                <div class="popover-btns">
                                    <?php if (is_purchased($latest_course['id'])) : ?>
                                    <div class="purchased">
                                        <a
                                            href="<?php echo site_url('home/my_courses'); ?>"><?php echo site_phrase('already_purchased'); ?></a>
                                    </div>
                                    <?php else : ?>
                                    <?php if ($latest_course['is_free_course'] == 1) :
                                                if ($this->session->userdata('user_login') != 1) {
                                                    $url = "#";
                                                } else {
                                                    $url = site_url('home/get_enrolled_to_free_course/' . $latest_course['id']);
                                                } ?>
                                    <a href="<?php echo $url; ?>" class="btn add-to-cart-btn big-cart-button"
                                        onclick="handleEnrolledButton()"><?php echo site_phrase('get_enrolled'); ?></a>
                                    <?php else : ?>
                                    <button type="button"
                                        class="btn add-to-cart-btn <?php if (in_array($latest_course['id'], $cart_items)) echo 'addedToCart'; ?> big-cart-button-<?php echo $latest_course['id']; ?>"
                                        id="<?php echo $latest_course['id']; ?>" onclick="handleCartItems(this)">
                                        <?php
                                                    if (in_array($latest_course['id'], $cart_items))
                                                        echo site_phrase('added_to_cart');
                                                    else
                                                        echo site_phrase('add_to_cart');
                                                    ?>
                                    </button>
                                    <?php endif; ?>
                                    <button type="button"
                                        class="wishlist-btn <?php if ($this->crud_model->is_added_to_wishlist($latest_course['id'])) echo 'active'; ?>"
                                        title="Add to wishlist" onclick="handleWishList(this)"
                                        id="<?php echo $latest_course['id']; ?>"><i class="fas fa-heart"></i></button>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="course-carousel-area">
    <div class="container-lg">
        <div class="row">
            <div class="content-wrapper">

                <div class="news-card">
                    <a href="<?php echo site_url('home/construct'); ?>" class="news-card__card-link"></a>
                    <img src="images/1.jpg" alt="" class="news-card__image">
                    <div class="news-card__text-wrapper">
                        <h2 class="news-card__title">Graphics Design</h2>
                    </div>
                </div>

                <div class="news-card">
                    <a href="<?php echo site_url(''); ?>" class="news-card__card-link"></a>
                    <img src="images/2.jpg" alt="" class="news-card__image">
                    <div class="news-card__text-wrapper">
                        <h2 class="news-card__title">Development</h2>
                    </div>
                </div>

                <div class="news-card">
                    <a href="<?php echo site_url('construct'); ?>" class="news-card__card-link"></a>
                    <img src="images/3.jpg" alt="" class="news-card__image">
                    <div class="news-card__text-wrapper">
                        <h2 class="news-card__title">Marketing</h2>
                    </div>
                </div>

                <div class="news-card">
                    <a href="<?php echo site_url('construct'); ?>" class="news-card__card-link"></a>
                    <img src="images/4.jpg" alt="" class="news-card__image">
                    <div class="news-card__text-wrapper">
                        <h2 class="news-card__title">IT and Software</h2>
                    </div>
                </div>

                <div class="news-card">
                    <a href="<?php echo site_url('construct'); ?>" class="news-card__card-link"></a>
                    <img src="images/5-1.jpg" alt="" class="news-card__image">
                    <div class="news-card__text-wrapper">
                        <h2 class="news-card__title">Online Earning</h2>
                    </div>
                </div>

                <div class="news-card">
                    <a href="<?php echo site_url('construct'); ?>" class="news-card__card-link"></a>
                    <img src="images/6.jpg" alt="" class="news-card__image">
                    <div class="news-card__text-wrapper">
                        <h2 class="news-card__title">Business</h2>
                    </div>
                </div>

                <div class="news-card">
                    <a href="<?php echo site_url('construct'); ?>" class="news-card__card-link"></a>
                    <img src="images/7.jpg" alt="" class="news-card__image">
                    <div class="news-card__text-wrapper">
                        <h2 class="news-card__title">Video Editing</h2>
                    </div>
                </div>

                <div class="news-card">
                    <a href="<?php echo site_url('construct'); ?>" class="news-card__card-link"></a>
                    <img src="images/8.jpg" alt="" class="news-card__image">
                    <div class="news-card__text-wrapper">
                        <h2 class="news-card__title">Language</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <div class="space" style="height: 50px;"></div> -->

<section class="course-carousel-area ub-section" style="background: #fff; padding: 80px;">
    <div class="container-lg mt-10px">
        <div class="row">
         
          <div class="col-lg-6 pl-md-2">
          <h2 style="margin-bottom: 15px;">UPBRIGHT Business</h2>
          
            <h4>Upskill your team with Upbright Business</h4>
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam qui obcaecati eaque odio, alias nulla quae, aliquid, rerum consequuntur, quaerat blanditiis cupiditate eos doloribus dolor debitis! Ex eius deleniti, soluta!</p> -->
            <!-- <p>Facilis sit molestiae deserunt quo corporis culpa dolorum animi architecto illum sapiente. Asperiores, placeat animi distinctio provident adipisci.</p> -->
            <ul class="ul-check success mt-5" style="font-size: 20px;">
              <li>Unlimited access top Upbright courses, anytime, anywhere.</li>
              <li>International course collection in Multi languages.</li>
              <li>Top certifications in tech and business.</li>
            </ul>

            <div class="space" style="height: 20px;"></div>
            <div class="wrap" style="display: flex; gap:10px !important; margin-bottom: 25px; ">
  		        <a href="#" class="button" style="font-weight: 200px; border: 1px solid #000; background-color: #000; color: #fff; padding: 10px;">Get Upbright Business</a>
  		        <a href="#" class="button2" style="font-weight: 200px; border: 1px solid #000; background-color:#fff color: #000; padding: 10px;">Learn More</a>
	        </div>
            
          </div>

          <div class="col-lg-6">
            <p>
              <img src="images/bss2.jpg" alt="Image" class="img-fluid" style="border-radius: 10px;">
            </p>
          </div>

        </div>
      </div>
 </section>



<script type="text/javascript">
function handleWishList(elem) {

    $.ajax({
        url: '<?php echo site_url('home/handleWishList'); ?>',
        type: 'POST',
        data: {
            course_id: elem.id
        },
        success: function(response) {
            if (!response) {
                window.location.replace("<?php echo site_url('login'); ?>");
            } else {
                if ($(elem).hasClass('active')) {
                    $(elem).removeClass('active')
                } else {
                    $(elem).addClass('active')
                }
                $('#wishlist_items').html(response);
            }
        }
    });
}

function handleCartItems(elem) {
    url1 = '<?php echo site_url('home/handleCartItems'); ?>';
    url2 = '<?php echo site_url('home/refreshWishList'); ?>';
    $.ajax({
        url: url1,
        type: 'POST',
        data: {
            course_id: elem.id
        },
        success: function(response) {
            $('#cart_items').html(response);
            if ($(elem).hasClass('addedToCart')) {
                $('.big-cart-button-' + elem.id).removeClass('addedToCart')
                $('.big-cart-button-' + elem.id).text("<?php echo site_phrase('add_to_cart'); ?>");
            } else {
                $('.big-cart-button-' + elem.id).addClass('addedToCart')
                $('.big-cart-button-' + elem.id).text("<?php echo site_phrase('added_to_cart'); ?>");
            }
            $.ajax({
                url: url2,
                type: 'POST',
                success: function(response) {
                    $('#wishlist_items').html(response);
                }
            });
        }
    });
}

function handleEnrolledButton() {
    $.ajax({
        url: '<?php echo site_url('home/isLoggedIn'); ?>',
        success: function(response) {
            if (!response) {
                window.location.replace("<?php echo site_url('login'); ?>");
            }
        }
    });
}

$(document).ready(function() {
    if (!/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        if ($(window).width() >= 840) {
            $('a.has-popover').webuiPopover({
                trigger: 'hover',
                animation: 'pop',
                placement: 'horizontal',
                delay: {
                    show: 500,
                    hide: null
                },
                width: 330
            });
        } else {
            $('a.has-popover').webuiPopover({
                trigger: 'hover',
                animation: 'pop',
                placement: 'vertical',
                delay: {
                    show: 100,
                    hide: null
                },
                width: 335
            });
        }
    }
});

$('.course-compare').click(function(e) {
    e.preventDefault()
    var redirect_to = $(this).attr('redirect_to');
    window.location.replace(redirect_to);
});
</script>

