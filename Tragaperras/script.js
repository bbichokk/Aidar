let coin = id('coin');
let item1 = id('uno');
let item2 = id('dos');
let item3 = id('tres');
let intervalo;
let intervalo1;
let intervalo2;

function random() {
    return Math.floor(Math.random() * 4);
}

function stop() {
    clearInterval(intervalo);
}
function stop1() {
    clearInterval(intervalo1);
}
function stop2() {
    clearInterval(intervalo2);
    
    checkWin();

}

function id(id) {
    return document.getElementById(id);
}

function spin1(){
    item1 = id('uno');
    item1.src = 'img/'+  Math.floor(Math.random() * 4)+'.png';
}

function spin2(){
    item2 = id('dos');
    item2.src = 'img/'+  Math.floor(Math.random() * 4)+'.png';
}

function spin3(){
    item3 = id('tres');
    item3.src = 'img/'+  Math.floor(Math.random() * 4)+'.png';
}

function spin() {

    intervalo = setInterval(spin1, 100);
    setTimeout(stop, 3000);
    

    intervalo1 =setInterval(spin2, 100);
    setTimeout(stop1, 3500);

    intervalo2 =setInterval(spin3, 100);
    setTimeout(stop2, 4000);

    
    coin.innerHTML = parseInt(coin.innerHTML) - 10;
    
}

function add10() {
    coin.innerHTML = parseInt(coin.innerHTML) + 10;
}
function add50() {
    coin.innerHTML = parseInt(coin.innerHTML) + 50;
}
function add100() {
    coin.innerHTML = parseInt(coin.innerHTML) + 100;
}

function checkWin() {

    if (item1.src == item2.src && item2.src == item3.src) {

        if (item1.src.indexOf('0.png')>0) {
            Swal.fire({
                title: 'Has ganado 10 points',
                showClass: {
                  popup: 'animate__animated animate__fadeInDown'
                },
                hideClass: {
                  popup: 'animate__animated animate__fadeOutUp'
                }
              })
              add10();
        }
        if (item2.src.indexOf('1.png')>0){
            add50();
            Swal.fire({
                title: 'Has ganado 50 points',
                showClass: {
                  popup: 'animate__animated animate__fadeInDown'
                },
                hideClass: {
                  popup: 'animate__animated animate__fadeOutUp'
                }
              })

            if (item3.src.indexOf('2.png')>0){
                add100();
                Swal.fire({
                    title: 'Has ganado 100 points',
                    showClass: {
                      popup: 'animate__animated animate__fadeInDown'
                    },
                    hideClass: {
                      popup: 'animate__animated animate__fadeOutUp'
                    }
                  })
        }

    }
    }
}





function start () {

    coin.classList.remove("hidden");

    coin.innerHTML = 1000;


}

