const listaProdutos = [
    //Fruta
    { produto: 'Abacate', categoria: 'Fruta', preco: '6,00', codproduto: 1, imagemProduto: '../imagens/Produtos/Fruta/Abacate.png', quantidade: 0 },
    { produto: 'Abacaxi', categoria: 'Fruta', preco: '7,90', codproduto: 2, imagemProduto: '../imagens/Produtos/Fruta/Abacaxi.png', quantidade: 0 },
    { produto: 'Laranja', categoria: 'Fruta', preco: '0,90', codproduto: 3, imagemProduto: '../imagens/Produtos/Fruta/Laranja.png', quantidade: 0 },
    { produto: 'Limão', categoria: 'Fruta', preco: '0,50', codproduto: 4, imagemProduto: '../imagens/Produtos/Fruta/Limão.png', quantidade: 0 },
    { produto: 'Maça', categoria: 'Fruta', preco: '0,80', codproduto: 5, imagemProduto: '../imagens/Produtos/Fruta/Maça.png', quantidade: 0 },
    { produto: 'Morango', categoria: 'Fruta', preco: '13,00', codproduto: 6, imagemProduto: '../imagens/Produtos/Fruta/Morango.png', quantidade: 0 },
    //Verdura
    // { produto: 'Moranga', categoria: 'Verdura', preco: 4.25, codproduto: 7, imagemProduto: '../imagens/Produtos/Verdura/Moranga.png' },
    // { produto: 'Alface Crespa', categoria: 'Verdura', preco: 2.9, codproduto: 8, imagemProduto: '../imagens/Produtos/Verdura/Alface Crespa.png' },
    // { produto: 'Cebolinha', categoria: 'Verdura', preco: 3.5, codproduto: 9, imagemProduto: '../imagens/Produtos/Verdura/Cebolinha.png' },
    // { produto: 'Couve', categoria: 'Verdura', preco: 2.5, codproduto: 10, imagemProduto: '../imagens/Produtos/Verdura/Couve.png' },
    // { produto: 'Rabanete', categoria: 'Verdura', preco: 7.7, codproduto: 11, imagemProduto: '../imagens/Produtos/Verdura/Rabanete.png' },
    // { produto: 'Salsa', categoria: 'Verdura', preco: 3.5, codproduto: 12, imagemProduto: '../imagens/Produtos/Verdura/Salsa.png' },
    // Legume
    // { produto: 'Cebola Roxa', categoria: 'Legume', preco: 3.7, codproduto: 13, imagemProduto: '../imagens/Produtos/Legume/Cebola Roxa.png' },
    // { produto: 'Cenoura', categoria: 'Legume', preco: 1.5, codproduto: 14, imagemProduto: '../imagens/Produtos/Legume/Cenoura.png' },
    // { produto: 'Mandioquinha', categoria: 'Legume', preco: 14, codproduto: 15, imagemProduto: '../imagens/Produtos/Legume/Mandioquinha.png' },
    // { produto: 'Milho Verde', categoria: 'Legume', preco: 7, codproduto: 16, imagemProduto: '../imagens/Produtos/Legume/Milho Verde.png' },
    // { produto: 'Pimentão Verde', categoria: 'Legume', preco: 3.9, codproduto: 17, imagemProduto: '../imagens/Produtos/Legume/Pimentão Verde.png' },
    // { produto: 'Tomate', categoria: 'Legume', preco: '6.9', codproduto: 18, imagemProduto: '../imagens/Produtos/Legume/Tomate.png' }
]



const secaoItens = document.querySelector('tbody')
import { mais, menos, criaModal, fecharModal } from "./modal.js";
mais
menos
criaModal
fecharModal

function mostrarProdutos() {
    secaoItens.classList.add("secao-itens-titulo");
    secaoItens.innerHTML = "";
    listaProdutos.forEach((item, posicao) => {
        const verifica = item.imagemProduto.length > 0 && item.produto.length > 0 && item.categoria.length > 0 && item.preco.length > 0 ?
        
        secaoItens.innerHTML += `
            <tr>
                <td>
                    <div class="product">
                        <img class="logo-produto" src="${item.imagemProduto}" alt="" />
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
                    <button ${posicao} onclick="menos()" class="a">-</button>
                        <input  min=0 class="campo-valor" type="number">
                    <button ${posicao} onclick="mais()" class="b">+</button>
                    </div>
                </td>
                <td>R$ 0.0</td>
                <td>
                    <button class="remove"><i class="bx bx-x"></i></button>
                </td>
            </tr>
        `
        : ''

        return verifica 
      
    })
}

mostrarProdutos()

import listaDeProdutos from "./produtos.js";
const botaoFrutas = document.querySelector(".filtro-frutas")
const botaoLegumes = document.querySelector(".filtro-legumes")
const botaoVerduras = document.querySelector(".filtro-verduras")
const botaoTodosOsProdutos = document.querySelector(".filtro-todos-os-produtos")


