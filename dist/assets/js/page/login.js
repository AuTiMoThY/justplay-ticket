$(function () {
    const $frm = $(".login_frm");
    const constraints = {
        "email": {
            presence: {
                message: "EMAIL(帳號) 是必填欄位"
            }
        },
        "password": {
            presence: {
                message: "電話 是必填欄位"
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

