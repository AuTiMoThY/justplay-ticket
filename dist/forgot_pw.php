



<!DOCTYPE html>
<html lang="zh-Hant">
    <head>
        <title>忘記密碼 | 就是要玩 - 票卷</title>
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
    <div class="special_heading-small"></div>
    <main class="page_main page-forgot_pw">
        
        <section class="page_section forgot_pw_main">
            <div class="page_section-inner">
    <div class="page_section-content container">
        <div class="forgot_pw_main-wrapper">
            <div class="page_section-bd forgot_pw_main-bd pages-wrapper-v">
                <div class="pages-heading">
                    <div class="inner">
                        <h2 class="forgot_pw_main-heading-title">
                            <span class="image_replacement image_replacement-login text-hide" style="background-image: url(./assets/images/image_replacement-forgot_pw.svg)">
                                FORGOT PASSWORD
                            </span>
                            <div class="txt">忘記密碼</div>
                        </h2>
                    </div>
                </div>
                <div class="pages-wrapper-v-pattern"></div>
                <div class="pages-main">
                    <div class="inner">
                        <!-- action 示意: 忘記密碼表單送出後，導頁至會員登入頁(login) -->
                        <form class="forgor_pw_frm justplayTicket_frm" action="login.php" method="POST">
                            <div class="form-group">
                                
                                
    
    <module-field id="" class="justplayTicket_field justplayTicket_field-v required">
        <label for="email" class="justplayTicket_field-label">EMAIL(帳號)</label>
        <div class="justplayTicket_field-ctrler">
            <input type="text"
                id="email"
                name="email"
                v-model="email"
                class="form-control"
                placeholder="example@justplay.com"
                value=""
                >
        </div>
    </module-field>

                            </div>
                            <div class="form-group">
                                
                                
    
    <module-field id="" class="justplayTicket_field justplayTicket_field-v recaptcha_field required">
        <label for="recaptcha" class="justplayTicket_field-label">驗證碼</label>
        <div class="justplayTicket_field-ctrler">
            <input type="text"
                id="recaptcha"
                name="recaptcha"
                v-model="recaptcha"
                class="form-control"
                placeholder="請輸入驗證碼"
                value=""
                >
            <img src="" alt="">
        </div>
    </module-field>

                            </div>
                            <div class="form-btns">
                                <button type="submit" class="justplayTicket_btn justplayTicket_btn-Pri">
                                    SEND
                                    <svg class="svgicon" data-src="./assets/images/icons/icon-more-arrow-2.svg"></svg>
                                </button>
                            </div>
                            <div class="form-ft">
                                <a href="javascript:window.history.go(-1);" class="link-Black txt-Gray-03 td-u">取消</a>
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
        
<script src="./assets/js/page/forgot_pw.js?v=20230808"></script>

    </body>

</html>