<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="assets/js/angular.js"></script>
  <title>ex5p7</title>
</head>
<body>
  <!-- container Bootstrap -->
    <!-- header -->
    <header>
      <div class="container text-center">
        <div class="jumbotron">
          <h1 class="display-3">PHP ex5p7</h1>
          <p class="lead">Créer un formulaire sur la page index.php avec :

                            Une liste déroulante pour la civilité (Mr ou Mme)
                            Un champ texte pour le nom
                            Un champ texte pour le prénom

                        Ce formulaire doit rediriger vers la page index.php.
                        Vous avez le choix de la méthode.
        </p>
            <hr class="my-2">
          </div>
      </div>
        </header>
        <!-- main -->
        <main class="text-center">
            <!--laction vide renvoie dans la même page-->
          <form action="" method="post">
               <label for="civility">Civilité:</label>
                    <select name="civility">
                        <option value="Mr">Mr.</option>
                        <option value="Mme">Mme.</option>
                    </select>   
            <div class="form-group">
              <label for="Input">Nom</label>
              <input type="text" class="form-control" name="lastName" placeholder="nom de famille">
            </div>
            <div class="form-group">
              <label for="Input2">Prénoms</label>
              <input type="text" class="form-control" name="firstName" placeholder="prénoms">
            </div>
             <input type="submit" value="envoyaaaaaaaaaage">
          </form>
            <p> Les bons br qui vont bien : </p> </br>
            <!--      le strip tags permet de ne pas afficher les balises, d'empêcher par exemple les <script>-->
         <?= $_POST['civility'].' '.$_POST['lastName'].' '.$_POST['firstName'] ?> 
            </br></br></br></br></br></br>

         </main>
      <!-- scripts JQuery Popper et Bootstrap-->
      <script src="assets/js/jquery-3.4.0.min.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <!-- mon script principal -->
      <script src="assets/js/main.js"></script>
    </body>
    </html>
