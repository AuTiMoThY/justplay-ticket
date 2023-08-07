



<!DOCTYPE html>
<html lang="zh-Hant">
    <head>
        <title>購物記錄列表 | 就是要玩 - 票卷</title>
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
    <main class="page_main page-account_shopping_record_list">
        
        <section class="page_section account_shopping_record_list_main">
            <div class="page_section-inner">
    <div class="page_section-content container">
        <div class="account_shopping_record_list_main-wrapper">
            <div class="page_section-bd account_shopping_record_list_main-bd pages-wrapper-v">
                <div class="pages-heading">
                    <div class="inner">
                        <h2 class="account_shopping_record_list_main-heading-title">
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
                            <li class="account-links-item">
                                <a href="account_change_pw.php" class="link justplayTicket_btn justplayTicket_btn-style1">會員密碼修改</a>
                            </li>
                            <li class="account-links-item js-active">
                                <a href="account_shopping_record_list.php" class="link justplayTicket_btn justplayTicket_btn-style1">購物記錄</a>
                            </li>
                        </ul>
                        <div class="account-container">
                            <div class="shopping_record_list-table">
                                <div class="table_heading">
                                    <div class="table_cell" data-ref="訂購單號">訂購單號</div>
                                    <div class="table_cell" data-ref="訂購日期">訂購日期</div>
                                    <div class="table_cell" data-ref="總金額">總金額</div>
                                    <div class="table_cell" data-ref="操作">&nbsp;</div>
                                </div>
                                
                                <div class="table_row">
                                    <div class="table_cell" data-ref="訂購單號">zxc20230223123</div>
                                    <div class="table_cell" data-ref="訂購日期">2023.02.23</div>
                                    <div class="table_cell" data-ref="總金額">$2,750</div>
                                    <div class="table_cell" data-ref="操作">
                                        <a href="account_shopping_record_detail.php" class="justplayTicket_btn justplayTicket_btn-style1 small_btn">訂單明細</a>
                                    </div>
                                </div>
                                
                                <div class="table_row">
                                    <div class="table_cell" data-ref="訂購單號">zxc20230223123</div>
                                    <div class="table_cell" data-ref="訂購日期">2023.02.23</div>
                                    <div class="table_cell" data-ref="總金額">$2,750</div>
                                    <div class="table_cell" data-ref="操作">
                                        <a href="account_shopping_record_detail.php" class="justplayTicket_btn justplayTicket_btn-style1 small_btn">訂單明細</a>
                                    </div>
                                </div>
                                
                                <div class="table_row">
                                    <div class="table_cell" data-ref="訂購單號">zxc20230223123</div>
                                    <div class="table_cell" data-ref="訂購日期">2023.02.23</div>
                                    <div class="table_cell" data-ref="總金額">$2,750</div>
                                    <div class="table_cell" data-ref="操作">
                                        <a href="account_shopping_record_detail.php" class="justplayTicket_btn justplayTicket_btn-style1 small_btn">訂單明細</a>
                                    </div>
                                </div>
                                
                                <div class="table_row">
                                    <div class="table_cell" data-ref="訂購單號">zxc20230223123</div>
                                    <div class="table_cell" data-ref="訂購日期">2023.02.23</div>
                                    <div class="table_cell" data-ref="總金額">$2,750</div>
                                    <div class="table_cell" data-ref="操作">
                                        <a href="account_shopping_record_detail.php" class="justplayTicket_btn justplayTicket_btn-style1 small_btn">訂單明細</a>
                                    </div>
                                </div>
                                
                                <div class="table_row">
                                    <div class="table_cell" data-ref="訂購單號">zxc20230223123</div>
                                    <div class="table_cell" data-ref="訂購日期">2023.02.23</div>
                                    <div class="table_cell" data-ref="總金額">$2,750</div>
                                    <div class="table_cell" data-ref="操作">
                                        <a href="account_shopping_record_detail.php" class="justplayTicket_btn justplayTicket_btn-style1 small_btn">訂單明細</a>
                                    </div>
                                </div>
                                
                                <div class="table_row">
                                    <div class="table_cell" data-ref="訂購單號">zxc20230223123</div>
                                    <div class="table_cell" data-ref="訂購日期">2023.02.23</div>
                                    <div class="table_cell" data-ref="總金額">$2,750</div>
                                    <div class="table_cell" data-ref="操作">
                                        <a href="account_shopping_record_detail.php" class="justplayTicket_btn justplayTicket_btn-style1 small_btn">訂單明細</a>
                                    </div>
                                </div>
                                
                                <div class="table_row">
                                    <div class="table_cell" data-ref="訂購單號">zxc20230223123</div>
                                    <div class="table_cell" data-ref="訂購日期">2023.02.23</div>
                                    <div class="table_cell" data-ref="總金額">$2,750</div>
                                    <div class="table_cell" data-ref="操作">
                                        <a href="account_shopping_record_detail.php" class="justplayTicket_btn justplayTicket_btn-style1 small_btn">訂單明細</a>
                                    </div>
                                </div>
                                
                                <div class="table_row">
                                    <div class="table_cell" data-ref="訂購單號">zxc20230223123</div>
                                    <div class="table_cell" data-ref="訂購日期">2023.02.23</div>
                                    <div class="table_cell" data-ref="總金額">$2,750</div>
                                    <div class="table_cell" data-ref="操作">
                                        <a href="account_shopping_record_detail.php" class="justplayTicket_btn justplayTicket_btn-style1 small_btn">訂單明細</a>
                                    </div>
                                </div>
                                
                                <div class="table_row">
                                    <div class="table_cell" data-ref="訂購單號">zxc20230223123</div>
                                    <div class="table_cell" data-ref="訂購日期">2023.02.23</div>
                                    <div class="table_cell" data-ref="總金額">$2,750</div>
                                    <div class="table_cell" data-ref="操作">
                                        <a href="account_shopping_record_detail.php" class="justplayTicket_btn justplayTicket_btn-style1 small_btn">訂單明細</a>
                                    </div>
                                </div>
                                
                                <div class="table_row">
                                    <div class="table_cell" data-ref="訂購單號">zxc20230223123</div>
                                    <div class="table_cell" data-ref="訂購日期">2023.02.23</div>
                                    <div class="table_cell" data-ref="總金額">$2,750</div>
                                    <div class="table_cell" data-ref="操作">
                                        <a href="account_shopping_record_detail.php" class="justplayTicket_btn justplayTicket_btn-style1 small_btn">訂單明細</a>
                                    </div>
                                </div>
                                
                            </div>
                            
<nav class="justplayTicket_pagination">
    <div class="nav-links">
        <a class="prev page-numbers" href="javascript:;">
            <svg class="svgicon" data-src="./assets/images/icons/icon-arrow.svg"></svg>
        </a>
        <a class="page-numbers" href="javascript:;">1</a>
        <!-- 在當前頁面時，加上class:"current" -->
        <a class="page-numbers current" href="javascript:;">2</a>
        <a class="page-numbers" href="javascript:;">3</a>
        <a class="page-numbers" href="javascript:;">4</a>
        <a class="next page-numbers" href="javascript:;">
            <svg class="svgicon" data-src="./assets/images/icons/icon-arrow.svg"></svg>
        </a>
    </div>
</nav>

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
        

    </body>

</html>