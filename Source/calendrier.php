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
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Kunu</title>
    <link href='assets/css/fullcalendar.css' rel='stylesheet' />
    <link href='assets/css/fullcalendar.print.css' rel='stylesheet' media='print' />
    <script src='assets/js/jquery-1.10.2.js' type="text/javascript"></script>
    <script src='assets/js/jquery-ui.custom.min.js' type="text/javascript"></script>
    <script src='assets/js/fullcalendar.js' type="text/javascript"></script>
    <script>

    $(document).ready(function() {
  	    var date = new Date();
  		var d = date.getDate();
  		var m = date.getMonth();
  		var y = date.getFullYear();

  		/*  className colors

  		className: default(transparent), important(red), chill(pink), success(green), info(blue)

  		*/


  		/* initialize the external events
  		-----------------------------------------------------------------*/

  		$('#external-events div.external-event').each(function() {

  			// create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
  			// it doesn't need to have a start or end
  			var eventObject = {
  				title: $.trim($(this).text()) // use the element's text as the event title
  			};

  			// store the Event Object in the DOM element so we can get to it later
  			$(this).data('eventObject', eventObject);

  			// make the event draggable using jQuery UI
  			$(this).draggable({
  				zIndex: 999,
  				revert: true,      // will cause the event to go back to its
  				revertDuration: 0  //  original position after the drag
  			});

  		});


  		/* initialize the calendar
  		-----------------------------------------------------------------*/

  		var calendar =  $('#calendar').fullCalendar({
  			header: {
  				left: 'title',
  				center: 'agendaDay,agendaWeek,month',
  				right: 'prev,next today'
  			},
  			editable: true,
  			firstDay: 1, //  1(Monday) this can be changed to 0(Sunday) for the USA system
  			selectable: true,
  			defaultView: 'month',

  			axisFormat: 'h:mm',
  			columnFormat: {
                  month: 'ddd',    // Mon
                  week: 'ddd d', // Mon 7
                  day: 'dddd M/d',  // Monday 9/7
                  agendaDay: 'dddd d'
              },
              titleFormat: {
                  month: 'MMMM yyyy', // September 2009
                  week: "MMMM yyyy", // September 2009
                  day: 'MMMM yyyy'                  // Tuesday, Sep 8, 2009
              },
  			allDaySlot: false,
  			droppable: true, // this allows things to be dropped onto the calendar !!!
  			drop: function(date, allDay) { // this function is called when something is dropped

  				// retrieve the dropped element's stored Event Object
  				var originalEventObject = $(this).data('eventObject');

  				// we need to copy it, so that multiple events don't have a reference to the same object
  				var copiedEventObject = $.extend({}, originalEventObject);

  				// assign it the date that was reported
  				copiedEventObject.start = date;
  				copiedEventObject.allDay = allDay;

  				// render the event on the calendar
  				// the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
  				$('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

  				// is the "remove after drop" checkbox checked?
  				if ($('#drop-remove').is(':checked')) {
  					// if so, remove the element from the "Draggable Events" list
  					$(this).remove();
  				}

  			},

  			events: [
  				{
  					title: 'Lorem Ipsum',
						start: new Date(y, m, 1, 9, 0),
  					allDay: false,
  				},
  				{
  					id: 999,
  					title: 'Lorem Ipsum',
						start: new Date(y, m, d-3, 16, 0),
						allDay: false,
  					className: 'info'
  				},
  				{
  					title: 'Lorem Ipsum',
						start: new Date(y, m, d, 11, 0),
						allDay: false,
  					className: 'important'
  				},
  				{
  					title: 'Lorem Ipsum',
  					start: new Date(y, m, d, 13, 0),
						end: new Date(y, m, d, 16, 0),
						allDay: false,
  					className: 'important'
  				},
  				{
  					title: 'Evènement',
  					start: new Date(y, m, d+1, 19, 0),
						end: new Date(y, m, d+1, 22, 30),
						allDay: false,
  				},
  				{
  					title: "Cliquez pour voir l'activité",
  					start: new Date(y, m, 14),
  					end: new Date(y, m, 15),
  					url: 'activite1.php',
  					className: 'success'
  				}
  			],
  		});


  	});

  </script>
  <style>

  	body {
  		margin-top: 40px;
  		text-align: center;
  		background-color: #DDDDDD;
  		}

  	#wrap {
  		width: 1100px;
  		margin: 0 auto;
  		}

  	#external-events {
  		float: left;
  		width: 150px;
  		padding: 0 10px;
  		text-align: left;
  		}

  	#external-events h4 {
  		font-size: 16px;
  		margin-top: 0;
  		padding-top: 1em;
  		}

  	.external-event { /* try to mimick the look of a real event */
  		margin: 10px 0;
  		padding: 2px 4px;
  		background: #3366CC;
  		color: #fff;
  		font-size: .85em;
  		cursor: pointer;
  		}

  	#external-events p {
  		margin: 1.5em 0;
  		font-size: 11px;
  		color: #666;
  		}

  	#external-events p input {
  		margin: 0;
  		vertical-align: middle;
  		}

  	#calendar {
  /* 		float: right; */
          margin: 0 auto;
  		width: 900px;
  		background-color: #FFFFFF;
  		  border-radius: 6px;
          box-shadow: 0 1px 2px #C3C3C3;
  		}

  </style>
  </head>
  <body>
    <!-- Navigation -->
         <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
           <div class="container">
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
                   <a class="nav-link active" href="activite.php">Activités</a>
                  <span class="sr-only">(current)</span>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link" href="client.php">Espace-Client</a>
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
           <!-- calendrier -->
  <div id='wrap'>

  <div id='calendar'></div>

  <div style='clear:both'></div>
  </div>
<!-- calendrier -->
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
  </body>
  </html>
