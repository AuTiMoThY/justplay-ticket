



<!DOCTYPE html>
<html lang="zh-Hant">
    <head>
        <title>就是要玩 - 票卷</title>
        <?php include 'include/head.php'; ?>
    </head>

    <body id="app" >
        <div class="web_goTop" id="goTop">
            <a class="web_goTop-inner" href="#top" @click="goToTop">
                <i class="fa-solid fa-arrow-up"></i>
            </a>
        </div>
        <!-- ========================================================================= -->
        <!-- .body_wrap  START-->
        <div class="body_wrap">
            <!-- header START -->
            <?php include 'include/header.php'; ?>
            <!-- /header END  !! -->
            
    <!-- =========================================================================-->
    <!-- 頁面內容  START-->
    <!-- =========================================================================-->
    <div class="special_heading"></div>
    <main class="page_main page-home">
        
        <section class="page_section home_banner">
            <div class="home_banner--bg"></div>
<div class="home_banner--wrapper">
    <div class="swiper-container banner-swiper">
        <ul class="lis-n swiper-wrapper" id="banner">
            <li class="banner-slide swiper-slide">
                    <a href="javascript:;" class="banner-slide-inner" style="">
                        <div class="banner-slide-img">
                            <div class="img_div"><img src="./assets/images//BANNER002.jpg" alt=""></div>
                        </div>
                    </a>
                </li><li class="banner-slide swiper-slide">
                    <a href="javascript:;" class="banner-slide-inner" style="">
                        <div class="banner-slide-img">
                            <div class="img_div"><img src="./assets/images//BANNER002.jpg" alt=""></div>
                        </div>
                    </a>
                </li>
        </ul>
        <div class="banner-swiper-ctrl">
            <div class="swiper-button-prev banner-swiper-prev">
                <i class="fa-solid fa-arrow-left"></i>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next banner-swiper-next">
                <i class="fa-solid fa-arrow-right"></i>
            </div>
        </div>
    </div>
    <script>
        var bannerSwiper = new Swiper(".banner-swiper", {
            visibilityFullFit: true,
            cssWidthAndHeight: true,

            loop: true,
            centeredSlides: true,

            autoResize: false,

            pagination: {
                el: '.banner-swiper .swiper-pagination',
                clickable: true
            },
            navigation: {
                nextEl: ".banner-swiper .swiper-button-next",
                prevEl: ".banner-swiper .swiper-button-prev"
            },
            // autoplay: {
            //     delay: 3000,
            //     pauseOnMouseEnter: true
            // },
            on: {
                init: function () {
                    // $(".banner-slide").eq(0).find('.slogan').addClass("")
                },
                slideChange: function (e) {
                    // console.log(e)
                }
            },
            slidesPerView: 1,
            spaceBetween: 30,
            breakpoints: {
                768: {
                    slidesPerView: 1,
                    spaceBetween: 48
                }
            }
        });
    </script>
