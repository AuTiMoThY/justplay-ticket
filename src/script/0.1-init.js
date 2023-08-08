/**
 * ---------------------------------------------------------------------------------
 * >> .init()
 */

init() {
    const _ = this;
    $("body").addClass('js-loading-ok');
    _.scrolling();
    // _.customElement().modCard();
    _.customElement().modField();
    // _.customElement().listPagination();

    if (mqUp.lg.matches) {
        console.log("qwe");
        $("body").removeClass("js-open-mobile-menu");
    }
    // $(window).on('resize', function () {
    // });




    const goTop = {
        setup() {
            const goToTop = () => {
                event.preventDefault();
                console.log("gototop");
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth',
                });
            };

            return {
                goToTop
            }
        }
    }
    createApp(goTop).mount("#goTop");

    const siteHeaderSetup = {
        setup() {
            const search = ref('');
            const isOpenMenu = ref(0);
            const toggleMenu = () => {
                if (!isOpenMenu.value) {
                    isOpenMenu.value = 1;
                    justplayUI.mmenu().open($("body"));
                }
                else {
                    isOpenMenu.value = 0;
                    justplayUI.mmenu().close($("body"));
                }
            }
            return {
                search, isOpenMenu, toggleMenu
            }
        }
    }
    const siteHeader = createApp(siteHeaderSetup);
    siteHeader.config.compilerOptions.isCustomElement = (tag) => {
        return tag.startsWith('module-')
    }

    siteHeader.mount("#siteHeader");
    
    const pagesWrapper = {
        setup() {
            const isOpenAside = ref(0);
            const toogleAside = (e) => {
                event.preventDefault();

                const $aside = $(e.target).closest(".pages-aside");
                if ($aside.hasClass("js-open-aside")) {
                    isOpenAside.value = 0;
                }
                else {
                    isOpenAside.value = 1;
                }
            };

            return {
                isOpenAside, toogleAside
            }
        }
    }
    createApp(pagesWrapper).mount("#pagesWrapper");
},