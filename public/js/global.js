function bss_number(number) {
    return (!number || typeof number == 'undefined' || number == 'undefined' || number == '0') ? 0 : parseInt(number);
}

function bss_string(txt) {
    return (!txt || typeof txt == 'undefined' || txt == 'undefined') ? '' : txt;
}

// calculate sum
function bss_sum_number() {
    let sum = 0;
    for (let i = 0; i < arguments.length; i++) {
        sum += bss_number(arguments[i]);
    }

    return bss_number(sum);
}

function bss_call_function(fc_name, clear_called = false) {
    if (typeof fc_name == 'function') {
        fc_name();
        if (clear_called) fc_name = function () { };
    }
}

function bss_swal_Success(title = '', text = '', fcCallBack) {
    Swal.fire({
        icon: 'success',
        title: bss_string(title),
        confirmButtonText: bss_string(text),
        timer: 1500
    }).then(() => {
        fcCallBack();
    });
}

function bss_swal_Error(txt) {
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: bss_string(txt),
    });
}

function bss_swal_Warning(title = '', text = '', fcCallBack) {
    Swal.fire({
        icon: 'warning',
        title: bss_string(title),
        confirmButtonText: bss_string(text),
        // timer: 1500
    }).then(() => {
        fcCallBack();
    });
}

// prepare form AJAX submission
$(document).ready(function () {
    $(document).on('click', '.submitFormAjx', function (e) {
        e.preventDefault(); // prevent form native submission
        let _form = $(this).parents('form');

        $.ajax({
            url: _form.attr('action'),
            method: bss_string(_form.attr('method')),
            data: bss_string(_form.serialize()),
            success: function (res) {
                if (typeof onAjaxSuccess == 'string') {
                    BssSwalSuccess(onAjaxSuccess);
                    onAjaxSuccess = '';
                } else if (typeof onAjaxSuccess == 'function') {
                    onAjaxSuccess(res); onAjaxSuccess = function () { };
                }
            },
            error: function (request, status, error) {
                BssSwalError(bss_string(request.responseText) + ' : ' + bss_string(status) + ' : ' + bss_string(error));
            }
        });
    });

    // date picker
    if ($('.bssDateRangePicker').length >= 1) {
        $('.bssDateRangePicker').daterangepicker(
            {
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                startDate: moment().startOf('month'),
                endDate: moment().endOf('month')
            },
            function (start, end) {
                $('#from').val(start.format('YYYY-MM-DD'));
                $('#to').val(end.format('YYYY-MM-DD'));
                getDatatable(start.format('YYYY-MM-DD'), end.format('YYYY-MM-DD'))
            }
        )
    }
});