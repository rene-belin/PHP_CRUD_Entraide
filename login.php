<?php
require_once("components/header.php");
?>


<body>
    <div id="form" class="container-fluid">
        <div class="row pt-5 mx-5">
            <form action="" class="col-md-6">
                <h1 class="">Je me connecte</h1>
                <div class="form-group mt-4">
                    <input type="text" name="pseudo" class="form-control" placeholder="Entrez votre pseudo">
                </div>
                <div class="form-group mt-3">
                    <input type="password" name="password" class="form-control" placeholder="Entrez votre password">
                </div>

                <div class="form-group mt-3">
                    <a href="register.php" class="btn btn-warning">Créer un compte</a>
                    <button type="submit" value="Je me connecte" class="btn btn-primary">Créez mon compte</button>
                </form>
            </div>
            <div class="col-md-6 text-center">
                <img src="./dist/images/pngegg.png" height="300" width="300" alt="logo_entraide">
            </div>
        </div>
    </div>

    <!--        CDN Bootstrap      -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>