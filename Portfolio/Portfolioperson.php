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
		  <li class="active"><a><b>Persoonlijke Gegevens</b></a></li>
		  <li><a href="./Portfoliocontact.php"><b>Contactformulier</b></a></li>
		  <li><a href="./Portfolioproject.php"><b>Gemaakte Projecten</b></a></li>

		</ul>
	</nav>
	<article>
		<p class="tekst">
			<b>Persoonlijke Gegevens</b><br/><br/>
			Naam:<span style="padding-left:181px;"></span>Tomas Schijvenaars<br/>
			Adres:<span style="padding-left:181px;"></span>Bansingel 112<br/>
			<span style="padding-left:239px;"></span>4731 VM Oudenbosch<br/>
			Mobiele nummer:<span style="padding-left:81px;"></span>06 23123660<br/>
			E-mailadres:<span style="padding-left:127px;"></span>tomasschijvenaars@gmail.com<br/>
			Geboortedatum:<span style="padding-left:96px;"></span>20-07-1999<br/>
			Geboorteplaats:<span style="padding-left:100px;"></span>Roosendaal<br/>
			Nationaliteit:<span style="padding-left:123px;"></span>Nederlandse<br/>
		</p>
	</article>
</section>
</body>
</html>

