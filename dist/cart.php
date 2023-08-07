



<!DOCTYPE html>
<html lang="zh-Hant">
    <head>
        <title>購物車 | 就是要玩 - 票卷</title>
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
    <main class="page_main page-cart">
        
        <section class="page_section cart_main">
            <div class="page_section-inner">
    <div class="page_section-content container">
        <div class="cart_main-wrapper">
            <div class="page_section-bd cart_main-bd pages-wrapper-v">
                <div class="pages-heading">
                    <div class="inner">
                        <h2 class="cart_main-heading-title">
                            <span class="image_replacement image_replacement-login text-hide" style="background-image: url(./assets/images/image_replacement-shopping_cart.svg)">
                                SHOPPING CART
                            </span>
                            <div class="txt">購物車</div>
                        </h2>
                    </div>
                </div>
                <div class="pages-wrapper-v-pattern"></div>
                <div class="pages-main">
                    <div class="inner account-wrapper">
                        <ul class="account-links-list lis-n">
                            <li class="account-links-item js-active">
                                <a href="account_memberinfo.php" class="link justplayTicket_btn justplayTicket_btn-style1">一般購物車(5)</a>
                            </li>
                            <li class="account-links-item">
                                <a href="account_change_pw.php" class="link justplayTicket_btn justplayTicket_btn-style1">預購購物車(2)</a>
                            </li>
                        </ul>
                        <div class="account-container">
                            <div class="shopping_list-wrapper">
                                <div class="shopping_list-heading">
                                    <h3 class="title">訂購商品列表</h3>
                                </div>
                                <div class="shopping_list-table">
                                    <div class="table_heading">
                                        <div class="table_cell" data-ref="品名">品名</div>
                                        <div class="table_cell" data-ref="單價">單價</div>
                                        <div class="table_cell" data-ref="數量">數量</div>
                                        <div class="table_cell" data-ref="小記">小記</div>
                                        <div class="table_cell" data-ref="操作">&nbsp;</div>
                                    </div>
                                    
                                        <div class="table_row">
                                            <div class="table_cell" data-ref="品名">
                                                <div class="cart_pdt">
                                                    <div class="pdt_img">
                                                        <div class="img_div">
                                                            <img src="./assets/images/image-1.jpg" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="pdt_name">
                                                    桃園青埔｜Xpark 都會型水生公園門票
                                                </div>
                                                </div>
                                            </div>
                                            <div class="table_cell" data-ref="單價">$550</div>
                                            <div class="table_cell" data-ref="數量">
                                                <div class="cart_quantity">
                                                    
                                                    
    
    <module-field id="quantity_field-0" class="justplayTicket_field quantity_field ">
        <label for="quantity-0" class="justplayTicket_field-label">數量</label>
        <div class="justplayTicket_field-ctrler">
            <button class="decrement" @click="decrement">
                <svg class="svgicon" data-src="./assets/images/icons/decrement.svg"></svg>
            </button>
            <input type="number" id="quantity-0" v-model="quantity">
            <button class="increment" @click="increment">
                <svg class="svgicon" data-src="./assets/images/icons/increment.svg"></svg>
            </button>
        </div>
    </module-field>

                                                </div>
                                            </div>
                                            <div class="table_cell" data-ref="小記">$550</div>
                                            <div class="table_cell" data-ref="操作">
                                                <button type="button" class="del_btn">
                                                    <svg class="svgicon" data-src="./assets/images/icons/icon-del.svg"></svg>
                                                </button>
                                            </div>
                                        </div>
                                    
                                        <div class="table_row">
                                            <div class="table_cell" data-ref="品名">
                                                <div class="cart_pdt">
                                                    <div class="pdt_img">
                                                        <div class="img_div">
                                                            <img src="./assets/images/image-1.jpg" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="pdt_name">
                                                    桃園青埔｜Xpark 都會型水生公園門票
                                                </div>
                                                </div>
                                            </div>
                                            <div class="table_cell" data-ref="單價">$550</div>
                                            <div class="table_cell" data-ref="數量">
                                                <div class="cart_quantity">
                                                    
                                                    
    
    <module-field id="quantity_field-1" class="justplayTicket_field quantity_field ">
        <label for="quantity-1" class="justplayTicket_field-label">數量</label>
        <div class="justplayTicket_field-ctrler">
            <button class="decrement" @click="decrement">
                <svg class="svgicon" data-src="./assets/images/icons/decrement.svg"></svg>
            </button>
            <input type="number" id="quantity-1" v-model="quantity">
            <button class="increment" @click="increment">
                <svg class="svgicon" data-src="./assets/images/icons/increment.svg"></svg>
            </button>
        </div>
    </module-field>

                                                </div>
                                            </div>
                                            <div class="table_cell" data-ref="小記">$550</div>
                                            <div class="table_cell" data-ref="操作">
                                                <button type="button" class="del_btn">
                                                    <svg class="svgicon" data-src="./assets/images/icons/icon-del.svg"></svg>
                                                </button>
                                            </div>
                                        </div>
                                    
                                        <div class="table_row">
                                            <div class="table_cell" data-ref="品名">
                                                <div class="cart_pdt">
                                                    <div class="pdt_img">
                                                        <div class="img_div">
                                                            <img src="./assets/images/image-1.jpg" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="pdt_name">
                                                    桃園青埔｜Xpark 都會型水生公園門票
                                                </div>
                                                </div>
                                            </div>
                                            <div class="table_cell" data-ref="單價">$550</div>
                                            <div class="table_cell" data-ref="數量">
                                                <div class="cart_quantity">
                                                    
                                                    
    
    <module-field id="quantity_field-2" class="justplayTicket_field quantity_field ">
        <label for="quantity-2" class="justplayTicket_field-label">數量</label>
        <div class="justplayTicket_field-ctrler">
            <button class="decrement" @click="decrement">
                <svg class="svgicon" data-src="./assets/images/icons/decrement.svg"></svg>
            </button>
            <input type="number" id="quantity-2" v-model="quantity">
            <button class="increment" @click="increment">
                <svg class="svgicon" data-src="./assets/images/icons/increment.svg"></svg>
            </button>
        </div>
    </module-field>

                                                </div>
                                            </div>
                                            <div class="table_cell" data-ref="小記">$550</div>
                                            <div class="table_cell" data-ref="操作">
                                                <button type="button" class="del_btn">
                                                    <svg class="svgicon" data-src="./assets/images/icons/icon-del.svg"></svg>
                                                </button>
                                            </div>
                                        </div>
                                    
                                        <div class="table_row">
                                            <div class="table_cell" data-ref="品名">
                                                <div class="cart_pdt">
                                                    <div class="pdt_img">
                                                        <div class="img_div">
                                                            <img src="./assets/images/image-1.jpg" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="pdt_name">
                                                    桃園青埔｜Xpark 都會型水生公園門票
                                                </div>
                                                </div>
                                            </div>
                                            <div class="table_cell" data-ref="單價">$550</div>
                                            <div class="table_cell" data-ref="數量">
                                                <div class="cart_quantity">
                                                    
                                                    
    
    <module-field id="quantity_field-3" class="justplayTicket_field quantity_field ">
        <label for="quantity-3" class="justplayTicket_field-label">數量</label>
        <div class="justplayTicket_field-ctrler">
            <button class="decrement" @click="decrement">
                <svg class="svgicon" data-src="./assets/images/icons/decrement.svg"></svg>
            </button>
            <input type="number" id="quantity-3" v-model="quantity">
            <button class="increment" @click="increment">
                <svg class="svgicon" data-src="./assets/images/icons/increment.svg"></svg>
            </button>
        </div>
    </module-field>

                                                </div>
                                            </div>
                                            <div class="table_cell" data-ref="小記">$550</div>
                                            <div class="table_cell" data-ref="操作">
                                                <button type="button" class="del_btn">
                                                    <svg class="svgicon" data-src="./assets/images/icons/icon-del.svg"></svg>
                                                </button>
                                            </div>
                                        </div>
                                    
                                        <div class="table_row">
                                            <div class="table_cell" data-ref="品名">
                                                <div class="cart_pdt">
                                                    <div class="pdt_img">
                                                        <div class="img_div">
                                                            <img src="./assets/images/image-1.jpg" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="pdt_name">
                                                    桃園青埔｜Xpark 都會型水生公園門票
                                                </div>
                                                </div>
                                            </div>
                                            <div class="table_cell" data-ref="單價">$550</div>
                                            <div class="table_cell" data-ref="數量">
                                                <div class="cart_quantity">
                                                    
                                                    
    
    <module-field id="quantity_field-4" class="justplayTicket_field quantity_field ">
        <label for="quantity-4" class="justplayTicket_field-label">數量</label>
        <div class="justplayTicket_field-ctrler">
            <button class="decrement" @click="decrement">
                <svg class="svgicon" data-src="./assets/images/icons/decrement.svg"></svg>
            </button>
            <input type="number" id="quantity-4" v-model="quantity">
            <button class="increment" @click="increment">
                <svg class="svgicon" data-src="./assets/images/icons/increment.svg"></svg>
            </button>
        </div>
    </module-field>

                                                </div>
                                            </div>
                                            <div class="table_cell" data-ref="小記">$550</div>
                                            <div class="table_cell" data-ref="操作">
                                                <button type="button" class="del_btn">
                                                    <svg class="svgicon" data-src="./assets/images/icons/icon-del.svg"></svg>
                                                </button>
                                            </div>
                                        </div>
                                    
                                </div>
                                <div class="shopping_list-ft">
                                    <a href="account_shopping_record_list.php" class="justplayTicket_btn justplayTicket_btn-Pri">
                                BACK
                                <svg class="svgicon" data-src="./assets/images/icons/icon-more-arrow-2.svg"></svg>
                                    </a>
                                </div>
                            </div>
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
        
<script src="./assets/js/page/cart.js?v=20230727"></script>

    </body>

</html>