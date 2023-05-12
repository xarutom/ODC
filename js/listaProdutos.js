        
const listaLegumes = [
    {produto: 'Moranga',categoria: 'Verdura',preco: 4.25, codproduto: 7, verduraMoranga: '../imagens/Produtos/Verdura/Moranga.png'},
    {produto: 'Alface Crespa',categoria: 'Verdura',preco: 2.9, codproduto: 8, verduraAlface: '../imagens/Produtos/Verdura/Alface Crespa.png' },
    {produto: 'Cebolinha',categoria: 'Verdura',preco: 3.5, codproduto: 9, verduraCebolinha: '../imagens/Produtos/Verdura/Cebolinha.png'},
    {produto: 'Couve',categoria: 'Verdura',preco: 2.5, codproduto: 10, verduraCouve: '../imagens/Produtos/Verdura/Couve.png' },
    {produto: 'Rabanete',categoria: 'Verdura',preco: 7.7, codproduto: 11, verduraRabenete: '../imagens/Produtos/Verdura/Rabenete.png' },
    {produto: 'Salsa',categoria: 'Verdura',preco: 3.5, codproduto: 12, verduraSalsa: '../imagens/Produtos/Verdura/Salsa.png'},
    {produto: 'Cebola Roxa',categoria: 'Verdura',preco: 3.7, codproduto: 13, legumeCebola: '../imagens/Produtos/Legume/Cebola Roxa.png' },
    {produto: 'Cenoura',categoria: 'Verdura',preco: 1.5, codproduto: 14, legumeCenoura: '../imagens/Produtos/Legume/Cenoura.png' },
    {produto: 'Mandioquinha',categoria: 'Verdura',preco: 14, codproduto: 15, legumeMandioquinha: '../imagens/Produtos/Legume/Mandioquinha.png' },
    {produto: 'Milho Verde',categoria: 'Verdura',preco: 7, codproduto: 16,legumeMilhoVerde: '../imagens/Produtos/Legume/Milho Verde.png' },
    {produto: 'Pimentão Verde',categoria: 'Verdura',preco: 3.9, codproduto: 17, legumePimentãoVerde: '../imagens/Produtos/Legume/Pimentão Verde.png'},
    {produto: 'Tomate',categoria: 'Verdura',preco: '6.9', codproduto: 18, legumeTomate: '../imagens/Produtos/Legume/Tomate.png'}
]

const listaFrutas = [
    {produto: 'Abacate', categoria: 'Fruta', preco: '6,00', codproduto: 1,fruta: '../imagens/Produtos/Fruta/Abacate.png', quantidade: 0},
    {produto: 'Abacaxi', categoria: 'Fruta', preco: '7,90',codproduto: 2 ,fruta: '../imagens/Produtos/Fruta/Abacaxi.png', quantidade: 0},
    {produto: 'Laranja', categoria: 'Fruta', preco: '0,90', codproduto: 3 ,fruta: '../imagens/Produtos/Fruta/Laranja.png', quantidade: 0},
    {produto: 'Limão', categoria: 'Fruta', preco: '0,50', codproduto: 4 ,fruta: '../imagens/Produtos/Fruta/Limão.png', quantidade: 0},
    {produto: 'Maça', categoria: 'Fruta', preco: '0,80', codproduto: 5 ,fruta: '../imagens/Produtos/Fruta/Maça.png', quantidade: 0},
    {produto: 'Morango', categoria: 'Fruta', preco: '13,00', codproduto: 6 ,fruta: '../imagens/Produtos/Fruta/Morango.png', quantidade: 0}
]



const secaoItens = document.querySelector('.list-group')
const btnRemover = document.querySelector('.botao-remover')

function  mostrarProdutos(){
    secaoItens.classList.add("secao-itens-titulo");
    secaoItens.innerHTML = "";
    listaFrutas.forEach(item => {
        secaoItens.innerHTML += `
        <li class="list-group-item d-flex justify-content-around align-items-center lista-item ">
            <div class="nome-produto">
                <img class="logo-produtos" src="${item.fruta}" alt="${item.produto}">
                <span>${item.produto}</span>
            </div>
            <div class="conteudo">
                <span class="valor-produto">R$ ${item.preco}</span> 
                <div class="badge rounded-pill itens">
                    <span class="  botao-produto" type="button" onclick="removerProduto()">-</span>
                    <span class="botao-valor">${item.quantidade}</span>
                    <span class="  botao-produto" type="button" onclick="adicionarProduto(${item.quantidade})">+</span>
                </div>
            </div>
      </li> 
          
        `
    })
}

function adicionarProduto(quantidade){
    
}

function removerProduto(){
   
}
mostrarProdutos()   

