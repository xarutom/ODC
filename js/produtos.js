 const listaTodosOsProdutos = [
    //Fruta
    { produto: 'Abacate', categoria: 'Fruta', preco: '6,00', codproduto: 1, imagemProduto: '../imagens/Produtos/Fruta/Abacate.png', quantidade: 0 },
    { produto: 'Abacaxi', categoria: 'Fruta', preco: '7,90', codproduto: 2, imagemProduto: '../imagens/Produtos/Fruta/Abacaxi.png', quantidade: 0 },
    { produto: 'Laranja', categoria: 'Fruta', preco: '0,90', codproduto: 3, imagemProduto: '../imagens/Produtos/Fruta/Laranja.png', quantidade: 0 },
    { produto: 'Limão', categoria: 'Fruta', preco: '0,50', codproduto: 4, imagemProduto: '../imagens/Produtos/Fruta/Limão.png', quantidade: 0 },
    { produto: 'Maça', categoria: 'Fruta', preco: '0,80', codproduto: 5, imagemProduto: '../imagens/Produtos/Fruta/Maça.png', quantidade: 0 },
    { produto: 'Morango', categoria: 'Fruta', preco: '13,00', codproduto: 6, imagemProduto: '../imagens/Produtos/Fruta/Morango.png', quantidade: 0 },
    //Verdura
    { produto: 'Moranga', categoria: 'Verdura', preco: 4.25, codproduto: 7, imagemProduto: '../imagens/Produtos/Verdura/Moranga.png' },
    { produto: 'Alface Crespa', categoria: 'Verdura', preco: 2.9, codproduto: 8, imagemProduto: '../imagens/Produtos/Verdura/Alface Crespa.png' },
    { produto: 'Cebolinha', categoria: 'Verdura', preco: 3.5, codproduto: 9, imagemProduto: '../imagens/Produtos/Verdura/Cebolinha.png' },
    { produto: 'Couve', categoria: 'Verdura', preco: 2.5, codproduto: 10, imagemProduto: '../imagens/Produtos/Verdura/Couve.png' },
    { produto: 'Rabanete', categoria: 'Verdura', preco: 7.7, codproduto: 11, imagemProduto: '../imagens/Produtos/Verdura/Rabanete.png' },
    { produto: 'Salsa', categoria: 'Verdura', preco: 3.5, codproduto: 12, imagemProduto: '../imagens/Produtos/Verdura/Salsa.png' },
    // Legume
    { produto: 'Cebola Roxa', categoria: 'Legume', preco: 3.7, codproduto: 13, imagemProduto: '../imagens/Produtos/Legume/Cebola Roxa.png' },
    { produto: 'Cenoura', categoria: 'Legume', preco: 1.5, codproduto: 14, imagemProduto: '../imagens/Produtos/Legume/Cenoura.png' },
    { produto: 'Mandioquinha', categoria: 'Legume', preco: 14, codproduto: 15, imagemProduto: '../imagens/Produtos/Legume/Mandioquinha.png' },
    { produto: 'Milho Verde', categoria: 'Legume', preco: 7, codproduto: 16, imagemProduto: '../imagens/Produtos/Legume/Milho Verde.png' },
    { produto: 'Pimentão Verde', categoria: 'Legume', preco: 3.9, codproduto: 17, imagemProduto: '../imagens/Produtos/Legume/Pimentão Verde.png' },
    { produto: 'Tomate', categoria: 'Legume', preco: '6.9', codproduto: 18, imagemProduto: '../imagens/Produtos/Legume/Tomate.png' }
]


const listaFrutas = [
    { produto: 'Abacate', categoria: 'Fruta', preco: '6,00', codproduto: 1, imagemProduto: '../imagens/Produtos/Fruta/Abacate.png', quantidade: 0 },
    { produto: 'Abacaxi', categoria: 'Fruta', preco: '7,90', codproduto: 2, imagemProduto: '../imagens/Produtos/Fruta/Abacaxi.png', quantidade: 0 },
    { produto: 'Laranja', categoria: 'Fruta', preco: '0,90', codproduto: 3, imagemProduto: '../imagens/Produtos/Fruta/Laranja.png', quantidade: 0 },
    { produto: 'Limão', categoria: 'Fruta', preco: '0,50', codproduto: 4, imagemProduto: '../imagens/Produtos/Fruta/Limão.png', quantidade: 0 },
    { produto: 'Maça', categoria: 'Fruta', preco: '0,80', codproduto: 5, imagemProduto: '../imagens/Produtos/Fruta/Maça.png', quantidade: 0 },
    { produto: 'Morango', categoria: 'Fruta', preco: '13,00', codproduto: 6, imagemProduto: '../imagens/Produtos/Fruta/Morango.png', quantidade: 0 },
]

const listaLegumes = [
    { produto: 'Cebola Roxa', categoria: 'Legume', preco: 3.7, codproduto: 13, imagemProduto: '../imagens/Produtos/Legume/Cebola Roxa.png' },
    { produto: 'Cenoura', categoria: 'Legume', preco: 1.5, codproduto: 14, imagemProduto: '../imagens/Produtos/Legume/Cenoura.png' },
    { produto: 'Mandioquinha', categoria: 'Legume', preco: 14, codproduto: 15, imagemProduto: '../imagens/Produtos/Legume/Mandioquinha.png' },
    { produto: 'Milho Verde', categoria: 'Legume', preco: 7, codproduto: 16, imagemProduto: '../imagens/Produtos/Legume/Milho Verde.png' },
    { produto: 'Pimentão Verde', categoria: 'Legume', preco: 3.9, codproduto: 17, imagemProduto: '../imagens/Produtos/Legume/Pimentão Verde.png' },
    { produto: 'Tomate', categoria: 'Legume', preco: '6.9', codproduto: 18, imagemProduto: '../imagens/Produtos/Legume/Tomate.png' }
]
const listaVerduras = [
    { produto: 'Moranga', categoria: 'Verdura', preco: 4.25, codproduto: 7, imagemProduto: '../imagens/Produtos/Verdura/Moranga.png' },
    { produto: 'Alface Crespa', categoria: 'Verdura', preco: 2.9, codproduto: 8, imagemProduto: '../imagens/Produtos/Verdura/Alface Crespa.png' },
    { produto: 'Cebolinha', categoria: 'Verdura', preco: 3.5, codproduto: 9, imagemProduto: '../imagens/Produtos/Verdura/Cebolinha.png' },
    { produto: 'Couve', categoria: 'Verdura', preco: 2.5, codproduto: 10, imagemProduto: '../imagens/Produtos/Verdura/Couve.png' },
    { produto: 'Rabanete', categoria: 'Verdura', preco: 7.7, codproduto: 11, imagemProduto: '../imagens/Produtos/Verdura/Rabanete.png' },
    { produto: 'Salsa', categoria: 'Verdura', preco: 3.5, codproduto: 12, imagemProduto: '../imagens/Produtos/Verdura/Salsa.png' }
]

const listaDeProdutos = {
    produto: listaTodosOsProdutos,
    fruta: listaFrutas,
    legume: listaLegumes,
    verdura: listaVerduras
}

export default listaDeProdutos