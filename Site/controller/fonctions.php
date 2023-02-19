<?php
    $user1 = $_POST['user1'];
    $user2 = $_POST['user2'];
    insertFollow($bdd, $user1, $user2);
    

    $userLike = $_POST['userLike'];
    $imgLike = $_POST['imgLike'];
    insertLike($bdd, $userLike, $imgLike);

?>