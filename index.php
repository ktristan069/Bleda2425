<!DOCTYPE html>
<html land="en">
    <head>
        <meta charset="UTF-8">
        <title>BP TSDP example</title>
        <link rel="stylesheet" href="styles.css">
        <?php
        if (isset($_POST['submitLogin'])){
            $login =$_POST['user'];
            $password =$_POST['1234'];
            }
        ?>
    </head>
    <body>
        <div class="container loginContainer">
            <h2>Iniciar sessió</h2>
            <form method="post" action="">
                <div class="mb-3">
                    <label for="usuari" class="form-label">Usuari:</label>
                    <input type="text" class="form-control" id="contrasenya" name="user" required>
                </div>
				<div class="mb-3">
					<label for="contrasenya" class="form-label">Contrasenya:</label>
					<input type="password" class="form-control" id="contrasenya" name="1234" required>
				</div>
                <button type="submit" class="btn btn-primary" name="submitLogin">Iniciar sessió</button>
                <?php
                if ($login == 'test' && $password == '1234') {
                    echo '*** Benvingut  ***';
                } else {
                    echo'*** Credencials incorrectes ***';
                }
                ?>
            <hr>
            <?php
            if ($login == '' ) {
                echo '«Cal introduir un nom d usuari per a iniciar sessió.»';
            }
            ?>
            <hr>
            <?php
            if($password == '' ) {
                echo '«Cal introduir un mot clau per a iniciar sessió.»';
            }
                ?>
            </form>
    </body>
</html>