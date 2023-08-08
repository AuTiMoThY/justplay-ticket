$(function () {
    const $frm = $(".contact_frm");
    const constraints = {
        "u_name": {
            presence: {
                message: "姓名 是必填欄位"
            }
        },
        "u_phone": {
            presence: {
                message: "電話 是必填欄位"
            },
            format: {
                pattern: /((?=(09))([0-9]{4})-(\d{6}))|((\d{2,3})-(\d{3,4})(\d{4}))$/,
                message: "請輸入正確的電話, EX: 0912-345678 或 02-34567890"
            }
        },
        "u_email": {
            presence: {
                message: "EMAIL 是必填欄位"
            }
        },
        "u_msg": {
            presence: {
                message: "詢問內容 是必填欄位"
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

