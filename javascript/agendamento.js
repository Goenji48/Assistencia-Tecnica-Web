const agendarButton = document.getElementById('agendar');
const container = document.getElementById('container');
const voltarButton = document.getElementById('voltar');

var date = document.getElementById('date')

var now = new Date();
let day = now.getDate();
let month = now.getMonth() + 1;
let year = now.getFullYear();

var dateNow = year + "-" + month +  "-" + day;

date.setAttribute("min", dateNow);

if(date.value > dateNow){
    agendarButton.addEventListener('click', agendado);
}

voltarButton.addEventListener('click', voltarParaPaginaPrincipal)

function autoInput(){
    
}

function agendado(){
    container.classList.add("painel-esquerdo-ativado");
}

function voltarParaPaginaPrincipal(){
    window.location.href = "./index.html";
}
