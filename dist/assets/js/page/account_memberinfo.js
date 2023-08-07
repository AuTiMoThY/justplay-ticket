$(function () {
    const $frm = $(".memberinfo_frm");
    const constraints = {
        "name": {
            presence: {
                message: "姓名 是必填欄位"
            }
        },
        "phone": {
            presence: {
                message: "電話 是必填欄位"
            },
            format: {
                pattern: /((?=(09))([0-9]{4})-(\d{6}))|((\d{2,3})-(\d{3,4})(\d{4}))$/,
                message: "請輸入正確的電話, EX: 0912-345678 或 02-34567890"
            }
        },
        "addr": {
            presence: {
                message: "地址 是必填欄位"
            }
        }
    }
    justplayUI.frmValidate($frm, constraints);

});

