var user_button = document.getElementById('user__info'),
    button = document.getElementById('prueba'),
    user_box = document.getElementById('user__data'),
    cont = 0;
function cambio(){
    if(cont == 0){
        user_box.classList.add('cambio');
        cont = 1;
    } else{
        user_box.classList.remove('cambio');
        cont = 0;
    }
}

user_button.addEventListener('click', cambio, true);