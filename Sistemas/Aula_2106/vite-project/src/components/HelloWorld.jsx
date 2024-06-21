
import './estilo.css'

const style = {
    color: 'blue',
    backgroundColor: 'red'
}

const HelloWorld = ({name}) => {
    // console.log(props) - desestruturando o objeto
    // const {name} = props
    console.log(name)

    // Pode ser.. 
    // return <p style={{color: 'blue' , backgroundColor: 'red'}} className='hello-world'>Hello, World!</p>
    return <p style={style} className='hello-world'>Hello, {name}!</p>
}

export default HelloWorld