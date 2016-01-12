$(document).ready(function() {
    document.getElementById('contents').style.marginTop = ($('#navbar').height() + 10) + 'px';
});

jQuery(window).resize(function() {
    document.getElementById('contents').style.marginTop = ($('#navbar').height() + 10) + 'px';
});
