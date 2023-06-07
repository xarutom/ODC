export function mais(){
    var atual = document.querySelector(".campo-valor").value;
    var novo = atual - (-1); //Evitando Concatenacoes
    document.querySelector(".campo-valor").value = novo;
  }
  
export  function menos(){
    var atual = document.querySelector(".campo-valor").value;
    if(atual > 0) { //evita números negativos
      var novo = atual - 1;
      document.querySelector(".campo-valor").value = novo;
    }
}


export function criaModal(){
    const body = document.querySelector("body")
    const modal = document.querySelector(".container-modal")
    body.style.opacity = '0.5'
    body.style.animation = 'animate'
    body.style.boxShadow = '1rem 0.5rem 1rem 0rem'
    body.style.animationDuration = '1s'
    modal.style.display = 'block'
    body.style.background = '#fff'

}  

export function fecharModal(){
    const modal = document.querySelector(".container-modal")
    const body = document.querySelector("body")
    body.style.opacity = ''
    body.style.background = ''
    modal.style.display = 'none'
}   

