<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="assets/js/angular.js"></script>
  <title>ex1p7</title>
</head>
  <div class="container text-center">
    <!-- header -->
       <div class="container text-center">
        <div class="jumbotron bg-dark text-white rounded">
          <hr class="border-info">
          <h1 class="display-3">PHP ex1p7</h1>
          <p class="lead">Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode GET.</p>
            <hr class="border-info">
            <hr class="border-info">
          </div>
        </header>
        <!-- main -->
        <body class="text-center">
         <form class="bg-dark text-white" action="user.php" method="get">
            <div class="form-group">
              <label for="formGroupExampleInput">Nom</label>
              <input type="text" class="form-control bg-info" id="lastName" placeholder="nom de famille">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">Prénoms</label>
              <input type="text" class="form-control bg-info" id="firstName" placeholder="prénoms">
             <input type="submit" class="btn-lg btn-outline-dark bg-info rounded mt-5 rounded-circle font-weight-bold" value="envoyaaaaaaaaaage">
            </div>
          </form>
        </body>
      </div>
      <!-- scripts JQuery Popper et Bootstrap-->
      <script src="assets/js/jquery-3.4.0.min.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <!-- mon script principal -->
      <script src="assets/js/main.js"></script>
    </body>
    </html>
