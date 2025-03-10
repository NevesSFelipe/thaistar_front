<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login | Thaistar Estética</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/style.css" />
    </head>
    <body>

        <div class="container d-flex justify-content-center align-items-center vh-100">
            <div class="row w-75 shadow-lg">

                <div class="col-md-6 d-none d-md-block p-0">
                    <img src="assets/img/foto_principal_login_adm.jpeg" alt="Imagem" class="img-fluid w-100 h-100" style="object-fit: cover;" />
                </div>
            
                <div class="col-md-6 bg-white p-5">
                    <h2 class="text-center text-info mb-4">Administrativo</h2>
                    <form>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control" id="email" placeholder="Digite seu e-mail" autocomplete="username">
                        </div>
                        <div class="form-group">
                            <label for="password">Senha</label>
                            <input type="password" class="form-control" id="senha" placeholder="Digite sua senha" autocomplete="current-password">
                        </div>
                    </form>
                    <button type="button" id="btnLogin" class="btn btn-info btn-block">Entrar</button>

                    <div class="alert mt-2 text-center" id="div_retorno_login"></div>

                </div>

            </div>
    
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <script type="module" src="assets/js/main.js"></script>

    </body>
</html>