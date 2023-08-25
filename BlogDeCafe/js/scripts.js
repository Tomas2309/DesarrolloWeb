"use strict";

/*
//querySelector
const formulario=document.querySelector('.contacto-formulario');
formulario.textContent='TOMASSSSSSSSS';
console.log(formulario);

//querySelectorAll
const enlaces = document.querySelectorAll('.navegacion a');
enlaces[0].textContent='Enlace Tomas';
enlaces[0].classList.add('tomasa');
enlaces[0].href='http://www.google.com.ar';

//getElementById
const nombreform= document.getElementById('nombre');
console.log(nombreform);
*/

const datos={
    nombre:'',
    mail:'',
    mensaje:''
}
const nombre=document.querySelector('#nombre');
const mail=document.querySelector('#mail');
const mensaje=document.querySelector('#mensaje');

nombre.addEventListener('input',leerTexto);
mail.addEventListener('input',leerTexto);
mensaje.addEventListener('input',leerTexto);

function leerTexto(e){
    console.log('Escribiendo...');
    datos[e.target.id]=e.target.value;
    console.log(datos);
}
/**/

const btnEnviar=document.querySelector('.contacto-formulario');
btnEnviar.addEventListener('submit',function(e){
    e.preventDefault();

    const {nombre,mail,mensaje}=datos;
    if(nombre===''||mail===''||mensaje===''){
        mostrarError('Todos los campos deben ser completados');
        return;
    }
    mostrarMensaje('Mensaje enviado correctamente');
});

function mostrarError(mensaje){
    const error=document.createElement('P');
    error.textContent=mensaje;
    error.classList.add('errorform');
    btnEnviar.appendChild(error);

}

function mostrarMensaje(mensaje){
    const alerta=document.createElement('P');
    alerta.textContent=mensaje;
    alerta.classList.add('errorform');

    btnEnviar.appendChild(alerta);

}


