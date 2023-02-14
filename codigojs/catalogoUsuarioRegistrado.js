const botonMenu = document.getElementById('open-close');
const botonInicio = document.getElementById('boton-inicio');

const botonMoverScroll = document.getElementById('botonMoverScroll'); 

botonMoverScroll.addEventListener('click',()=>{
    scroll(0,9000);
});



botonMenu.addEventListener('click',()=>{
    aside.classList.toggle('desplegar');
});

function posicion()
{
    var loc = document.location.href;
    
    if((loc.indexOf('Acelga')>0)||(loc.indexOf('Almendras')>0)||(loc.indexOf('Cambur')>0)||(loc.indexOf('Cerezas')>0)||(loc.indexOf('Croissants')>0))
    {
        scroll(0, 30);
    }
    if((loc.indexOf('iberico')>0)||(loc.indexOf('Picante')>0)||(loc.indexOf('Costillas')>0)||(loc.indexOf('Espinacas')>0)||(loc.indexOf('Croissants')>0))
    {
        scroll(0, 450);
    }
    if((loc.indexOf('Corvina')>0)||(loc.indexOf('Guanabana')>0)||(loc.indexOf('mora')>0)||(loc.indexOf('Artesanal')>0)||(loc.indexOf('Mora')>0))
    {
        scroll(0, 950);
    }
    if((loc.indexOf('pistacho')>0)||(loc.indexOf('Mango')>0)||(loc.indexOf('Sundae')>0)||(loc.indexOf('Secos')>0)||(loc.indexOf('Serrano')>0))
    {
        scroll(0, 1500);
    }
    if((loc.indexOf('Langostinos')>0)||(loc.indexOf('Lechosa')>0)||(loc.indexOf('Limones')>0)||(loc.indexOf('Manitoba')>0))
    {
        scroll(0, 1900);
    }
    if((loc.indexOf('Amarilla')>0)||(loc.indexOf('Roja')>0)||(loc.indexOf('Verde')>0)||(loc.indexOf('lomito')>0)||(loc.indexOf('Merey')>0))
    {
        scroll(0, 2400);
    }
    if((loc.indexOf('Grupo')>0)||(loc.indexOf('Mermelada')>0)||(loc.indexOf('Nuts')>0)||(loc.indexOf('Mozzarella')>0)||(loc.indexOf('Naranja')>0))
    {
        scroll(0, 2800);
    }
    if((loc.indexOf('Nispero')>0)||(loc.indexOf('Ocumo')>0)||(loc.indexOf('Ossobuco')>0)||(loc.indexOf('Campesino')>0)||(loc.indexOf('Canilla')>0))
    {
        scroll(0, 3300);
    }
    if((loc.indexOf('Cuadrado')>0)||(loc.indexOf('perro')>0)||(loc.indexOf('Gallego')>0)||(loc.indexOf('Reggiano')>0)||(loc.indexOf('Patilla')>0))
    {
        scroll(0, 3800);
    }
    if((loc.indexOf('Pera')>0)||(loc.indexOf('Perejil')>0)||(loc.indexOf('Cochino')>0)||(loc.indexOf('Pringles')>0)||(loc.indexOf('Brie')>0))
    {
        scroll(0, 4300);
    }
    if((loc.indexOf('Fresco')>0)||(loc.indexOf('Casero')>0)||(loc.indexOf('Gouda')>0)||(loc.indexOf('Ahumado')>0)||(loc.indexOf('Holandes')>0))
    {
        scroll(0, 4750);
    }
    if((loc.indexOf('Paisa')>0)||(loc.indexOf('Pecorino')>0)||(loc.indexOf('Alemana')>0)||(loc.indexOf('Debrecziner')>0)||(loc.indexOf('Frankfurt')>0))
    {
        scroll(0, 5200);
    }
    if((loc.indexOf('Salchicha')>0)||(loc.indexOf('Polaca')>0)||(loc.indexOf('Salchichon')>0)||(loc.indexOf('Salmon')>0)||(loc.indexOf('Camarones')>0))
    {
        scroll(0, 5700);
    }
    if((loc.indexOf('Cerdo')>0)||(loc.indexOf('Calamares')>0)||(loc.indexOf('bone')>0)||(loc.indexOf('Toblerone')>0)||(loc.indexOf('leche')>0))
    {
        scroll(0, 6200);
    }
    if((loc.indexOf('Negro')>0)||(loc.indexOf('Crujientes')>0)||(loc.indexOf('Saladas')>0)||(loc.indexOf('Tomates')>0)||(loc.indexOf('Toronja')>0))
    {
        scroll(0, 6600);
    }
    if((loc.indexOf('Zanahorias')>0))
    {
        scroll(0, 7100);
    }
    
    
}
posicion();


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

  
        window.location.href = "catalogoUsuarioRegistradoS.php"; 
        
    }
    

}

window.onload = cambiarApariencia;

