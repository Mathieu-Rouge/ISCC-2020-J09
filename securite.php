<?php
    $login=$_POST ['login'];
    $password=$_POST['password'];

    if ($password == "2020"){
        session_start();
        $_SESSION['id']= $login;
        setcookie('id', $_SESSION['id'], time() + 365*24*3600, null, null, false, true);
        header('Location: http://localhost:8888/ISCC-2020/ISCC-2020-J09/EX-01/mini-site-routing.php?page=1');
    }

   else{
        echo'<p>Mauvais couple identifiant / mot de passe.</p>';
        echo'<p> <a href="http://localhost:8888/ISCC-2020/ISCC-2020-J09/EX-01/connexion.php?page=connexion">Page connexion</a>';
    }
    ?>