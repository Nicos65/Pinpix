
<div class="container mt-5 mb-5">
  <div class="row justify-content-center">
    <div class="col-6">
      <h2 class="titles-pages">INSCRIPTION</h2>

      <form action="../controller/controller.php" method="POST">
        <div class="form-group mt-4 mb-4">
            <label for="exampleInputNom">NOM</label>
            <input type="text" class="form-control" name="nom" id="Nom" aria-describedby="nom" placeholder="Nom">
          </div>
          <div class="form-group mt-4 mb-4">
            <label for="exampleInputEmail1">EMAIL</label>
            <input type="email" class="form-control" name="mail" id="email" aria-describedby="emailHelp" placeholder="Email">
          </div>
          <div class="form-group mt-4 mb-4">
            <label for="exampleInputPassword1">MOT DE PASSE</label>
            <input type="password" class="form-control" name="mdp" id="exampleInputPassword1" placeholder="Mot de passe">
          </div>
          <div class="form-group mt-4 mb-4 justify-content-center"></div>
          <button type="submit" class="btn btn-inscription text-white">CONFIRMER</button>
        </div>
        </form>
    </div>
  </div>
</div>
