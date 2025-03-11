const sistema = "estetica";

import { enviarRequisicaoPOST } from '../helper/requestHelper.js';

document.addEventListener("DOMContentLoaded", function () {
    init();
});

async function init() {
    await deslogarSistema();
}

async function deslogarSistema() {
 
    const btnLogout = document.getElementById("btnLogout");

    btnLogout.addEventListener("click", async () => {

        const desejaSair = window.confirm("Tem certeza que deseja sair do sistema?");
 
        if ( !desejaSair ) return;

        const acaoAjax = "funcionarioSairSistema";

        const urlRequest = 'http://localhost/github/api_estetica/core.php';
        const dadosRequest = { acaoAjax, sistema };
        
        try {

            const retornoAPI = await enviarRequisicaoPOST(urlRequest, dadosRequest);

            alert(retornoAPI['msg']);

            setTimeout(function(){

                window.location.href = "index.php";
        
            }, 1000)

        } catch (error) {
            console.error('Erro ao enviar requisição:', error);
        }
    });
}