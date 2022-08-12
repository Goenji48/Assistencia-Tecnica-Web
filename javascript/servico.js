let popup_container = document.getElementById('container')
let popup_left = document.getElementById('popup-left-background')
let card = document.getElementsByClassName('card')[0]
let card1 = document.getElementsByClassName('card1')[0]
let container_title = document.getElementById('container-title')
let container_details = document.getElementById('container-details')
let body = document.getElementsByTagName('body')[0]
let header_html = document.getElementsByClassName('header')[0]
let footer_html = document.getElementsByClassName('footer')[0]

function showDetailsComputer(){
    card.style.filter = "blur(20px)"
    card1.style.filter = "blur(20px)"
    header_html.style.filter = "blur(20px)"
    footer_html.style.filter = "blur(20px)"
    popup_container.style.opacity = 100
    popup_container.style.top = "50%"
    popup_container.style.left = "45%"
    popup_container.style.transition = 0.5
    container_title.innerText = "Computadores"
    container_details.innerHTML = "<div>" +
    "<h2>Componentes Principais:</h2>" +
    "<ul>" +
    "<li> Placa Mãe - Estimativa do Valor de Serviço: R$50 - R$300.</li>" +
    "<br/>" +
    "<li> Placa de Vídeo - Estimativa do Valor de Serviço: R$100 - R$500.</li>" +
    "<br/>" +
    "<li> Fonte de Alimentação - Estimativa do Valor de Serviço: R$30 - R$200.</li>" +
    "<br/>" +
    "<li> Limpeza Preventiva - Estimativa do Valor de Serviço: R$20 - R$90.</li>" +
    "<br/>" +
    "<li> Upgrade de Componentes - Estimativa do Valor de Serviço: R$10 - R$50.</li>" +
    "<br/>" +
    "<li> Formatação e Configuração - Estimativa do Valor de Serviço: R$30 - R$100.</li>" +
    "</ul>" +
    "</div>"
    popup_left.style.backgroundImage = "url(./img/computer-background.jpg)"
    
}

function showDetailsNotebook(){
    card.style.filter = "blur(20px)"
    card1.style.filter = "blur(20px)"
    header_html.style.filter = "blur(20px)"
    footer_html.style.filter = "blur(20px)"
    popup_container.style.opacity = 100
    popup_container.style.top = "50%"
    popup_container.style.left = "40%"
    popup_container.style.transition = 0.5
    container_title.innerText = "Notebook"
    container_details.innerHTML = "<div>" +
    "<h2> Componentes Principais:</h2>" +
    "<ul>" +
    "<li> Reparo em Geral (Caso Apresente Algum Defeito que impeça o uso do equipamento) - Estimativa do Valor de Serviço: R$130 - R$900.</li>" +
    "<br/>" +
    "<li> Limpeza Preventiva - Estimativa do Valor de Serviço: R$30 - R$100.</li>" +
    "<br/>" +
    "<li> Upgrade de Componentes (Limitações) - Estimativa do Valor de Serviço: R$20 - R$60.</li>" +
    "<br/>" +
    "<li> Formatação e Configuração - Estimativa do Valor de Serviço: R$40 - R$110.</li>" +
    "<br/>" +
    "</ul>" +
    "</div>"
    popup_left.style.backgroundImage = "url(./img/marketing-grande.jpg)"
}

function showDetailsCelulares(){
    card.style.filter = "blur(20px)"
    card1.style.filter = "blur(20px)"
    header_html.style.filter = "blur(20px)"
    footer_html.style.filter = "blur(20px)"
    popup_container.style.opacity = 100
    popup_container.style.top = "50%"
    popup_container.style.left = "30%"
    popup_container.style.transition = 0.5
    container_title.innerText = "Celulares"
    container_details.innerHTML = "<div>" +
    "<h2> Componentes Principais:</h2>" +
    "<ul>" +
    "<li> Reparo em Placa Principal - Estimativa do Valor de Serviço: R$130 - R$600.</li>" +
    "<br/>" +
    "<li> Troca da Tela - Estimativa do Valor de Serviço: R$100 - R$1000 (Contando com o produto novo).</li>" +
    "<br/>" +
    "<li> Troca da Bateria - Estimativa do Valor de Serviço: R$50 - R$350 (idem).</li>" +
    "<br/>" +
    "<li> Troca dos Acessórios (Câmeras, Alto-Falante, outros) - Estimativa do Valor de Serviço: R$30 - R$175.</li>" +
    "<br/>" +
    "</ul>" +
    "</div>"
    popup_left.style.backgroundImage = "url(./img/Battery-replacement-smartphone.jpg)"
    //popup_container.style.left = "60%"
}

