<?php

function login($conn, $name, $password)
{
    //Agafem tota la info de la BD del user amb el mail igual al parametre
    $sql_iniciSessio= "SELECT * FROM usuaris WHERE nom = '$name' and contraseña = '$password'";
    $result = $conn->query($sql_iniciSessio);
    $login = $result->fetch_assoc();

    //Devuelve 1 si la contraseña y el hash coinciden, 0 de lo contrario.
    if ($login['contraseña'] == $password)
    {
        session_start();
        $_SESSION['nom'] = $login['nom'];
        $validat=true;
        
    }
    else
    {
        $validat=false;
    }

    return $validat;
}

?>