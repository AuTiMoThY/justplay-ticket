



<!DOCTYPE html>
<html lang="zh-Hant">
    <head>
        <title>新北｜世界宗教博物館｜門票｜特展．生死晝夜：於死亡中前行 | 就是要玩 - 票卷</title>
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
    <main class="page_main page-product_detail">
        
        <section class="page_section product_detail__top">
            
<div class="page_section-inner">
    <div class="page_section-content container">
        <div class="product_detail__top-wrapper">
            <div class="page_section-hd product_detail__top-hd">
                <h2 class="title">
                    <span class="image_replacement text-hide" style="background-image: url(./assets/images/image_replacement-product.svg)">
                        PRODUCT
                    </span>
                </h2>
                <div class="subtitle">
                    <span class="icon">
                        <svg class="svgicon" data-src="./assets/images/icons/icon-more-arrow.svg"></svg>
                    </span>
                    <span class="txt">票券商品</span>
                </div>
            </div>
            <div class="page_section-bd product_detail__top-bd">
                <div class="product_detail__top-img">
                    <!-- 商品圖大圖 -->
                    <div class="swiper pdt_img">
                        <ul class="swiper-wrapper lis-n">
                            <li class="swiper-slide">
                                
    <div class="swiper-slide-bg"></div>
    <div class="swiper-slide-img">
        <div class="img_div">
            <img src="./assets/images/image-2.jpg" alt="">
        </div>
    </div>

                            </li>
                            <li class="swiper-slide">
                                
    <div class="swiper-slide-bg"></div>
    <div class="swiper-slide-img">
        <div class="img_div">
            <img src="./assets/images/image-1.jpg" alt="">
        </div>
    </div>

                            </li>
                            <li class="swiper-slide">
                                
    <div class="swiper-slide-bg"></div>
    <div class="swiper-slide-img">
        <div class="img_div">
            <img src="./assets/images/image-2.jpg" alt="">
        </div>
    </div>

                            </li>
                            <li class="swiper-slide">
                                
    <div class="swiper-slide-bg"></div>
    <div class="swiper-slide-img">
        <div class="img_div">
            <img src="./assets/images/image-1.jpg" alt="">
        </div>
    </div>

                            </li>
                        </ul>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                    <!-- 商品圖縮圖 -->
                    <div class="swiper pdt_thumb">
                        <ul class="swiper-wrapper lis-n">
                            <li class="swiper-slide">
                                
    <div class="swiper-slide-bg"></div>
    <div class="swiper-slide-img">
        <div class="img_div">
            <img src="./assets/images/image-2.jpg" alt="">
        </div>
    </div>

                            </li>
                            <li class="swiper-slide">
                                
    <div class="swiper-slide-bg"></div>
    <div class="swiper-slide-img">
        <div class="img_div">
            <img src="./assets/images/image-1.jpg" alt="">
        </div>
    </div>

                            </li>
                            <li class="swiper-slide">
                                
    <div class="swiper-slide-bg"></div>
    <div class="swiper-slide-img">
        <div class="img_div">
            <img src="./assets/images/image-2.jpg" alt="">
        </div>
    </div>

                            </li>
                            <li class="swiper-slide">
                                
    <div class="swiper-slide-bg"></div>
    <div class="swiper-slide-img">
        <div class="img_div">
            <img src="./assets/images/image-1.jpg" alt="">
        </div>
    </div>

                            </li>
                        </ul>
                    </div>
                    <script>
                        var pdtThumb = new Swiper(".pdt_thumb", {
                            loop: true,
                            spaceBetween: 10,
                            slidesPerView: 4,
                            freeMode: true,
                            watchSlidesProgress: true
                        });
                        var pdtImg = new Swiper(".pdt_img", {
                            loop: true,
                            spaceBetween: 10,
                            navigation: {
                                nextEl: ".swiper-button-next",
                                prevEl: ".swiper-button-prev"
                            },
                            thumbs: {
                                swiper: pdtThumb
                            }
                        });
                    </script>
                </div>
                <div class="product_detail__top-info">
                    <div class="pdt_name">新北｜世界宗教博物館｜門票｜特展．生死晝夜：於死亡中前行</div>
                    <div class="pdt_price">$300 - $1,080</div>
                    <div class="pdt_quantity">
                        
                        
    
    <module-field id="quantity_field" class="justplayTicket_field quantity_field ">
        <label for="quantity" class="justplayTicket_field-label">數量</label>
        <div class="justplayTicket_field-ctrler">
            <button class="decrement" @click="decrement">
                <svg class="svgicon" data-src="./assets/images/icons/decrement.svg"></svg>
            </button>
            <input type="number" id="quantity" v-model="quantity">
            <button class="increment" @click="increment">
                <svg class="svgicon" data-src="./assets/images/icons/increment.svg"></svg>
            </button>
        </div>
    </module-field>


                    </div>
                    <div class="pdt_btns">
                        <button type="button" class="justplayTicket_btn justplayTicket_btn-cart">
                            <svg class="svgicon" data-src="./assets/images/icons/icon-cart-1.svg"></svg>
                            加入購物車
                        </button>
                        <button type="button" class="justplayTicket_btn justplayTicket_btn-cart">
                            <svg class="svgicon" data-src="./assets/images/icons/icon-dollar.svg"></svg>
                            直接購買
                        </button>
                    </div>
                    <div class="pdt_summary">
                        <p class="txt">
                            ·由日本高人氣八景島團隊首度跨海來台，打造日系都會型水族館，全台首見。<br>
                            ·結合當地商場，鄰近高鐵站、機場捷運，交通方便，吃喝玩樂一次滿足。<br>
                            ·本館禁止攜帶外食、寵物，可攜帶開水。<br>
                            ·1 樓展區：Xcafe、漫步叢林、潮間戲灘、世外桃源<br>
                            ·2 樓展區：福爾摩沙、癒見水母、企鵝奇遇<br>
                            ·3 樓展區：珊瑚潛行、暖海生機、雨林探險、寒帶行凍、深海尋秘

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.page_section-inner -->
        </section>

        
        <section class="page_section product_detail__main">
            <div class="page_section-inner">
    <div class="page_section-content container">
        <div class="product_detail__main-wrapper">
            <div class="htmleditor">
                － 行程特色 －<br>
                <br>
                Xpark 為台灣首座新都會型水生公園。將生活在地球上各種地域的生物們的環境，透過空間演出與科技的融合，加以忠實的重現。在連氣溫、濕度、味道及聲音都經過縝密計算的空間裡，從天花板到地坪、延伸至水槽的影像演出呈現出 360° 具魄力的沉浸式空間。來訪旅客彷彿真的身歷其境，使用五感體驗各真實場景。主角，是生活在那裡的生物們，隨環境變遷而演變進化的生物們的不思議，從各種角度將其魅力性襯托出來的環境演出也是一大特徵。Xpark 是一個滿足人們無止盡的「對於求知的慾望和獲知的喜悅」，並在世界上也是獨一無二的寓教於樂設施。<br>
                <br>
                － 入館資訊 －<br>
                <br>
                使用期限：限於票券指定當日及有效時間內使用<br>
                入場時間：旅客所選該場次一小時內，建議參觀時間為兩小時。<br>
                ex：場次 10:00（入場時間 10:00 - 11:00）<br>
                特殊節日營業時間：無<br>
                停車折抵：請持票券中的 QRcode 至桃園置地廣場停車場繳費處掃描折抵<br>
                ＊一台車可持一張成人門票折抵停車，折抵上限為 1 小時（僅限成人票）<br>
                <br>
                <br>
                － 展區特色 －<br>
                <br>
                1 樓展區：Xcafe、漫步叢林、潮間戲灘、世外桃源<br>
                2 樓展區：福爾摩沙、癒見水母、企鵝奇遇<br>
                3 樓展區：珊瑚潛行、暖海生機、雨林探險、寒帶行凍、深海尋秘<br>
                <br>
                <br>
                － 新冠肺炎 (COVID-19) 疫情因應措施－<br>
                <br>
                遊客入館前需消毒手部並全程配戴口罩，社交距離請維持至少1.5公尺，敬請遵循工作人員指示與貼心叮嚀<br>
                實施紅外線體溫量測儀進行體溫監測。若體溫過高則使用非接觸式體溫計重測，若高於攝氏 37.5 度則得拒絕入館<br>
                導入時段性入館措施，以便讓遊客確保適當之社交距離。關於每日、每時段的入場上限人數，將遵循開幕時的「防疫新生活運動」之規定<br>
            </div>
        </div>
    </div>
</div>
<!-- /.page_section-inner -->
        </section>

        <section class="page_section goback">
            <a href="javascript:window.history.go(-1);" class="justplayTicket_btn">
                BACK
                <svg class="svgicon" data-src="./assets/images/icons/icon-more-arrow-2.svg"></svg>
            </a>
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