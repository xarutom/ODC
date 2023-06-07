const formulario = document.querySelector('.form')
const cep = document.getElementById('cep')
const endereco = document.getElementById('endereco')
const cidade = document.getElementById('cidade')
const bairro = document.getElementById('bairro')
const estado = document.getElementById('estado')
const complemento = document.getElementById('complemento')

formulario.addEventListener('submit' , () => {

    //evento.preventDefault()
    // console.log(evento.target.elements)

    const nome = evento.target.elements['nome']
    const sobrenome = evento.target.elements['sobrenome']
    const dataNascimento = evento.target.elements['dataNascimento']
    const celular = evento.target.elements['celular']
    const email = evento.target.elements['email']
    const senha = evento.target.elements['senha']
    const complemento = evento.target.elements['complemento']
    const numero = evento.target.elements['numero']
    
    validaCampos(nome.value, 
        sobrenome.value, 
        dataNascimento.value, 
        celular.value, email.value, 
        senha.value, complemento.value, numero.value)

       
})

function preencherCampos(){
    cep.addEventListener("focusout", () => buscaCep(cep.value))
}

async function buscaCep(cep){
    const url = `https://viacep.com.br/ws/${cep}/json/`
    const dados = await fetch(url)
    const data = await dados.json()
    .catch(error => {
        if(error == true){
            alert(`Não existe um ${error} com esse número`)
        }
    })
    console.log(data)

    cep.value = data.cep
    endereco.value = data.logradouro
    cidade.value = data.localidade
    bairro.value = data.bairro
    estado.value = data.uf
    complemento.value = data.complemento
    
}


function validaCampos(campoNome, campoSobrenome, campoNascimento, campoCelular, campoEmail, campoSenha, campoComplemento, campoNumero){

    const camposForm = [{
        nome: campoNome,
        sobrenome: campoSobrenome,
        dataNascimento: campoNascimento,
        celular: campoCelular,
        email: campoEmail,
        senha: campoSenha,
        complemento: campoComplemento,
        numero: campoNumero
    }]

    console.log(camposForm)

    for(let i = 0; i < camposForm.length; i++){
        if(camposForm[i].nome == "" && camposForm[i].sobrenome == "" && camposForm[i].dataNascimento == "" && camposForm[i].email == "" && camposForm[i].senha == "" && camposForm[i].complemento === "" && camposForm[i].campoNumero === "" ) {
            alert("Os campos devem ser preenchidos!.")
        }
    }
}

preencherCampos()

