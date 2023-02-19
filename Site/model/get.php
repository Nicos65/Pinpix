<?php
function getMDP($bdd, $mail_user)
{

    try {
        //On recherche l id par le nom et le mdp
        $req = $bdd->prepare("SELECT pwd_user, id_user FROM users where mail_user = :mail_user");
        $req->execute(array(
            "mail_user" => $mail_user,
        ));
        return $req;
    } catch (Exception $e) {
        die("error : " . $e->getMessage());
    }
}

function getAllUserById($bdd, $id_user)
{
    try {
        //On recherche tout de l utilisateur par son id
        $req = $bdd->prepare("SELECT * FROM users where id_user = :id_user");
        $req->execute(array(
            "id_user" => $id_user
        ));
        return $req;
    } catch (Exception $e) {
        die("error : " . $e->getMessage());
    }
}
function getAllUserByName($bdd, $name_user)
{
    try {
        //On recherche tout de l utilisateur par son nom
        $req = $bdd->prepare("SELECT * FROM users where name_user = :name_user");
        $req->execute(array(
            "name_user" => $name_user
        ));
        return $req;
    } catch (Exception $e) {
        die("error : " . $e->getMessage());
    }
}

function getIdImg($bdd, $url_image)
{
    try {
        //On recherche l id de l image par son url
        $req = $bdd->prepare("SELECT id_image FROM images where url_image = :url_image");
        $req->execute(array(
            "url_image" => $url_image
        ));
        return $req;
    } catch (Exception $e) {
        die("error : " . $e->getMessage());
    }
}

function getImg($bdd, $id_gallery)
{
    try {
        //On recherche l url de l image par son id
        $req = $bdd->prepare(
            "SELECT url_image FROM images
        WHERE id_image in (SELECT id_image FROM links WHERE id_gallery = :id_gallery)"
        );
        $req->execute(array(
            "id_gallery" => $id_gallery
        ));
        return $req;
    } catch (Exception $e) {
        die("error : " . $e->getMessage());
    }
}

function getImgById($bdd, $id_image)
{
    try {
        //On recherche l url de l image par son id
        $req = $bdd->prepare(
            "SELECT url_image FROM images
        WHERE id_image = :id_image"
        );
        $req->execute(array(
            "id_image" => $id_image
        ));
        return $req;
    } catch (Exception $e) {
        die("error : " . $e->getMessage());
    }
}

function getGal($bdd, $id_user)
{
    try {
        //On recherche la gallerie d image par id de l'utilisateur
        $req = $bdd->prepare(
            "SELECT id_gallery FROM gallery
         WHERE id_gallery in (SELECT id_gallery FROM give WHERE id_user = :id_user)"
        );
        $req->execute(array(
            "id_user" => $id_user
        ));
        return $req;
    } catch (Exception $e) {
        die("error : " . $e->getMessage());
    }
}

function getIdGal($bdd, $name_gallery)
{
    try {
        //On recherche la gallerie d image par id de l'utilisateur
        $req = $bdd->prepare(
            "SELECT id_gallery FROM gallery
         WHERE name_gallery = :name_gallery"
        );
        $req->execute(array(
            "name_gallery" => $name_gallery
        ));
        return $req;
    } catch (Exception $e) {
        die("error : " . $e->getMessage());
    }
}

function getLink($bdd, $id_image, $id_gallery)
{
    try {
        //On recherche si l'image est déjà dans la galerie
        $req = $bdd->prepare(
            "SELECT id_gallery from links where id_image = :id_image and id_gallery = :id_gallery"
        );
        $req->execute(array(
            "id_image" => $id_image,
            "id_gallery" => $id_gallery
        ));
        return $req;
    } catch (Exception $e) {
        die("error : " . $e->getMessage());
    }
}

function getLike($bdd, $id_image)
{
    try {
        //On recherche le nombre de like
        $req = $bdd->prepare(
            "SELECT id_user FROM likes WHERE id_image = :id_image GROUP BY id_image "
        );
        $req->execute(array(
            "id_image" => $id_image
        ));
        return $req;
    } catch (Exception $e) {
        die("error : " . $e->getMessage());
    }
}

function getBoolLike($bdd, $id_image, $id_user)
{
    try {
        //On recherche si l'utilisateur a liker (retourne un bool)
        $req = $bdd->prepare(
            "SELECT COUNT(`id_user`)FROM `likes` WHERE id_image = :id_image AND id_user = :id_user"
        );
        $req->execute(array(
            "id_image" => $id_image,
            "id_user" => $id_user
        ));
        return $req;
    } catch (Exception $e) {
        die("error : " . $e->getMessage());
    }
}


function getfollow($bdd, $id_user_2)
{
    try {
        //On recherche le nombre de follow
        $req = $bdd->prepare(
            "SELECT id_user_1 FROM follow WHERE id_user_2 = :id_user_2 GROUP BY id_user_2"
        );
        $req->execute(array(
            "id_user_2" => $id_user_2
        ));
        return $req;
    } catch (Exception $e) {
        die("error : " . $e->getMessage());
    }
}

