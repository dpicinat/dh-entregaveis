let quadrado = function (a,b){
    return a ** b
}
//EX1
let resultado = quadrado(3,2)   
console.log('Exercício 2',resultado)

//Ex3
function atribuicao(a) {
    return a
   }
   let numero = 5
   console.log('Exercício 3',numero)

// let nome = function(){


// }
// nome()

//Ex4
function trianguloRetangulo(ladoA, ladoB) {
    function hipotenusa() {
        return (ladoA ** 2) + (ladoB ** 2)
    }
    return Math.sqrt(hipotenusa())
}

let resultadoHipotenusa = trianguloRetangulo(3,2)

console.log('Exercício 4',resultadoHipotenusa)

//Ex5
function meuSanduiche(p1, p2, Callback){
    console.log('estou comendo um sanduíche de:'+ p1+' '+p2)
    setTimeout(function(){
        Callback()
    },2000)
}

function complemento(){
    console.log('terminei de comer meu sanduíche')
}

meuSanduiche('mortadela','queijo',complemento)


//ARRAYS
function multiplosSete(){

    numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 16, 18, 19, 20]

    //ARRAYS - ex1
    // numeros.forEach(function(value, index){ 

    //     if(value %7 === 0){
    //         console.log('Os número múltiplos de 7 são' + value ) 
    //     }
    // })  

    //ARRAYS - ex2
    let resultado = numeros.map(function(numero) {
        return Math.sqrt(numero);
       });

    console.log (resultado)
       
}

multiplosSete()


function detetive(){

    enigma =
    ["l",1,"a",2,2,5,"p",5,7,5,3,"e",6,"r",7,6,5,3,2,1,"s",9,9,9,6,"e",2,"v",5,"e",3,
    "r",2,"a",1,6,4,1,2,"n",2,"c",3,5,5,5,7,"i",4,"a",5,2,1,3,"e",6,"s",7,"l",4,"a",3
    ,"c",2,3,1,5,3,2,"l",3,"a",4,"v",5,"e",6];

    let resultado = enigma.filter(function(numero) {
        if(typeof numero ==="string"){
            return (numero);
        }
        
        return typeof numero === "number"
        ?Acc + Atual 
        :Acc
        
       });



}
