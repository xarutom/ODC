const formulario = document.getElementById('form')
const cep = document.getElementById('cep')
const endereco = document.getElementById('endereco')
const numero = document.getElementById('numero')
const complemento = document.getElementById('complemento')
const localidade = document.getElementById('localidade')
const bairro = document.getElementById('bairro')

formulario.addEventListener('click' , (evento) => {
    evento.preventDefault();

    console.log(evento)
})



// Parte responsável por preencher dados de endereço do usuário
const url = fetch(`https://viacep.com.br/ws/01001000/json/`);

console.log('ok')