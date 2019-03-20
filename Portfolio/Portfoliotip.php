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
.pino{
	float: right;
	margin-top: -100px;
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
		  <li><a href="./Portfoliocontact.php"><b>Contactformulier</b></a></li>
		  <li><a href="./Portfolioproject.php"><b>Gemaakte Projecten</b></a></li>

		</ul>
	</nav>
	<article>
		<p class="tekst">
		<?php
		$vandaag = date("l");
		if($vandaag == "Monday")
		{
			echo "Maandag tip";
		}
		else
		{if($vandaag == "Tuesday")
		{
			echo "Dinsdag tip";
		}
		else
		{if($vandaag == "Wednesday")
		{
			echo "Woensdag tip";
		}
		else
		{if($vandaag == "Thursday")
		{
			echo "Donderdag tip";
		}
		else
		{if($vandaag == "Friday")
		{
			echo "Vrijdag tip";
		}
		else
		{if($vandaag == "Saturday")
		{
			echo "Zaterdag tip";
		}
		else
		{if($vandaag == "Sunday")
		{
			echo "Zondag tip";
		}
	   }
	  }
	 }
	}
   }	
  }

		?>
		</p>
		<img class="pino" src="download.jpg" alt="Pino"/>
	</article>
</section>
</body>
</html>

