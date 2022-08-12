const criarContaButton = document.getElementById('criarConta');
const loginButton = document.getElementById('login');
const logarButton = document.getElementById('logar');
const container = document.getElementById('container');
const loginNome = document.getElementById('loginNome');
const email = document.getElementsByName('email_user')[0].value;
const password = document.getElementsByName('password_user')[0].value;
const senha = document.getElementById('esqueceusenha');
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

function getName(){
    const name = document.querySelector('input').value;
    console.log("Name: " + name);
}

function logar(){
    if(email == null && password == null) {
        senha.style.color = "red"
        senha.innerText = "Preencha os campos!"
    }
}

/*function getName1(){
    console.log(email);
}*/

function getUsername(){
    const username = document.querySelector('input').value;
    loginNome.innerHTML = "<a href='#'>Goenji</a>";
    console.log(username);
}