const sistema = "estetica";

import { exibirMsgRetorno, enviarRequisicaoPOST } from './helper/requestHelper.js';

document.addEventListener("DOMContentLoaded", function () {
    init();
});

async function init() {
    await autenticarUsuario();
}

async function autenticarUsuario() {
 
    const btnLogin = document.getElementById("btnLogin");

    btnLogin.addEventListener("click", async () => {
 
        const email = document.getElementById("email").value;
        const senha = document.getElementById("senha").value;
        const acaoAjax = "funcionarioAcessarSistema";

        if (email === "" || senha === "") {
            exibirMsgRetorno("div_retorno_login", "Por favor, preencha todos os campos.", "warning");
            return;
        }

        const urlRequest = 'http://localhost/github/api_estetica/core.php';
        const dadosRequest = { email, senha, acaoAjax, sistema };
        
        try {
            const retornoAPI = await enviarRequisicaoPOST(urlRequest, dadosRequest);

            const corRetorno = retornoAPI["status"] ? "success" : "danger";
            exibirMsgRetorno("div_retorno_login", retornoAPI['msg'], corRetorno);

            setTimeout(function(){

                window.location.href = "painel-administrativo.php";
        
            }, 1000)

        } catch (error) {
            console.error('Erro ao enviar requisição:', error);
            exibirMsgRetorno("div_retorno_login", "Erro ao acessar o sistema", "danger");
        }
    });
}
