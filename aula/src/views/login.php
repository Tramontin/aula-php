<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/comun.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>AUTENTICAÇÃO</title>
</head>
<body>
    <form class="form-login" action="#" method="post">
        <div class="login-card card">
            <div class="card-header">
                <span class="font-weight-bold">AUTENTICAÇÃO</span>
            </div>

            <div class="card-body">
                <?php include(TEMPLATE_PATH . '/messages.php') ?>
                <div class="form-group">
                    <label class="font-weight-bold" for="email">E-mail</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Digite seu e-mail" autofocus required>
                </div>

                <div class="form-group">
                    <label class="font-weight-bold" for="password">Senha</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Digite sua senha" required>
                </div>
            </div>
            
            <div class="card-footer">
                <button class="btn btn-lg btn-primary">ENTRAR</button>
            </div>
        </div>
    </form>    
</body>
</html>