<?php
//Variable de SESSION pour faire des verifications de connexion
function verifConnexion($bdd, $user){
    $data = getAllUserById($bdd, $user["id_user"]);
    $data = $data ->fetch();
    $_SESSION["id"] = $data["id_user"];
    $_SESSION["nom"] = $data["name_user"];
    $_SESSION["role"] = $data["id_role"];
    $_SESSION["mail"] = $data["mail_user"];

}
?>