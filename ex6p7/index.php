<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="assets/js/angular.js"></script>
  <title>ex6p7</title>
</head>
<body>
  <!-- container Bootstrap -->
    <!-- header -->
    <header>
      <div class="container text-center">
        <div class="jumbotron">
          <h1 class="display-3">PHP ex6p7</h1>
          <p class="lead">Avec le formulaire de l'exercice 5, Si des données sont passées en POST ou en GET, le formulaire ne doit pas être affiché. Par contre les données transmises doivent l'être. Dans le cas contraire, c'est l'inverse.
                            Utiliser qu'une seule page.
          </p>
            <hr class="my-2">
          </div>
      </div>
        </header>
        <!-- main -->
        <main class="text-center">
        <?php if(!empty($_POST['civility'])|| !empty($_POST['lastName']) || !empty($_POST['firstName'])){
            echo 'hey '.$_POST['civility'].' '.$_POST['lastName'].' '.$_POST['firstName'].', bonjour';
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
          <input type="submit" value="envoyaaaaaaaaaage">
         </form>
        <?php } ?>
   </main>
      <!-- scripts JQuery Popper et Bootstrap-->
      <script src="assets/js/jquery-3.4.0.min.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <!-- mon script principal -->
      <script src="assets/js/main.js"></script>
    </body>
    </html>
