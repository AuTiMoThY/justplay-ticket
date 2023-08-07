/**
 * ---------------------------------------------------------------------------------
 * >> .frmValidate(frm, constraints)
 */

frmValidate(frm, constraints) {
    const $frm = frm;

    $frm.submit((e) => {
        e.preventDefault();

        var errors = validate($frm, constraints, { fullMessages: false });
        // console.log(errors);

        showErrors($frm, errors || {});

    });

    const $frm_controls = $frm.find(".form-control");
    // console.log($frm_controls.length);
    $frm_controls.each(function (i, el) {
        $(el).on('change', () => {
            console.log('Input value changed');
            var errors = validate($frm, constraints, { fullMessages: false }) || {};
            showErrorsForInput(el, errors[el.name])
        });
    });

    const showErrors = (form, errors) => {
        $.each(form.find("input[name], select[name], textarea[name]"), function (i, el) {
            // console.log(i);
            // console.log(el);
            showErrorsForInput(el, errors && errors[el.name]);
        });
    }

    const showErrorsForInput = (input, errors) => {
        const $field = $(input.closest("module-field"));
        const $errorMsg = $("<div>", {
            class: "error-msg"
        });

        // console.log($field);

        $field.removeClass("has-error");
        $field.removeClass("has-success");



        if (errors) {
            $field.addClass("has-error");
            $field.find(".error-msg").remove();
            $.each(errors, function (i, error) {
                $field.append($errorMsg.html(error));
            });
        } else {
            $field.addClass("has-success");
            $field.find(".error-msg").remove();
        }
    }

},