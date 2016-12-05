// from display.html
function GetURLParameter(para) {
    var url = window.location.search.substring(1);
    var sPageURL = decodeURIComponent(url);
    var aPageURL = sPageURL.split('&');
    for (var i = 0; i < aPageURL.length; i++) {
        var c = aPageURL[i].split('=');
        if (c[0] == para) {
            var rs = c[1].replace(/\+/g, ' ');
            if (c[0] = 'date')
            {
                var pieces = rs.split('-');
                pieces.reverse();
                var rs = pieces.join('-');
            }
            console.log(rs);
            return rs;
        }
    }
}
$('#name').append(GetURLParameter('name'));
$('#date').append(GetURLParameter('date'));
$('#sex').append(GetURLParameter('sex'));
$('#address').append(GetURLParameter('address'));
$('#phone').append(GetURLParameter('phone'));
$('#email').append(GetURLParameter('email'));
$('#facebook').append(GetURLParameter('facebook'));