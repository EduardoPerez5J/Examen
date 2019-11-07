<?php
$numero1=3;
$Phi=3.1416;
$resultado=0;

function area()

{
global $numero1,$Phi;
$resultado=$numero1*$Phi;
echo "El area es: ", $resultado;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Circulo</title>
</head>
<body>
    
<h1>Circulo</h1>
<?php

area();

?>

</body>
</html>