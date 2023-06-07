const formulario = document.getElementById('form')
const cep = document.getElementById('cep')
const endereco = document.getElementById('endereco')
const complemento = document.getElementById('complemento')
const cidade = document.getElementById('cidade')
const bairro = document.getElementById('bairro')
const estado = document.getElementById('estado')

formulario.addEventListener('submit' , (evento) => {
    
    buscaCep(cep.value, bairro.value, endereco.value, cidade.value, estado.value)
   
})

function preencherCampos(){
    cep.addEventListener("focusout", () => buscaCep(cep.value))
}

async function buscaCep(cep){
    const url = `https://viacep.com.br/ws/${cep}/json/`
    const dados = await fetch(url)
    const data = await dados.json()

    cep.value = data.cep
    endereco.value = data.logradouro
    cidade.value = data.localidade
    bairro.value = data.bairro
    estado.value = data.uf
}

preencherCampos()