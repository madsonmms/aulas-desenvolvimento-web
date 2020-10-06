//função onde está o this

const pessoa = {
    saudacao: 'Bom dia!',
    falar() {
        console.log(this.saudacao)
    }
}

//funciona
pessoa.falar()

//não funciona
const falar = pessoa.falar
falar() // conflito entre paradigmas: funcional e OO
//neste caso não funciona pois o contexto não é mais o objeto 'pessoa'

//funciona
const falar2 = pessoa.falar.bind(pessoa)
//bind: faz o contexto ser o próprio objeto