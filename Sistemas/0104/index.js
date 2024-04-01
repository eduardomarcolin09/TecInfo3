const express = require("express")
const mysql = require("mysql2/promise") // chamando a biblioteca 

const PORT = 3000
const app = express() // Criei um servidor

app.get('/', async (req, res) => {
    const conn = await mysql.createConnection({
        host: 'localhost',
        user: 'root',
        database: 'aula0104'
    })
    /* console.log(conn) */
    const [resultado] = await conn.query({
        sql: "SELECT id, nome, sobrenome FROM pessoas"
    })

    // res.json(resultado.map(function(pessoa)
    //      return {
    //          id: pessoa.id,
    //          nomeCompleto: pessoa.nome + ' ' + pessoa.sobrenome
    //      }    
    // }))

    // de um jeito mais fácil.. 

    res.json(resultado.map(
        ({id, nome, sobrenome}) => (
            {id, nome, sobrenome, nomeCompleto: `${nome} ${sobrenome}`}
            )
        )
    )
})

app.post('/', (req, res) => {
    res.send("Você enviou uma requisição POST")
})

app.listen(PORT, () => {
    console.log(`Servidor rodando na porta ${PORT}!`)
})