</div>
<div class="scroller ">
    <!-- Generator: Adobe Illustrator 27.6.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
    <svg version="1.1" id="scroller-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 26 86" enable-background="new 0 0 26 86" xml:space="preserve" >
        <path id="arrow-1" fill="#959595" d="M20.4,54.6c0,0.2-0.1,0.3-0.2,0.4l-6.8,6.8c-0.2,0.2-0.6,0.2-0.8,0L5.8,55
	c-0.2-0.2-0.2-0.6,0-0.8c0.2-0.2,0.6-0.2,0.8,0c0,0,0,0,0,0l6.4,6.4l6.4-6.4c0.2-0.2,0.6-0.2,0.8,0C20.4,54.3,20.4,54.4,20.4,54.6"
	/>
        <path id="arrow-2" fill="#959595" d="M20.4,66.6c0,0.2-0.1,0.3-0.2,0.4l-6.8,6.8c-0.2,0.2-0.6,0.2-0.8,0L5.8,67
	c-0.2-0.2-0.2-0.6,0-0.8c0.2-0.2,0.6-0.2,0.8,0c0,0,0,0,0,0l6.4,6.4l6.4-6.4c0.2-0.2,0.6-0.2,0.8,0C20.4,66.3,20.4,66.4,20.4,66.6"
	/>
        <path id="arrow-3" fill="#959595" d="M20.4,78.6c0,0.2-0.1,0.3-0.2,0.4l-6.8,6.8c-0.2,0.2-0.6,0.2-0.8,0L5.8,79
	c-0.2-0.2-0.2-0.6,0-0.8c0.2-0.2,0.6-0.2,0.8,0c0,0,0,0,0,0l6.4,6.4l6.4-6.4c0.2-0.2,0.6-0.2,0.8,0C20.4,78.3,20.4,78.4,20.4,78.6"
	/>
        <path id="mouse-block" fill="#FFD100" d="M13,0L13,0c7.2,0,13,5.8,13,13v22
	c0,7.2-5.8,13-13,13l0,0C5.8,48,0,42.2,0,35V13C0,5.8,5.8,0,13,0z"/>
        <path id="mouse-cycle" fill="#FFFFFF" d="M13,7L13,7c1.1,0,2,0.9,2,2v12
	c0,1.1-0.9,2-2,2l0,0c-1.1,0-2-0.9-2-2V9C11,7.9,11.9,7,13,7z" class="animate__animated animate__heartBeat animate__infinite"/>
    </svg>

