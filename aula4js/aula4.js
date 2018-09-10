
//Aula4js Ex2
botao.onclick=function(){
    alert("Olá")
};

//Aula4js Ex3
botao2.onclick=function(){
    document.body.style.background = 'green';
}

//Aula4js Ex4
code.onmouseover=function(){
    let elemento = document.getElementById("p");
    elemento.innerHTML = "Estou vendo imagem";  
}


//Aula4js Ex5
code.onclick=function(){
    let elemento = document.getElementById("p");
    elemento.innerHTML = "Estou clicando na imagem";  
}

//Aula4js Ex6
function mudacor(){
    this.style.background = 'red'
}
document.body.addEventListener('click', mudacor)

//Aula4js Ex7

document.body.removeEventListener('click', mudacor)
