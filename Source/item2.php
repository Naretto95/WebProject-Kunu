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
  <link rel="stylesheet" href="assets/css/shop.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Kunu</title>
</head>
<body>
<!-- Navigation -->
     <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
       <div class="container" id="cont">
         <a class="navbar-brand" href="index.php">KUNU</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarResponsive">
           <ul class="navbar-nav ml-auto">
             <li class="nav-item">
               <a class="nav-link" href="index.php">Accueil</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="activite.php">Activités</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="client.php">Espace-Client</a>
             </li>
             <li class="nav-item">
               <a class="nav-link active" href="shop.php">Boutique
               <span class="sr-only">(current)</span>
               </a>
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
           <a href="cart.php" id="cart"><i class="fa fa-shopping-cart" id="icon"  aria-hidden="true"></i></a>
         </div>
       </div>
     </nav>
     <!-- Page Content -->
     <div class="container" id="main">

         <div class="col-lg-12">

           <div class="card mt-4">
             <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
           <div class="carousel-item active">
                <img class="card-img-top img-fluid" src="http://placehold.it/1000x500" alt="First slide">
               </div>
           <div class="carousel-item">
                <img class="card-img-top img-fluid" src="http://placehold.it/1000x500" alt="">
               </div>
           <div class="carousel-item">
               <img class="d-block w-100" src="http://placehold.it/1000x500" alt="Third slide">
               </div>
           <div class="carousel-item">
               <img class="d-block w-100" src="http://placehold.it/1000x500" alt="Fourth slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="http://placehold.it/1000x500" alt="Fifth slide">
             </div>
          </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
               </a>
                 <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
             </div>
             <div class="card-body">
               <h3 class="card-title">Item Deux</h3>
               <h4>29.99€</h4>
               <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente dicta fugit fugiat hic aliquam itaque facere, soluta. Totam id dolores, sint aperiam sequi pariatur praesentium animi perspiciatis molestias iure, ducimus!</p>
               <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
               4.0 étoiles  <a href="addtocart.php?id=2" class="btn btn-primary">Ajouter au Panier</a>
             </div>
           </div>
           <!-- /.card -->

           <div class="card card-outline-secondary my-4">
             <div class="card-header">
               Avis sur le Produit
             </div>
             <div class="card-body">
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
               <small class="text-muted">Posté par Anonymous le 3/1/17</small>
               <hr>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
               <small class="text-muted">Posté par Anonymous le 3/1/17</small>
               <hr>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
               <small class="text-muted">Posté par Anonymous le 3/1/17</small>
               <hr>
               <a href="#" class="btn btn-success">Laisse un Commentaire (En Construction)</a>
             </div>
           </div>
           <!-- /.card -->

         </div>
         <!-- /.col-lg-9 -->

     </div>
     <!-- /.container -->

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