</div>
        </section>

        
        <section class="page_section home_hot">
            <div class="page_section-inner">
    <div class="page_section-content container">
        <div class="home_hot-wrapper">
            <div class="page_section-hd home_hot-hd">
                <h2 class="title">
                    <span class="image_replacement text-hide" style="background-image: url(./assets/images/image_replacement-hot.svg)">
                        HOT
                    </span>
                    <span class="icon">
                        <svg class="svgicon" data-src="./assets/images/icons/icon-hot.svg"></svg>
                    </span>
                </h2>
                <div class="subtitle">
                    <span class="icon">
                        <svg class="svgicon" data-src="./assets/images/icons/icon-more-arrow.svg"></svg>
                    </span>
                    <span class="txt">熱銷商品</span>
                </div>
            </div>
            <div class="page_section-bd home_hot-bd">
                <ul class="products-list lis-n">
                    <li class="products-item">
                            <a href="product_detail.php" class="products-item-link">
                                
    <module-card class="justplayTicket_card pdt-card">
        <div class="justplayTicket_card-inner">
            <div class="justplayTicket_card-hd">
                <div class="hover_effect">新北｜世界宗教博物館｜門票｜特展．生死晝夜：於死亡中前行</div>
                <div class="img_div">
                    <img src="./assets/images/image-2.jpg" alt="">
                </div>
            </div>
            <div class="justplayTicket_card-bd">
                <div class="title">新北｜世界宗教博物館｜門票｜特展．生死晝夜：於死亡中前行</div>
            </div>
            <div class="justplayTicket_card-ft">
                <div class="price">$300 - $1,080</div>
                <hr>
                <div class="more">
                    <svg class="svgicon" data-src="./assets/images/icons/icon-more-ciircle.svg"></svg>
                </div>
            </div>
        </div>
    </module-card>

                            </a>
                        </li><li class="products-item">
                            <a href="product_detail.php" class="products-item-link">
                                
    <module-card class="justplayTicket_card pdt-card">
        <div class="justplayTicket_card-inner">
            <div class="justplayTicket_card-hd">
                <div class="hover_effect">新北｜世界宗教博物館｜門票｜特展．生死晝夜：於死亡中前行</div>
                <div class="img_div">
                    <img src="./assets/images/image-2.jpg" alt="">
                </div>
            </div>
            <div class="justplayTicket_card-bd">
                <div class="title">新北｜世界宗教博物館｜門票｜特展．生死晝夜：於死亡中前行</div>
            </div>
            <div class="justplayTicket_card-ft">
                <div class="price">$300 - $1,080</div>
                <hr>
                <div class="more">
                    <svg class="svgicon" data-src="./assets/images/icons/icon-more-ciircle.svg"></svg>
                </div>
            </div>
        </div>
    </module-card>

                            </a>
                        </li><li class="products-item">
                            <a href="product_detail.php" class="products-item-link">
                                
    <module-card class="justplayTicket_card pdt-card">
        <div class="justplayTicket_card-inner">
            <div class="justplayTicket_card-hd">
                <div class="hover_effect">新北｜世界宗教博物館｜門票｜特展．生死晝夜：於死亡中前行</div>
                <div class="img_div">
                    <img src="./assets/images/image-2.jpg" alt="">
                </div>
            </div>
            <div class="justplayTicket_card-bd">
                <div class="title">新北｜世界宗教博物館｜門票｜特展．生死晝夜：於死亡中前行</div>
            </div>
            <div class="justplayTicket_card-ft">
                <div class="price">$300 - $1,080</div>
                <hr>
                <div class="more">
                    <svg class="svgicon" data-src="./assets/images/icons/icon-more-ciircle.svg"></svg>
                </div>
            </div>
        </div>
    </module-card>

                            </a>
                        </li><li class="products-item">
                            <a href="product_detail.php" class="products-item-link">
                                
    <module-card class="justplayTicket_card pdt-card">
        <div class="justplayTicket_card-inner">
            <div class="justplayTicket_card-hd">
                <div class="hover_effect">新北｜世界宗教博物館｜門票｜特展．生死晝夜：於死亡中前行</div>
                <div class="img_div">
                    <img src="./assets/images/image-2.jpg" alt="">
                </div>
            </div>
            <div class="justplayTicket_card-bd">
                <div class="title">新北｜世界宗教博物館｜門票｜特展．生死晝夜：於死亡中前行</div>
            </div>
            <div class="justplayTicket_card-ft">
                <div class="price">$300 - $1,080</div>
                <hr>
                <div class="more">
                    <svg class="svgicon" data-src="./assets/images/icons/icon-more-ciircle.svg"></svg>
                </div>
            </div>
        </div>
    </module-card>

                            </a>
                        </li><li class="products-item">
                            <a href="product_detail.php" class="products-item-link">
                                
    <module-card class="justplayTicket_card pdt-card">
        <div class="justplayTicket_card-inner">
            <div class="justplayTicket_card-hd">
                <div class="hover_effect">新北｜世界宗教博物館｜門票｜特展．生死晝夜：於死亡中前行</div>
                <div class="img_div">
                    <img src="./assets/images/image-2.jpg" alt="">
                </div>
            </div>
            <div class="justplayTicket_card-bd">
                <div class="title">新北｜世界宗教博物館｜門票｜特展．生死晝夜：於死亡中前行</div>
            </div>
            <div class="justplayTicket_card-ft">
                <div class="price">$300 - $1,080</div>
                <hr>
                <div class="more">
                    <svg class="svgicon" data-src="./assets/images/icons/icon-more-ciircle.svg"></svg>
                </div>
            </div>
        </div>
    </module-card>

                            </a>
                        </li><li class="products-item">
                            <a href="product_detail.php" class="products-item-link">
                                
    <module-card class="justplayTicket_card pdt-card">
        <div class="justplayTicket_card-inner">
            <div class="justplayTicket_card-hd">
                <div class="hover_effect">新北｜世界宗教博物館｜門票｜特展．生死晝夜：於死亡中前行</div>
                <div class="img_div">
                    <img src="./assets/images/image-2.jpg" alt="">
                </div>
            </div>
            <div class="justplayTicket_card-bd">
                <div class="title">新北｜世界宗教博物館｜門票｜特展．生死晝夜：於死亡中前行</div>
            </div>
            <div class="justplayTicket_card-ft">
                <div class="price">$300 - $1,080</div>
                <hr>
                <div class="more">
                    <svg class="svgicon" data-src="./assets/images/icons/icon-more-ciircle.svg"></svg>
                </div>
            </div>
        </div>
    </module-card>

                            </a>
                        </li><li class="products-item">
                            <a href="product_detail.php" class="products-item-link">
                                
    <module-card class="justplayTicket_card pdt-card">
        <div class="justplayTicket_card-inner">
            <div class="justplayTicket_card-hd">
                <div class="hover_effect">新北｜世界宗教博物館｜門票｜特展．生死晝夜：於死亡中前行</div>
                <div class="img_div">
                    <img src="./assets/images/image-2.jpg" alt="">
                </div>
            </div>
            <div class="justplayTicket_card-bd">
                <div class="title">新北｜世界宗教博物館｜門票｜特展．生死晝夜：於死亡中前行</div>
            </div>
            <div class="justplayTicket_card-ft">
                <div class="price">$300 - $1,080</div>
                <hr>
                <div class="more">
                    <svg class="svgicon" data-src="./assets/images/icons/icon-more-ciircle.svg"></svg>
                </div>
            </div>
        </div>
    </module-card>

                            </a>
                        </li><li class="products-item">
                            <a href="product_detail.php" class="products-item-link">
                                
    <module-card class="justplayTicket_card pdt-card">
        <div class="justplayTicket_card-inner">
            <div class="justplayTicket_card-hd">
                <div class="hover_effect">新北｜世界宗教博物館｜門票｜特展．生死晝夜：於死亡中前行</div>
                <div class="img_div">
                    <img src="./assets/images/image-2.jpg" alt="">
                </div>
            </div>
            <div class="justplayTicket_card-bd">
                <div class="title">新北｜世界宗教博物館｜門票｜特展．生死晝夜：於死亡中前行</div>
            </div>
            <div class="justplayTicket_card-ft">
                <div class="price">$300 - $1,080</div>
                <hr>
                <div class="more">
                    <svg class="svgicon" data-src="./assets/images/icons/icon-more-ciircle.svg"></svg>
                </div>
            </div>
        </div>
    </module-card>

                            </a>
                        </li><li class="products-item">
                            <a href="product_detail.php" class="products-item-link">
                                
    <module-card class="justplayTicket_card pdt-card">
        <div class="justplayTicket_card-inner">
            <div class="justplayTicket_card-hd">
                <div class="hover_effect">新北｜世界宗教博物館｜門票｜特展．生死晝夜：於死亡中前行</div>
                <div class="img_div">
                    <img src="./assets/images/image-2.jpg" alt="">
                </div>
            </div>
            <div class="justplayTicket_card-bd">
                <div class="title">新北｜世界宗教博物館｜門票｜特展．生死晝夜：於死亡中前行</div>
            </div>
            <div class="justplayTicket_card-ft">
                <div class="price">$300 - $1,080</div>
                <hr>
                <div class="more">
                    <svg class="svgicon" data-src="./assets/images/icons/icon-more-ciircle.svg"></svg>
                </div>
            </div>
        </div>
    </module-card>

                            </a>
                        </li><li class="products-item">
                            <a href="product_detail.php" class="products-item-link">
                                
    <module-card class="justplayTicket_card pdt-card">
        <div class="justplayTicket_card-inner">
            <div class="justplayTicket_card-hd">
                <div class="hover_effect">新北｜世界宗教博物館｜門票｜特展．生死晝夜：於死亡中前行</div>
                <div class="img_div">
                    <img src="./assets/images/image-2.jpg" alt="">
                </div>
            </div>
            <div class="justplayTicket_card-bd">
                <div class="title">新北｜世界宗教博物館｜門票｜特展．生死晝夜：於死亡中前行</div>
            </div>
            <div class="justplayTicket_card-ft">
                <div class="price">$300 - $1,080</div>
                <hr>
                <div class="more">
                    <svg class="svgicon" data-src="./assets/images/icons/icon-more-ciircle.svg"></svg>
                </div>
            </div>
        </div>
    </module-card>

                            </a>
                        </li><li class="products-item">
                            <a href="product_detail.php" class="products-item-link">
                                
    <module-card class="justplayTicket_card pdt-card">
        <div class="justplayTicket_card-inner">
            <div class="justplayTicket_card-hd">
                <div class="hover_effect">新北｜世界宗教博物館｜門票｜特展．生死晝夜：於死亡中前行</div>
                <div class="img_div">
                    <img src="./assets/images/image-2.jpg" alt="">
                </div>
            </div>
            <div class="justplayTicket_card-bd">
                <div class="title">新北｜世界宗教博物館｜門票｜特展．生死晝夜：於死亡中前行</div>
            </div>
            <div class="justplayTicket_card-ft">
                <div class="price">$300 - $1,080</div>
                <hr>
                <div class="more">
                    <svg class="svgicon" data-src="./assets/images/icons/icon-more-ciircle.svg"></svg>
                </div>
            </div>
        </div>
    </module-card>

                            </a>
                        </li><li class="products-item">
                            <a href="product_detail.php" class="products-item-link">
                                
    <module-card class="justplayTicket_card pdt-card">
        <div class="justplayTicket_card-inner">
            <div class="justplayTicket_card-hd">
                <div class="hover_effect">新北｜世界宗教博物館｜門票｜特展．生死晝夜：於死亡中前行</div>
                <div class="img_div">
                    <img src="./assets/images/image-2.jpg" alt="">
                </div>
            </div>
            <div class="justplayTicket_card-bd">
                <div class="title">新北｜世界宗教博物館｜門票｜特展．生死晝夜：於死亡中前行</div>
            </div>
            <div class="justplayTicket_card-ft">
                <div class="price">$300 - $1,080</div>
                <hr>
                <div class="more">
                    <svg class="svgicon" data-src="./assets/images/icons/icon-more-ciircle.svg"></svg>
                </div>
            </div>
        </div>
    </module-card>

                            </a>
                        </li>
                </ul>
                <div class="home_hot-more">
                    <a href="product_list.php" class="justplayTicket_btn justplayTicket_btn-Pri">
                        MORE
                        <svg class="svgicon" data-src="./assets/images/icons/icon-more-arrow-2.svg"></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.page_section-inner -->
        </section>

        
        <section class="page_section home_ads">
            <div class="page_section-inner">
    <div class="page_section-content">
        <div class="home_ads-wrapper">
            <div class="page_section-bd home_ads-bd">
                <ul class="home_ads-list lis-n">
                    <li class="home_ads-item">
                        <a href="javascript:;" class="link">
                            <div class="img_div"><img src="./assets/images/img_ad-1.jpg" alt=""></div>
                        </a>
                    </li>
                    <li class="home_ads-item">
                        <a href="javascript:;" class="link">
                            <div class="img_div"><img src="./assets/images/img_ad-2.jpg" alt=""></div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- /.page_section-inner -->
        </section>

        
        <section class="page_section home_recommend">
            <div class="page_section-inner">
    <div class="page_section-content container">
        <div class="home_recommend-wrapper">
            <div class="page_section-hd home_recommend-hd">
                <h2 class="title">
                    <span class="image_replacement text-hide" style="background-image: url(./assets/images/image_replacement-recommend.svg)">
                        RECOMMEND
                    </span>
                    <span class="icon">
                        <svg class="svgicon" data-src="./assets/images/icons/icon-recommend.svg"></svg>
                    </span>
                </h2>
                <div class="subtitle">
                    <span class="icon">
                        <svg class="svgicon" data-src="./assets/images/icons/icon-more-arrow.svg"></svg>
                    </span>
                    <span class="txt">推薦商品</span>
                </div>
            </div>
            <div class="page_section-bd home_recommend-bd">
                <div class="swiper-container card-swiper">
                    <ul class="products-list lis-n swiper-wrapper">
                        <li class="products-item swiper-slide">
                                <a href="product_detail.php" class="products-item-link">
                                    
    <module-card class="justplayTicket_card pdt-card">
        <div class="justplayTicket_card-inner">
            <div class="justplayTicket_card-hd">
                <div class="hover_effect">新北｜世界宗教博物館｜門票｜特展．生死晝夜：於死亡中前行</div>
                <div class="img_div">
                    <img src="./assets/images/image-2.jpg" alt="">
                </div>
            </div>
            <div class="justplayTicket_card-bd">
                <div class="title">新北｜世界宗教博物館｜門票｜特展．生死晝夜：於死亡中前行</div>
            </div>
            <div class="justplayTicket_card-ft">
                <div class="price">$300 - $1,080</div>
                <hr>
                <div class="more">
                    <svg class="svgicon" data-src="./assets/images/icons/icon-more-ciircle.svg"></svg>
                </div>
            </div>
        </div>
    </module-card>

                                </a>
                            </li><li class="products-item swiper-slide">
                                <a href="product_detail.php" class="products-item-link">
                                    
    <module-card class="justplayTicket_card pdt-card">
        <div class="justplayTicket_card-inner">
            <div class="justplayTicket_card-hd">
                <div class="hover_effect">新北｜世界宗教博物館｜門票｜特展．生死晝夜：於死亡中前行</div>
                <div class="img_div">
                    <img src="./assets/images/image-2.jpg" alt="">
                </div>
            </div>
            <div class="justplayTicket_card-bd">
                <div class="title">新北｜世界宗教博物館｜門票｜特展．生死晝夜：於死亡中前行</div>
            </div>
            <div class="justplayTicket_card-ft">
                <div class="price">$300 - $1,080</div>
                <hr>
                <div class="more">
                    <svg class="svgicon" data-src="./assets/images/icons/icon-more-ciircle.svg"></svg>
                </div>
            </div>
        </div>
    </module-card>

                                </a>
                            </li><li class="products-item swiper-slide">
                                <a href="product_detail.php" class="products-item-link">
                                    
    <module-card class="justplayTicket_card pdt-card">
        <div class="justplayTicket_card-inner">
            <div class="justplayTicket_card-hd">
                <div class="hover_effect">新北｜世界宗教博物館｜門票｜特展．生死晝夜：於死亡中前行</div>
                <div class="img_div">
                    <img src="./assets/images/image-2.jpg" alt="">
                </div>
            </div>
            <div class="justplayTicket_card-bd">
                <div class="title">新北｜世界宗教博物館｜門票｜特展．生死晝夜：於死亡中前行</div>
            </div>
            <div class="justplayTicket_card-ft">
                <div class="price">$300 - $1,080</div>
                <hr>
                <div class="more">
                    <svg class="svgicon" data-src="./assets/images/icons/icon-more-ciircle.svg"></svg>
                </div>
            </div>
        </div>
    </module-card>

                                </a>
                            </li><li class="products-item swiper-slide">
                                <a href="product_detail.php" class="products-item-link">
                                    
    <module-card class="justplayTicket_card pdt-card">
        <div class="justplayTicket_card-inner">
            <div class="justplayTicket_card-hd">
                <div class="hover_effect">新北｜世界宗教博物館｜門票｜特展．生死晝夜：於死亡中前行</div>
                <div class="img_div">
                    <img src="./assets/images/image-2.jpg" alt="">
                </div>
            </div>
            <div class="justplayTicket_card-bd">
                <div class="title">新北｜世界宗教博物館｜門票｜特展．生死晝夜：於死亡中前行</div>
            </div>
            <div class="justplayTicket_card-ft">
                <div class="price">$300 - $1,080</div>
                <hr>
                <div class="more">
                    <svg class="svgicon" data-src="./assets/images/icons/icon-more-ciircle.svg"></svg>
                </div>
            </div>
        </div>
    </module-card>

                                </a>
                            </li><li class="products-item swiper-slide">
                                <a href="product_detail.php" class="products-item-link">
                                    
    <module-card class="justplayTicket_card pdt-card">
        <div class="justplayTicket_card-inner">
            <div class="justplayTicket_card-hd">
                <div class="hover_effect">新北｜世界宗教博物館｜門票｜特展．生死晝夜：於死亡中前行</div>
                <div class="img_div">
                    <img src="./assets/images/image-2.jpg" alt="">
                </div>
            </div>
            <div class="justplayTicket_card-bd">
                <div class="title">新北｜世界宗教博物館｜門票｜特展．生死晝夜：於死亡中前行</div>
            </div>
            <div class="justplayTicket_card-ft">
                <div class="price">$300 - $1,080</div>
                <hr>
                <div class="more">
                    <svg class="svgicon" data-src="./assets/images/icons/icon-more-ciircle.svg"></svg>
                </div>
            </div>
        </div>
    </module-card>

                                </a>
                            </li><li class="products-item swiper-slide">
                                <a href="product_detail.php" class="products-item-link">
                                    
    <module-card class="justplayTicket_card pdt-card">
        <div class="justplayTicket_card-inner">
            <div class="justplayTicket_card-hd">
                <div class="hover_effect">新北｜世界宗教博物館｜門票｜特展．生死晝夜：於死亡中前行</div>
                <div class="img_div">
                    <img src="./assets/images/image-2.jpg" alt="">
                </div>
            </div>
            <div class="justplayTicket_card-bd">
                <div class="title">新北｜世界宗教博物館｜門票｜特展．生死晝夜：於死亡中前行</div>
            </div>
            <div class="justplayTicket_card-ft">
                <div class="price">$300 - $1,080</div>
                <hr>
                <div class="more">
                    <svg class="svgicon" data-src="./assets/images/icons/icon-more-ciircle.svg"></svg>
                </div>
            </div>
        </div>
    </module-card>

                                </a>
                            </li>
                    </ul>
                    <div class="card-swiper-ctrl">
                        <div class="swiper-button-prev card-swiper-prev">
                            <svg class="svgicon" data-src="./assets/images/icons/icon-arrow.svg"></svg>
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-next card-swiper-next">
                            <svg class="svgicon" data-src="./assets/images/icons/icon-arrow.svg"></svg>
                        </div>
                    </div>
                </div>
                <script>
                    var cardSwiper = new Swiper(".card-swiper", {
                        visibilityFullFit: true,
                        cssWidthAndHeight: true,

                        loop: true,
                        centeredSlides: true,

                        autoResize: false,

                        navigation: {
                            nextEl: ".card-swiper .swiper-button-next",
                            prevEl: ".card-swiper .swiper-button-prev"
                        },

                        slidesPerView: 1,
                        spaceBetween: 48,
                        breakpoints: {
                            576: {
                                slidesPerView: 2
                            },
                            1024: {
                                slidesPerView: 3
                            }
                        }
                    });
                </script>
                <div class="home_recommend-more">
                    <a href="product_list.php" class="justplayTicket_btn justplayTicket_btn-Pri">
                        MORE
                        <svg class="svgicon" data-src="./assets/images/icons/icon-more-arrow-2.svg"></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.page_section-inner -->
        </section>
    </main>

    <!-- /.page_main END  !! -->
    <!-- =========================================================================-->
    <!-- 頁面內容  END  !!-->
    <!-- =========================================================================-->


            <!-- footer START -->
            <?php include 'include/footer.php'; ?>
            <!-- /footer END  !! -->
        </div>
        <!-- /.body_wrap  END  !!-->
        <!-- =========================================================================-->
        <?php include 'include/script.php'; ?>
        
    </body>

</html>