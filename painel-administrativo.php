<?php session_start(); if ( isset($_SESSION['email']) === false ) { header('Location:  index.php'); } ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Painel Administrativo | Thaistar Estética</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/painel-administrativo.css" />
</head>
<body>

    <div class="container">

        <h2>Painel Administrativo</h2>
    
        <div class="icon-container">
    
            <div class="icon-box">
                <i class="fas fa-chart-bar"></i>
                <p>Relatórios</p>
            </div>
        
            <div class="icon-box">
                <i class="fas fa-clipboard-list"></i>
                <p>Agendamentos</p>
            </div>
        
            <div class="icon-box">
                <i class="fas fa-cog"></i>
                <p>Configurações</p>
            </div>
        
            <div class="icon-box" id="btnLogout">
                <i class="fas fa-sign-out-alt"></i>
                <p>Sair</p>
            </div>
        
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script type="module" src="assets/js/painel-administrativo.js"></script>

</body>
</html>
