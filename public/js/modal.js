function getCookie(k) {
    var _c = String(document.cookie).split(";");
    var neq = k + "=";
    for(var i = 0; i < _c.length; i++) {
        var c = _c[i];

        while(c.charAt(0) === " "){
            _c[i] = _c[i].substring(1,c.length);
        }

        if (_c[i].indexOf(neq) === 0){
            return unescape(_c[i].substring(neq.length, _c[i].length));
        }
    }
    return null;
}

//expira devem ser segundos  (não será usado para a sua verificação)
function setCookie(k, v, expira, path) {
    path = path || "/";

    var d = new Date();
    d.setTime(d.getTime() + (expira * 1000));

    document.cookie = escape(k) + "=" + escape(v) + "; expires=" + d + "; path=" + path;
}

// Verifica se o cookie existe
var cookieExist = document.cookie.match(/^(.*;)?\s*id\s*=\s*[^;]+(.*)?$/);

if(cookieExist == null) {
    document.location.href = 'http://localhost/desafio_leo/home#openModal';

    var tempodevida = new Date();
    tempodevida.setTime(tempodevida + (1000 * 60 * 60 * 24 * 2));
 
    setCookie("id", "1|" + String(new Date().getTime()), tempodevida);
 }