const funcs = []

for (let i = 0; i < 10; i++) {
    funcs.push(function() {
        console.log(i)
    }) 
}

funcs[2]()
funcs[8]()

//let por possuir escopo de bloco vai armazenar o valor correto
//pois tem consciencia de onde foi armazenada