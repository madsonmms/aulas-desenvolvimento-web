//[ min, max ] destructuring de um array

function rand([ min = 0, max = 1000 ]) {
    const valor = Math.random() * (max - min) + min
    return Math.floor(valor)
}

//maneiras de chamar um destructuring de função de array
console.log(rand([50, 40])) 
//diferente do objeto aqui não tem chamada de objeto
//apenas passagem de valores
console.log(rand([992]))
console.log(rand([, 10]))
console.log(rand([]))
console.log(rand())