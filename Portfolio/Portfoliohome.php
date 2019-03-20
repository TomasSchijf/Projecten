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
.foto{
	width: 22%;
	float: right;
	
	margin-top: -220px;

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
		  <li class="active"><a><b>Home</b></a></li>
		  <li><a href="./Portfoliome.php"><b>Over Mij</b></a></li>
		  <li><a href="./Portfoliocv.php"><b>CV</b></a></li>
		  <li><a href="./Portfolioperson.php"><b>Persoonlijke Gegevens</b></a></li>
		  <li><a href="./Portfoliocontact.php"><b>Contactformulier</b></a></li>
		  <li><a href="./Portfolioproject.php"><b>Gemaakte Projecten</b></a></li>

		</ul>
	</nav>
	<article>
		<p class="tekst">
			<b>Welkom op mijn portfolio</b><br/><br/>
			Mijn naam is Tomas Schijvenaars. In dit portfolio ga ik informatie over mezelf zetten en de projecten die ik op school maak presenteren. Ook zet ik wat persoonlijke informatie en mijn hobbies. Ik ga ook proberen dit portfolio te updaten met de projecten die ik maak in de toekomst.<br/><br/>
			Als u een reactie op dit portfolio wil achterlaten kunt u dat doen in het contactformulier.<br/><br/>
			Hopelijk bevalt mijn portfolio.<br/><br/>
			<b>Quote van de dag:</b><br/><br/>
			
			<?php
		include ("dbConnection.php");
		
        $vandaag = date("l");
        if($vandaag == "Monday")
        {
            $query = "SELECT * FROM quote WHERE day='Maandag'";
			$stm = $conn->prepare($query);
			if($stm->execute())
			{
				$result = $stm->fetchAll(PDO::FETCH_OBJ);
				foreach($result as $quote)
				{
					echo '<i>'.$quote->quote.'</i>';
				}
			}
		}else
		{if($vandaag == "Tuesday")
        {
            $query = "SELECT * FROM quote WHERE day='Dindag'";
			$stm = $conn->prepare($query);
			if($stm->execute())
			{
				$result = $stm->fetchAll(PDO::FETCH_OBJ);
				foreach($result as $quote)
				{
					echo '<i>'.$quote->quote.'</i>';
				}
			}
		}else
		{if($vandaag == "Wednesday")
        {
            $query = "SELECT * FROM quote WHERE day='Woendag'";
			$stm = $conn->prepare($query);
			if($stm->execute())
			{
				$result = $stm->fetchAll(PDO::FETCH_OBJ);
				foreach($result as $quote)
				{
					echo '<i>'.$quote->quote.'</i>';
				}
			}
		}else
		{if($vandaag == "Thursday")
        {
            $query = "SELECT * FROM quote WHERE day='Donderdag'";
			$stm = $conn->prepare($query);
			if($stm->execute())
			{
				$result = $stm->fetchAll(PDO::FETCH_OBJ);
				foreach($result as $quote)
				{
					echo '<i>'.$quote->quote.'</i>';
				}
			}
		}else
		{if($vandaag == "Friday")
        {
            $query = "SELECT * FROM quote WHERE day='Vrijdag'";
			$stm = $conn->prepare($query);
			if($stm->execute())
			{
				$result = $stm->fetchAll(PDO::FETCH_OBJ);
				foreach($result as $quote)
				{
					echo '<i>'.$quote->quote.'</i>';
				}
			}
		}else
		{if($vandaag == "Saturday")
        {
            $query = "SELECT * FROM quote WHERE day='Zaterdag'";
			$stm = $conn->prepare($query);
			if($stm->execute())
			{
				$result = $stm->fetchAll(PDO::FETCH_OBJ);
				foreach($result as $quote)
				{
					echo '<i>'.$quote->quote.'</i>';
				}
			}
		}else
		{if($vandaag == "Sunday")
        {
            $query = "SELECT * FROM quote WHERE day='Zondag'";
			$stm = $conn->prepare($query);
			if($stm->execute())
			{
				$result = $stm->fetchAll(PDO::FETCH_OBJ);
				foreach($result as $quote)
				{
					echo '<i>'.$quote->quote.'</i>';
				}
			}
		}
		}
	}
	}
	}
	}
}
			
?>
		</p>
		<img class="foto" src="Selfie.jpg" alt="foto"/>
	</article>
</section>
</body>
</html>

