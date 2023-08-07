



<!DOCTYPE html>
<html lang="zh-Hant">
    <head>
        <title>聯絡我們 | 就是要玩 - 票卷</title>
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
    <main class="page_main page-contact">
        
        <section class="page_section contact_main">
            <div class="page_section-inner">
    <div class="page_section-content container">
        <div class="contact_main-wrapper">
            <div class="page_section-hd contact_main-hd">
                <h2 class="title">
                    <span class="image_replacement text-hide" style="background-image: url(./assets/images/image_replacement-contact.svg)">
                        CONTACT
                    </span>
                </h2>
                <div class="subtitle">
                    <span class="icon">
                        <svg class="svgicon" data-src="./assets/images/icons/icon-more-arrow.svg"></svg>
                    </span>
                    <span class="txt">聯絡我們</span>
                </div>
            </div>
            <div class="page_section-bd contact_main-bd pages-wrapper-v">
                <div class="pages-heading">
                    <div class="inner">
                        <div class="contact_main-title">就是要玩  電玩精品、好物專賣店</div>
                        <ul class="contact_main-info lis-n">
                            <li class="contact_main-info-item">
                                <div class="title">營業時間</div>
                                <div class="txt">週一至週五 10:00~21:00  |  週六至週日 13:00~21:00</div>
                            </li>
                            <li class="contact_main-info-item">
                                <div class="title">客服專線</div>
                                <div class="txt">02-2967-7461</div>
                            </li>
                            <li class="contact_main-info-item">
                                <div class="title">Follow us</div>
                                <ul class="social-list lis-n">
                                    <li class="social-item">
                                        <a href="javascript:;" class="link" target="_blank">
                                            <svg class="svgicon" data-src="./assets/images/icons/icon-facebook.svg"></svg>
                                        </a>
                                    </li>
                                    <li class="social-item">
                                        <a href="javascript:;" class="link" target="_blank">
                                            <svg class="svgicon" data-src="./assets/images/icons/icon-line.svg"></svg>
                                        </a>
                                    </li>
                                    <li class="social-item">
                                        <a href="javascript:;" class="link" target="_blank">
                                            <svg class="svgicon" data-src="./assets/images/icons/icon-instagram.svg"></svg>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="pages-wrapper-v-pattern"></div>
                <div class="pages-main">
                    <div class="inner">
                        <form class="contact_frm justplayTicket_frm">
                            <div class="contact_frm-txt text-center">有任何需要服務之處，歡迎來電或E-mail洽詢<br>也可填寫以下表單，我們會盡快安排專人與您聯繫。</div>
                            <div class="form-group">
                                
                                
    
    <module-field id="" class="justplayTicket_field justplayTicket_field-v required">
        <label for="u_name" class="justplayTicket_field-label">姓名</label>
        <div class="justplayTicket_field-ctrler">
            <input type="text"
                id="u_name"
                name="u_name"
                v-model="u_name"
                class="form-control"
                placeholder="請輸入姓名"
                value=""
                >
        </div>
    </module-field>

                            </div>
                            <div class="form-group">
                                
                                
    
    <module-field id="" class="justplayTicket_field justplayTicket_field-v required">
        <label for="u_phone" class="justplayTicket_field-label">電話</label>
        <div class="justplayTicket_field-ctrler">
            <input type="text"
                id="u_phone"
                name="u_phone"
                v-model="u_phone"
                class="form-control"
                placeholder="請輸入電話"
                value=""
                >
        </div>
    </module-field>

                            </div>
                            <div class="form-group">
                                
                                
    
    <module-field id="" class="justplayTicket_field justplayTicket_field-v required">
        <label for="u_email" class="justplayTicket_field-label">EMAIL</label>
        <div class="justplayTicket_field-ctrler">
            <input type="text"
                id="u_email"
                name="u_email"
                v-model="u_email"
                class="form-control"
                placeholder="請輸入EMAIL"
                value=""
                >
        </div>
    </module-field>

                            </div>
                            <div class="form-group">
                                
                                
    
    <module-field id="" class="justplayTicket_field justplayTicket_field-v ">
        <label for="u_order" class="justplayTicket_field-label">訂單編號</label>
        <div class="justplayTicket_field-ctrler">
            <input type="text"
                id="u_order"
                name="u_order"
                v-model="u_order"
                class="form-control"
                placeholder="請輸入訂單編號"
                value=""
                >
        </div>
    </module-field>

                            </div>
                            <div class="form-group">
                                
                                
    
    <module-field class="justplayTicket_field justplayTicket_field-v required">
        <label for="u_msg" class="justplayTicket_field-label">詢問內容</label>
        <div class="justplayTicket_field-ctrler">
            <textarea id="u_msg" name="u_msg" v-model="u_msg" class="form-control" placeholder="請輸入詢問內容"></textarea>
        </div>
    </module-field>

                            </div>
                            <div class="form-btns">
                                <button type="button" class="justplayTicket_btn justplayTicket_btn-Pri">
                                    SEND
                                    <svg class="svgicon" data-src="./assets/images/icons/icon-more-arrow-2.svg"></svg>
                                </button>
                            </div>
                        </form>
                    </div>

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