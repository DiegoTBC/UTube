<?php $titulo = 'Login'; $_SERVER['PATH_INFO'] = '/login'; $textoBotao = 'Entrar';
require __DIR__ . '/../inicio.php'?>

<div class="container d-flex justify-content-center" style="height: 100vh; width: 100vh">
    <div class="align-self-center" style="width: 50vh; height: 50vh">
        <form action="" class="needs-validation" novalidate style="width: 100%;">
            <?php if ($_SERVER['PATH_INFO'] === '/cadastrar' && !isset($_SESSION['logado'])): ?>
            <div class="input-group mb-3">
                <input type="nome" class="form-control shadow-sm w-45" id="text" name="nome" placeholder="Nome" required style="border-width: 0px 0px 1px 0px; border-radius: 0px; margin-right: 10px">
                <input type="sobrenome" class="form-control shadow-sm w-45" id="text" name="sobrenome" placeholder="Sobrenome" required style="border-width: 0px 0px 1px 0px; border-radius: 0px;">
            </div>
            <?php endif;?>
            <div class="mb-3">
                <input type="email" class="form-control shadow-sm" id="email" name="email" placeholder="E-mail" required style="border-width: 0px 0px 1px 0px; border-radius: 0px;">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control shadow-sm" id="senha" name="senha" placeholder="Senha" required style="border-width: 0px 0px 1px 0px; border-radius: 0px">
            </div>
            <?php if ($_SERVER['PATH_INFO'] === '/cadastrar' && !isset($_SESSION['logado'])): ?>
            <div class="mb-3">
                <input type="password" class="form-control shadow-sm" id="senha" name="senha" placeholder="Repita a senha" required style="border-width: 0px 0px 1px 0px; border-radius: 0px">
            </div>
            <?php endif;?>
            <div class="col-12 text-center">
                <button class="btn btn-outline-light shadow text-success" type="submit" ><?= $textoBotao?></button>
                <?php if ($_SERVER['PATH_INFO'] === '/cadastrar' && !isset($_SESSION['logado'])): ?>
                <a href="/login" class="btn btn-outline-light shadow text-danger" type="submit" style="margin-left: 15px;">Cancelar</a>
                <?php endif;?>
            </div>
        </form>
        <br>
        <?php if ($_SERVER['PATH_INFO'] === '/login'): ?>
        <div>
            <p class="text-center">Ainda não possui uma conta?</p>
            <p class="text-center"><b><a href="/cadastrar" style="text-decoration: none; color: inherit;">Clique aqui</a></b> e cadastra-se.</p>
        </div>
        <?php endif;?>
    </div>
</div>


<?php require __DIR__ . '/../valida-formulario.php'?>

<?php require __DIR__ . '/../fim.php'?>