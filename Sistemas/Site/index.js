const express = require("express"); // Método pra importar uma biblioteca 

const PORT = 3000
const app = express() // Criei um servidor

// .MÉTODO que vou usar, no caso é URL, é get, o / é o localhost
// ou , function (req,res) { }
// sempre que quer ignorar uma variável a gente usa _ 
// e se for ignorar o segundo parametro é __ e assim por diante
// ali é (req,res)

app.get('/', (_,res) => {
    res.send('Você enviou uma requisição GET!')
})

app.get('/cidade/:cidade', (req,res) => {
    console.log(req.params)
    const{cidade} = req.params
    res.send(`Você está em cidade ${cidade}`)
})

app.post('/', (_,res) => {
    res.send('Você enviou uma requisição POST!')
})

app.delete('/', (_,res) => {
    res.send('Você enviou uma requisição DELETE!')
})

app.put('/', (_,res) => {
    res.send('Você enviou uma requisição PUT!')
})

// em qual porta do computador vai chegar, função caso dê certo
app.listen(PORT, () => {
    console.log(`Servidor rodando na porta ${PORT}!`)
}) 