function cambiarApariencia(){
    requestAnimationFrame(cambiarApariencia);

    let ancho = window.innerWidth;

    
    if(ancho>=800){
        window.location.href = "iniciarSesion.php";
    
        
    }

}


window.onload = cambiarApariencia;