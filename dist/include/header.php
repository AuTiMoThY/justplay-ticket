
<header class="site_header" id="siteHeader">
    <div class="site_header-container container-fluid">
        <div class="site_logo">
            <a href="./" class="site_logo-link">
                <img src="./assets/images//logo.svg" alt="就是要玩">
            </a>
        </div>
        <nav class="site_nav">
            <ul class="site_nav-list lis-n">
                
                
                    <li class="site_nav-item" data-highlight="menu1">
                        <a href="product_list.php" class="link">吃喝玩樂</a>
                    </li>
                
                    <li class="site_nav-item" data-highlight="menu2">
                        <a href="product_list.php" class="link">預購票卷</a>
                    </li>
                
                    <li class="site_nav-item" data-highlight="menu3">
                        <a href="javascript:;" class="link">大宗批發</a>
                    </li>
                
                    <li class="site_nav-item" data-highlight="menu4">
                        <a href="javascript:;" class="link">異業合作</a>
                    </li>
                
                    <li class="site_nav-item" data-highlight="menu5">
                        <a href="javascript:;" class="link">票卷回收</a>
                    </li>
                
                    <li class="site_nav-item" data-highlight="menu6">
                        <a href="javascript:;" class="link">享程旅行社</a>
                    </li>
                
            </ul>
        </nav>
        <div class="site_header-quick">
            <div class="site_header-quick-search">
                <div class="site_search">
                    <form action="search_result.php" class="site_search-frm">
                        
                        
    
    <module-field id="" class="justplayTicket_field search_styled ">
        <label for="search" class="justplayTicket_field-label">搜尋</label>
        <div class="justplayTicket_field-ctrler">
            <input type="text"
                id="search"
                name="search"
                v-model="search"
                class="form-control"
                placeholder="搜尋"
                
                >
        </div>
    </module-field>

                        <button type="button" class="site_search-btn">
                            <svg class="svgicon" id="" data-src="./assets/images/icons/icon-search.svg"></svg>
                        </button>
                    </form>
                </div>
            </div>
            <div class="site_header-quick-controls">
                <a class="control-link control-login" href="login.php" title="登入">
                    <svg class="svgicon" data-src="./assets/images/icons/icon-login.svg"></svg>
                </a>
                <a class="control-link control-signup" href="signin.php" title="註冊">
                    <svg class="svgicon" data-src="./assets/images/icons/icon-signup.svg"></svg>
                </a>
                <a class="control-link control-cart" href="cart.php" title="購物車">
                    <div class="cart-number">0</div>
                    <svg class="svgicon" data-src="./assets/images/icons/icon-cart.svg"></svg>
                </a>
            </div>
        </div>
    </div>
    <div class="m_menu" id="m_menu" @click="toggleMenu">
        <div class="group">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
            <div class="line4"></div>
        </div>
    </div>
</header>
<!-- /.site_header -->
