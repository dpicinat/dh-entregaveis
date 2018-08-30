//aula3js Ex1
// window.onload = function() {
//     let tituloPrincipal = document.getElementById('titular')
//     tituloPrincipal.style.display = "none"
// };

//aula3js Ex2
// window.onload = function() {
//     const coruja = document.querySelector('#lechuza') 
//     coruja.style.filter = "grayscale(100%)"
// };

//aula3js Ex3
// window.onload = function() {
//     const inputs = document.querySelectorAll('input')
//     inputs.forEach(function(elemento){ 
//     elemento.style.background = 'red'
//     }) 
// };
				
				
//aula3js Ex1 - DOM - Seletores  e Atributos
// window.onload = function() {
//     const atributos = document.querySelector('#copyright')
//     console.log(atributos.attributes)
// };			
    

//aula3js Ex2 - DOM - Seletores  e Atributos
// window.onload = function() {
//     const atributos = document.querySelector(".Twitter")
//     console.log(atributos.getAttribute("href"))
// };		

//aula3js Ex3 - DOM - Seletores  e Atributos
// window.onload = function() {
//     const atributos = document.querySelector(".Facebook")
//     console.log(atributos.getAttribute("href"))
// };	

//aula3js Ex4 - DOM - Seletores  e Atributos
// window.onload = function() {
//     const atributos = document.querySelector(".Youtube")
//     console.log(atributos.setAttribute("href","https://www.youtube.com/channel/UCRQdwmWMhTcqDFjPT4UPZYA"))
// };	

// //aula3js Ex5 - DOM - Seletores  e Atributos
// window.onload = function() {
//     const atributos = document.querySelector("form")
//     console.log(atributos.hasAttribute("action"))
// };	

//aula3js Ex6 - DOM - Seletores  e Atributos
// window.onload = function() {
//     const atributos = document.querySelector("form")
//     atributos.removeAttribute("url")
//     atributos.setAttribute("action","http://www.digitalhouse.com" )
//     console.log(atributos)
// };	

//aula3js Ex7 - DOM - Seletores  e Atributos
// window.onload = function() {
//     let tituloPrincipal = document.querySelector('h2')
//     tituloPrincipal.style.color = 'red'
// };

//aula3js Ex8 - DOM - Seletores  e Atributos
// window.onload = function() {
//     let icons = document.querySelectorAll('.icon')
//     icons.forEach(function(elemento){ 
//     elemento.style.color = 'blue'
//     })
// };


//aula3js Ex1 - Elementos
// window.onload = function() {
//     var btn = document.createElement("a");
//     const someCoruja = document.querySelector("#lechuza")
//     const u8 = document.querySelector(".u8")
//     btn.setAttribute("class","button big scrolly")
//     u8.appendChild(btn)
//     btn.onclick = function(){
//     someCoruja.style.display = "none"
//     }
// };