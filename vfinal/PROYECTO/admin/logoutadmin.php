<html>
<body>
    <?php
    //Igual que el de usuario normal, te cierra la sesión de admin y te envía al login de admin
    session_start();
    session_unset();
    session_destroy();

    header("Location:loginadmin.php");   
    ?>
</body>
</html>