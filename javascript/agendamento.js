const agendarButton = document.getElementById('agendar');
const container = document.getElementById('container');
const voltarButton = document.getElementById('voltar');


agendarButton.addEventListener('click', agendado);
voltarButton.addEventListener('click', voltarParaPaginaPrincipal)

function agendado(){
    container.classList.add("painel-esquerdo-ativado");
}

function voltarParaPaginaPrincipal(){
    window.location.href = "/index.html";
}
