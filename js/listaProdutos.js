
const listaLegumes = [
    { produto: 'Moranga', categoria: 'Verdura', preco: 4.25, codproduto: 7, verduraMoranga: '../imagens/Produtos/Verdura/Moranga.png' },
    { produto: 'Alface Crespa', categoria: 'Verdura', preco: 2.9, codproduto: 8, verduraAlface: '../imagens/Produtos/Verdura/Alface Crespa.png' },
    { produto: 'Cebolinha', categoria: 'Verdura', preco: 3.5, codproduto: 9, verduraCebolinha: '../imagens/Produtos/Verdura/Cebolinha.png' },
    { produto: 'Couve', categoria: 'Verdura', preco: 2.5, codproduto: 10, verduraCouve: '../imagens/Produtos/Verdura/Couve.png' },
    { produto: 'Rabanete', categoria: 'Verdura', preco: 7.7, codproduto: 11, verduraRabenete: '../imagens/Produtos/Verdura/Rabenete.png' },
    { produto: 'Salsa', categoria: 'Verdura', preco: 3.5, codproduto: 12, verduraSalsa: '../imagens/Produtos/Verdura/Salsa.png' },
    { produto: 'Cebola Roxa', categoria: 'Verdura', preco: 3.7, codproduto: 13, legumeCebola: '../imagens/Produtos/Legume/Cebola Roxa.png' },
    { produto: 'Cenoura', categoria: 'Verdura', preco: 1.5, codproduto: 14, legumeCenoura: '../imagens/Produtos/Legume/Cenoura.png' },
    { produto: 'Mandioquinha', categoria: 'Verdura', preco: 14, codproduto: 15, legumeMandioquinha: '../imagens/Produtos/Legume/Mandioquinha.png' },
    { produto: 'Milho Verde', categoria: 'Verdura', preco: 7, codproduto: 16, legumeMilhoVerde: '../imagens/Produtos/Legume/Milho Verde.png' },
    { produto: 'Pimentão Verde', categoria: 'Verdura', preco: 3.9, codproduto: 17, legumePimentãoVerde: '../imagens/Produtos/Legume/Pimentão Verde.png' },
    { produto: 'Tomate', categoria: 'Verdura', preco: '6.9', codproduto: 18, legumeTomate: '../imagens/Produtos/Legume/Tomate.png' }
]

const listaFrutas = [
    { produto: 'Abacate', categoria: 'Fruta', preco: '6,00', codproduto: 1, fruta: '../imagens/Produtos/Fruta/Abacate.png', quantidade: 0 },
    { produto: 'Abacaxi', categoria: 'Fruta', preco: '7,90', codproduto: 2, fruta: '../imagens/Produtos/Fruta/Abacaxi.png', quantidade: 0 },
    { produto: 'Laranja', categoria: 'Fruta', preco: '0,90', codproduto: 3, fruta: '../imagens/Produtos/Fruta/Laranja.png', quantidade: 0 },
    { produto: 'Limão', categoria: 'Fruta', preco: '0,50', codproduto: 4, fruta: '../imagens/Produtos/Fruta/Limão.png', quantidade: 0 },
    { produto: 'Maça', categoria: 'Fruta', preco: '0,80', codproduto: 5, fruta: '../imagens/Produtos/Fruta/Maça.png', quantidade: 0 },
    { produto: 'Morango', categoria: 'Fruta', preco: '13,00', codproduto: 6, fruta: '../imagens/Produtos/Fruta/Morango.png', quantidade: 0 }
]



const secaoItens = document.querySelector('tbody')
const btnRemover = document.querySelector('.botao-remover')

function mostrarProdutos() {
    secaoItens.classList.add("secao-itens-titulo");
    secaoItens.innerHTML = "";
    listaFrutas.forEach(item => {
        secaoItens.innerHTML += `
        <tr>
            <td>
                <div class="product">
                    <img class="logo-produto" src="${item.fruta}" alt="" />
                    <div style="text-align: center" class="info">
                        <div class="name">${item.produto}</div>
                        <div class="category">Categoria</div>
                        <div class="category">${item.categoria}</div>
                    </div>
                </div>
            </td>
            <td>R$ ${item.preco}</td>
            <td>
                <div class="qty">
                    <button><i class="bx bx-minus"></i></button>
                    <span>0</span>
                    <button><i class="bx bx-plus"></i></button>
                </div>
            </td>
            <td>R$ 240</td>
            <td>
                <button class="remove"><i class="bx bx-x"></i></button>
            </td>
       </tr>
        `
    })
}


mostrarProdutos()

function criaModal(){
    const body = document.querySelector("body")
    const modal = document.querySelector(".container-modal")
    body.style.opacity = '0.5'
    body.style.animation = 'animate'
    body.style.boxShadow = '1rem 0.5rem 1rem 0rem'
    body.style.animationDuration = '1s'
    modal.style.display = 'block'
    body.style.background = '#fff'

}  

function fecharModal(){
    const modal = document.querySelector(".container-modal")
    const body = document.querySelector("body")
    body.style.opacity = ''
    body.style.background = ''
    modal.style.display = 'none'
}   

