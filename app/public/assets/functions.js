
url = 'http://localhost:8080/api/';

function autenticar(){

    const form = new FormData();

    user = document.getElementById('user');
    pass = document.getElementById('pass');
    
    form.append('user', user.value);
    form.append('pass', pass.value);

    fetch(url + 'usuarios/verificaUsuario', {
        method: 'POST', 
        body: form
    }).then(response => response.json())
    .catch(error => console.error('Error:', error))
    .then(function (response) {
        if(response.error ){
            var myAlert = document.getElementById('message')
            var bsAlert = new bootstrap.Alert(myAlert)
        }else{
            alert("validations passed");
        }
    })
    return false;
}