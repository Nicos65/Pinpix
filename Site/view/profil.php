<div class="container mt-5">

    <div class="row justify-content-center">
        <div class="col-2 text-center">
            <img src="/pinpix/site/assets/ressources/img/no-avatar.png" alt="" class="avatar">
        </div>
        <div class="col-6">
            <div class="row">
                <div class="col-3">
                    <h2><?= $info["name_user"] ?></h2>
                </div>
                <div class="col-1 d-flex justify-content-center align-items-center">
                    <h2><i class="bi bi-suit-heart align-self-center"></i></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-5 fw-bold">
                    <a href="" class="color-dark a-hover" id="link-follows" data-bs-toggle="modal" data-bs-target="#modal-follows-followers"><?= $info["nb_Follow"] ?> Follows</a>
                </div>
            </div>
            <div class="row">
                <div class="col-5 fw-bold">
                    <a href="" class="color-dark a-hover" data-bs-toggle="modal" data-bs-target="#modal-follows-followers"><?= $info["nb_Followers"] ?> Followers</a>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4">
                    <?= $info["bio_user"]?>
                </div>
            </div>
        </div>
    </div>

    <br><br>

    <div class="row mt-5">
        <div class="col-12">
            <div class="element mb-5">
                <h2 class="profil-gallery-title"><a href="pinpix/site/controller/controller.php?page=galerie" class="text-dark">Galerie</a></h2>

                <div class="top"></div>
                <div class="left"></div>
                <div class="bottom"></div>
                <div class="right"></div>
                
                <div class="gallery-images">
                    
                    <!-- -------------APPEL PHP------------- -->
                    <?php foreach($info["image"] as $key) :?>
                    <div class="box d-flex flex-column">
                        <div class="d-flex justify-content-end">
                            <p><?= $key["like"]?><i class="bi bi-hand-thumbs-up-fill"></i></p>
                        </div>
                        <img src="../<?= $key["url"]?>" alt="">
                    </div>
                    <?php endforeach?>
                    <!-- -------------FIN------------- -->
                    

                </div>


                <!-- Button modal -->
                <button type="button" class="add-image" data-bs-toggle="modal" data-bs-target="#modal-add-image">
                    <i class="bi bi-plus-square-fill"></i>
                </button>

            </div>
        </div>
    </div>
</div>

    <!-- Modal add image -->
    <div class="modal fade" id="modal-add-image" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-uppercase" id="exampleModalLongTitle">
                        <i class="bi bi-image-fill"></i>
                        Ajouter une image
                    </h5>
                </div>
                <form action="controller.php?page=profil" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group mt-2">
                            <label for="tags_image">Tags</label>
                            <select class="form-select" id="tags_image" name="tags_image">
                                <?php foreach(getAllTag($bdd) as $key) :?>
                                <option><?= $key[0] ?></option>
                                <?php endforeach?>
                            </select>
                        </div>
                        <div class="form-group mt-2">
                            <label for="upload_image" class="custom-file-label">Fichier</label>
                            <input type="file" class="form-control form-control-file" name="upload_image">
                        </div>
                        <div class="form-group mt-2">
                            <label for="description_image">Description</label>
                            <textarea name="description_image" cols="30" rows="6" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="cancel_image">Annuler</button>
                        <button type="submit" name="submit" class="btn" id="submit_image">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal display follows and followers  -->
    <div class="modal fade" id="modal-follows-followers" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body">

                    <ul class="nav nav-pills mb-3 justify-content-around" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-follows-tab" data-toggle="pill" href="#pills-follows" role="tab" aria-controls="pills-home" aria-selected="true">Follows</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-followers-tab" data-toggle="pill" href="#pills-followers" role="tab" aria-controls="pills-profile" aria-selected="false">Followers</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-follows" role="tabpanel">
                            <ul class="list-unstyled mt-4">
                                <li class="d-flex justify-content-between align-items-center">
                                    <a href="" class="color-dark a-hover">Follow1</a>
                                    <i class="bi bi-suit-heart"></i>
                                    <!-- Si la personne est suivie, changer icône ->
                                    <i class="bi bi-suit-heart-fill"></i> -->
                                </li>
                                <hr>
                                <!-- A EFFACER PLUS TARD -->
                                <li class="d-flex justify-content-between align-items-center">
                                    <a href="" class="color-dark a-hover">Follow2</a>
                                    <i class="bi bi-suit-heart"></i>
                                </li>
                                <hr>
                                <li class="d-flex justify-content-between align-items-center">
                                    <a href="" class="color-dark a-hover">Follow3</a>
                                    <i class="bi bi-suit-heart"></i>
                                </li>
                                <hr>
                                <li class="d-flex justify-content-between align-items-center">
                                    <a href="" class="color-dark a-hover">Follow4</a>
                                    <i class="bi bi-suit-heart"></i>
                                </li>
                                <hr>
                                <!-- FIN -->
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="pills-followers" role="tabpanel">
                            <ul class="list-unstyled mt-4">
                                <!-- -------------APPEL PHP------------- -->
                                <li class="d-flex justify-content-between align-items-center">
                                    <a href="" class="color-dark a-hover">Follower1</a>
                                    <i class="bi bi-suit-heart"></i>
                                    <!-- Si la personne est suivie, changer icône ->
                                    <i class="bi bi-suit-heart-fill"></i> -->
                                </li>
                                <hr>
                                <!-- -------------FIN------------- -->

                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

<?php
    $script = "/pinpix/site/assets/js/follow-tab.js";
?>