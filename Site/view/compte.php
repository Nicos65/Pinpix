<div class="container">
    <form method="post">

        <!-- Modification compte -->
        <div class="row justify-content-center text-center mb-4">
            <h2 class="titles-pages">MON COMPTE</h2>
            <div class="col-4">
                <hr>
            </div>

        </div>
        <div class="resp row justify-content-center align-items-center mt-5">
            <!-- Avatar -->
            <div class="col-3 d-flex flex-column align-items-center">
                <div class="change-image-account m-2">
                    <img src="https://fastly.picsum.photos/id/639/200/250.jpg?hmac=35Ur78QpWdVJXYe4w0oX4sulN40mNmoxdNUJABatFwc" alt="">
                </div>
                <input type="file" class="form-control form-control-sm mt-3 input-upload-img" name="upload_image">
            </div>
            <!-- Infos  -->
            <div class="col-5 d-flex flex-column">
                <div class="form-group">
                    <label for="exampleInputPassword1">
                        <i class="bi bi-pencil-square"></i>
                        Nom d'utilisateur
                    </label>
                    <input type="text" class="form-control" id="exampleInputPassword1" value="default">
                </div>
                <div class="form-group mt-3">
                    <label for="exampleInputPassword1">
                        <i class="bi bi-pencil-square"></i>
                        Email
                    </label>
                    <input type="email" class="form-control" id="exampleInputPassword1" value="default">
                </div>
                <div class="form-group mt-3">
                    <label for="exampleInputPassword1">
                        <i class="bi bi-pencil-square"></i>
                        Mot de passe
                    </label>
                    <input type="password" class="form-control" id="exampleInputPassword1" value="default">
                </div>
                <div class="form-group mt-3 align-self-center">
                    <button type="submit" class="btn btn-account btn-account-cancel">Valider</button>
                    <br>
                    <button type="submit" class="btn btn-secondary btn-account">Annuler</button>
                </div>
            </div>
        </div>
        <!-- Suppression, validation, annulation -->
        <div class="row text-center">
            <div class="col-12 mt-5">

                <button type="button" class="btn btn-account-validate" data-bs-toggle="modal" data-bs-target="#myModal">Supprimer mon compte</button>

                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header align-self-center">
                                <h5 class="modal-title">Suppression définitive</h5>
                            </div>
                            <div class="modal-body text-center">
                                <p>Cette action est irréversible. Elle entraînera la suppression de toutes vos données.</p>
                                <p>Êtes-vous sûre de vouloir fermer votre compte ?</p>
                            </div>
                            <div class="modal-footer d-flex justify-content-between">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                <button type="button" class="btn btn-account btn-account-validate">Confirmer</button>
                            </div>
                            <!-- <div class="modal-header text-center">
                                    <h5 class="modal-title text-uppercase" id="exampleModalLongTitle">
                                        Confirmez la suppression du compte</h5>
                                        <br>
                                        <form action="" method="post">
                                            <button type="submit" name="submit" class="btn" id="submit_image">Confirmer</button>
                                            <button type="submit" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                        </form> -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

</form>
</div>