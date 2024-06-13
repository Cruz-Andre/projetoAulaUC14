//Validação dos campos
document.querySelector('form').addEventListener('submit', function(event) {

    // // Validador para o nome
    // let nome = document.getElementById('nomeCompleto').value;
    // let regexNome = /^[A-Za-zÀ-ÿ\s'`-]+$/;

    // if (!regexNome.test(nome)) {
    //     alert('O nome contém caracteres inválidos.');
    //     event.preventDefault();
    // }
    
    // Validador para o textarea
    let textarea = document.getElementById('mensagem');
    let regexTextArea = /^[A-Za-z0-9\sÀ-ÿ?!@$%(),.:]+$/;

    if (!regexTextArea.test(textarea.value)) {
        alert('Apenas caracteres alfanuméricos são permitidos na área da mensagem.');
        event.preventDefault();
    }
});


// function validar() {
//     var campo1 = document.getElementById("emailInput");
//     var campo2 = document.getElementById("confEmailInput");
//     if (campo1.value != campo2.value) {
//         campo2.setCustomValidity("O e-mail não confere");
//         campo2.validity = false;
//     } else {
//         campo2.setCustomValidity("");
//         campo2.validity = true;
//     }

// }