<?php
include ("dbConnection.php");

$query = "SELECT * FROM code WHERE id='1'";
$stm = $conn->prepare($query);
if($stm->execute())
{$result = $stm->fetchAll(PDO::FETCH_OBJ);
foreach($result as $code)
{
	echo "<pre><code>".$code->code."</code></pre>";
}
}

?>