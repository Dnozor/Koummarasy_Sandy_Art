<!--<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style_menu.css" type="text/css">
	<link rel="stylesheet" href="style_contactme.css" type="text/css">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;600&display=swap" rel="stylesheet">

	<title>Contact</title>
</head>
<body>
	
	<nav class="menu">
		<a class="name" href="index.html">Koummarasy Sandy</a>
		   	<ul>
			<li><a href="portfolio-galerie.html">galerie</a></li>
			<li><a href="portfolio-sketchbook.html">sketchbook</a></li>
			<li><a href="apropos.html">à propos</a></li>
			<li><a class="selec" href="contactme.html">contact</a></li>
			<li ><a href="https://www.instagram.com/dnozor_art/"><img class="img_insta" src="logo_insta.png" alt=""></a></li>
		    </ul>
	</nav>

	<section class="conteneur">
		<div class="container">
		  <form action="mailto:segrais-sandy-k@hotmail.fr" method="post" enctype="text/plain">

		    <label for="lname">Nom</label>
		    <input type="text" id="nom" name="name" placeholder="">

		    <label for="email">E-mail</label>
		   <input type="text" id="email" name="mail" placeholder="">

		   <label for="objet">Objet</label>
		   <input type="text" id="objet" name="obj" placeholder="">

		    <label for="message">Message</label>
		    <textarea id="message" name="msg" placeholder="" style="height:200px"></textarea>

		    <input type="submit" value="Envoyer">
		  </form>
		</div>
	</section>

	<header class="title">contact</header>


</body>
</html>-->

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style_menu.css" type="text/css">
	<link rel="stylesheet" href="style_contactme.css" type="text/css">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;600&display=swap" rel="stylesheet">

	<title>Contact</title>
</head>
<body>
	<?php 
if(isset($_POST['submit'])){
    $to = "segrais-sandy-k@hotmail.fr"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $last_name = $_POST['name'];
    $subject = "obj";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $last_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>


	
	<nav class="menu">
		<a class="name" href="index.html">Koummarasy Sandy</a>
		   	<ul>
			<li><a href="portfolio-galerie.html">galerie</a></li>
			<li><a href="portfolio-sketchbook.html">sketchbook</a></li>
			<li><a href="apropos.html">à propos</a></li>
			<li><a class="selec" href="contactme.html">contact</a></li>
			<li ><a href="https://www.instagram.com/dnozor_art/"><img class="img_insta" src="logo_insta.png" alt=""></a></li>
		    </ul>
	</nav>

	<section class="conteneur">
		<div class="container">
		  <form action="contactme.php" method="post" enctype="text/plain">

		    <label for="lname">Nom</label>
		    <input type="text" id="nom" name="name" placeholder="">

		    <label for="email">E-mail</label>
		   <input type="text" id="email" name="email" placeholder="">

		   <label for="objet">Objet</label>
		   <input type="text" id="objet" name="obj" placeholder="">

		    <label for="message">Message</label>
		    <textarea id="message" name="message" placeholder="" style="height:200px"></textarea>

		    <input type="submit" value="Envoyer">
		  </form>
		</div>
	</section>

	<header class="title">contact</header>


</body>
</html>


