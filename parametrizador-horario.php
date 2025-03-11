<?php session_start(); if (!isset($_SESSION['email'])) { header('Location: index.php'); } ?>

<!DOCTYPE html>
<html lang="pt-br">
    
    <head>
        <title>Thaistar Estética | Parametrizador Horário</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/style.css" />
    </head>
    
    <body>

        <div class="container mt-3">
    
            <div class="textos text-center mb-3">

                <h2 class="mb-2">Parametrização de Horários</h2>
                <p>Parametrize os seus horarios de atendimentos para os dias da semana (Segunda - Sexta), Sábado, Domingo e Datas Especificas.</p>
            
            </div>

            <form id="formParametrizador">
                <div class="accordion" id="accordionExample">
                    <div class="card">

                        <div class="card-header collapsed" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn" type="button" data-toggle="collapse" data-target="#diaSemana" aria-expanded="true" aria-controls="diaSemana">
                                    Segunda à Sexta
                                </button>
                            </h2>
                        </div>

                        <div id="diaSemana" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="row p-3">
                                    <div class="form-group col-md-4">
                                        <label for="horaInicioSegundaSexta">Hora Inicio:</label>
                                        <input type="time" class="form-control" id="horaInicioSegundaSexta" />
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="horaFimSegundaSexta">Hora Fim:</label>
                                        <input type="time" class="form-control" id="horaFimSegundaSexta" />
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="intervaloSegundaSexta">Intervalo (minutos):</label>
                                        <input type="number" min="5" class="form-control" id="intervaloSegundaSexta" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#sabado" aria-expanded="false" aria-controls="sabado">
                                    Sábado
                                </button>
                            </h2>
                        </div>

                        <div id="sabado" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="row p-3">
                                    <div class="form-group col-md-4">
                                        <label for="horaInicioSabado">Hora Inicio:</label>
                                        <input type="time" class="form-control" id="horaInicioSabado" />
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="horaFimSabado">Hora Fim:</label>
                                        <input type="time" class="form-control" id="horaFimSabado" />
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="intervaloSabado">Intervalo (minutos):</label>
                                        <input type="number" min="5" class="form-control" id="intervaloSabado" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#domingo" aria-expanded="false" aria-controls="domingo">
                                    Domingo
                                </button>
                            </h2>
                        </div>

                        <div id="domingo" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="row p-3">
                                    <div class="form-group col-md-4">
                                        <label for="horaInicioDomingo">Hora Inicio:</label>
                                        <input type="time" class="form-control" id="horaInicioDomingo" />
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="horaFimDomingo">Hora Fim:</label>
                                        <input type="time" class="form-control" id="horaFimDomingo" />
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="intervaloDomingo">Intervalo (minutos):</label>
                                        <input type="number" min="5" class="form-control" id="intervaloDomingo" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#datasEspecificas" aria-expanded="false" aria-controls="datasEspecificas">
                                    Datas Específicas
                                </button>
                            </h2>
                        </div>

                        <div id="datasEspecificas" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                <span class="mb-4">
                                    <i id="btnAdicionarCamposDataEspecifica" class="fa-solid fa-plus btn btn-primary w-100"></i>
                                </span>

                                <div id="cardDataEspecifica" class="mb-2"></div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </form>

            <button id="btnParametrizador" class="btn btn-primary mt-2 mb-3 w-100">Parametrizar</button>
       
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <script type="module" src="assets/js/parametrizador-horario/data-especifica.js"></script>
        <script type="module" src="assets/js/parametrizador-horario/carregar-parametrizador.js"></script>

    </body>
</html>