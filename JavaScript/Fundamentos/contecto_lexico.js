// par nome/valor
const saudacao = 'Opa' //contexto lexico 1

function exec() {
    const saudacao = 'Eae' //contexto lexico 2
    return saudacao
}

//Objetos são grupos aninhados de pares nome/valor
const cliente = {
    nome: 'Mads',
    idade: 24,
    peso: 60,
    endereco: {
        logradouro: 'Casa do chapéu',
        numero: 13
    }
}

console.log(saudacao)
console.log(exec())
console.log(cliente)

//o contexto lexico é o contexto onde o par nome/valor está inserido