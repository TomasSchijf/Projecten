<!DOCTYPE html>
<html>
<head>
<title>Portfolio Tomas Schijvenaars</title>
<style>
* {
	box-sizing: border-box;
}
body
{
	/*background-image: url(Background.jpg);
	background-size: cover;*/
	
	background: url(Background.jpg) no-repeat center center fixed; 
	  -webkit-background-size: cover;
	  -moz-background-size: cover;
	  -o-background-size: cover;
	  background-size: cover;
}
ul {
  list-style-type: none;
  margin: 0px;
  padding: 0px;
  width: 522px;
  background-color: #f1f1f1;
}

li a {
  display: block;
  color: #000;
  padding: 16px 20px;
  text-decoration: none;
}

/* Change the link color on hover */
li a:hover {
  background-color: #555;
  color: white;
}
.active {
  background-color: #555;
}

nav{
	float: left;
	width: 40%;
	padding: 20px;
}
article{
    float: left;
    padding-left: 100px;
	width: 60%;
	font-size: 22px;
}
.myOpmerking{
		width: 458px;
		height:330px;
}
.myNaam{
		width: 300px;
}
.myEmail{
		width: 300px;	
}

</style>
</head>
<body>

<h1><font size="8">Tomas Schijvenaars</font></h1>
<p><b><font size="4">Online Portfolio</font>
</b></p>

<section>
	<nav>
		<ul>
		  <li><a href="./Portfoliohome.php"><b>Home</b></a></li>
		  <li><a href="./Portfoliome.php"><b>Over Mij</b></a></li>
		  <li><a href="./Portfoliocv.php"><b>CV</b></a></li>
		  <li><a href="./Portfolioperson.php"><b>Persoonlijke Gegevens</b></a></li>
		  <li class="active"><a><b>Contactformulier</b></a></li>
		  <li><a href="./Portfolioproject.php"><b>Gemaakte Projecten</b></a></li>

		</ul>
	</nav>
	<article>
		<form method="POST">
		<p class="tekst">
			<b>Contactformulier</b><br/><br/>
				Naam:<span style="padding-left:100px;"></span><input type="text" name= "txtNaam" class="myNaam"><br/>
				E-mail adres:<span style="padding-left:41px;"></span><input type="text" name= "txtEmail" class="myEmail"><br/>
				Opmerking:<br/><textarea type="text" name= "txtOpmerking" class="myOpmerking"></textarea><br/>
				<input type="submit" value= "Verzenden" name = "btnOpslaan"><br/>
		</p>
		</form>
	</article>
</section>
</body>
</html>
<?php
	include ("dbConnection.php");

	if(isset($_POST['btnOpslaan']))
	{
		$naam = $_POST["txtNaam"];
		$email = $_POST["txtEmail"];
		$opmerking = $_POST["txtOpmerking"];
		$datum = date('Y-m-d H:i:s');  
		$body = "Naam: ".$naam."<br/>"."E-mail: ".$email."<br/>"."Opmerking: ".$opmerking."<br/>"."Datum: ".$datum."<br/>";
		
		$lijst = array();
		$lijst['aanhef'] = $naam;
		$lijst['voornaam'] = $email;
		$lijst['opmerking'] = $opmerking;
		$lijst['datum'] = $datum;

		$query = "INSERT INTO contactform (name, email, opmerking, datum)
		VALUES". "('$naam', '$email', '$opmerking', '$datum')";
		$stm = $conn->prepare($query);
		/*if($stm->execute())
		{
			echo "Statement correct uitgevoerd!";
		}else echo "Query mislukt!";*/
		


require 'PHPMailer/PHPMailer.PHP';
require 'PHPMailer/SMTP.PHP';

//Load Composer's autoloader
//require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions

    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'tomasprojectict@gmail.com';                 // SMTP username
    $mail->Password = '@Welkom123';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('tomasprojectict@gmail.com', 'Tomas');
    $mail->addAddress('tomasprojectict@gmail.com', 'Mezelf');     // Add a recipient
    /*$mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');*/

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Opmerking van '.$naam;
    $mail->Body    =  $body;

    $mail->send();
	/*
    echo 'Bericht verzonden';
} catch (Exception $e) {
    echo 'Bericht niet verzonden. Mailer Error: ', $mail->ErrorInfo;*/
	}
?>
