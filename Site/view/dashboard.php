<div class="container mt-5 mb-5">

    <!-- Titre -->
    <div class="row justify-content-center text-center">
        <h2 class="titles-pages">TABLEAU DE BORD</h2>
        <div class="col-4"><hr></div>
    </div>

    <!-- Recherche utilisateurs -->
    <div class="row justify-content-center mt-5">
        <div class="col-7">
            <div class="row justify-content-between">
                <div class="col-3"><h3>Comptes</h3></div>
                <div class="col-6 d-flex align-items-center">
                    <input type="text" class="form-control">
                    <i class="bi bi-search research-account"></i>
                </div>
            </div>

            <div class="row justify-content-center mt-4">
                <table class="table table-hover text-center">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Utilisateurs</th>
                            <th colspan=2 scope="col" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">1</td>
                            <td>Mark</td>
                            <td class="d-flex justify-content-end">
                                <select class="form-select form-role" aria-label="Default select example">
                                    <option selected>Choisir un rôle</option>
                                    <option value="1">Administrateur</option>
                                    <option value="2">Utilisateur</option>
                                </select>
                                <button class="btn"><i class="bi bi-check-circle"></i></button>
                            </td>
                            <td>
                                <button class="btn"><i class="bi bi-trash3-fill"></i></button>
                            </td>
                        </tr> 
                        <!-- A supprimer -->
                        <tr>
                            <td scope="row">2</td>
                            <td>Juan</td>
                            <td class="d-flex justify-content-end">
                                <select class="form-select form-role" aria-label="Default select example">
                                    <option selected>Choisir un rôle</option>
                                    <option value="1">Administrateur</option>
                                    <option value="2">Utilisateur</option>
                                </select>
                                <button class="btn"><i class="bi bi-check-circle"></i></button>
                            </td>
                            <td>
                                <button class="btn"><i class="bi bi-trash3-fill"></i></button>
                            </td>
                        </tr> 
                        <!-- FIN -->
                    </tbody>
                </table>
            </div>

            <br>

            <!-- Recherche tags -->
            <div class="row justify-content-between mt-5">
                <div class="col-3"><h3>Tags</h3></div>
                <div class="col-6 d-flex align-items-center">
                    <input type="text" class="form-control">
                    <i class="bi bi-plus-circle research-tags"></i>
                </div>
            </div>

            <div class="row justify-content-center mt-4">
                <table class="table table-hover text-center">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Tags</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        
                        <tr>
                            <td scope="row">1</td>
                            <td>Nature</td>
                            <td>
                                <button class="btn"><i class="bi bi-trash3-fill"></i></button>
                            </td>
                        </tr> 
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>