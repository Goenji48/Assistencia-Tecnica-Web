const criarContaButton = document.getElementById('criarConta');
const loginButton = document.getElementById('login');
const logarButton = document.getElementById('logar');
const container = document.getElementById('container');
const loginNome = document.getElementById('loginNome');
const email = document.getElementsByName('email_user')[0].value;
const password = document.getElementsByName('password_user')[0].value;
const senha = document.getElementById('esqueceusenha');


var rg = document.getElementById('rg');
var phone = document.getElementById('phone');
var cep = document.getElementById('cep');
/*const email = document.getElementById('email').value;*/

criarContaButton.addEventListener("click", addContainer);
loginButton.addEventListener("click", removeContainer);
/*logarButton.addEventListener("click", getName1);*/
    
function addContainer(){
    container.classList.add("right-panel-active");
}

function removeContainer(){
    container.classList.remove("right-panel-active")
}


rg.addEventListener('keypress', autoRgInput);
rg.addEventListener('input', validateRg);
phone.addEventListener('keypress', autoPhoneInput);
phone.addEventListener('input', validatePhone);
cep.addEventListener('keypress', autoCepInput);
cep.addEventListener('input', validateCep);

function validateRg(){
    let validade = rg.value;
    if(validade === "00.000.000-0" ||
    validade === "11.111.111-1" ||
    validade === "22.222.222-2" ||
    validade === "33.333.333-3" ||
    validade === "44.444.444-4" ||
    validade === "55.555.555-5" ||
    validade ==="66.666.666-6" ||
    validade === "77.777.777-7" ||
    validade === "88.888.888-8" ||
    validade === "99.999.999-9") {
        rg.style.color = "red";
        rg.style.borderColor = "red";
        rg.style.boxShadow = "0 0 12px 0 red"
        rg.value = "";
        alert("RG Inválido")
    } else {
        rg.style.color = "black";
        rg.style.borderColor = "#0077ff";
        rg.style.boxShadow = "none";
        rg.addEventListener('focus', (event) =>{
            rg.style.borderColor = "#0077ff";
            rg.style.boxShadow = "0 0 12px 0 #0077ff";
            rg.style.transition = "0.5s";
        });
    }
}
function autoRgInput(){
    let length = rg.value.length;
    if(length === 2 || length === 6){
        rg.value += "."
    }

    if(length === 10){
        rg.value += "-"
    }
}

function validatePhone(){
    let validate = phone.value;
    if(validate === "(00) 00000-0000" ||
    validate === "(11) 11111-1111" ||
    validate === "(22) 22222-2222" ||
    validate === "(33) 33333-3333" ||
    validate === "(44) 44444-4444" ||
    validate === "(55) 55555-5555" ||
    validate === "(66) 66666-6666" ||
    validate === "(77) 77777-7777" ||
    validate === "(88) 88888-8888" ||
    validate === "(99) 99999-9999"){
        phone.style.color = "red";
        phone.style.borderColor = "red";
        phone.style.boxShadow = "0 0 12px 0 red"
        phone.value = "";
        alert("Telefone Inválido")
    } else {
        phone.style.color = "black";
        phone.style.borderColor = "#0077ff";
        phone.style.boxShadow = "none";
        phone.addEventListener('focus', (event) =>{
            phone.style.borderColor = "#0077ff";
            phone.style.boxShadow = "0 0 12px 0 #0077ff";
            phone.style.transition = "0.5s";
        });
    }
}

function autoPhoneInput(){
    let length = phone.value.length;
    if(length === 0){
        phone.value += "("
    }

    if(length === 3){
        phone.value += ") "
    }

    if(length === 10){
        phone.value += "-"
    }
}

function validateCep(){
    let validate = cep.value;
    if(validate === "00000-000" ||
    validate === "11111-111" ||
    validate === "22222-222" ||
    validate === "33333-333" ||
    validate === "44444-444" ||
    validate === "55555-555" ||
    validate === "66666-666" ||
    validate === "77777-777" ||
    validate === "88888-888" ||
    validate === "99999-999"){
        cep.style.color = "red";
        cep.style.borderColor = "red";
        cep.style.boxShadow = "0 0 12px 0 red"
        cep.value = "";
        alert("CEP Inválido")
    } else {
        cep.style.color = "black";
        cep.style.borderColor = "#0077ff";
        cep.style.boxShadow = "none";
        cep.addEventListener('focus', (event) =>{
            cep.style.borderColor = "#0077ff";
            cep.style.boxShadow = "0 0 12px 0 #0077ff";
            cep.style.transition = "0.5s";
        });
    }
}

function autoCepInput() {
    let length = cep.value.length;
    if(length === 5 || length === 6){
        cep.value += "-"
        }
}

