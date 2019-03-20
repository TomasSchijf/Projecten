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
		width: 600px;
		height:350px;
}
.foto{
	width: 25%;
	float: right;
	margin-top: -240px;
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
		  <li class="active"><a><b>Over Mij</b></a></li>
		  <li><a href="./Portfoliocv.php"><b>CV</b></a></li>
		  <li><a href="./Portfolioperson.php"><b>Persoonlijke Gegevens</b></a></li>
		  <li><a href="./Portfoliocontact.php"><b>Contactformulier</b></a></li>
		  <li><a href="./Portfolioproject.php"><b>Gemaakte Projecten</b></a></li>

		</ul>
	</nav>
	<article>
		<p class="tekst">
			<b>Over mij</b><br/><br/>
			Mijn naam is Tomas Schijvenaars. Ik ben 19 jaar oud en kom uit Oudenbosch.<br/>Op het moment doe ik de opleiding applicatieontwikkelaar op het Zoomvliet college.<br/>Ik heb het hier erg naar mijn zin en vind het programeren erg interessant.<br/>
			Ik heb gekozen voor deze opleiding omdat het programeren mij leuk leek.<br/>Op school ben ik vooral bezig met C#, PHP, HTML en MSSQL.<br/>Ik vind C# en MSSQL het leukst om mee te werken.<br/>Mijn hobby's zijn vooral lezen en gamen. Ook houd ik erg van voetbal en kijk het graag op tv.
		</p>
		<img class="foto" src="voetbal.jpg" alt="Foto"/>
	</article>
</section>
</body>
</html>

