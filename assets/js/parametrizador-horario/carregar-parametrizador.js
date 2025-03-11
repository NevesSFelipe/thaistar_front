import { adicionarCamposDataEspecifica } from './data-especifica.js';
import { enviarRequisicaoPOST } from '../helper/requestHelper.js';

document.addEventListener("DOMContentLoaded", function() {
    init();
});

async function init() {
    await carregarHorariosParametrizados();
}

async function carregarHorariosParametrizados() {

    const acaoAjax = "carregarHorariosParametrizados";

    const urlRequest = 'http://localhost/github/api_estetica/core.php';
    const dadosRequest = { acaoAjax };
    
    try {

        const retornoAPI = await enviarRequisicaoPOST(urlRequest, dadosRequest);

        if (retornoAPI.status && retornoAPI.msg.status && Array.isArray(retornoAPI.msg.horariosParametrizados)) {

            retornoAPI.msg.horariosParametrizados.forEach((horario) => {
                
                const { dia_semana, horarios_parametrizados } = horario;

                if (dia_semana) {

                    const idDiaSemana = dia_semana.charAt(0).toUpperCase() + dia_semana.slice(1);

                    const horarios = Array.isArray(horarios_parametrizados) || typeof horarios_parametrizados === 'object'
                        ? horarios_parametrizados
                        : JSON.parse(horarios_parametrizados);

                    if (["segundaSexta", "sabado", "domingo"].includes(dia_semana)) {
                        preencherValoresHorarios(idDiaSemana, horarios);
                    }

                    if (dia_semana === "dataEspecifica") {

                        horarios.forEach((valor, chave) => {

                            adicionarCamposDataEspecifica();

                            document.getElementById(`dataEspecifica_${chave}`).value = valor.data;
                            document.getElementById(`horaInicioDataEspecifica_${chave}`).value = valor.horaInicio;
                            document.getElementById(`horaFimDataEspecifica_${chave}`).value = valor.horaFim;
                            document.getElementById(`intervaloDataEspecifica_${chave}`).value = valor.intervalo;

                        });
                    }
                }
            });

        } else {
            console.error("Erro: Dados da API estão incompletos ou inválidos.");
        }

    } catch (error) {
        console.error('Erro ao enviar requisição:', error);
    }
}

function preencherValoresHorarios(diaSemana, horarioSemana) {

    document.getElementById(`horaInicio${diaSemana}`).value = horarioSemana.horaInicio;
    document.getElementById(`horaFim${diaSemana}`).value = horarioSemana.horaFim;
    document.getElementById(`intervalo${diaSemana}`).value = horarioSemana.intervalo;

}