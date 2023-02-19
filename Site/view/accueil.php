<div class="container mt-4 mb-4 pt-5">
    <div class="row justify-content-center text-center">
        <div class="col">
            <h2>"Des souvenirs éternels avec PinPix"</h2>
            <p>
                Rejoignez une communauté passionnée de photographie en ligne ! Avec ce site, vous pouvez partager vos plus belles photos avec le monde entier et découvrir les talents de photographes du monde entier. Suivez les galeries de vos photographes préférés, likez les photos qui vous inspirent. Créez votre propre galerie pour montrer votre créativité et votre style unique.
                Inscrivez-vous dès maintenant et faites partie d'une communauté en constante évolution de passionnés de la photographie.
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="gallery-images">

                <!-- displayImgAll($bdd, $key) -->
                <?php $objet = afficheIMGDate($bdd) ?>
                <?php foreach ($objet as $key) : $compteur = $key["compteur"]
                ?>

                    <!-- -------------APPEL PHP---------------- -->
                    <div class='box d-flex flex-column'>
                        <div class='d-flex justify-content-between'>
                            <p id='user2'> <?= $key["name_user"] . " " . $key["Nb_follower"] ?>
                                <button onclick='addFollower(this)' class='unfollow'>
                                    <i class='bi bi-suit-heart'></i>
                                </button>
                            </p>
                            <p><?= $key["Nb_like"] ?>
                                <button onclick='addLike(this)'>
                                    <i class='bi bi-hand-thumbs-up'></i>
                                </button>
                            </p>
                        </div>
                        <img src="../<?= $key["url_img"] ?>" alt='pygcvubyuyuctyg' data-bs-toggle='modal' data-bs-target='#<?= $compteur ?>' id='image_<?= $compteur ?>' class='dimension'>
                    </div>
                    <!-- -------------FIN------------- -->
                    <div class="modal fade" id="<?= $compteur ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="d-flex flex-column justify-content-center">
                                        <div class="d-flex justify-content-between">
                                            <p><?= $key["name_user"] . " " . $key["Nb_follower"] ?> <i class="bi bi-suit-heart"></i></p>
                                            <p><?= $key["Nb_like"] ?><i class="bi bi-hand-thumbs-up"></i></p>
                                        </div>
                                        <img src="../<?= $key["url_img"] ?>" alt="">
                                        <div class="d-flex justify-content-between">
                                            <p>
                                                <i class="bi bi-tags"></i>
                                                <?php $tag = $key["tags"];
                                                ?>
                                                <?php foreach ($tag as $key_2) :
                                                ?>
                                                    <?php echo $key_2[0] ?>
                                                <?php endforeach ?>
                                            </p>
                                            <p><?= $key["date_image"] ?></p>
                                        </div>
                                    </div>
                                    <div>
                                        <h3>Description</h3>
                                        <p>
                                            <?= $key["description"] ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>

</div>