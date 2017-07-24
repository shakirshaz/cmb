
$('#t_check').change(function () {
    if ($(this).is(':checked')) {
        $(this).next().next().prop('disabled', true);
    } else {
        $(this).next().next().removeAttr('disabled');
    }
});

$('#st_check').change(function () {
    if ($(this).is(':checked')) {
        $(this).next().next().prop('disabled', true);
    } else {
        $(this).next().next().removeAttr('disabled');
    }
});

$('#c_check').change(function () {
    if ($(this).is(':checked')) {
        $(this).next().next().prop('disabled', true);
    } else {
        $(this).next().next().removeAttr('disabled');
    }
});

$('#nc_check').change(function () {
    if ($(this).is(':checked')) {
        $(this).next().next().prop('disabled', true);
    } else {
        $(this).next().next().removeAttr('disabled');
    }
});

$('#p_check').change(function () {
    if ($(this).is(':checked')) {
        $(this).next().next().prop('disabled', true);
    } else {
        $(this).next().next().removeAttr('disabled');
    }
});
