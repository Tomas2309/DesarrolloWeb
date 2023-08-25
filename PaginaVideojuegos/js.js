//CREAR PAGINA DE INFO DE CADA PRODUCTO
const producto=document.querySelectorAll('.productos');
let nombre=(producto[0].children[1].children[0].textContent);
const texto=document.querySelector("#titulo-info");
const aaa=nombre;
console.log(aaa);
texto.textContent=nombre;