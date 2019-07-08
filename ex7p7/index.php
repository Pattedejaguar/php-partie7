<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="assets/js/angular.js"></script>
  <title>ex7P7</title>
</head>
<body>
  <!-- container Bootstrap -->
  <div class="container text-center">
    <!-- header -->
    <header>
      <div class="jumbotron">
        <h1 class="display-3">PHP ex7p7</h1>
        <p class="lead">Au formulaire de l'exercice 5, ajouter un champ d'envoi de fichier. Afficher en plus de ce qui est demandé à l'exercice 6, le nom et l'extension du fichier.</p>
        <hr class="my-2">
      </div>
    </header>
    <!-- main -->
    <main class="text-center">
       <?php   // On récupère le chemin du fichier
          $path = pathinfo($_POST['file']);
          // le nom du fichier
          $filename = $path['filename'];
          // et l'extension
          $extension = $path['extension'];
       if(!empty($_POST['civility'])|| !empty($_POST['lastName']) || !empty($_POST['firstName'])){
            echo 'hey '.$_POST['civility'].' '.$_POST['lastName'].' '.$_POST['firstName'].', bonjour'
           
      ?>
            <p>Nom du fichier : <?= $filename?></p>
            <p>Extention du fichier : <?= $extension ?></p>
        <?php
        }else{
        ?>
        <form action="index.php" method="post">
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
           <div>
               <label> Document : </label> 
               <input type="file" name="file">
           </div>
          <input type="submit" value="envoyaaaaaaaaaage">
         </form>
        <?php } ?>
      </main>
    <!-- footer -->
    <footer>

    </footer>
  </div>
  <!-- scripts JQuery Popper et Bootstrap-->
  <script src="assets/js/jquery-3.4.0.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- mon script principal -->
  <script src="assets/js/main.js"></script>
</body>
</html>
