$(function () {
    const $frm = $(".signin_frm");
    const constraints = {
        "email": {
            presence: {
                message: "EMAIL(帳號) 是必填欄位"
            }
        },
        "password": {
            presence: {
                message: "密碼 是必填欄位"
            }
        },
        "password_check": {
            presence: {
                message: "確認密碼 是必填欄位"
            },
            equality: {
                attribute: "password",
                message: "密碼不正確，請再次輸入"
            }
        },
        "name": {
            presence: {
                message: "姓名 是必填欄位"
            }
        },
        "phone": {
            presence: {
                message: "電話 是必填欄位"
            }
        },
        "birthday": {
            presence: {
                message: "生日 是必填欄位"
            }
        },
        "address": {
            presence: {
                message: "地址 是必填欄位"
            }
        },
        "recaptcha": {
            presence: {
                message: "驗證碼 是必填欄位"
            }
        }
    }
    justplayUI.frmValidate($frm, constraints);

});

