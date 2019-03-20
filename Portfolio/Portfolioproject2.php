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
	background: url(Background.jpg) no-repeat center center fixed; 
	  -webkit-background-size: cover;
	  -moz-background-size: cover;
	  -o-background-size: cover;
	  background-size: cover;
}
ul{
  list-style-type: none;
  margin: 0px;
  padding: 0px;
  width: 522px;
  background-color: #f1f1f1;
}
#list1 li a {
  display: block;
  color: #000;
  padding: 16px 20px;
  text-decoration: none;
}

/* Change the link color on hover */
#list1 li a:hover {
  background-color: #555;
  color: white;
}

#list2 li {
		    float: left;
			background-color: #f1f1f1;
		}

#list2 li a {
		    display: block;
  color: #000;
  padding: 16px 20px;
  text-decoration: none;

}
#list2 li a:hover {
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
section{
    float: left;
    padding-left: 100px;
	width: 60%;
	font-size: 20px;
}
aside{
padding-left: 862px;
	font-size: 20px;
}
.project2{
	width: 25%;
	float: right;
	margin-top: -310px;
	margin-right: 5px;
}


</style>
</head>
<body>

<h1><font size="8">Tomas Schijvenaars</font></h1>
<p><b><font size="4">Online Portfolio</font>
</b></p>


	<nav>
	<div id='list1'>
		<ul>
		  <li><a href="./Portfoliohome.php"><b>Home</b></a></li>
		  <li><a href="./Portfoliome.php"><b>Over Mij</b></a></li>
		  <li><a href="./Portfoliocv.php"><b>CV</b></a></li>
		  <li><a href="./Portfolioperson.php"><b>Persoonlijke Gegevens</b></a></li>
		  <li><a href="./Portfoliocontact.php"><b>Contactformulier</b></a></li>
		  <li class="active"><a><b>Gemaakte Projecten</b></a></li>

		</ul>
		</div>
	</nav>
	<section>

		<div id='list2'>
			<ul>
				<li><a href="./Portfolioproject.php">Project 1.1</a></li>
				<li><a class="active">Project 1.2</a></li>
				<li><a href="./Portfolioproject3.php">Project 1.3</a></li>
				<li><a>Project 1.4</a></li>
			</ul><br/>
		</div>
	</section>
<aside>
<br/><br/><br/><br/>
<?php
include ("dbConnection.php");

$query = "SELECT * FROM project WHERE id='2'";
$stm = $conn->prepare($query);
if($stm->execute())
{$result = $stm->fetchAll(PDO::FETCH_OBJ);
foreach($result as $text)
{
	echo $text->project;
}
}
?>


		<img class="project2" src="project2.PNG" alt="Project2"/><br/>
		<a type="submit" target=_blank href="./Code2.php" value= "Code" name = "btnCode">Code</a>
</aside>
</body>
</html>

