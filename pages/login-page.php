<?php include '../includes/conn.php' ?>
<?php include '../templates/head.php' ?>

<?php session_start(); ?>
<div class="form_box login" href="#inicio" style="
    margin: 150px;
    display: flex;
    justify-content: center;
    align-items: center;
"> <br><br><br>

    <form action="../includes/logear.php" method="POST">
        <h2>Iniciar Sesión</h2>
        <!-- <div class="input_box">
            <span class="icon"></span>
            <input type="name" name="namelg" id="name" required>
            <label>Name</label>
        </div> -->
        <div class="input_box">
            <span class="icon"></span>
            <input type="email" name="usuariolg" id="email" required>
            <label>Email</label>
        </div>
        <div class="input_box">
            <span class="icon"></span>
            <input type="password" name="passlg" id="pass" required>
            <label>Password</label>
        </div>

        <input type="submit" class="btnr_btnlg" value="Iniciar Sesión">

        <div class="form-inicio">
            <p>Todavia no tienes tu cuenta?
                <a href="../pages/register-page.php" class="resgistrar_link">Registrate</a>
            </p>
        </div>
    </form>
</div>

<?php include '../templates/scripts.php' ?>