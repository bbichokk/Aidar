var x = new Array(9);

function zero() {
    var id = Math.floor(Math.random() * 9); //para saber si hay espacio libre en la rejilla
    x[id] ? zero(): move(id, 'zero'); //porque nuestro enemigo va a jugar con 0
}
// si en horizontal o diogonal tenemos 3 x o 3 0 El JUEGO SE ACABA
// He hecho con 8 IF porque es mas facil de contarme que con FOR (probé hacer con el for pero el posicion de diogonal no me ha salido.)
function checkEnd() {
    if( x[0] == 'zero' && x[1] == 'zero' && x[2] == 'zero' || x[0] =='hero' && x[1]=='hero' && x[2]=='hero') return true;
    if( x[3] == 'zero' && x[4] == 'zero' && x[5] == 'zero' || x[3] =='hero' && x[4]=='hero' && x[5]=='hero') return true;
    if( x[6] == 'zero' && x[7] == 'zero' && x[8] == 'zero' || x[6] =='hero' && x[7]=='hero' && x[8]=='hero') return true;
    if( x[0] == 'zero' && x[3] == 'zero' && x[6] == 'zero' || x[0] =='hero' && x[3]=='hero' && x[6]=='hero') return true;
    if( x[1] == 'zero' && x[4] == 'zero' && x[7] == 'zero' || x[1] =='hero' && x[4]=='hero' && x[7]=='hero') return true;
    if( x[2] == 'zero' && x[5] == 'zero' && x[8] == 'zero' || x[2] =='hero' && x[5]=='hero' && x[8]=='hero') return true;
    if( x[0] == 'zero' && x[4] == 'zero' && x[8] == 'zero' || x[0] =='hero' && x[4]=='hero' && x[8]=='hero') return true;
    if( x[2] == 'zero' && x[4] == 'zero' && x[6] == 'zero' || x[2] =='hero' && x[4]=='hero' && x[6]=='hero') return true;
    if( x[0] && x[1] && x[2] && x[3] && x[4] && x[5] && x[6] && x[7] && x[8]) return true;
    // si todos espacios ocupados la pagina recarga
}
// tenemos que saber quien esta ocupando el espacio
function move(id, role) {
    if(x[id]) return false;
    x[id] = role;
    document.getElementById(id).className = ' cell ' + role;
    !checkEnd() ? (role == 'hero') ? zero() : null : reset();
}

function reset() {
    alert('Acabado!');
    location.reload();
}