$(function () {
    const $frm = $(".forgor_pw_frm");
    const constraints = {
        "email": {
            presence: {
                message: "EMAIL(帳號) 是必填欄位"
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

