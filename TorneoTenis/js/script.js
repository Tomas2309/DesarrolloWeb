const datos={
    nombre:"",
    apellido:"",
    edad:"",
    altura:"",
    peso:"",
    dni:"",
    email:""
}
const nombre=document.querySelector('#nombre');
const apellido=document.querySelector('#apellido');
const edad=document.querySelector('#edad');
const altura=document.querySelector('#altura');
const peso=document.querySelector('#peso');
const dni=document.querySelector('#dni');
const email=document.querySelector('#email');

nombre.addEventListener('input', leerTexto);
apellido.addEventListener('input',leerTexto);
edad.addEventListener('input',leerTexto);
altura.addEventListener('input', leerTexto);
peso.addEventListener('input',leerTexto);
dni.addEventListener('input',leerTexto);
email.addEventListener('input', leerTexto);


function leerTexto(e){
    console.log('escribiendo...');
    datos[e.target.id]=e.target.value;
    console.log(datos);
}
const formulario=document.querySelector('.inscripcion-formulario');
formulario.addEventListener('submit',function(event) {
    event.preventDefault();

    const{nombre,apellido,edad,altura,peso,dni,email}=datos;

    if(nombre==''||apellido==''||edad==''||altura==''||peso==''||email==''||dni=='') {
        mostrarError('Todos los campos deben ser completados');
        return;
    }
    mostrarMensaje('Mensaje enviado correctamente');
});

function mostrarError(mensaje){
    const error=document.createElement('P');
    error.textContent=mensaje;
    error.classList.add('form-mensaje-incorrecto');
    formulario.appendChild(error);  
    setTimeout(()=>{
        error.remove();
    },5000);

}
function mostrarMensaje(mensaje){
    const alerta=document.createElement('P');
    alerta.textContent=mensaje;
    alerta.classList.add('form-mensaje-correcto');
    formulario.appendChild(alerta);
    setTimeout(()=>{
        alerta.remove();
    },5000);

}