function showDetailsTelevisores(){
    card.style.filter = "blur(20px)"
    card1.style.filter = "blur(20px)"
    header_html.style.filter = "blur(20px)"
    footer_html.style.filter = "blur(20px)"
    popup_container.style.opacity = 100
    popup_container.style.top = "55%"
    popup_container.style.left = "45%"
    popup_container.style.transition = 0.5
    container_title.innerText = "Televisores"
    container_details.innerHTML = "<div>" +
    "<h2> Componentes Principais:</h2>" +
    "<ul>" +
    "<li> Reparo em Placa Principal - Estimativa do Valor de Serviço: R$100 - R$400.</li>" +
    "<br/>" +
    "<li> Reparo em SubPlacas e outros - Estimativa do Valor de Serviço: R$60 - R$200.</li>" +
    "<br/>" +
    "<li> Reparo em Backlight - Estimativa do Valor de Serviço: R$100 - R$200.</li>" +
    "<br/>" +
    "</ul>" +
    "</div>"
    popup_left.style.backgroundImage = "url(./img/img-1570_orig.jpg)"
}

function showDetailsTablet(){
    card.style.filter = "blur(20px)"
    card1.style.filter = "blur(20px)"
    header_html.style.filter = "blur(20px)"
    footer_html.style.filter = "blur(20px)"
    popup_container.style.opacity = 100
    popup_container.style.top = "55%"
    popup_container.style.left = "40%"
    popup_container.style.transition = 0.5
    container_title.innerText = "Tablets"
    container_details.innerHTML = "<div>" +
    "<h2> Componentes Principais:</h2>" +
    "<ul>" +
    "<li> Reparo em Placa Principal - Estimativa do Valor de Serviço: R$110 - R$580.</li>" +
    "<br/>" +
    "<li> Troca da Tela - Estimativa do Valor de Serviço: R$200 - R$2000 (Contando com o produto novo).</li>" +
    "<br/>" +
    "<li> Troca da Bateria - Estimativa do Valor de Serviço: R$80 - R$500 (idem).</li>" +
    "<br/>" +
    "<li> Troca dos Acessórios (Câmeras, Alto-Falante, outros) - Estimativa do Valor de Serviço: R$30 - R$200.</li>" +
    "<br/>" +
    "</ul>" +
    "</div>"
    popup_left.style.backgroundImage = "url(./img/8272e0990ca648e40df0ec6b040d4d16.jpg)"
}

function showDetailsEletrodomesticos(){
    card.style.filter = "blur(20px)"
    card1.style.filter = "blur(20px)"
    header_html.style.filter = "blur(20px)"
    footer_html.style.filter = "blur(20px)"
    popup_container.style.opacity = 100
    popup_container.style.top = "55%"
    popup_container.style.left = "30%"
    popup_container.style.transition = 0.5
    container_title.innerText = "Eletrodomésticos"
    container_details.innerHTML = "<div>" +
    "<h2> Alguns Eletrodomésticos que reparamos:</h2>" +
    "<ul>" +
    "<li> Micro-ondas (Reparo em Geral): R$130 - R$410.</li>" +
    "<br/>" +
    "<li> Geladeira (Reparo no Compressor): R$110 - R$320.</li>" +
    "<br/>" +
    "<p>Em Breve iremos oferecer mais serviços...</p>"
    "</ul>" +
    "</div>"
    popup_left.style.backgroundImage = "url(./img/household-appliance-repair.jpg)"
}

function exitDetailsContainer(){
    popup_container.style.opacity = 0
    popup_container.style.translate = "scaleX(0)"
    popup_container.style.translate = "scaleY(0)"
    popup_container.style.left = "50%"
    popup_container.style.top = "55%"
    popup_container.style.transition = 0.5
    card.style.filter = "blur(0px)"
    card1.style.filter = "blur(0px)"
    header_html.style.filter = "blur(0px)"
    footer_html.style.filter = "blur(0px)"
}
