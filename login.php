<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vérification de l'identifiant</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                         class="img-fluid" alt="Phone image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <h3>Identification</h3>
                    <p class="mb-4">Votre identifiant : <?php echo $_POST['email']; ?></p>
                    <p class="mb-4">Votre mot de passe : <?php echo $_POST['password']; ?></p>
                    <p class="mb-4">Votre mot de passe haché : <?php echo password_hash($_POST['password'], PASSWORD_DEFAULT); ?></p>
                    <p class="mb-4">Rester connecté : <?php echo isset($_POST['rester'])?'Oui':'Non'; ?></p>
                </div>
            </div>
        </div>
    </section>
</div>
</body>
</html>