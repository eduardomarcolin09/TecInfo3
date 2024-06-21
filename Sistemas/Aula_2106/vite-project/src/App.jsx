import HelloWorld from './components/HelloWorld'
import NumeroAleatorio from './components/NumeroAleatorio'

function App() {
  return (
    <>
    <HelloWorld name='Eduardo'/>
    <NumeroAleatorio />
    </>
  )
}

// Para Vetores
// const [nome,idade] = ['Eduardo', 36]
// independente o nome, não importa, mas sim a ordem que eu estou colocando.. exemplo:
// const [idade,nome] = ['Eduardo', 36] -> idade vai receber eduardo

// Para objetos

// const {idade, nome} = pessoa
// a ordem não importa, mas o nome vai importar

export default App
