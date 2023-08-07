



<!DOCTYPE html>
<html lang="zh-Hant">
    <head>
        <title>會員註冊 | 就是要玩 - 票卷</title>
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
    <main class="page_main page-signin">
        
        <section class="page_section signin_main">
            <div class="page_section-inner">
    <div class="page_section-content container">
        <div class="signin_main-wrapper">
            <div class="page_section-bd signin_main-bd pages-wrapper-v">
                <div class="pages-heading">
                    <div class="inner">
                        <h2 class="signin_main-heading-title">
                            <span class="image_replacement image_replacement-signin text-hide" style="background-image: url(./assets/images/image_replacement-signin.svg)">
                                SIGN IN
                            </span>
                            <div class="txt">註冊會員</div>
                        </h2>
                    </div>
                </div>
                <div class="pages-wrapper-v-pattern"></div>
                <div class="pages-main">
                    <div class="inner">
                        <!-- action 示意: 註冊會員表單送出後，導頁至會員專區頁(account_memberinfo) -->
                        <form class="signin_frm justplayTicket_frm" action="account_memberinfo.php" method="POST">
                            <div class="form-group">
                                
                                
    
    <module-field id="" class="justplayTicket_field justplayTicket_field-v required">
        <label for="email" class="justplayTicket_field-label">EMAIL(帳號)</label>
        <div class="justplayTicket_field-ctrler">
            
            <input type="text" id="email" name="email" v-model="email" class="form-control" placeholder="example@justplay.com">
            
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
                            <div class="form-group">
                                
                                
    
    <module-field id="password_check_field" class="justplayTicket_field justplayTicket_field-v password_field required">
        <label for="password_check" class="justplayTicket_field-label">確認密碼</label>
        <div class="justplayTicket_field-ctrler">
            <input :type="fieldType" id="password_check" name="password_check" class="form-control" placeholder="請再次確認密碼">
            <button type="button" class="toggle_password_btn" @click="togglePassword()"><i class="fa-solid fa-eye"></i></button>
        </div>
    </module-field>

                            </div>
                            <div class="form-group">
                                
                                
    
    <module-field id="" class="justplayTicket_field justplayTicket_field-v required">
        <label for="name" class="justplayTicket_field-label">姓名</label>
        <div class="justplayTicket_field-ctrler">
            
            <input type="text" id="name" name="name" v-model="name" class="form-control" placeholder="請輸入姓名">
            
        </div>
    </module-field>

                            </div>
                            <div class="form-group">
                                
                                
    
    <module-field id="" class="justplayTicket_field justplayTicket_field-v required">
        <label for="phone" class="justplayTicket_field-label">電話</label>
        <div class="justplayTicket_field-ctrler">
            
            <input type="text" id="phone" name="phone" v-model="phone" class="form-control" placeholder="請輸入電話">
            
        </div>
    </module-field>

                            </div>
                            <div class="form-group">
                                
                                
    
    <module-field id="" class="justplayTicket_field justplayTicket_field-v date_field required">
        <label for="birthday" class="justplayTicket_field-label">生日</label>
        <div class="justplayTicket_field-ctrler">
            
            <input type="text" id="birthday" name="birthday" v-model="birthday" class="form-control" placeholder="請輸入生日">
            
        </div>
    </module-field>

                            </div>
                            <div class="form-group">
                                
                                
    
    <module-field id="" class="justplayTicket_field justplayTicket_field-v required">
        <label for="address" class="justplayTicket_field-label">地址</label>
        <div class="justplayTicket_field-ctrler">
            
            <input type="text" id="address" name="address" v-model="address" class="form-control" placeholder="請輸入地址">
            
        </div>
    </module-field>

                            </div>

                            <div class="form-btns">
                                <button type="submit" class="justplayTicket_btn justplayTicket_btn-Pri">
                                    註冊
                                    <svg class="svgicon" data-src="./assets/images/icons/icon-more-arrow-2.svg"></svg>
                                </button>
                            </div>
                            <div class="form-ft">
                                <div class="txt txt-Gray-03">已經有帳號了？</div>
                                <a href="login.php" class="link-Black txt-Pri td-u">立即登入</a>
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