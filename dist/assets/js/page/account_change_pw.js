$(function () {
    const $frm = $(".change_pw_frm");
    const constraints = {
        old_password: {
            presence: {
                message: "舊密碼 是必填欄位"
            }
        },
        password: {
            presence: {
                message: "新密碼 是必填欄位"
            }
        },
        confirmPassword: {
            equality: {
                attribute: "password",
                message: "密碼不正確，請再次輸入"
            }
        }

    }
    justplayUI.frmValidate($frm, constraints);

});

