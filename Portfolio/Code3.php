<?php
include ("dbConnection.php");

$query = "SELECT * FROM code WHERE id='3'";
$stm = $conn->prepare($query);
if($stm->execute())
{$result = $stm->fetchAll(PDO::FETCH_OBJ);
foreach($result as $code)
{
	echo "<xmp>".$code->code."</xmp>";
}
}
?>