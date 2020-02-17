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
  <link rel="stylesheet" href="assets/css/cart.css">
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

         <?php
      if(isset($_SESSION['cart'])) {
            $items = $_SESSION['cart'];
          $cartitems = explode(",", $items);
     }
?>
	<div class="row">
	  <table class="table">
	  	<thead class="thead-dark">
	  		<th scope="col">Quantité</th>
	  		<th scope="col">Nom du Produit</th>
	  		<th scope="col">Prix</th>
	  	</thead>
		<?php
        $connection= mysqli_connect('mysql.etude.cergy.eisti.fr', 'narettolil', 'ESonNdKXdY', 'narettolil');
		settype($total, "integer");
        $i=1;
        if(isset($_SESSION['cart'])) {
		 foreach ($cartitems as $key=>$id) {
			$sql = "SELECT * FROM products WHERE id = $id";
			$res=mysqli_query($connection, $sql);
            $r = mysqli_fetch_assoc($res);
            echo "	  	<tr>
            <td>".$i."</td>
            <td>".$r['title']." (<a href='delcart.php?remove=".$key."'>Supprimer</a>)</td>
            <td>".$r['price']."€</td>
        </tr>";
           $total +=$r['price'];
        }
    }
		?>
		<tr>
			<td><strong>Prix Total</strong></td>
			<td><strong><?php echo $total; ?>€</strong></td>
			<td><a href="#" class="btn btn-primary">Encaisser</a></td>
		</tr>
	  </table>

	</div>

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
