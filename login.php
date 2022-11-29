<?php
include 'bootstrap/header.php';
include 'class.php';
session_start();

// crio a sessao para poder utilizar as funções, de modo a não precisar criar outras páginas.
if (isset($_SESSION)) {
    $_SESSION['user'] = new Usuario;
}
// verifico se há alguma dado submitido, se sim eu chamo a função logar.
if (isset($_POST['login'])) {
    $_SESSION['user']->Logar();
}

?>

<div class="container">
    <div class="row">
        <div class="col col-sm-4 offset-4 g-5">
            <form action="" method="post">
                <h3 class="mb-3">Login</h3>
                <div class="form-floating mb-3">
                    <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">E-mail</label>
                </div>
                <div class="form-floating">
                    <input name="senha" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Senha</label>
                </div>            
                <button name='login' class="btn btn-danger mt-3">Acessar conta</button>
            </form>
        </div>
    </div>
</div>

<?php
include 'bootstrap/footer.php';
?>