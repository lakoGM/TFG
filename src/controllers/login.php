<?php

//Carreguem els arxius necesaris
require_once(__DIR__."/../model/connectDB.php");

require_once(__DIR__."/../model/userFunctions.php");

$name = $_POST['name'];

$password=$_POST['password'];

$conn = connectDB();

$logued = login($conn, $name, $password);

include __DIR__.'/../view/header.php';

if($logued == true)
{
    echo "<section> <h2> Usuari loguejat </h2> </section>";
}
else
{
    echo "<section> <h2> Usuari o contrasenya erroni </h2>";

    echo "<a href='index.php'><button type='button'> Enrere </button></a></section>";
}

include __DIR__.'/../views/footer.php';

?>