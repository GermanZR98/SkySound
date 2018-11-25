<html>
<body>
    <?php
    //Inicia la sesión, la vacia y por último la destruye
    session_start();
    session_unset();
    session_destroy();

    header("Location:../index.php");   
    ?>
</body>
</html>