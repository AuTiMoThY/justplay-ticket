$(function () {
    const $frm = $(".cart_frm");
    const constraints = {
        "shipping_name": {
            presence: {
                message: "收件人 是必填欄位"
            }
        },
        "shipping_phone": {
            presence: {
                message: "收件人電話 是必填欄位"
            },
            format: {
                pattern: /((?=(09))([0-9]{4})-(\d{6}))|((\d{2,3})-(\d{3,4})(\d{4}))$/,
                message: "請輸入正確的電話, EX: 0912-345678 或 02-34567890"
            }
        },
        "shipping_addr": {
            presence: {
                message: "收件人地址 是必填欄位"
            }
        },
        "shipping_invoice_title": {
            presence: {
                message: "發票抬頭 是必填欄位"
            }
        },
        "shipping_invoice_taxid": {
            presence: {
                message: "發票統編 是必填欄位"
            }
        },
        "shipping_invoice_addr": {
            presence: {
                message: "發票寄送地址 是必填欄位"
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

