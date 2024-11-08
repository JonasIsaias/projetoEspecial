// validação básica do usuario de login
document.getElementById('login-form').addEventListener('submit', function(event){
    const username = document.querySelector('[name=username]').value;
    const password = document.querySelector('[name=password]').value;

    if (username.trim() ==="" || password.trim() === "") {
        event.preventDefault();
        document.getElementById('error-message').innerText = 'Por favor, preencha todos os campos.';
    }
});