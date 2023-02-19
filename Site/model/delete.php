<?php
function deleteImg($bdd, $id_image, $url_image)
{
    try {
        //On supprime l'image de la galerie
        $req = $bdd->prepare(
            "DELETE * FROM images WHERE id_image = :id_image and url_image = :url_image"
        );
        $req->execute(array(
            "id_image" => $id_image,
            "url_image" => $url_image
        ));
        return $req;
    } catch (Exception $e) {
        die("error : " . $e->getMessage());
    }
}
