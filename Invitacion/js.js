const opcion2=document.querySelector('#nono');
const opcion=document.querySelector('#yes');
let imagen=document.querySelector('#emoji');
contador=0;
function avisar(){
    if (contador>=1){
        const child = document.querySelector('.caritas_add');
        const throwawayNode = imagen.removeChild(child);
        contador=0;
    }
    if (contador==0){
        contador+=1;
        let img=document.createElement('img');
        img.src='emoji_feliz.png';
        img.className='caritas_add';
        imagen.appendChild(img)

    }
}

function enviar_formulario(){
    
}