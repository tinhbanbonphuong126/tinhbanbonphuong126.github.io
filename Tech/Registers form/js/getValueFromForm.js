// from display.html
function getUrlVars(para) {
    var url = window.location.search.substring(1);
    var sPageURL = decodeURIComponent(url);
    var aPageURL = sPageURL.split('&');
    for (var i = 0; i < aPageURL.length; i++) {
        var c = aPageURL[i].split('=');
        if (c[0] == para) {
            var rs = c[1].replace(/\+/g,' ');
            console.log(rs);
            return rs;
        }
    }
}
$('#name').append(getUrlVars('name'));
$('#date').append(getUrlVars('date'));
$('#sex').append(getUrlVars('sex'));
$('#address').append(getUrlVars('address'));
$('#phone').append(getUrlVars('phone'));
$('#email').append(getUrlVars('email'));
$('#password').append(getUrlVars('password'));