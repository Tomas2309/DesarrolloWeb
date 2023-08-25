"use strict";

const datos={
    nombre:'',
    email:'',
    edad:'',
    nacionalidad:'',
    horario:'',
    mensaje:''
}

const nombre=document.querySelector('#nombre');
const email=document.querySelector('#email');
const edad=document.querySelector('#edad');
const nacionalidad=document.querySelector('#nacionalidad');
const horario=document.querySelector('#horario');
const mensaje=document.querySelector('#mensaje');

nombre.addEventListener('input',leerTexto);
email.addEventListener('input',leerTexto);
edad.addEventListener('input',leerTexto);
nacionalidad.addEventListener('input',leerTexto);
horario.addEventListener('input',leerTexto);
mensaje.addEventListener('input',leerTexto);

function leerTexto(e){
    console.log('Escribiendo...');
    datos[e.target.id]=e.target.value;
    console.log(datos);
}

const enviar=document.querySelector('.formulario');
enviar.addEventListener('submit',function(e){
    e.preventDefault();
    const{nombre,email,edad,nacionalidad,horario,mensaje}=datos;
    if(nombre===""||email===""||edad===""||nacionalidad===""||horario===""||mensaje===""){
        mostrarError(mensaje);
        return;
    }
    mostrarMensaje(mensaje);
    if(nombre=="Tomas"){
        saludar(nombre);
    }
})

function saludar(nombre){
    const saludo=document.createElement('P');
    const abc="Hola "+nombre;
    saludo.textContent=abc;
    saludo.classList.add('saludo');
    enviar.appendChild(saludo);
    setTimeout(()=>{
        saludo.remove();
    },4000);
}

function mostrarError(){
    const error=document.createElement('P');
    const abc="Todos los campos del formulario deben completarse";
    error.textContent=abc;
    error.classList.add('error');
    enviar.appendChild(error);
    setTimeout(()=>{
        error.remove();
    },4000);
}
function mostrarMensaje(){
    const alerta=document.createElement('P');
    const abc="Mensaje Enviado";
    alerta.textContent=abc;
    alerta.classList.add('alerta');
    enviar.appendChild(alerta);
    setTimeout(()=>{
        alerta.remove();
    },4000);
}