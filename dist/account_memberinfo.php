



<!DOCTYPE html>
<html lang="zh-Hant">
    <head>
        <title>會員資料修改 | 就是要玩 - 票卷</title>
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
    <main class="page_main page-account_memberinfo">
        
        <section class="page_section account_memberinfo_main">
            <div class="page_section-inner">
    <div class="page_section-content container">
        <div class="account_memberinfo_main-wrapper">
            <div class="page_section-bd account_memberinfo_main-bd pages-wrapper-v">
                <div class="pages-heading">
                    <div class="inner">
                        <h2 class="account_memberinfo_main-heading-title">
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
                            <li class="account-links-item js-active">
                                <a href="account_memberinfo.php" class="link justplayTicket_btn justplayTicket_btn-style1">會員資料修改</a>
                            </li>
                            <li class="account-links-item">
                                <a href="account_change_pw.php" class="link justplayTicket_btn justplayTicket_btn-style1">會員密碼修改</a>
                            </li>
                            <li class="account-links-item">
                                <a href="account_shopping_record_list.php" class="link justplayTicket_btn justplayTicket_btn-style1">購物記錄</a>
                            </li>
                        </ul>
                        <div class="account-container">
                            <!-- action 示意: 會員登入表單送出後，導頁至會員專區頁(account_memberinfo) -->
                            <form class="memberinfo_frm justplayTicket_frm" action="account_memberinfo.php" method="POST">
                                <div class="form-group">
                                    
                                    
    
    <module-field id="" class="justplayTicket_field justplayTicket_field-v ">
        <label for="email" class="justplayTicket_field-label">EMAIL(帳號)</label>
        <div class="justplayTicket_field-ctrler">
            <input type="text"
                id="email"
                name="email"
                v-model="email"
                class="form-control"
                placeholder="example@justplay.com"
                value="example@justplay.com"
                disabled>
        </div>
    </module-field>

                                </div>
                                <div class="form-group">
                                    
                                    
    
    <module-field id="" class="justplayTicket_field justplayTicket_field-v  required">
        <label for="name" class="justplayTicket_field-label">姓名</label>
        <div class="justplayTicket_field-ctrler">
            <input type="text"
                id="name"
                name="name"
                v-model="name"
                class="form-control"
                placeholder="請輸入姓名"
                value=""
                >
        </div>
    </module-field>

                                </div>
                                <div class="form-group">
                                    
                                    
    
    <module-field id="" class="justplayTicket_field justplayTicket_field-v  required">
        <label for="phone" class="justplayTicket_field-label">電話</label>
        <div class="justplayTicket_field-ctrler">
            <input type="text"
                id="phone"
                name="phone"
                v-model="phone"
                class="form-control"
                placeholder="請輸入電話，EX: 0912-345678 或 02-34567890"
                value=""
                >
        </div>
    </module-field>

                                </div>
                                <div class="form-group">
                                    
                                    
    
    <module-field id="" class="justplayTicket_field justplayTicket_field-v  required">
        <label for="addr" class="justplayTicket_field-label">地址</label>
        <div class="justplayTicket_field-ctrler">
            <input type="text"
                id="addr"
                name="addr"
                v-model="addr"
                class="form-control"
                placeholder="請輸入地址"
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
        
<script src="./assets/js/page/account_memberinfo.js?v=20230808"></script>

    </body>

</html>