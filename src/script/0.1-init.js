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

    $(window).on('resize', function () {
        if (mqUp.lg.matches) {
            console.log("qwe");
            $("body").removeClass("js-open-mobile-menu");
        }
    });




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

},