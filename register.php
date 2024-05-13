<?php
require_once("components/header.php");
?>


<body>
    <div id="form" class="container-fluid">
        <div class="row pt-5 mx-5">
            <form action="" class="col-md-6">
                <h1 class="">Créer un compte</h1>
                <div class="form-group mt-4">
                    <input type="text" name="pseudo" class="form-control" placeholder="Entrez votre pseudo">
                </div>
                <div class="form-group mt-3">
                    <input type="password" name="password" class="form-control" placeholder="Entrez votre password">
                </div>
                <div class="form-group mt-3">
                    <input type="password" name="confirmPassword" class="form-control" placeholder="Confirmer votre password">
                </div>
                <div class="form-group form-check mt-3">
                    <input type="checkbox" name="role" id="role" class="form-check-input">
                    <label for="role" class="part">Je souhaite participer en entraide !</label>
                </div>
                <div class="form-group mt-3">
                    <a href="login.php" class="btn btn-warning">Connexion</a>
                    <button type="submit" value="Créer mon compte" class="btn btn-primary">Créez mon compte</button>
                </form>
            </div>
            <div class="col-md-6 text-center">
                <img src="./dist/images/pngegg.png" height="300" width="300" alt="logo_entraide">
            </div>
        </div>
    </div>

<?php
require_once("components/footer.php");
?>