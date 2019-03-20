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
		  <li class="active"><a><b>CV</b></a></li>
		  <li><a href="./Portfolioperson.php"><b>Persoonlijke Gegevens</b></a></li>
		  <li><a href="./Portfoliocontact.php"><b>Contactformulier</b></a></li>
		  <li><a href="./Portfolioproject.php"><b>Gemaakte Projecten</b></a></li>

		</ul>
	</nav>
	<article>
		<p class="tekst">
			<b>CV</b><br/><br/>
				<b>Opleiding</b><br/>
				2018 – heden<span style="padding-left:100px;"></span>mbo Zoomvliet College, Roosendaal<br/>
				<span style="padding-left:218px;"></span>1e jaar ICT-opleiding: Applicatie ontwikkelaar<br/><br/>

				2011 – 2015<span style="padding-left:109px;"></span>vmbo tl Markland College, Oudenbosch<br/>
				<span style="padding-left:218px;">sector techniek & economie (diploma gehaald)<br/><br/>

				<b>Automatiseringskennis</b><span style="padding-left:240px;"><b>Stage's</b><br/>
				MS WordMS<span style="padding-left:100px;"></span>PowerPoint<span style="padding-left:136px;">2013-2014<span style="padding-left:50px;">Boerderij de Walnoothoeve<br/>
				MS Access<span style="padding-left:118px;"></span>MS Excel<span style="padding-left:151px;">2014-2015<span style="padding-left:50px;">Perfetti Van Melle Benelux B.V.<br/><br/>

				<b>Hobby’s</b><br/>
				Lezen<span style="padding-left:164px;"></span>Voetbal<br/>
				Gamen

		</p>

	</article>
</section>
</body>
</html>

