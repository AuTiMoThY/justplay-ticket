



<!DOCTYPE html>
<html lang="zh-Hant">
    <head>
        <title>會員密碼修改 | 就是要玩 - 票卷</title>
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
    <main class="page_main page-account_change_pw">
        
        <section class="page_section account_change_pw_main">
            <div class="page_section-inner">
    <div class="page_section-content container">
        <div class="account_change_pw_main-wrapper">
            <div class="page_section-bd account_change_pw_main-bd pages-wrapper-v">
                <div class="pages-heading">
                    <div class="inner">
                        <h2 class="account_change_pw_main-heading-title">
                            <span class="image_replacement image_replacement-login text-hide" style="background-image: url(./assets/images/image_replacement-account.svg)">
                                ACCOUNT
                            </span>
                            <div class="txt">會員專區</div>
                        </h2>
                    </div>
                </div>
                <div class="pages-wrapper-v-pattern"></div>
                <div class="pages-main">
                    <div class="inner account-wrapper">
                        <ul class="account-links-list lis-n">
                            <li class="account-links-item">
                                <a href="account_memberinfo.php" class="link justplayTicket_btn justplayTicket_btn-style1">會員資料修改</a>
                            </li>
                            <li class="account-links-item js-active">
                                <a href="account_change_pw.php" class="link justplayTicket_btn justplayTicket_btn-style1">會員密碼修改</a>
                            </li>
                            <li class="account-links-item">
                                <a href="account_shopping_record_list.php" class="link justplayTicket_btn justplayTicket_btn-style1">購物記錄</a>
                            </li>
                        </ul>
                        <div class="account-container">
                            <!-- action 示意: 會員登入表單送出後，導頁至會員專區-密碼修改頁(account_change_pw) -->
                            <form class="change_pw_frm justplayTicket_frm" action="account_change_pw.php" method="POST">
                                <div class="form-group">
                                    
                                    
    
    <module-field id="old_password_field" class="justplayTicket_field justplayTicket_field-v password_field required">
        <label for="old_password" class="justplayTicket_field-label">舊密碼</label>
        <div class="justplayTicket_field-ctrler">
            <input :type="fieldType" id="old_password" name="old_password" class="form-control" placeholder="請輸入舊密碼">
            <button type="button" class="toggle_password_btn" @click="togglePassword()"><i class="fa-solid fa-eye"></i></button>
        </div>
    </module-field>

                                </div>
                                <div class="form-group">
                                    
                                    
    
    <module-field id="password_field" class="justplayTicket_field justplayTicket_field-v password_field required">
        <label for="password" class="justplayTicket_field-label">新密碼</label>
        <div class="justplayTicket_field-ctrler">
            <input :type="fieldType" id="password" name="password" class="form-control" placeholder="請輸入新密碼">
            <button type="button" class="toggle_password_btn" @click="togglePassword()"><i class="fa-solid fa-eye"></i></button>
        </div>
    </module-field>

                                </div>

                                <div class="form-group">
                                    
                                    
    
    <module-field id="confirmPassword_field" class="justplayTicket_field justplayTicket_field-v password_field required">
        <label for="confirmPassword" class="justplayTicket_field-label">確認新密碼</label>
        <div class="justplayTicket_field-ctrler">
            <input :type="fieldType" id="confirmPassword" name="confirmPassword" class="form-control" placeholder="請再次輸入新密碼">
            <button type="button" class="toggle_password_btn" @click="togglePassword()"><i class="fa-solid fa-eye"></i></button>
        </div>
    </module-field>

                                </div>


                                <div class="form-btns">
                                    <button type="submit" id="submitFrm" class="justplayTicket_btn justplayTicket_btn-Pri">
                                    確認
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
        
<script src="./assets/js/page/account_change_pw.js?v=20230727"></script>

    </body>

</html>