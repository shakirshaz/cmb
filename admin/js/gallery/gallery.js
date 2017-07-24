$('#cat_check').change(function () {
    if ($(this).is(':checked')) {
        $(this).next().next().prop('disabled', true);
    } else {
        $(this).next().next().removeAttr('disabled');
    }
});

$('#alt_check').change(function () {
    if ($(this).is(':checked')) {
        $(this).next().next().prop('disabled', true);
    } else {
        $(this).next().next().removeAttr('disabled');
    }
});

$('#desc_check').change(function () {
    if ($(this).is(':checked')) {
        $(this).next().next().prop('disabled', true);
    } else {
        $(this).next().next().removeAttr('disabled');
    }
});

$('#pic_check').change(function () {
    if ($(this).is(':checked')) {
        $(this).next().next().prop('disabled', true);
    } else {
        $(this).next().next().removeAttr('disabled');
    }
});


var dialog = $( "#dialog-form" ).dialog({
    autoOpen: false,
    height: 400,
    width: 350,
    modal: true,
    buttons: {
        Cancel: function() {
            dialog.dialog("close");
        }
    }
});

$("#openAddcatDialog").click(function () {
    dialog.dialog('open');
});
