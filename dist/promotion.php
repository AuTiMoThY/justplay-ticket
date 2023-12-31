



<!DOCTYPE html>
<html lang="zh-Hant">
    <head>
        <title>官網禮遇 | 就是要玩 - 票卷</title>
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
    <main class="page_main page-promotion">
        
        <section class="page_section promotion_main">
            <div class="page_section-inner">
    <div class="page_section-content container">
        <div class="promotion_main-wrapper">
            <div class="page_section-hd promotion_main-hd">
                <h2 class="title">
                    <span class="image_replacement text-hide" style="background-image: url(./assets/images/image_replacement-promotion.svg)">
                        PROMOTION
                    </span>
                </h2>
                <div class="subtitle">
                    <span class="icon">
                        <svg class="svgicon" data-src="./assets/images/icons/icon-more-arrow.svg"></svg>
                    </span>
                    <span class="txt">官網禮遇</span>
                </div>
            </div>
            <div id="pagesWrapper" class="page_section-bd promotion_main-bd pages-wrapper">
                <aside class="pages-aside" @click.prevent="toogleAside($event)" :class="{ 'js-open-aside': isOpenAside }">
                    <div class="pages-aside-inner">
                        <ul class="pages-aside-list lis-n">
                            <!-- 若在當前頁面，class加上"js-active" -->
                            <li class="pages-aside-item js-active">
                                <a href="javascript:;" class="link justplayTicket_btn justplayTicket_btn-style1">生日小禮</a>
                            </li>
                            <li class="pages-aside-item">
                                <a href="javascript:;" class="link justplayTicket_btn justplayTicket_btn-style1">每月折價券</a>
                            </li>
                            <li class="pages-aside-item">
                                <a href="javascript:;" class="link justplayTicket_btn justplayTicket_btn-style1">預購公告</a>
                            </li>
                        </ul>
                    </div>
                </aside>
                <main class="pages-main">
                    <h3 class="pages-main-title">生日小禮</h3>
                    <div class="pages-main-cnt">
                        <div class="htmleditor">
                            【就是要玩】電玩精品、好物專賣店<br>
                            ★實體門市地址在板橋區新府路66號2樓“F1大樓”<br>
                            (板橋火車站及捷運站西側13號出口；板橋小遠百側門對面)。<br>
                            門市電話02-29677461。<br>
                            ★門市營業時間為週一至週五上午11:00至晚上21:00、週六日即國定假日下午13:00至晚上21:00★<br>
                            ★如大檔活動訂單量大出貨可能稍有延遲，我們會盡力出貨，請各位見諒。<br>
                            ★客服與聊聊時間:週一~週五早上10:00~21:00，週六週日下午13:00~21:00，國定假日及特殊節日等非營業時間如回覆時間較長請見諒，自取請不需要下標，避免重複寄出。<br>
                            ★ 本賣場所有銷售皆開立發票，買的安心玩得開心，欲開統編，請下單時請直接在下標系統填寫好，聊聊給統編恕無法受理。<br>
                            ★光碟軟體屬智慧財產權之商品，產品經拆封後視同購買，恕無法接受退貨<br>
                            ★為保障彼此之權益，下標前請詳閱賣場說明，下標即視為同意賣場所有規範，另賣家保有決定是否接受訂單及出貨與否之權利<br>
                        </div>
                    </div>
                </main>
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