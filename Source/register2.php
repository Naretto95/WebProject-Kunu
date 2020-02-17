<?php include('server.php') ?>
<?php include('server2.php') ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="assets/css/form-elements.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="assets/css/register2.css" rel="stylesheet">
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
    <nav class="navbar navbar-expand-xl navbar-light bg-light">
         <a class="navbar-brand" href="construction.php">N</a>
         <a href="register.php"class="navbar-brand" id="nukiva">KUNU</a>
       </nav>

         <div class="top-content">

             <div class="inner-bg">
                 <div class="container">
                     <div class="row">
                         <div class="col-sm-5">

                         	<div class="form-box">
 	                        	<div class="form-top">
 	                        		<div class="form-top-left">
 	                        			<h3>Se connecter</h3>
 	                            		<p>Entre ton pseudonyme et mot de passe pour accèder à Kunu:</p>
 	                        		</div>
 	                        		<div class="form-top-right">
 	                        			<i class="fa fa-lock"></i>
 	                        		</div>
 	                            </div>
 	                            <div class="form-bottom">
 				                    <form role="form" action="register2.php" method="post" class="login-form">
                              <?php include('errors2.php'); ?>
 				                    	<div class="form-group">
 				                    		<label class="sr-only" for="form-mdp">Pseudonyme</label>
 				                        	<input type="text" name="username2" placeholder="Pseudonyme..." class="form-first-name form-control" id="form-first-name">
 				                        </div>
 				                        <div class="form-group">
 				                        	<label class="sr-only" for="form-first-name">Mot de passe</label>
 				                        	<input type="password" name="password2" placeholder="Mot de passe..." class="form-password form-control" id="form-password">
 				                        </div>
 				                        <button type="submit" class="btn" name="login_user">Se connecter!</button>
 				                    </form>
 			                    </div>
 		                    </div>

                         </div>

                         <div class="col-sm-1 middle-border"></div>
                         <div class="col-sm-1"></div>

                         <div class="col-sm-5">

                         	<div class="form-box">
                         		<div class="form-top">
 	                        		<div class="form-top-left">
 	                        			<h3>Inscris-toi</h3>
 	                            		<p>Remplis le formulaire pour avoir accès à Kunu:</p>
 	                        		</div>
 	                        		<div class="form-top-right">
 	                        			<i class="fa fa-pencil"></i>
 	                        		</div>
 	                            </div>
 	                            <div class="form-bottom">
 				                    <form role="form" action="register2.php" method="post" class="registration-form">
                             <?php include('errors.php'); ?>
 				                    	<div class="form-group">
 				                    		<label class="sr-only" for="form-first-name" >Pseudonyme</label>
 				                        	<input type="text" name="username" placeholder="Pseudonyme..." class="form-first-name form-control" id="form-first-name" value="<?php echo $username; ?>">
 				                        </div>
 				                        <div class="form-group">
 				                        	<label class="sr-only" for="form-password">Mot de passe</label>
                                   <input type="password" name="password_1" placeholder="Mot de passe..." class="form-password form-control" id="form-password">
                                 </div>
                                 <div class="form-group">
 				                        	<label class="sr-only" for="form-password">Mot de passe2</label>
                                   <input type="password" name="password_2" placeholder="Confirmer le mot de passe..." class="form-password form-control" id="form-password" >
                                 </div>
 				                        <div class="form-group">
 				                        	<label class="sr-only" for="form-email">Email</label>
 				                        	<input type="email" name="email" placeholder="Email..." class="form-email form-control" id="form-email" value="<?php echo $email; ?>">
 				                        </div>
 				                        <button type="submit" class="btn" name="reg_user">S'incrire!</button>
 				                    </form>
 			                    </div>
                         	</div>

                         </div>
                     </div>

                 </div>
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


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
