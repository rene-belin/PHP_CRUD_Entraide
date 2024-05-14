<?php
require_once("components/header.php");
require_once("components/navbar.php");
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Ajouter une annonce</h1>
            <form action="" class="form-group mt-5">
                <div class="form-group">
                    <input type="text" name="title" class="form-control mt-3" placeholder="Entre un titre">
                </div>
                <div class="form-group">
                    <input type="text" name="image" class="form-control mt-3" placeholder="Entre une URL">
                </div>
                <div class="form-group">
                    <textarea name="description" class="form-control mt-3" placeholder="Entrez une description"></textarea>
                </div>
                <div class="form-group">
                    <select name="location" class="form-control mt-3">
                        <option value="bordeaux" class=" mt-3">Bordeaux</option>
                        <option value="paris" class=" mt-3">Paris</option>
                        <option value="lyon" class=" mt-3">Lyon</option>
                        <option value="caen" class=" mt-3">Caen</option>
                    </select>
                </div>
                <input type="submit" value="Créer mon annonce" class="btn btn-primary mt-3">
            </form>
        </div>
    </div>
</div>

<?php
require_once("components/footer.php");
?>