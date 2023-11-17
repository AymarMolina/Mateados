var btnAbrirpopup=document.getElementById('btn-abrir-popup'),
    overlay=document.getElementById('overlay'),
    popup=document.getElementById('popup'),
    btnCerrarpopup=document.getElementById('btn-cerrar-popup');


btnAbrirpopup.addEventListener('click',function(){
    overlay.classList.add('active');
});
btnCerrarpopup.addEventListener('click',function(){
    overlay.classList.remove('active');
});