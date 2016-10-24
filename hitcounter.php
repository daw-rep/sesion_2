<?php
$sesion_status = session_status();
session_start();
$sesion_status = session_status();

if (isset($_SESSION['counter'])) {
    $_SESSION['counter'] += 1;
} else {
    $_SESSION['counter'] = 1;
}
$msg = "Has visitado esta página " . $_SESSION['counter'];
$msg .= " veces en esta sesión.";
?>
<html>

    <head>
        <title>Setting up a PHP session</title>
    </head>

    <body>
        <h1> <?php echo ( $msg ); ?></h1>
        <form action="hitcounter.php" method ="POST">
          <!--  <input type="submit" name="destroy" value="DESTRUYE"/>
            <input type="submit" name="reset" value="RESETEA"/> -->
            <input type="submit" name="refresh" value="REFRESCA"/>
        </form>
    </body>
</html>
