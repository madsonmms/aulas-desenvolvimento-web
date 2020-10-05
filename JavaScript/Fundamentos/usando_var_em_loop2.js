const funcs = []

for (var i = 0; i < 10; i++) {
    funcs.push(function() {
        console.log(i)
    }) 
}

funcs[2]()
funcs[8]()

//var por não possuir escopo de bloco vai causar o erro no armazenamento
//da variavel nos indices indicados