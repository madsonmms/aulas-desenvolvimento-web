var number = 1

{
    {
        {
            {
                var number = 2
                console.log('dentro = ', number)
            }
        }
    }
}

console.log('fora = ', number)

//escopo var = global e function, ou seja, a variavel 
//pode ser substituida dentro destes escopos