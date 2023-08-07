



<!DOCTYPE html>
<html lang="zh-Hant">
    <head>
        <title>會員登入 | 就是要玩 - 票卷</title>
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
    <main class="page_main page-login">
        
        <section class="page_section login_main">
            <div class="page_section-inner">
    <div class="page_section-content container">
        <div class="login_main-wrapper">
            <div class="page_section-bd login_main-bd pages-wrapper-v">
                <div class="pages-heading">
                    <div class="inner">
                        <h2 class="login_main-heading-title">
                            <span class="image_replacement image_replacement-login text-hide" style="background-image: url(./assets/images/image_replacement-login.svg)">
                                LOG IN
                            </span>
                            <div class="txt">會員登入</div>
                        </h2>
                    </div>
                </div>
                <div class="pages-wrapper-v-pattern"></div>
                <div class="pages-main">
                    <div class="inner">
                        <!-- action 示意: 會員登入表單送出後，導頁至會員專區頁(account_memberinfo) -->
                        <form class="login_frm justplayTicket_frm" action="account_memberinfo.php" method="POST">
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
                                
                                
    
    <module-field id="password_field" class="justplayTicket_field justplayTicket_field-v password_field required">
        <label for="password" class="justplayTicket_field-label">密碼</label>
        <div class="justplayTicket_field-ctrler">
            <input :type="fieldType" id="password" name="password" class="form-control" placeholder="請輸入密碼">
            <button type="button" class="toggle_password_btn" @click="togglePassword()"><i class="fa-solid fa-eye"></i></button>
        </div>
    </module-field>

                            </div>

                            <div class="form-btns">
                                <button type="submit" class="justplayTicket_btn justplayTicket_btn-Pri">
                                    登入
                                    <svg class="svgicon" data-src="./assets/images/icons/icon-more-arrow-2.svg"></svg>
                                </button>
                            </div>
                            <div class="form-ft">
                                <a href="forgot_pw.php" class="link-Black txt-Gray-03 td-u">忘記密碼？</a>
                                <div class="txt txt-Gray-03">還沒有帳號？<a href="signin.php" class="link-Black txt-Pri td-u">立即登入</a></div>
                                
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