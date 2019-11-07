<?php
$numero3=5;
$numero4=9;
$resultado=0;
function area ()
{
    global $numero3,$numero4;
    $resultado=$numero3*$numero4;
    echo "El area es: ", $resultado;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rectangulo</title>
</head>
<body>
    <h1>Rectangulo</h1>

<?php
area();
?>


</body>
</html>
