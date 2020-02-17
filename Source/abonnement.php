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
    <link rel="stylesheet" href="assets/css/client.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Kunu</title>
  </head>
  <body>
    <!-- Navigation -->
         <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
           <div class="container">
             <a class="navbar-brand" href="index.php" >KUNU</a>
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
                 <li class="nav-item active">
                   <a class="nav-link" href="client.php">Espace-Client</a>
                   <span class="sr-only">(current)</span>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link" href="shop.php">Boutique
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
             </div>
           </div>
         </nav>

         <div class="wrapper">
             <!-- Sidebar Holder -->
             <nav id="sidebar">
                 <div class="sidebar-header">
                     <h3>Menu</h3>
                 </div>

                 <ul class="list-unstyled components">
                     <p>Options du Compte</p>
                     <li class="active">
                     </li>
                     <li>
                         <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Paramètres</a>
                         <ul class="collapse list-unstyled" id="pageSubmenu">
                             <li>
                                 <a href="information.php">Modification des Informations</a>
                             </li>
                         </ul>
                     </li>
                     <li>
                         <a href="abonnement.php">Abonnements</a>
                     </li>
                     <li>
                         <a href="historique.php">Historique</a>
                     </li>
                 </ul>
             </nav>

             <!-- Page Content Holder -->
             <div id="content">

                 <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
                     <div class="container-fluid">

                         <button type="button" id="sidebarCollapse" class="navbar-btn">
                             <span></span>
                             <span></span>
                             <span></span>
                         </button>
                          <?php  if (isset($_SESSION['username'])) : ?>
                           <h3>Espace de <strong><?php echo $_SESSION['username']; ?></strong></h3>
                          <?php endif ?>
                     </div>
                 </nav>
                 <h2>Comment/Pourquoi s'abonner?</h2>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                 <div class="line"></div>

                 <!-- Page Content -->
<!-- Project One -->
<div class="row">
  <div class="col-md-6">
    <a href="#">
      <img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/700x300" alt="">
    </a>
  </div>
  <div class="col-md-5">
    <h3>Magazine 1</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
    <a class="btn btn-primary" href="abonnement3.php">S'abonner</a>
  </div>
</div>
<!-- /.row -->

<hr>

<!-- Project Two -->
<div class="row">
  <div class="col-md-6">
    <a href="#">
      <img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/700x300" alt="">
    </a>
  </div>
  <div class="col-md-5">
    <h3>Magazine 2</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
    <a class="btn btn-primary" href="abonnement3.php">S'abonner</a>
  </div>
</div>
<!-- /.row -->

<hr>

<!-- Project Three -->
<div class="row">
  <div class="col-md-6">
    <a href="#">
      <img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/700x300" alt="">
    </a>
  </div>
  <div class="col-md-5">
    <h3>Magazine 3</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
    <a class="btn btn-primary" href="abonnement3.php">S'abonner</a>
  </div>
</div>
<!-- /.row -->

<hr>

<!-- Project Four -->
<div class="row">
  <div class="col-md-6">
    <a href="#">
      <img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/700x300" alt="">
    </a>
  </div>
  <div class="col-md-5">
    <h3>Magazine 4</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
    <a class="btn btn-primary" href="abonnement3.php">S'abonner</a>
  </div>
</div>
<!-- /.row -->

<hr>

<!-- Pagination -->
<ul class="pagination justify-content-center">
  <li class="page-item">
    <a class="page-link" href="abonnement.php" aria-label="Previous">
      <span aria-hidden="true">&laquo;</span>
      <span class="sr-only">Previous</span>
    </a>
  </li>
  <li class="page-item active">
    <a class="page-link" href="abonnement.php">1</a>
  </li>
  <li class="page-item">
    <a class="page-link" href="abonnement1.php">2</a>
  </li>
  <li class="page-item">
    <a class="page-link" href="abonnement2.php">3</a>
  </li>
  <li class="page-item">
    <a class="page-link" href="abonnement1.php" aria-label="Next">
      <span aria-hidden="true">&raquo;</span>
      <span class="sr-only">Next</span>
    </a>
  </li>
</ul>

             </div>
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
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script type="text/javascript">
      $(document).ready(function () {
          $('#sidebarCollapse').on('click', function () {
              $('#sidebar').toggleClass('active');
              $(this).toggleClass('active');
          });
      });
  </script>

  </body>
  </html>
