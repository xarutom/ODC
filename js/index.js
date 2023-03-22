const botaoFruta = document.querySelector('fruta')
const botaoLegume = document.querySelector('legume')
const botaoVerdura = document.querySelector('verdura')

botaoFruta.addEventListener('click', chamaFruta);
function chamaFruta(){
    window.location.href = "./SITE/ftfrutas.php";
}

