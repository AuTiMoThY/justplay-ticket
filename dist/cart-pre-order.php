



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
    <main class="page_main page-cart_pre_order">
        
        <section class="page_section cart_pre_order_main">
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
                            <li class="account-links-item">
                                <a href="cart.php" class="link justplayTicket_btn justplayTicket_btn-style1">一般購物車(5)</a>
                            </li>
                            <li class="account-links-item js-active">
                                <a href="cart-pre-order.php" class="link justplayTicket_btn justplayTicket_btn-style1">預購購物車(2)</a>
                            </li>
                        </ul>
                        <div class="account-container">
                            <div class="shopping_list-heading">
                                <h3 class="title">訂購商品列表</h3>
                            </div>
                            <div class="shopping_list-wrapper">
                                <div class="shopping_list-table cart_table">
                                    <div class="table_heading">
                                        <div class="table_cell cart_table-name" data-ref="品名">品名</div>
                                        <div class="table_cell cart_table-price" data-ref="單價">單價</div>
                                        <div class="table_cell cart_table-quantity" data-ref="數量">數量</div>
                                        <div class="table_cell cart_table-subtotal" data-ref="小記">小記</div>
                                        <div class="table_cell cart_table-action" data-ref="操作">&nbsp;</div>
                                    </div>
                                    
                                        <div class="table_row">
                                            <div class="table_cell cart_table-name" data-ref="品名">
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
                                            <div class="table_cell cart_table-price" data-ref="單價">$550</div>
                                            <div class="table_cell cart_table-quantity" data-ref="數量">
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
                                            <div class="table_cell cart_table-subtotal" data-ref="小記">$550</div>
                                            <div class="table_cell cart_table-action" data-ref="操作">
                                                <button type="button" class="del_btn">
                                                    <svg class="svgicon" data-src="./assets/images/icons/icon-del.svg"></svg>
                                                </button>
                                            </div>
                                        </div>
                                    
                                        <div class="table_row">
                                            <div class="table_cell cart_table-name" data-ref="品名">
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
                                            <div class="table_cell cart_table-price" data-ref="單價">$550</div>
                                            <div class="table_cell cart_table-quantity" data-ref="數量">
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
                                            <div class="table_cell cart_table-subtotal" data-ref="小記">$550</div>
                                            <div class="table_cell cart_table-action" data-ref="操作">
                                                <button type="button" class="del_btn">
                                                    <svg class="svgicon" data-src="./assets/images/icons/icon-del.svg"></svg>
                                                </button>
                                            </div>
                                        </div>
                                    
                                        <div class="table_row">
                                            <div class="table_cell cart_table-name" data-ref="品名">
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
                                            <div class="table_cell cart_table-price" data-ref="單價">$550</div>
                                            <div class="table_cell cart_table-quantity" data-ref="數量">
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
                                            <div class="table_cell cart_table-subtotal" data-ref="小記">$550</div>
                                            <div class="table_cell cart_table-action" data-ref="操作">
                                                <button type="button" class="del_btn">
                                                    <svg class="svgicon" data-src="./assets/images/icons/icon-del.svg"></svg>
                                                </button>
                                            </div>
                                        </div>
                                    
                                        <div class="table_row">
                                            <div class="table_cell cart_table-name" data-ref="品名">
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
                                            <div class="table_cell cart_table-price" data-ref="單價">$550</div>
                                            <div class="table_cell cart_table-quantity" data-ref="數量">
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
                                            <div class="table_cell cart_table-subtotal" data-ref="小記">$550</div>
                                            <div class="table_cell cart_table-action" data-ref="操作">
                                                <button type="button" class="del_btn">
                                                    <svg class="svgicon" data-src="./assets/images/icons/icon-del.svg"></svg>
                                                </button>
                                            </div>
                                        </div>
                                    
                                        <div class="table_row">
                                            <div class="table_cell cart_table-name" data-ref="品名">
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
                                            <div class="table_cell cart_table-price" data-ref="單價">$550</div>
                                            <div class="table_cell cart_table-quantity" data-ref="數量">
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
                                            <div class="table_cell cart_table-subtotal" data-ref="小記">$550</div>
                                            <div class="table_cell cart_table-action" data-ref="操作">
                                                <button type="button" class="del_btn">
                                                    <svg class="svgicon" data-src="./assets/images/icons/icon-del.svg"></svg>
                                                </button>
                                            </div>
                                        </div>
                                    
                                </div>
                            </div>
                            <div class="cart_table-total_row">
                                <div class="cart_table-total_row-inner">
                                    <ul class="cart_table-total_row-list lis-n">
                                        <div class="cart_table-total_row-item">
                                            <div class="title">合計</div>
                                            <div class="txt">NT$ 2,750</div>
                                        </div>
                                        <div class="cart_table-total_row-item">
                                            <div class="title">運費</div>
                                            <div class="txt">NT$ 0</div>
                                        </div>
                                    </ul>
                                    <div class="cart_table-total_row-total">
                                        <div class="title">總金額</div>
                                        <div class="txt txt-danger">NT$ 2,750</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pages-wrapper-v-pattern"></div>
                <div class="pages-main">
                    <div class="inner shopping_base-wrapper">
                        <div class="shopping_base-heading">
                            <h3 class="title">訂購資訊</h3>
                        </div>
                        <div class="shopping_base-wrapper">
                            <div class="shopping_base-main">
                                <form action="" class="justplayTicket_frm cart_frm" method="POST">
                                    <div class="form-group">
                                        
                                        
    
    <module-field id="" class="justplayTicket_field justplayTicket_field-v required">
        <label for="shipping_name" class="justplayTicket_field-label">收件人</label>
        <div class="justplayTicket_field-ctrler">
            <input type="text"
                id="shipping_name"
                name="shipping_name"
                v-model="shipping_name"
                class="form-control"
                placeholder="請輸入收件人名稱"
                value="收件人名稱"
                >
        </div>
    </module-field>

                                        
                                        
    
    <module-field id="" class="justplayTicket_field justplayTicket_field-v required">
        <label for="shipping_phone" class="justplayTicket_field-label">收件人電話</label>
        <div class="justplayTicket_field-ctrler">
            <input type="text"
                id="shipping_phone"
                name="shipping_phone"
                v-model="shipping_phone"
                class="form-control"
                placeholder="請輸入收件人電話"
                value="02-55751900"
                >
        </div>
    </module-field>

                                    </div>
                                    <div class="form-group">
                                        
                                        
    
    <module-field id="" class="justplayTicket_field justplayTicket_field-v required">
        <label for="shipping_addr" class="justplayTicket_field-label">收件人地址</label>
        <div class="justplayTicket_field-ctrler">
            <input type="text"
                id="shipping_addr"
                name="shipping_addr"
                v-model="shipping_addr"
                class="form-control"
                placeholder="請輸入收件人地址"
                value="新北市板橋區新府路66號2樓"
                >
        </div>
    </module-field>

                                    </div>
                                    <div class="form-group">
                                        <div class="justplayTicket_rcx-wrap justplayTicket_rcx-wrap-v required">
                                            <div class="justplayTicket_rcx-wrap-label">發票類型</div>
                                            <div class="justplayTicket_rcx-wrap-field">
                                                
                                                

    <div class="justplayTicket_rcx">
        <label for="invoice_type_1" class="justplayTicket_rcx-label">
            <input type="radio" id="invoice_type_1" name="invoice_type[]" class="justplayTicket_rcx-input" value="二聯式發票">
            <span class="justplayTicket_rcx-label-inner">
                <span class="choicemark"></span>
                <span class="txt">二聯式發票</span>
            </span>
        </label>
    </div>

                                                
                                                

    <div class="justplayTicket_rcx">
        <label for="invoice_type_2" class="justplayTicket_rcx-label">
            <input type="radio" id="invoice_type_2" name="invoice_type[]" class="justplayTicket_rcx-input" value="三聯式發票">
            <span class="justplayTicket_rcx-label-inner">
                <span class="choicemark"></span>
                <span class="txt">三聯式發票</span>
            </span>
        </label>
    </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        
                                        
    
    <module-field id="" class="justplayTicket_field justplayTicket_field-v required">
        <label for="shipping_invoice_title" class="justplayTicket_field-label">發票抬頭</label>
        <div class="justplayTicket_field-ctrler">
            <input type="text"
                id="shipping_invoice_title"
                name="shipping_invoice_title"
                v-model="shipping_invoice_title"
                class="form-control"
                placeholder="請輸入發票抬頭"
                value="彭氏國際企業有限公司"
                >
        </div>
    </module-field>

                                        
                                        
    
    <module-field id="" class="justplayTicket_field justplayTicket_field-v required">
        <label for="shipping_invoice_taxid" class="justplayTicket_field-label">發票統編</label>
        <div class="justplayTicket_field-ctrler">
            <input type="text"
                id="shipping_invoice_taxid"
                name="shipping_invoice_taxid"
                v-model="shipping_invoice_taxid"
                class="form-control"
                placeholder="請輸入發票統編"
                value="69618541"
                >
        </div>
    </module-field>

                                    </div>
                                    <div class="form-group">
                                        
                                        
    
    <module-field id="" class="justplayTicket_field justplayTicket_field-v required">
        <label for="shipping_invoice_addr" class="justplayTicket_field-label">發票寄送地址</label>
        <div class="justplayTicket_field-ctrler">
            <input type="text"
                id="shipping_invoice_addr"
                name="shipping_invoice_addr"
                v-model="shipping_invoice_addr"
                class="form-control"
                placeholder="請輸入發票寄送地址"
                value="新北市板橋區新府路66號2樓"
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
                                            確認結帳
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