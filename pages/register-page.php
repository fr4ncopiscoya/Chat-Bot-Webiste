<?php include '../includes/conn.php' ?>
<?php include '../templates/head.php' ?>


<div class="form_box registracion" style="
    margin: 150px;
    display: flex;
    justify-content: center;
    align-items: center;
"> <br><br>
    <a href="#registrar"></a>
    <form action="../includes/registrar.php" method="POST">
        <h2>Registrate</h2>
        <div class="input_box">
            <span class="icon"></span>
            <input type="text" name="namerg" id="nombre" pattern="[A-Za-z]+" required>
            <label>Nombre</label>
        </div>
        <div class="input_box">
            <span class="icon"></span>
            <input type="number" name="dnirg" id="dni" pattern="[0-9]+" required>
            <label>DNI</label>
        </div>
        <div class="input_box">
            <span class="icon"></span>
            <input type="email" name="usuariorg" id="email" required>
            <label>Email</label>
        </div>
        <div class="input_box">
            <span class="icon"></span>
            <input type="password" name="passrg" id="pass" required>
            <label>Password</label>
        </div>
        <a href=""></a>
        <input type="submit" class="btnr_btnlg" value="Enviar">
        <div class="form_iniciar">
            <p>¿Tienes una cuenta?
                <a href="../pages/login-page.php" class="inicia_link">Inicia Sesión</a>
            </p>
        </div>
    </form>
</div>
<?php include '../templates/scripts.php' ?>