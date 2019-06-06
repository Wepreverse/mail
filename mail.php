<?php 
mail($_POST["mail"],$_POST["header"],$_POST["Text"]);
header("Location:index.php");
 ?>