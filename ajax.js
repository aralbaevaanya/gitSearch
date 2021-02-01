$(document).ready(function () {
    $("#btn").click(
        function () {
            sendAjaxForm('result_form', 'searchForm', 'action_ajax_form.php');
            return false;
        }
    );
});

function sendAjaxForm(result_form, ajax_form, url) {
    jQuery.ajax({
        url: url, //url страницы (action_ajax_form.php)
        type: "POST",
        dataType: "html",
        data: jQuery("#" + ajax_form).serialize(),
        success: function (response) {
            result = jQuery.parseJSON(response);
            result.items.forEach(rep => showRepInfo(rep, result_form));
        },
        error: function (response) {
            document.getElementById(result_form).innerHTML = "Ошибка";
        }
    });
}

function showRepInfo(rep, result_form) {
    var repInfo = document.createElement('div');
    repInfo.className = "card";
    repInfo.innerHTML = '<div class=\"card-body\">' +
        '<p>Repositiry name: <b>' + rep.name + '</b></p>' +
        '<p>link: <a href=\"' + rep.html_url + '\">' + rep.full_name + '</a></p>' +
        '<p class="d-inline">Owner login: ' + rep.owner.login + '</p>' +
        '<img src=\"' + rep.owner.avatar_url + '\" class=\"d-inline float-right avatar\" alt=\"Avatar\"></img></div>';
    document.getElementById(result_form).appendChild(repInfo);
}

