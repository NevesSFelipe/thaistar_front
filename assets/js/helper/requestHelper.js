export async function enviarRequisicaoPOST(urlRequest, dadosRequest) {
    try {
        const response = await fetch(urlRequest, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(dadosRequest)
        });

        if (!response.ok) {
            throw new Error('Erro na requisição');
        }

        const data = await response.json();
        return data;

    } catch (error) {
        console.error('Erro:', error);
        throw error;
    }
}

export function exibirMsgRetorno(idDiv, msg, corRetorno) {

    const divExibicaoMsg = document.getElementById(idDiv);

    resetarDivMsg(divExibicaoMsg);

    divExibicaoMsg.classList.add(`alert-${corRetorno}`);

    const h6 = document.createElement("h6");
    h6.id = "textoMsg";
    h6.textContent = msg;
    divExibicaoMsg.appendChild(h6);

}


// Funções auxiliares que não devem ser importadas no programa principal
function resetarDivMsg(elementoPrincipal) {
    removerH6(elementoPrincipal);
    removerCorDiv(elementoPrincipal);
}

function removerH6(elementoPrincipal) {

    const elementoChildRemover = document.getElementById("textoMsg");
    if (elementoChildRemover) {
        elementoPrincipal.removeChild(elementoChildRemover);
    }

}

function removerCorDiv(elementoPrincipal) {

    elementoPrincipal.classList.forEach(className => {
        if (className.startsWith('alert-')) {
            elementoPrincipal.classList.remove(className);
        }
    });

}