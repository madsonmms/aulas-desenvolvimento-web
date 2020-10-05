var number = 1

{
    {
        {
            {
                let number = 2
                console.log('dentro = ', number)
            }
        }
    }
}

console.log('fora = ', number)

//escopo let = global, function e bloco, ou seja, a variavel 
// nao é substituida e coexiste dentro do escopo