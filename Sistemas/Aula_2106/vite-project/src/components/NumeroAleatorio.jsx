import { useState } from "react"

const NumeroAleatorio = () => {
    const [n, setN] = useState(0)
    const [backgroundColor, setBackgroundColor] = useState('red')
    const [controle, setControle] = useState(null)

    const gerarAleatorio = () => {
        const aux = Math.round(Math.random() * 100)
        setN( (aux < 10 ? '0' : '' )+ aux)
    }

    const fundoAleatorio = () => {  
        const numeroRGB = Math.round(Math.random() * 255)
        const numeroRGB2 = Math.round(Math.random() * 255)
        const numeroRGB3 = Math.round(Math.random() * 255)
        setBackgroundColor(`rgb(${numeroRGB},${numeroRGB2},${numeroRGB3})`)
    }

    const inicio = () => {
        setControle(setInterval(fundoAleatorio, 1000))
    }

    const fim = () => {
        clearInterval(controle)
    }
    return (
        <> 
        <div style={{padding:'20px', backgroundColor}}>{n}</div>
        <button onClick={gerarAleatorio} type="button">Gerar</button>
        <button onClick={fundoAleatorio} type="button">Trocar Cor</button>
        <button onClick={inicio} type="button">Inicio trtrtr</button>
        <button onClick={fim} type="button">Fim trtrtr</button>
        </>
    )
}

export default NumeroAleatorio