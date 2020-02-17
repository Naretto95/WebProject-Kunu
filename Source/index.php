<?php
  session_start();

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "Tu doit d'abord te connecté";
  	header('location: register.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: register.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
  <link rel="stylesheet" href="assets/css/form-elements.css">
  <link href="assets/css/index.css" rel="stylesheet">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <title>Kunu</title>

</head>
<body>
      <!-- Navigation -->
      <div id="background-carousel" class="carousel slide" data-ride="carousel" data-interval="8000">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-flex align-items-center justify-content-center min-vh-100" src="assets/css/images/nature.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-flex align-items-center justify-content-center min-vh-100" src="assets/css/images/nature2.jpg" alt="Second slide">
          </div>
          <div class="carousel-item" >
            <img class="d-flex align-items-center justify-content-center min-vh-100" src="assets/css/images/nature3.jpg" alt="Third slide">
          </div>
        </div>
      </div>
     <!-- Navigation -->
     <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
       <div class="container">
         <a class="navbar-brand" href="#" onclick="window.location.reload();">KUNU</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarResponsive">
           <ul class="navbar-nav ml-auto">
             <li class="nav-item active">
               <a class="nav-link" href="index.php">Accueil
                 <span class="sr-only">(current)</span>
               </a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="activite.php">Activités</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="client.php">Espace-Client</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="shop.php">Boutique</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="annexe.php">Annexe</a>
             </li>
             <li class="nav-item">
                <?php  if (isset($_SESSION['username'])) : ?>
               <a class="nav-link" href="index.php?logout='1'">Deconnexion</a>
                <?php endif ?>
             </li>
           </ul>
         </div>
       </div>
     </nav>

     <!-- Header -->
     <header >
       <div class="container h-100">
         <div class="row h-100 align-items-center">
           <div class="col-lg-12">
            <?php  if (isset($_SESSION['username'])) : ?>
             <h1 class="display-4 text-white mt-5 mb-2">Bienvenue <strong><?php echo $_SESSION['username']; ?></strong> </h1>
             <?php endif ?>
             <p class="lead mb-5 text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non possimus ab labore provident mollitia. Id assumenda voluptate earum corporis facere quibusdam quisquam iste ipsa cumque unde nisi, totam quas ipsam.</p>
           </div>
         </div>
       </div>
       </header>
<div class="container">
  <figure class="snip1573">
    <img src="assets/css/images/activite3.jpeg" alt="sample89" />
    <figcaption>
      <h3>Activités</h3>
    </figcaption>
    <a href="activite.php"></a>
  </figure>
  <figure class="snip1573"><img src="assets/css/images/client3.jpg" alt="sample94" />
    <figcaption>
      <h3>Espace Client</h3>
    </figcaption>
    <a href="client.php"></a>
  </figure>
  <figure class="snip1573"><img src="assets/css/images/boutique2.jpg" alt="sample92" />
    <figcaption>
      <h3>Boutique</h3>
    </figcaption>
    <a href="shop.php"></a>
  </figure>

</div>
<footer class="footer-distributed">

 <div class="footer-right">

   <a href="#"><i class="fa fa-facebook"></i></a>
   <a href="#"><i class="fa fa-twitter"></i></a>
   <a href="#"><i class="fa fa-youtube"></i></a>

 </div>

 <div class="footer-left">

   <p class="footer-links">
     <a href="construction.php">À Propos</a>
     ·
     <a href="construction.php">Mentions légales</a>
     ·
     <a href="construction.php">Politique de confidentialité</a>
     ·
     <a id="google_translate_element"></a>

     <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'fr', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
   </p>

   <p>KUNU &copy; 2019</p>
 </div>

</footer>

<!-- Optional JavaScript -->
<!-- Bootstrap core JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
