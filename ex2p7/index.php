<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="assets/js/angular.js"></script>
  <title>ex2p7</title>
</head>
<body>
  <!-- container Bootstrap -->
  <div class="container text-center">
    <!-- header -->
    <header>
      <div class="container text-center">
        <div class="jumbotron rounded-circle bg-success">
          <h1 class="display-3">PHP ex2p7</h1>
          <p class="lead">Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode POST.</p>
            <hr class="my-5 bg-white">
          </div>
        </header>
        <!-- main -->
        <main class="text-center">
          <form action="user.php" method="post">
            <div class="form-group">
              <label for="nom">Nom</label>
              <input type="text" class="form-control" id="lastName" placeholder="nom de famille">
            </div>
            <div class="form-group">
              <label for="prenom">Prénoms</label>
              <input type="text" class="form-control" id="firstName" placeholder="prénoms">
              <input type="submit" value="envoyaaaaaaaaaage">
            </div>
          </form>
        </main>
      </div>
      <!-- scripts JQuery Popper et Bootstrap-->
      <script src="assets/js/jquery-3.4.0.min.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <!-- mon script principal -->
      <script src="assets/js/main.js"></script>
    </body>
    </html>
