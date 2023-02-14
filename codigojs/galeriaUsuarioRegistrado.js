const botonMenu = document.getElementById('open-close');
const botonInicio = document.getElementById('boton-inicio');

const botonMoverScroll = document.getElementById('botonMoverScroll'); 

botonMoverScroll.addEventListener('click',()=>{
    scroll(0,9000);
});



botonMenu.addEventListener('click',()=>{
    aside.classList.toggle('desplegar');
});



botonInicio.addEventListener('click',()=>{
    window.scroll({
        top: 0,
        left: 0,
        behavior: 'smooth'
      });
});

function cambiarApariencia(){
    requestAnimationFrame(cambiarApariencia);

    let ancho = window.innerWidth;

    if(ancho<=800 ){

  
        window.location.href = "galeriaS_UsuarioRegistrado.php"; 
        
    }
    

}

window.onload = cambiarApariencia;