botaoFrutas.addEventListener('click', produtoFrutas)
botaoLegumes.addEventListener('click', produtoLegumes)
botaoVerduras.addEventListener('click', produtoVerdura)
botaoTodosOsProdutos.addEventListener('click', todosOsProdutos)

function produtoFrutas() {
    const secaoItens = document.querySelector('tbody')
    secaoItens.innerHTML = ""

    for (let i = 0; i < listaDeProdutos.fruta.length; i++) {
        secaoItens.innerHTML += `
            <tr>
                <td>
                    <div class="product">
                        <img class="logo-produto" src="${listaDeProdutos.fruta[i].imagemProduto}" alt="${listaDeProdutos.fruta[i].produto}">
                        <div style="text-align: center" class="info">
                            <div class="name">${listaDeProdutos.fruta[i].produto}</div>
                            <div class="category">Categoria</div>
                            <div class="category">${listaDeProdutos.fruta[1].categoria}</div>
                        </div>
                    </div>
                </td>   
                <td>R$ ${listaDeProdutos.fruta[i].preco}</td>
                <td>
                    <div class="qty">
                    <button ${i} onclick="menos()" class="a">-</button>
                        <input  min=0 class="campo-valor" type="number">
                    <button ${i} onclick="mais()" class="b">+</button>
                    </div>
                </td>
                <td>R$ 0.0</td>
                <td>
                    <button class="remove"><i class="bx bx-x"></i></button>
                </td>
            </tr>
        `
    }
}

function produtoLegumes() {
    const secaoItens = document.querySelector('tbody')
    secaoItens.innerHTML = ""

    for (let i = 0; i < listaDeProdutos.legume.length; i++) {
        secaoItens.innerHTML += `
            <tr>
                <td>
                    <div class="product">
                        <img class="logo-produto" src="${listaDeProdutos.legume[i].imagemProduto}" alt="${listaDeProdutos.legume[i].produto}">
                        <div style="text-align: center" class="info">
                            <div class="name">${listaDeProdutos.legume[i].produto}</div>
                            <div class="category">Categoria</div>
                            <div class="category">${listaDeProdutos.legume[1].categoria}</div>
                        </div>
                    </div>
                </td>   
                <td>R$ ${listaDeProdutos.legume[i].preco}</td>
                <td>
                    <div class="qty">
                    <button ${i} onclick="menos()" class="a">-</button>
                        <input  min=0 class="campo-valor" type="number">
                    <button ${i} onclick="mais()" class="b">+</button>
                    </div>
                </td>
                <td>R$ 0.0</td>
                <td>
                    <button class="remove"><i class="bx bx-x"></i></button>
                </td>
            </tr>
        `
    }
}

function produtoVerdura() {
    const secaoItens = document.querySelector('tbody')
    secaoItens.innerHTML = ""

    for (let i = 0; i < listaDeProdutos.verdura.length; i++) {
        secaoItens.innerHTML += `
            <tr>
                <td>
                    <div class="product">
                        <img class="logo-produto" src="${listaDeProdutos.verdura[i].imagemProduto}" alt="${listaDeProdutos.verdura[i].produto}">
                        <div style="text-align: center" class="info">
                            <div class="name">${listaDeProdutos.verdura[i].produto}</div>
                            <div class="category">Categoria</div>
                            <div class="category">${listaDeProdutos.verdura[1].categoria}</div>
                        </div>
                    </div>
                </td>   
                <td>R$ ${listaDeProdutos.verdura[i].preco}</td>
                <td>
                    <div class="qty">
                    <button ${i} onclick="menos()" class="a">-</button>
                        <input  min=0 class="campo-valor" type="number">
                    <button ${i} onclick="mais()" class="b">+</button>
                    </div>
                </td>
                <td>R$ 0.0</td>
                <td>
                    <button class="remove"><i class="bx bx-x"></i></button>
                </td>
            </tr>
        `
    }
}

function todosOsProdutos() {
    const secaoItens = document.querySelector('tbody')
    secaoItens.innerHTML = ""
    
    for (let i = 0; i < listaDeProdutos.produto.length; i++) {
        secaoItens.innerHTML += `
            <tr>
                <td>
                    <div class="product">
                        <img class="logo-produto" src="${listaDeProdutos.produto[i].imagemProduto}" alt="${listaDeProdutos.produto[i].produto}">
                        <div style="text-align: center" class="info">
                            <div class="name">${listaDeProdutos.produto[i].produto}</div>
                            <div class="category">Categoria</div>
                            <div class="category">${listaDeProdutos.produto[i].categoria}</div>
                        </div>
                    </div>
                </td>   
                <td>R$ ${listaDeProdutos.produto[i].preco}</td>
                <td>
                    <div class="qty">
                    <button ${i} onclick="menos()" class="a">-</button>
                        <input  min=0 class="campo-valor" type="number">
                    <button ${i} onclick="mais()" class="b">+</button>
                    </div>
                </td>
                <td>R$ 0.0</td>
                <td>
                    <button class="remove"><i class="bx bx-x"></i></button>
                </td>
            </tr>
        `
    }
}



