document.querySelector("form").addEventListener("submit", function(event) {
    const email = document.getElementById("email").value;
    const confirmEmail = document.getElementById("confirm_email").value;
    const senha = document.getElementById("senha").value;
    const confirmaSenha = document.getElementById("confirma_senha").value;

    if (email !== confirmEmail) {
        alert("Os emails não correspondem.");
        event.preventDefault();
    }

    if (senha !== confirmaSenha) {
        alert("A senha não corresponde.");
        event.preventDefault();
    }
});
