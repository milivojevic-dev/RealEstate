window.addEventListener('load', function () {
    document.getElementById('form').addEventListener('submit', function (e) {
        e.preventDefault();
        if (checkForm()) this.submit();
    });
});

var $ = function (id) {
    return document.getElementById(id);
};

var checkForm = function () {

    var isValid = true;

    return isValid;
};

jQuery(document).ready(function() {
    jQuery('.model-toggle').click(function() {
        jQuery(this).toggleClass('toggle-height');
    });
});

function setUpdateAction() {
    document.user_form.action = "update-process.php";
    document.user_form.submit();
}
