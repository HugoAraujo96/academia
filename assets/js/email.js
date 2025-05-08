document.getElementById('email').addEventListener('input', function () {
    let email = this.value;
    let aviso = document.getElementById('email-erro');

    if (email.length > 5) { // Só verifica se o email tiver tamanho suficiente
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "verifica_email.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                if (xhr.responseText === "existente") {
                    aviso.style.display = "inline"; // Mostra o aviso
                } else {
                    aviso.style.display = "none"; // Esconde o aviso
                }
            }
        };
        xhr.send("email=" + email);
    } else {
        aviso.style.display = "none"; // Esconde o aviso se o email for muito curto
    }
});
