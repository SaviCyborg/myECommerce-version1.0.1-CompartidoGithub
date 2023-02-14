function cambiarApariencia(){
    requestAnimationFrame(cambiarApariencia);

    let ancho = window.innerWidth;

    
    if(ancho>=800){
        window.location.href = "registrate.php";
    
        
    }

}


window.onload = cambiarApariencia;