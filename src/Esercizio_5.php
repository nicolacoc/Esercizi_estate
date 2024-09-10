<?php
/*
Creare uno script che costruisca il seguente pattern
- *
- * *
- * * *
- * * * *
- * * * * *

*/
?>
<?php
$NumeroAsterMax = 5;
$ast = "";
for ($i = 1; $i <= $NumeroAsterMax; $i++){
   $ast .= "*";
   echo "- " . $ast . "<br>";
}
?>

