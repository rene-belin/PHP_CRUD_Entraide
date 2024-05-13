<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Register</title>
        <!--        CDN Bootstrap    -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!--   ma feuille de style CSS    -->
        <link rel="stylesheet" href="dist/css/style.css"/>
    </head>
    <body>
        <div class="container">
            <form action="action">
                <h1 class="mt-5">Créer un compte</h1>
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
                    <input type="checkbox" name="role" id="role"class="form-check-input" >
                    <label for="role">Je souhaite participer en entraide !</label>
                </div>
                <div class="form-group mt-3">
                    <button type="submit" value="Créer mon compte"class="btn btn-primary">Créez mon compte</button>
                </div>
            </form>
        </div>
        
<!--        CDN Bootstrap      -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
</html>