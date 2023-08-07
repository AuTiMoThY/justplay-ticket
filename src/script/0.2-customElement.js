
/**
 * ---------------------------------------------------------------------------------
 * >> .customElement()
 */

customElement() {
    const _ = this;

    flatpickr.localize(flatpickr.l10ns.zh_tw);
    return {
        modCard: function () {
            // 卡片
            class moduleCard extends HTMLElement {
                constructor() {
                    // Always call super first in constructor
                    super();
                    $(this).css({
                        "display": "block"
                    });
                    // Element functionality written in here
                    $(this).hover(function () {
                        $(this).addClass("js-hover");
                    }, function () {
                        $(this).removeClass("js-hover");
                    });
                }
            }
            customElements.define("module-card", moduleCard);
        },
        modField: function () {
            class moduleField extends HTMLElement {
                constructor() {
                    // Always call super first in constructor
                    super();
                    function fieldFocus(elm) {
                        console.log("fieldFocus");
                        let $this_parent = $(elm).parents("module-field");
                        $this_parent.addClass("js-focus");
                    }
                    function fieldFocusout(elm) {
                        console.log("fieldFocusout");
                        let $this_parent = $(elm).parents("module-field");
                        $this_parent.removeClass("js-focus");
                    }
                    const $ctrler = $(this).find("[class$=-ctrler]");

                    if ($(this).hasClass("date_field")) {
                        // $ctrler.addClass("input-group");
                        const input_id = $(this).find("input").attr("id");
                        $ctrler.append($("<div>", {
                            class: "icon"
                        }).append("<i class=\"fa-solid fa-calendar-days\"></i>"));
                        flatpickr(`#${input_id}`);
                    }

                    // 選擇框
                    if ($(this).hasClass("select_styled")) {
                        // _.selectStyled().init($(this), $ctrler);
                        $ctrler.find("select").select2();
                    }

                    // 數量加減
                    if ($(this).hasClass("quantity_field")) {
                        const id = $(this).attr("id");

                        const quantitySetup = {
                            setup() {
                                const quantity = ref(1);
                                const decrement = () => {
                                    if (quantity.value > 1) {
                                        quantity.value--;
                                    }
                                }
                                const increment = () => {
                                    quantity.value++;
                                }
                                return {
                                    quantity, decrement, increment
                                }
                            }
                        }
                        const quantity = createApp(quantitySetup);
                        quantity.mount(`#${id}`);
                    }

                    if ($(this).hasClass("password_field")) {
                        const id = $(this).attr("id");
                        console.log(id);
                        const passwordSetup = {

                            setup() {
                                const fieldType = ref("password");
                                const togglePassword = () => {
                                    if (fieldType.value === "password") {
                                        fieldType.value = "text";
                                    }
                                    else {
                                        fieldType.value = "password";
                                    }
                                }
                                return {
                                    fieldType, togglePassword
                                }
                            }
                        }
                        const password = createApp(passwordSetup);
                        password.mount(`#${id}`);
                    }


                    let $this_input = $(this).find("input");
                    if ($this_input) {
                        $this_input
                            .focus(function () {
                                fieldFocus($(this));
                            }).focusout(function () {
                                fieldFocusout($(this));
                            });
                    }

                    let $this_select = $(this).find("select");
                    if ($this_select) {
                        $this_select
                            .focus(function () {
                                fieldFocus($(this));
                            }).focusout(function () {
                                fieldFocusout($(this));
                            });
                    }

                    let $this_textarea = $(this).find("textarea");
                    if ($this_textarea) {
                        $this_textarea
                            .focus(function () {
                                fieldFocus($(this));
                            }).focusout(function () {
                                fieldFocusout($(this));
                            });
                    }

                }
            }
            customElements.define("module-field", moduleField);
        },
        listPagination: function () {
            class listPagination extends HTMLElement {
                constructor() {
                    // Always call super first in constructor
                    super();
                    // Element functionality written in here
                }
            }
            customElements.define("list-pagination", listPagination);
        }

    }


},