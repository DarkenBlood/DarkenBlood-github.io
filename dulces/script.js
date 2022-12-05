var emoji_button = document.getElementsById('user__button'),

    emoji = document.getElementById('emoji'),
    contador = 0;
    alert(2);

function cambio(){
    if(contador == 0){
        emoji.classList.add('cambio');
        alert(2);
        contador = 1;
    }
}

function restablecer(){
    emoji.classList.remove('cambio');
    contador = 0;
}

emoji_button.addEventListener('click', cambio, true);

alert(2);