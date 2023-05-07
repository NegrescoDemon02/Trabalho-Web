var entrada = document.querySelector('h1')
var texto = entrada.innerHTML
var index = 0

const escrever = () => {
    entrada.innerHTML = entrada.innerHTML.replace('|', '')
    if( texto.length > index){
        if( index == 0){
            entrada.innerHTML = texto.charAt(index)
        }else{
            entrada.innerHTML += texto.charAt(index)
        }
        entrada.innerHTML += '|'
        index++
        setTimeout(escrever, 50)
    }
}

escrever()