function getfollowers($bdd, $id_user_1)
{
    try {
        //On recherche le nombre de follow
        $req = $bdd->prepare(
            "SELECT id_user_2 FROM follow WHERE id_user_1 = :id_user_1 GROUP BY id_user_1"
        );
        $req->execute(array(
            "id_user_1" => $id_user_1
        ));
        return $req;
    } catch (Exception $e) {
        die("error : " . $e->getMessage());
    }
}

function getBoolfollow($bdd, $id_user_1, $id_user_2)
{
    try {
        //On recherche si l'utilisateur 1 a follow l'utilisateur 2 (retourne un bool)
        $req = $bdd->prepare(
            "SELECT * FROM follow WHERE id_user_1 = :id_user_1 and id_user_2 = :id_user_2"
        );
        $req->execute(array(
            "id_user_1" => $id_user_1,
            "id_user_2" => $id_user_2
        ));
        return $req;
    } catch (Exception $e) {
        die("error : " . $e->getMessage());
    }
}

function getDates($bdd, $id_image, $id_gallery)
{
    try {
        //
        $req = $bdd->prepare(
            "SELECT date_image_links FROM links WHERE id_image = :id_image AND id_gallery = :id_gallery"
        );
        $req->execute(array(
            "id_image" => $id_image,
            "id_gallery" => $id_gallery
        ));
        return $req;
    } catch (Exception $e) {
        die("error : " . $e->getMessage());
    }
}

function getDateImg($bdd)
{
    try {
        //On recherche la date de l'image
        $req = $bdd->prepare(
            "SELECT id_image, id_gallery, date_image_links FROM links ORDER BY date_image_links DESC "
        );
        $req->execute();
        return $req;
    } catch (Exception $e) {
        die("error : " . $e->getMessage());
    }
}
function getDateImgUser($bdd, $id_gallery)
{
    try {
        //On recherche la date de l'image
        $req = $bdd->prepare(
            "SELECT id_image, date_image_links FROM links where id_gallery = :id_gallery ORDER BY date_image_links DESC "
        );
        $req->execute(array(
            "id_gallery" => $id_gallery
        ));
        return $req;
    } catch (Exception $e) {
        die("error : " . $e->getMessage());
    }
}

function getImgByLike($bdd, $id_image, $id_user)
{
    try {
        //On recherche la date de l'image
        $req = $bdd->prepare(
            "SELECT * FROM images AS i INNER JOIN likes AS l ON i.id_image=l.id_image GROUP BY :id_user"
        );
        $req->execute(array(
            "id_image" => $id_image,
            "id_user" => $id_user
        ));
        return $req;
    } catch (Exception $e) {
        die("error : " . $e->getMessage());
    }
}

function getIdTag($bdd, $name_tag)
{
    try {
        //On recherche tout les tag
        $req = $bdd->prepare(
            "SELECT id_tag FROM tags WHERE name_tag like :name_tag"
        );
        $req->execute(array(
            "name_tag" => $name_tag
        ));
        return $req;
    } catch (Exception $e) {
        die("error : " . $e->getMessage());
    }
}

function getAllTag($bdd)
{
    try {
        //On recherche tout les tag
        $req = $bdd->prepare(
            "SELECT name_tag FROM tags"
        );
        $req->execute();
        return $req -> fetchAll();
    } catch (Exception $e) {
        die("error : " . $e->getMessage());
    }
}

function getAssign($bdd, $id_image)
{
    try {
        //On recherche le nombre de like
        $req = $bdd->prepare(
            "SELECT name_tag FROM assign inner join tags on tags.id_tag = assign.id_tag where id_image = :id_image"
        );
        $req->execute(array(
            "id_image" => $id_image
        ));
        return $req;
    } catch (Exception $e) {
        die("error : " . $e->getMessage());
    }
}

function getDescription($bdd, $id_image)
{
    try {
        //On recherche le nombre de like
        $req = $bdd->prepare(
            "SELECT description_links FROM links WHERE id_image = :id_image"
        );
        $req->execute(array(
            "id_image" => $id_image
        ));
        return $req;
    } catch (Exception $e) {
        die("error : " . $e->getMessage());
    }
}

function getUserbyGallery($bdd, $id_gallery)
{
    try {
        //On recherche l'id user par gallery
        $req = $bdd->prepare(
            "SELECT id_user FROM give where id_gallery = :id_gallery"
        );
        $req->execute(array(
            "id_gallery" => $id_gallery
        ));
        return $req;
    } catch (Exception $e) {
        die("error : " . $e->getMessage());
    }
}
function afficheObj($bdd)
{
    try {
        // On écrit la requête
        $sql = "SELECT * FROM users AS u INNER JOIN images AS i ON u.id_image=i.id_image";
        // On exécute la requête
        $requete = $bdd->query($sql);
        // On récupère les données
        return $requete->fetchAll();
    } catch (Exception $e) {
        die("error : " . $e->getMessage());
    }
}
